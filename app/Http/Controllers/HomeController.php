<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Banner;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = \Cache::remember('home-banners', $this->cacheMedium, function () {
            return Banner::asc()->published()->get();;
        });
        return view('home.index', [
            'banners' => $banners
        ]);
    }
}
