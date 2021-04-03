@extends('layouts.indexed')

@section('content')

  <main id="main">

    <!-- ======= Banner-atas Section ======= -->
        <section id="banner-atas" class="banner-atas">
            <div class="container-fluid " >
            <div class="row">
                <div class="col-12 p-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <a href="">
                        <img class="d-block w-100" src="assets/img/banner atas.svg" alt="First slide">
                    </a>
                    </div>
                    <div class="carousel-item">
                    <a href="">
                        <img class="d-block w-100" src="assets/img/banner atas.svg" alt="Second slide">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="">
                    <img class="d-block w-100" src="assets/img/banner atas.svg" alt="Third slide">
                    </a>
                    </div>
                    </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"> </span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
                </div>
            </div>
            </div>
        </section>
    <!-- End Hero -->

    <!-- ======= barang Section ======= -->
        <section id="Produk-Terbaru" class="barang pt-0">
            <div class="container-fluid" data-aos="zoom-in">
            <div class="row">
                <div class="col-xl-12">
                <div class="box-text-display d-flex justify-content-start">
                    <div class="text-display">Produk Terbaru</div>
                </div>
                </div>
            </div>
            <div class="margin mt-4">
                <div class="row">
                    <div class="col-xl-12 ml-5 pr-0">
                        <div class="owl-carousel barang-carousel ">

                        <!-- ITEM CARD NEW -->
                            @foreach ($allProducts as $product)

                            <div class="col d-flex justify-content-center p-0">
                                <div class="box-items ">
                                    <div class="box-items-price-top ">
                                    <div class="d-flex justify-content-end">
                                        <div class="text-items-price-top border border-dark">{{$product->price}}</div>
                                    </div>
                                    </div>
                                    <div class="box-img-items d-flex align-items-center justify-content-center">
                                    <img src="{{ Voyager::image( $product->cover_img ) }}" alt="img-fluid" class="img-items">
                                    </div>
                                    <div class="box-footer">
                                    <div class="card-footer bg-white border-0">
                                        <div class="row">
                                        <div class="col">
                                            <div class="text-items-barang text-secondary text-left d-flex justify-content-start">{{$product->name}}</div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col">
                                            <div class="text-items-price-bottom d-flex justify-content-start">{{$product->price}}</div>
                                        </div>
                                        <div class="col">
                                            <div class="text-items-rating d-flex align-items-center justify-content-end">5<small><img src="assets/img/star.svg" alt="" class="img-fluid star"></small></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="box-footer2">
                                    <div class="card-footer bg-white border-0 ">
                                        <div class="row">
                                        <div class="col">
                                            <a href="{{ route('cart.add', $product->id) }}">
                                            <div class="text-buy-now border border-dark  d-flex align-items-center justify-content-center" > BUY NOW</div>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        <!-- ITEM CARD NEW -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-xl-12">
                <div class="box-text-display-button d-flex justify-content-center">
                    <a href=""><div class="text-display-button text-center">Lihat Semua Yang Lagi Hangat</div> </a>
                </div>
                </div>
            </div>
            <!--Border-->
            <div class="row mt-4">
                <div class="col-1"></div>
                <div class="col-10 d-flex justify-content-center border-top border-secondary"></div>
                <div class="col-1"></div>
            </div>
            </div>
        </section>
    <!-- End Clients Section -->

    <!-- ======= barang Section ======= -->
        <section id="barang" class="barang pt-0 ">
        <div class="container-fluid" data-aos="zoom-in">
            <div class="row">
            <div class="col-xl-12">
                <div class="box-text-display d-flex justify-content-start">
                <div class="text-display">Yang lagi Hangat</div>
                </div>
            </div>
            </div>
            <div class="margin mt-4">
            <div class="row">
                <div class="col-xl-12 ml-5 pr-0">
                    <div class="owl-carousel barang-carousel ">

                        <!-- ITEM CARD NEW -->
                            @foreach ($allProducts as $product)

                            <div class="col d-flex justify-content-center p-0">
                                <div class="box-items ">
                                    <div class="box-items-price-top ">
                                    <div class="d-flex justify-content-end">
                                        <div class="text-items-price-top border border-dark">{{$product->price}}</div>
                                    </div>
                                    </div>
                                    <div class="box-img-items d-flex align-items-center justify-content-center">
                                    <img src="{{ Voyager::image( $product->cover_img ) }}" alt="img-fluid" class="img-items">
                                    </div>
                                    <div class="box-footer">
                                    <div class="card-footer bg-white border-0">
                                        <div class="row">
                                        <div class="col">
                                            <div class="text-items-barang text-secondary text-left d-flex justify-content-start">{{$product->name}}</div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col">
                                            <div class="text-items-price-bottom d-flex justify-content-start">{{$product->price}}</div>
                                        </div>
                                        <div class="col">
                                            <div class="text-items-rating d-flex align-items-center justify-content-end">5<small><img src="assets/img/star.svg" alt="" class="img-fluid star"></small></div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="box-footer2">
                                    <div class="card-footer bg-white border-0 ">
                                        <div class="row">
                                        <div class="col">
                                            <a href="{{ route('cart.add', $product->id) }}">
                                            <div class="text-buy-now border border-dark  d-flex align-items-center justify-content-center" > BUY NOW</div>
                                            </a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        <!-- ITEM CARD NEW -->

                    </div>
                </div>
            </div>
            </div>
            <div class="row mt-4">
            <div class="col-xl-12">
                <div class="box-text-display-button d-flex justify-content-center">
                <a href=""><div class="text-display-button text-center">Lihat Semua Yang Lagi Hangat</div> </a>
                </div>
            </div>
            </div>
            <!--Border-->
            <div class="row mt-4">
            <div class="col-1"></div>
            <div class="col-10 d-flex justify-content-center border-top border-secondary"></div>
            <div class="col-1"></div>
            </div>
        </div>
        </section>
    <!-- End Clients Section -->

    <!-- ======= barang Section ======= -->
        <section id="barang" class="barang ">
        <div class="container-fluid" data-aos="zoom-in">
            <div class="row">
            <div class="col-xl-12">
                <div class="box-text-display d-flex justify-content-start">
                <div class="text-display">Yang lagi Hangat</div>
                </div>
            </div>
            </div>
            <div class="margin mt-4">
                <div class="row">
                    <div class="col-xl-12 ml-5 pr-0">
                        <div class="owl-carousel barang-carousel ">

                                <!-- ITEM CARD NEW -->
                                    @foreach ($allProducts as $product)

                                    <div class="col d-flex justify-content-center p-0">
                                        <div class="box-items ">
                                            <div class="box-items-price-top ">
                                            <div class="d-flex justify-content-end">
                                                <div class="text-items-price-top border border-dark">{{$product->price}}</div>
                                            </div>
                                            </div>
                                            <div class="box-img-items d-flex align-items-center justify-content-center">
                                            <img src="{{ Voyager::image( $product->cover_img ) }}" alt="img-fluid" class="img-items">
                                            </div>
                                            <div class="box-footer">
                                            <div class="card-footer bg-white border-0">
                                                <div class="row">
                                                <div class="col">
                                                    <div class="text-items-barang text-secondary text-left d-flex justify-content-start">{{$product->name}}</div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class="col">
                                                    <div class="text-items-price-bottom d-flex justify-content-start">{{$product->price}}</div>
                                                </div>
                                                <div class="col">
                                                    <div class="text-items-rating d-flex align-items-center justify-content-end">5<small><img src="assets/img/star.svg" alt="" class="img-fluid star"></small></div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="box-footer2">
                                            <div class="card-footer bg-white border-0 ">
                                                <div class="row">
                                                <div class="col">
                                                    <a href="{{ route('cart.add', $product->id) }}">
                                                    <div class="text-buy-now border border-dark  d-flex align-items-center justify-content-center" > BUY NOW</div>
                                                    </a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                <!-- ITEM CARD NEW -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
            <div class="col-xl-12">
                <div class="box-text-display-button d-flex justify-content-center">
                <a href=""><div class="text-display-button text-center">Lihat Semua Yang Lagi Hangat</div> </a>
                </div>
            </div>
            </div>
            <!--Border-->
            <div class="row mt-4">
            <div class="col-1"></div>
            <div class="col-10 d-flex justify-content-center border-top border-secondary"></div>
            <div class="col-1"></div>
            </div>
        </div>
        </section>
    <!-- End Clients Section -->

  </main>

@endsection
