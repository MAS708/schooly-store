@extends('layouts.indexed')

@section('content')

  <main id="main">

    <!-- ======= Banner-atas Section ======= -->
    <section id="banner-atas" class="banner-atas">
    </section>
    <!-- End Hero -->

    <!-- ======= barang Section ======= -->
    <section id="Produk" class="barang">
        <div class="container-fluid" data-aos="zoom-in">
            <div class="row">
                <div class="col-xl-12">
                    <div class="box-text-display d-flex justify-content-start">
                        <div class="text-display">
                            <div class="row">Hasil Pencarian Untuk "<div class="text-hasil-search">{{ $search }}</div>"</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="margin mt-5">
                <div class="col-xl-12">
                    <div class="produk-search-index">
                        <!-- ITEM CARD NEW -->
                        <div class="row ">
                            @foreach ($allProducts as $product)
                            <div class="col d-flex justify-content-center p-0">
                                <div class="box-items ">
                                    <div class="box-items-price-top ">
                                        <div class="d-flex justify-content-end">
                                            <div class="text-items-price-top border border-dark">Rp.{{number_format($product->price, 2)}}</div>
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
                                                    <div class="text-items-price-bottom d-flex justify-content-start">Rp.{{number_format($product->price, 2)}}</div>
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
                                                    <a href="{{ route('product.detail', $product->id) }}">
                                                        <div class="text-buy-now border border-dark  d-flex align-items-center justify-content-center" > BUY NOW</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- ITEM CARD NEW -->
                    </div>
                </div>
            </div>
            <!--Pagination-->
            <div class="row mt-4">
                <div class="col-12 d-flex justify-content-center">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="mr-1">
                                <a class="page-link" href="{{ $allProducts->toArray()['first_page_url'] }}" tabindex="-1">First</a>
                            </li>

                                {{ $allProducts->links('vendor.pagination.custom') }}

                            <li class="ml-1">
                                <a class="page-link" href="{{ $allProducts->toArray()['last_page_url'] }}">Last</a>
                             </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End barang Section -->

  </main>

@endsection
