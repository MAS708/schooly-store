@extends('layouts.indexed')

@section('content')

  <main id="main">

    <!-- ======= Banner-atas Section ======= -->
    <section id="banner-atas" class="banner-atas">
    </section>
    <!-- End Hero -->

    <!-- ======= barang Section ======= -->
    <section id="Detail Produk" class="barang">
            <div class="margin mt-5">
                    <div class="col-xl-12">
                        <div class="produk-detail-index mb-5">
                            <!-- ITEM CARD NEW -->
                            <div class="row ml-2">
                                <div class="col-6 d-flex justify-content-center p-0">
                                    <div class="box-img-items-2 d flex align-items-center">
                                        <img src="{{ Voyager::image( $products->cover_img ) }}" alt="img-fluid" class="img-items">
                                    </div>
                                </div>
                                <div class="col-6 d-flex justify-content-start">
                                    <div class="detail-produk d-flex flex-column ml-2">
                                        <div class="box-text-display-addcart-index">
                                            <div class="text-display-2 text-dark" style=" font-weight: 350;" >{{ $products->name }}</div>
                                            <div class="text-display-2 mt-2" style=" font-weight: 450; color: #F09532">Rp. {{number_format($products->price, 2)}} ,-</div>
                                            <div class="row mt-5">
                                                <div class="col-8">
                                                     <a href="{{ route('cart.add', $products->id) }}">
                                                    <div class="text-display text-center font-weight-bold text-light d-flex align-items-end justify-content-center pt-1 pb-1" style="background-color:#363636; cursor:pointer;">Buy Now
                                                    </div>
                                                     </a>
                                                </div>
                                            </div>
                                            <div class="deskripsi d-none d-md-block ">
                                                <div class="text-display-3 text-dark mt-4" style="font-weight: 500;" >Deskripsi</div>
                                                <div class="text-display text-justify text-secondary mt-4">{{strip_tags($products->description)}}.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ml-2">
                                <div class="col-12 d-flex justify-content-center" >
                                    <div class="deskripsi d-md-none ">
                                        <div class="text-display-3 text-dark mt-4" style="font-weight: 500;" >Deskripsi</div>
                                        <div class="text-display text-justify text-secondary mt-4">{{$products->description}}.</div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM CARD NEW -->
                        </div>
                    </div>
                </div>
            <!--Border-->
            <div class="row mt-4">
                <div class="col-1"></div>
                <div class="col-10 d-flex justify-content-center border-top border-secondary"></div>
                <div class="col-1"></div>
            </div>
    </section>
    <!-- End barang Section -->

    <!-- ======= barang Section ======= -->
        <section id="barang" class="barang pt-0 ">
            <div class="container-fluid" data-aos="zoom-in">
                <div class="row">
                <div class="col-xl-12">
                    <div class="box-text-display d-flex justify-content-start">
                    <div class="text-display">Produk Acak Yang Mungkin Sukai</div>
                    </div>
                </div>
                </div>
                <div class="margin mt-4">
                <div class="row">
                    <div class="col-xl-12 ml-5 pr-0">
                        <div class="owl-carousel barang-carousel ">

                            <!-- ITEM CARD NEW -->
                                @foreach ($random as $r)

                                <div class="col d-flex justify-content-center p-0">
                                    <div class="box-items ">
                                        <div class="box-items-price-top ">
                                        <div class="d-flex justify-content-end">
                                            <div class="text-items-price-top border border-dark">Rp.{{number_format($r->price, 2)}}</div>
                                        </div>
                                        </div>
                                        <div class="box-img-items d-flex align-items-center justify-content-center">
                                        <img src="{{ Voyager::image( $r->cover_img ) }}" alt="img-fluid" class="img-items">
                                        </div>
                                        <div class="box-footer">
                                        <div class="card-footer bg-white border-0">
                                            <div class="row">
                                            <div class="col">
                                                <div class="text-items-barang text-secondary text-left d-flex justify-content-start">{{$r->name}}</div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col">
                                                <div class="text-items-price-bottom d-flex justify-content-start">Rp.{{number_format($r->price, 2)}}</div>
                                            </div>
                                            <div class="col">
                                                <div class="text-items-rating d-flex align-items-center justify-content-end">5<small><img src="{{asset('assets/img/star.svg')}}" alt="" class="img-fluid star"></small></div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="box-footer2">
                                        <div class="card-footer bg-white border-0 ">
                                            <div class="row">
                                            <div class="col">
                                                {{-- <a href="{{ route('cart.add', $product->id) }}"> --}}
                                                <a href="{{ route('cart.add', $r->id) }}">
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
                    <a href="{{ route('products.hottest') }}"><div class="text-display-button text-center">Lihat Produk Acak Lagi</div> </a>
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
