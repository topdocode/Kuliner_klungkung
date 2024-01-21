<?php

namespace App\Http\Controllers;

use App\Models\HistoriesTranslation;
use App\Models\History;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HistoryController extends Controller
{
    public function index()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        return view('history.index', [
            'page' => 'History',
            'histories' => History::all(),
            'menus' => Menu::all(),
        ]);
    }

    public function edit($id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        return view('history.edit', [
            'page' => 'History',
            'history' => History::findOrFail($id),
            'menus' => Menu::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $history = History::where('menus_id', $id)->update([
            'title_1' => $request->title_1,
            'title_2' => $request->title_2,
            'title_3' => $request->title_3,
            'title_4' => $request->title_4,
            'title_5' => $request->title_5,
            'title_6' => $request->title_6,
            'step_1' => $request->step_1,
            'step_2' => $request->step_2,
            'step_3' => $request->step_3,
            'step_4' => $request->step_4,
            'step_5' => $request->step_5,
            'step_6' => $request->step_6,
            'history' => $request->history,
        ]);

        $historyID = HistoriesTranslation::where('menus_id', $id)->where('language', 'id')->update([
            'title_1' => $request->title_1,
            'title_2' => $request->title_2,
            'title_3' => $request->title_3,
            'title_4' => $request->title_4,
            'title_5' => $request->title_5,
            'title_6' => $request->title_6,
            'step_1' => $request->step_1,
            'step_2' => $request->step_2,
            'step_3' => $request->step_3,
            'step_4' => $request->step_4,
            'step_5' => $request->step_5,
            'step_6' => $request->step_6,
            'history' => $request->history,
        ]);

        $historyEN = HistoriesTranslation::where('menus_id', $id)->where('language', 'en')->update([
            'title_1' => $request->title_1_translation,
            'title_2' => $request->title_2_translation,
            'title_3' => $request->title_3_translation,
            'title_4' => $request->title_4_translation,
            'title_5' => $request->title_5_translation,
            'title_6' => $request->title_6_translation,
            'step_1' => $request->step_1_translation,
            'step_2' => $request->step_2_translation,
            'step_3' => $request->step_3_translation,
            'step_4' => $request->step_4_translation,
            'step_5' => $request->step_5_translation,
            'step_6' => $request->step_6_translation,
            'history' => $request->history_translation,
        ]);

        if ($history && $historyID && $historyEN) {
            return redirect(route('index-history'))->with('success', 'Update History Successfully!');
        } else {
            return redirect(route('index-history'))->with('failed', 'Update History Failed!');
        }
    }
}
