<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Auth;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('user.feedback')->with(['dashboard' => true]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string'
        ]);

        Feedback::create([
            'user_id' => Auth::id(),
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment')
        ]);

        return redirect()->route('feedback.create')->with(['dashboard' => true]);
    }

    public function index()
    {
        $feedbacks = Feedback::with('user')->get();
        return view('admin.feedback', compact('feedbacks'))->with(['dashboard' => true]);
    }
}
