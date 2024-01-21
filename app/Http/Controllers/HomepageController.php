<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Feedback;
use App\Models\History;
use App\Models\Location;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class HomepageController extends Controller
{
    public function homepage()
    {
        if (!$locale = session('locale')) {
            Session::put('locale', 'id');
        } else {
            app()->setLocale($locale);
        }

        $text_description_location = Location::select('description')
            ->get()
            ->map(function ($text) {
                return Str::limit($text->description, 100);
            });

        $text_description_chef = Chef::select('description')
            ->get()
            ->map(function ($text) {
                return Str::limit($text->description, 100);
            });

        return view('homepage.index', [
            'menu_count' => Menu::count(),
            'location_count' => Location::count(),
            'feedback_count' => Feedback::count(),
            'locations' => Location::all(),
            'menus' => Menu::all(),
            'chefs' => Chef::all(),
            'text_description_location' => $text_description_location,
            'text_description_chef' => $text_description_chef,
        ]);
    }

    public function locationModal($id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $menus = Menu::all();
        $location = Location::where('id', $id)->first();
        $menuArray = [];
        $menu_available = explode(',', $location->menu_available);

        foreach ($menus as $menu) {
            $isExist = in_array($menu->id, $menu_available);
            if ($isExist) {
                $menuArray[] = $menu->name;
            }
        }

        $menuString = implode(', ', $menuArray);

        $location = Location::where('id', $id)->first();
        return response()->json([$location, $menuString]);
    }

    public function chefModal($id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $menus = Menu::all();
        $chef = Chef::where('id', $id)->first();
        $menuArray = [];
        $cooked_menu = explode(',', $chef->cooked_menu);

        foreach ($menus as $menu) {
            $isExist = in_array($menu->id, $cooked_menu);
            if ($isExist) {
                $menuArray[] = $menu->name;
            }
        }

        $menuString = implode(', ', $menuArray);

        $chef = Chef::where('id', $id)->first();
        return response()->json([$chef, $menuString]);
    }

    public function detail()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        return redirect()->back();
    }

    public function detailMenu($id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $menu = Menu::where('id', $id)->first();
        return response()->json($menu);
    }

    public function history($id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        return view('homepage.detail', [
            'page' => Menu::where('id', $id)->value('name'),
            'menu' => Menu::where('id', $id)->first(),
            'recommendations' => Menu::whereNotIn('id', [$id])->get(),
            'history' => History::where('menus_id', $id)->first(),
        ]);
    }

    public function switchLanguage($locale)
    {
        Session::put('locale', $locale);

        return redirect()->back();
    }
}
