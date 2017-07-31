<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deal;
use App\Blog;

// use App\Deal;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        // $deals = Deal::take(3)->get();
        // $deals = Deal::take(3)
                    // ->orderBy('id')
                    // ->get();
        $blogs = Blog::take(6)
                    ->orderBy('updated_at', 'desc')
                    ->get();
        return view('pages.index')
                    // ->with('deals', $deals)
                    ->with('blogs', $blogs);
        // return view('pages.index');
    }
}
