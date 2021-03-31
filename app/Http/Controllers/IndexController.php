<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use TCG\Voyager\Voyager;

class IndexController extends Controller
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
        $products = Product::take(5)->latest()->get();
        Voyager::class;
        return view('Frontend/index', ['allProducts' => $products]);
    }
}
