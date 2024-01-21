<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\ChefTranslation;
use App\Models\Location;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ChefController extends Controller
{
    public function index()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $text_description = Chef::select('description')
            ->get()
            ->map(function ($text) {
                return Str::limit($text->description, 100);
            });

        return view('chef.index', [
            'page' => 'Chef',
            'chefs' => Chef::all(),
            'text_description' => $text_description,
            'menus' => Menu::all(),
            'locations' => Location::all(),
        ]);
    }

    public function create()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        return view('chef.create', [
            'page' => 'Chef',
            'menus' => Menu::all(),
        ]);
    }

    public function store(Request $request)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $id = Chef::latest('id')->value('id');
        $id = $id + 1;

        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'image|file',
            'description' => 'required',
        ]);

        $validatedDataTranslation = $request->validate([
            'description_translation' => 'required',
        ]);

        $validatedData['cooked_menu'] = implode(',', $request->cooked_menu);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/chef-images', $imageName);
        $validatedData['image'] = 'chef-images/' . $imageName;
        $chef = Chef::create($validatedData);

        $chefID = ChefTranslation::create([
            'chefs_id' => $id,
            'language' => 'id',
            'name' => $validatedData['name'],
            'image' => $validatedData['image'],
            'cooked_menu' => $validatedData['cooked_menu'],
            'description' => $validatedData['description'],
        ]);

        $chefEN = ChefTranslation::create([
            'chefs_id' => $id,
            'language' => 'en',
            'name' => $validatedData['name'],
            'image' => $validatedData['image'],
            'cooked_menu' => $validatedData['cooked_menu'],
            'description' => $validatedDataTranslation['description_translation'],
        ]);

        if ($chef && $chefID && $chefEN) {
            return redirect(route('index-chef'))->with('success', 'Add New Chef Successfully!');
        } else {
            return redirect(route('index-chef'))->with('failed', 'Add New Chef Failed!');
        }
    }

    public function edit($id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        return view('chef.edit', [
            'page' => 'Chef',
            'chef' => Chef::findOrFail($id),
            'chefEN' => ChefTranslation::where('chefs_id', $id)->where('language', 'en')->first(),
            'menus' => Menu::all(),
            'locations' => Location::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'image|file',
            'description' => 'required',
        ]);

        $validatedDataTranslation = $request->validate([
            'description_translation' => 'required',
        ]);

        if ($request->locations_id) {
            $validatedData['locations_id'] = $request->locations_id;
        } else {
            $validatedData['locations_id'] = NULL;
        }

        $validatedData['cooked_menu'] = implode(',', $request->cooked_menu);

        $chef = Chef::findOrFail($id);
        if ($request->file('image')) {
            if (!empty($chef->image)) {
                Storage::delete('public/' . $chef->image);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/chef-images', $imageName);
            $validatedData['image'] = 'chef-images/' . $imageName;
        }
        $chef->update($validatedData);

        $chefDataId = [
            'locations_id' => $validatedData['locations_id'],
            'name' => $validatedData['name'],
            'cooked_menu' => $validatedData['cooked_menu'],
            'description' => $validatedData['description'],
        ];

        if (isset($validatedData['image'])) {
            $chefDataId['image'] = $validatedData['image'];
        }


        $chefID = ChefTranslation::where('chefs_id', $id)->where('language', 'id')->update($chefDataId);


        $chefDataEn = [
            'locations_id' => $validatedData['locations_id'],
            'name' => $validatedData['name'],
            'cooked_menu' => $validatedData['cooked_menu'],
            'description' => $validatedDataTranslation['description_translation'],
        ];

        if (isset($validatedData['image'])) {
            $chefDataEn['image'] = $validatedData['image'];
        }

        $chefEN = ChefTranslation::where('chefs_id', $id)->where('language', 'en')->update($chefDataEn);

        if ($chef && $chefID && $chefEN) {
            return redirect(route('index-chef'))->with('success', 'Update Chef Successfully!');
        } else {
            return redirect(route('index-chef'))->with('failed', 'Update Chef Failed!');
        }
    }

    public function delete($id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $chef = Chef::findOrFail($id);

        if ($chef->image) {
            Storage::delete($chef->image);
        }

        $chef = $chef->delete();
        $chefID = ChefTranslation::where('chefs_id', $id)->where('language', 'id')->delete();
        $chefEN = ChefTranslation::where('chefs_id', $id)->where('language', 'en')->delete();

        if ($chef && $chefID && $chefEN) {
            return redirect(route('index-chef'))->with('success', 'Delete Chef Successfully!');
        } else {
            return redirect(route('index-chef'))->with('failed', 'Delete Chef Failed!');
        }
    }
}
