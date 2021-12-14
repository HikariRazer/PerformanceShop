<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = DB::table('categories')->take(7)->get();
        $newProducts = DB::table('products')->orderBy('created_at', 'asc')->take(9)->get();
        $featuredProducts = DB::table('products')->orderBy('harga', 'desc')->take(3)->get();
        return view('frontend.index', compact(
            'categories',
            'newProducts',
            'featuredProducts'
        ));
    }
}
