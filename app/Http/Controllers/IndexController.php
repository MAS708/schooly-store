<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
        $products = Product::take(20)->latest()->get();
        return view('index', ['allProducts' => $products]);
    }

    public function searcher(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $allProducts = Product::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->paginate(25);

        // Return the search view with the resluts compacted
        $allProducts->appends(['search' => $search]);
        return view('search', compact('allProducts'));

        // $products = Product::take(20)->latest()->get();
        // return view('search', ['allProducts' => $products]);
    }
}
