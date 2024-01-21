<?php

namespace App\Http\Controllers;

use App\Models\HistoriesTranslation;
use App\Models\History;
use App\Models\Menu;
use App\Models\MenuTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function index()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        return view('menu.index', [
            'page' => 'Menu',
            'id' => Menu::latest('id')->value('id'),
            'menus' => Menu::with('menus_translation')->get(),
        ]);
    }

    public function store(Request $request)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $validatedData = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'image' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $validatedDataTranslation = $request->validate([
            'name_translation' => 'required',
            'description_translation' => 'required',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/menu-images', $imageName);
        $validatedData['image'] = 'menu-images/' . $imageName;
        $menu = Menu::create($validatedData);

        $menuID = MenuTranslation::create([
            'menus_id' => $validatedData['id'],
            'language' => 'id',
            'name' => $validatedData['name'],
            'image' => $validatedData['image'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
        ]);

        $menuEN = MenuTranslation::create([
            'menus_id' => $validatedData['id'],
            'language' => 'en',
            'name' => $validatedDataTranslation['name_translation'],
            'image' => $validatedData['image'],
            'price' => $validatedData['price'],
            'description' => $validatedDataTranslation['description_translation'],
        ]);

        $history = History::create([
            'menus_id' => $validatedData['id'],
        ]);

        $historyID = HistoriesTranslation::create([
            'menus_id' => $validatedData['id'],
            'histories_id' => $validatedData['id'],
            'language' => 'id',
        ]);

        $historyEN = HistoriesTranslation::create([
            'menus_id' => $validatedData['id'],
            'histories_id' => $validatedData['id'],
            'language' => 'en',
        ]);

        if ($menu && $menuID && $menuEN && $history && $historyID && $historyEN) {
            return redirect(route('index-menu'))->with('success', 'Add New Menu Successfully!');
        } else {
            return redirect(route('index-menu'))->with('failed', 'Add New Menu Failed!');
        }
    }

    public function edit($id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $menu = Menu::where('id', $id)->first();
        $menuTranslation = MenuTranslation::where('menus_id', $id)->get();
        return response()->json([$menu, $menuTranslation]);
    }

    public function update(Request $request, $id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $validatedDataTranslation = $request->validate([
            'name_translation' => 'required',
            'description_translation' => 'required',
        ]);
        $menu = Menu::findOrFail($id);
        if ($request->file('image')) {
            if (!empty($menu->image)) {
                Storage::delete('public/' . $menu->image);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/menu-images', $imageName);
            $validatedData['image'] = 'menu-images/' . $imageName;
        }

        $menu->update($validatedData);
        $menuDataId = [
            'name' => $validatedData['name'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
        ];
        if (isset($validatedData['image'])) {
            $menuDataID['image'] = $validatedData['image'];
        }
        $menuID = MenuTranslation::where('menus_id', $id)->where('language', 'id')->update($menuDataId);


        $menuDataEn = [
            'name' => $validatedDataTranslation['name_translation'],
            'price' => $validatedData['price'],
            'description' => $validatedDataTranslation['description_translation'],
        ];
        if (isset($validatedData['image'])) {
            $menuDataEn['image'] = $validatedData['image'];
        }

        $menuEN = MenuTranslation::where('menus_id', $id)->where('language', 'en')->update($menuDataEn);

        if ($menu && $menuID && $menuEN) {
            return redirect(route('index-menu'))->with('success', 'Update Menu Successfully!');
        } else {
            return redirect(route('index-menu'))->with('failed', 'Update Menu Failed!');
        }
    }

    public function delete($id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $menu = Menu::findOrFail($id);
        $history = History::where('menus_id', $id)->first()->delete();

        $historyID = HistoriesTranslation::where('menus_id', $id)->where('language', 'id')->first()->delete();
        $historyEN = HistoriesTranslation::where('menus_id', $id)->where('language', 'en')->first()->delete();

        $menuID = MenuTranslation::where('menus_id', $id)->where('language', 'id')->first()->delete();
        $menuEN = MenuTranslation::where('menus_id', $id)->where('language', 'en')->first()->delete();

        if ($menu->image) {
            Storage::delete($menu->image);
        }

        $menu = $menu->delete();
        if ($menu && $menuID && $menuEN && $history && $historyID && $historyEN) {
            return redirect(route('index-menu'))->with('success', 'Delete Menu Successfully!');
        } else {
            return redirect(route('index-menu'))->with('failed', 'Delete Menu Failed!');
        }
    }
}
