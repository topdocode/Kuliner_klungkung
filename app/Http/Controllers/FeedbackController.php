<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\FeedbackTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FeedbackController extends Controller
{
    public function index()
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        return view('feedback.index', [
            'page' => 'Feedback',
            'feedbacks' => Feedback::all(),
        ]);
    }

    public function store(Request $request)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $feedback = Feedback::create($validatedData);
        if ($feedback) {
            return redirect(route('homepage'))->with('success', 'Submit Feedback Successfully!');
        } else {
            return redirect(route('homepage'))->with('failed', 'Submit Feedback Failed!');
        }
    }

    public function delete($id)
    {
        if ($locale = session('locale')) {
            app()->setLocale($locale);
        }

        $feedback = Feedback::findOrFail($id)->delete();
        $feedbackID = FeedbackTranslation::where('feedback_id', $id)->where('language', 'id')->delete();
        $feedbackEN = FeedbackTranslation::where('feedback_id', $id)->where('language', 'en')->delete();

        if ($feedback || $feedbackID || $feedbackEN) {
            return redirect(route('index-feedback'))->with('success', 'Delete Feedback Successfully!');
        } else {
            return redirect(route('index-feedback'))->with('failed', 'Delete Feedback Failed!');
        }
    }
}
