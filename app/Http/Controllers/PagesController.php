<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function getUnsubscribe()
    {
        return view('pages.unsubscribe');
    }

    public function getSubscribe()
    {
        return view('pages.subscribe');
    }

    public function getCategory()
    {
        $stories = Story::select('category')->distinct()->get();
        return view('pages.category')->with('stories', $stories);
    }
}
