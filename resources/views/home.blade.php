@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h2>Products</h2>

    <div class="row">

        @foreach ($allProducts as $product)
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('default-product.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{$product->name}}</h4>
                    <p class="card-text">{{$product->description}}</p>
                    <h3>{{$product->price}}</h3>
                    <p class="card-text">{{$product->shop->owner->name ?? 'n/a'}}</p>

                </div>
                <div class="card-body">
                    <a href="#" class="card-link">Add to Cart</a>
                    <a href="#" class="card-link">Detail Produk</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
