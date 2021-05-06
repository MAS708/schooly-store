@extends('layouts/App')

@section('content')

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        Detail Produk
                    </div>
                    <div class="card-body">
                        <center><img class="card-img-top" style="width:max-content; height:max-content" src="{{ asset('default-product.jpg') }}" alt="Card image cap"></center>
                        <h5 class="card-title text-center">{{ $product->name }}</h5>
                        <br>
                        <h6 class="card-subtitle mb-2">Harga Produk = Rp.{{ $product->price }}</h6>
                        <p class="card-text">Deskripsi Produk = {{ $product->description }}</p>
                        <p class="card-text">Variasi Produk = {{ $product->variation }}</p>
                        <p class="card-text">Stock Produk = {{ $product->stock }}</p>
                        <!-- <p class="card-text">{{ $product->cover_img }}</p> -->

                        <?php
                        $wishlistData = DB::table('wishlist')->rightJoin('products', 'wishlist.pro_id', '=', 'products.id')
                            ->where('wishlist.pro_id', '=', $product->id)->get();
                        $count = App\Wishlist::where(['pro_id' => $product->id])->count();

                        if ($count == "0") {
                        ?>
                            <form action="{{ route('wishlist.add')}}" method="post" role="form">
                                <input type="hidden" name="_token" value={{csrf_token()}}>
                                <input type="hidden" value="{{$product->id}}" name="pro_id">
                                <button class="btn btn-primary d-inline-block align-top" type="submit">Add to Wishlist</button>
                            </form>
                        <?php } else { ?>
                            <h5 style="color:black; font-size:small" class="d-inline-block align-top"><b>Has been added to wishlist!</b></h5>
                        <?php } ?>
                        <a class="btn btn-info d-inline-block align-top" onclick="goBack()">Kembali</a>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>
@endsection

<script>
    function goBack() {
        window.history.back();
    }
</script>