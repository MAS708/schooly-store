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
        $productLatest = Product::take(20)->latest()->get();
        $productsRandom = Product::all()->random(20);
        $productHighest = Product::take(20)->orderBy('price', 'desc')->get();
        return view('index', [  'latest' => $productLatest,
                                'random' => $productsRandom,
                                'highest' => $productHighest ]);
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
        return view('search', compact('allProducts','search'));

    }

    public function detail($product)
    {
        //Show Products
        $products = Product::find($product);
        $productsRandom = Product::all()->random(20);
        return view('detail', [ 'products' => $products,
                                'random' => $productsRandom]);
    }

    public function highest(){
        $productHighest = Product::orderBy('price', 'desc')->paginate(25);
        return view('products', [  'allProducts' => $productHighest, 'search' => 'Produk Tertinggi'] );
    }

    public function latest(){
        $productLatest = Product::latest()->paginate(25);
        return view('products', [  'allProducts' => $productLatest , 'search' => 'Produk Terbaru'] );
    }

    public function hottest(){
        $productsRandom = Product::inRandomOrder()->paginate(25);
        return view('products', [  'allProducts' => $productsRandom, 'search' => 'Produk Acak'] );
    }
}
