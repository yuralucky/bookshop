<?php

namespace App\Http\Controllers\Admin;

use App\FeedBack;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        $feedbacks = FeedBack::all();
        $newfeedback=FeedBack::where('ready',0)->count();
        return view('admin.feedback', compact('feedbacks','newfeedback'));
    }

    public function delete($id)
    {
        $feedback = FeedBack::find($id)->delete();
        return back();
    }


}
