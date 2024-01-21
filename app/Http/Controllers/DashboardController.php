<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Feedback;
use App\Models\Location;
use App\Models\Menu;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $text_description = Menu::select('description')
            ->get()
            ->map(function ($text) {
                return Str::limit($text->description, 100);
            });

        return view('dashboard.index', [
            'page' => 'Dashboard',
            'menus' => Menu::latest()->take(4)->get(),
            'text_description' => $text_description,
            'menu_count' => Menu::count(),
            'location_count' => Location::count(),
            'feedback_count' => Feedback::count(),
            'chef_count' => Chef::count(),
        ]);
    }
}
