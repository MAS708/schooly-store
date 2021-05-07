@extends('layouts.indexed')

@section('content')

  <main id="main">

    <!-- ======= Banner-atas Section ======= -->
    <section id="banner-atas" class="banner-atas">
    </section>
    <!-- End Hero -->

    <!-- ======= barang Section ======= -->
    <section id="Produk" class="barang">

        <?php if ($products->isEmpty()) { ?>
            <div class="term" style="margin:5%;">
                <h4>
                    <center><b>You Have No Wishlist Yet</b></center>
                </h4>
            </div>
        <?php  } else { ?>

        @foreach ($products as $pro)

        <!-- ITEM CARD NEW -->
        <div class="container mt-5 border border-white " style="background-color:#FFF6E3;">
            <div class="col-12 mt-4 mb-4 p-0">
                <div class="whistlist-index">
                    <div class="row ml-2">
                            <div class="col-6 col-md-4 col-lg-3 d-flex d-flex align-items-center justify-content-center p-0">
                                <a  href="{{ route('cart.add', $pro->id) }}" class="box-img-items-3 d flex align-items-center" style="background-color: white; border-radius: 10% 10%;">
                                    <img src="{{ Voyager::image( $pro->cover_img ) }}" alt="img-fluid" class="img-items">
                                </a>
                            </div>
                            <div class="col-6 col-md-5 d-flex align-items-center justify-content-start ">
                                <div class="whistlist-produk d-flex flex-column ml-2">
                                    <div class="box-text-display-whistlist-index">
                                        <div><a href="{{ route('cart.add', $pro->id) }}" class="text-display-2 text-dark">{{ $pro->name }}</a></div>
                                        <div><a href="{{ route('cart.add', $pro->id) }}" class="text-display-3 mt-1" style="color: #F19933;" >Rp. {{number_format($pro->price, 2)}} ,-</a></div>
                                        <div><a href="{{ route('cart.add', $pro->id) }}" class="text-display mt-1" style="color:#9C9C9C;" >{{strip_tags($pro->description)}}</a></div>
                                    </div>
                                    <div class="toko-whistlist mt-auto d-none d-md-block">
                                        <div class="box-text-display-2-whistlist-index mt-3 ml-3">
                                            <div class="row d-flex align-items-center">
                                                <i class="fas fa-store-alt fa-lg"></i>
                                                <div class="text-display ml-2">{{$pro->product->shop->name ?? 'n/a'}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2 col-lg-3 d-flex align-items-center justify-content-end">
                                <div class="row mr-2 d-none d-md-block">
                                    <div class="col-12 mb-3">
                                        <div class="sold" style="color:#F19933;">
                                            <div class="row d-flex align-items-center justify-content-end">
                                                <div class="text-display mr-2">29</div>
                                                <i class="fas fa-tag fa-lg"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="rating" style="color:#6e5f4d;">
                                            <div class="row d-flex align-items-center justify-content-end">
                                                <div class="text-display mr-2">3.5</div>
                                                <i class="fas fa-star fa-lg"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-1 d-flex align-items-center justify-content-center" style="border-left: 4px solid white;">
                            <form action="{{ route('remove.wishlist', $pro->id) }}">
                                <div class="delete d-none d-md-block" style="color: #F03939; cursor:pointer;">
                                        <span>
                                            <button type="submit" class=" btn btn-link p-0 text-dark font-weight-bold"><i class="far fa-trash-alt fa-2x" style="color: #F03939; cursor:pointer;"></i></button>
                                        </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="whistlist-for-mobile d-md-none">
                        <div class="row">
                            <div class="col-12">
                                <div class="whistlist-produk">
                                    <div class="toko-whistlist">
                                        <div class="box-text-display-2-whistlist-index mt-3">
                                            <div class="row d-flex justify-content-center">
                                                <div class="toko" style="cursor:pointer;">
                                                    <div class="row d-flex align-items-center">
                                                        <i class="fas fa-store-alt fa-sm" ></i>
                                                        <div class="text-display ml-1" >{{$pro->product->shop->name ?? 'n/a'}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 d-flex justify-content-end">
                                                    <div class="rating p-2" style="color:#F19933;">
                                                        <div class="row d-flex align-items-center">
                                                            <div class="text-display mr-1">122 </div>
                                                            <i class="fas fa-star fa-sm"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 d-flex justify-content-start">
                                                    <div class="sold p-2"  style="color:#F19933;">
                                                        <div class="row d-flex align-items-center">
                                                            <div class="text-display mr-1" >122 </div>
                                                            <i class="fas fa-tag fa-sm"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-2 d-flex align-items-center justify-content-end">
                                                    <form action="{{ route('remove.wishlist', $pro->id) }}">
                                                        <div class="delete p-2" style="color: #F03939; cursor:pointer;">
                                                                <span>
                                                                    <button type="submit" class="btn btn-link p-0 text-dark font-weight-bold row d-flex align-items-center"> <i class="far fa-trash-alt fa-md" style="color: #F03939; cursor:pointer;"></i></button>
                                                                </span>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
        <?php } ?>
    </div>
    </div>
    </section>
  </main>
  {{-- "{{ route('product.details', $pro->id) }}" --}}
@endsection
