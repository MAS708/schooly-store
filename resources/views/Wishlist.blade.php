@extends('layouts/App')

@section('content')

<body>
    <div class="container">
        <div class="row">
            <?php if ($products->isEmpty()) { ?>
                <div class="term" style="margin-top:5%; margin-left:40%;">
                    <h4>
                        <center><b>Product Not Found</b></center>
                    </h4>
                </div>
            <?php  } else { ?>
                @foreach ($products as $pro)
                <div class="col-md-4 col-sm-4">
                    <div class="text-center">
                        <a href="{{ url('/product_details', $pro->id) }}">
                            <img src="{{ asset('default-product.jpg') }}" alt="">
                        </a>
                        <h2>{{$pro->price}}</h2>
                        <a href="{{ route('product.details', $pro->id) }}">
                            {{$pro->name}}
                        </a>
                        <form action="{{ route('remove.wishlist', $pro->id) }}" method="post">
                            <button type="submit" style="color:black" onclick="return confirm('yakin?')"><a href="{{ route('remove.wishlist', $pro->id) }}">hapus</button>
                        </form>
                  <!-- <i class="fa fa-trash"></i></a> -->

                    </div>
                </div>
                @endforeach
            <?php } ?>
        </div>
    </div>

</body>

@endsection