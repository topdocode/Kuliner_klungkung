<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Location;
use App\Models\LocationTranslation;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LocationController extends Controller
{
    public function index()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        return view('location.index', [
            'page' => 'Location',
            'menus' => Menu::all(),
            'locations' => Location::all(),
        ]);
    }

    public function create()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        return view('location.create', [
            'page' => 'Location',
            'menus' => Menu::all(),
        ]);
    }

    public function store(Request $request)
    {
        $id = Location::latest('id')->value('id');
        $id = $id + 1;

        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'image' => 'image|file',
            'description' => 'required',
        ]);

        $validatedDataTranslation = $request->validate([
            'description_translation' => 'required',
        ]);

        $validatedData['menu_available'] = implode(',', $request->menu_available);
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('public/location-images', $imageName);
        $validatedData['image'] = 'location-images/' . $imageName;

        $location = location::create($validatedData);

        $locationID = LocationTranslation::create([
            'locations_id' => $id,
            'language' => 'id',
            'name' => $validatedData['name'],
            'image' => $validatedData['image'],
            'address' => $validatedData['address'],
            'menu_available' => $validatedData['menu_available'],
            'description' => $validatedData['description'],
        ]);

        $locationEN = LocationTranslation::create([
            'locations_id' => $id,
            'language' => 'en',
            'name' => $validatedData['name'],
            'image' => $validatedData['image'],
            'address' => $validatedData['address'],
            'menu_available' => $validatedData['menu_available'],
            'description' => $validatedDataTranslation['description_translation'],
        ]);

        if ($location && $locationID && $locationEN) {
            return redirect(route('index-location'))->with('success', 'Add New Location Successfully!');
        } else {
            return redirect(route('index-location'))->with('failed', 'Add New Location Failed!');
        }
    }

    public function edit($id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        return view('location.edit', [
            'page' => 'Location',
            'location' => Location::findOrFail($id),
            'locationEN' => LocationTranslation::where('locations_id', $id)->where('language', 'en')->first(),
            'menus' => Menu::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'image' => 'image|file',
            'description' => 'required',
        ]);

        $validatedDataTranslation = $request->validate([
            'description_translation' => 'required',
        ]);

        $validatedData['menu_available'] = implode(',', $request->menu_available);
        $location = Location::findOrFail($id);
        if ($request->file('image')) {
            if ($request->file('image')) {
                if (!empty($location->image)) {
                    Storage::delete('public/' . $location->image);
                }

                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/location-images', $imageName);
                $validatedData['image'] = 'location-images/' . $imageName;
            }
        }


        $location->update($validatedData);
        $locationDataId = [
            'name' => $validatedData['name'],
            'address' => $validatedData['address'],
            'menu_available' => $validatedData['menu_available'],
            'description' => $validatedData['description'],
        ];

        if (isset($validatedData['image'])) {

            $locationDataId['image'] = $validatedData['image'];
        }
        $locationID = LocationTranslation::where('locations_id', $id)->where('language', 'id')->update($locationDataId);


        $locationDataEn = [
            'name' => $validatedData['name'],
            'address' => $validatedData['address'],
            'menu_available' => $validatedData['menu_available'],
            'description' => $validatedDataTranslation['description_translation'],
        ];

        if (isset($validatedData['image'])) {

            $locationDataEn['image'] = $validatedData['image'];
        }

        $locationEN = LocationTranslation::where('locations_id', $id)->where('language', 'en')->update($locationDataEn);

        if ($location && $locationID && $locationEN) {
            return redirect(route('index-location'))->with('success', 'Update Location Successfully!');
        } else {
            return redirect(route('index-location'))->with('failed', 'Update Location Failed!');
        }
    }

    public function delete($id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $location = Location::findOrFail($id);

        if ($location->image) {
            Storage::delete($location->image);
        }

        $location = $location->delete();
        $locationID = LocationTranslation::where('locations_id', $id)->where('language', 'id')->delete();
        $locationEN = LocationTranslation::where('locations_id', $id)->where('language', 'en')->delete();

        if ($location && $locationID && $locationEN) {
            return redirect(route('index-location'))->with('success', 'Delete Location Successfully!');
        } else {
            return redirect(route('index-location'))->with('failed', 'Delete Location Failed!');
        }
    }
}
