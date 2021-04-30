@extends('layouts.indexed')

@section('content')

  <main id="main">

    <!-- ======= Banner-atas Section ======= -->
    <section id="banner-atas" class="banner-atas">
    </section>
    <!-- End Hero -->

    <!-- ======= barang Section ======= -->
    <section id="Produk" class="barang">
        <!--Border-->
        <div class="row mt-4">
            <div class="col-1"></div>
            <div class="col-10 d-flex justify-content-center border-top border-secondary"></div>
            <div class="col-1"></div>
        </div>
        <div class="margin mt-5">
                <div class="col-xl-12">
                    <div class="produk-addcart-index mb-5">
                        <!-- ITEM CARD NEW -->
                        <div class="row ml-2">
                            <div class="col-1 d-flex justify-content-start p-0">
                                <div class="icon-addcart d-flex align-items-center">
                                    <i class="fas fa-bookmark fa-2x d-none d-md-block"></i>
                                    <i class="fas fa-bookmark fa-lg d-md-none"></i>
                                </div>
                            </div>
                            <div class="col-5 col-md-3 d-flex justify-content-start p-0">
                                <div class="box-img-items d flex align-items-center">
                                    <img src="" alt="img-fluid" class="img-items">
                                </div>
                            </div>
                            <div class="col-5 col-md-6 d-flex justify-content-start p-0">
                                <div class="addcart-produk d-flex flex-column ml-2">
                                    <div class="box-text-display-addcart-index">
                                        <div class="text-display">Bakmi Mevah asdddddd</div>
                                        <div class="text-display mt-2">Rp. 50.000 ,-</div>
                                    </div>
                                    <div class="produk-addcart mt-auto ">
                                        <div class="border mb-3"></div>
                                        <div class="input-jumlah-produk mt-3">
                                            <div class="row">
                                                <div class="icon-minus ml-3 mr-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus fa-md d-none d-md-block mt-2" style="cursor:pointer"></i>
                                                    <i class="fas fa-minus fa-sm d-md-none mt-2" style="cursor:pointer"></i>
                                                </div>
                                                <div class="box-cart col-2 col-md-6 p-0">
                                                    <input class="form-control form-control-sm text-center p-0" type="number" min="0" value="1" style="background-color:rgba(196, 196, 196, 0.5);">
                                                </div>
                                                <div class="icon-plus ml-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus fa-md d-none d-md-block mt-2" style="cursor:pointer"></i>
                                                    <i class="fas fa-plus fa-sm d-md-none mt-2" style="cursor:pointer"></i>
                                                </div>
                                                <div class="icon-save ml-4 mr-3">
                                                    <i class="far fa-check-square fa-2x d-none d-md-block" style="cursor:pointer"></i>
                                                    <i class="far fa-check-square fa-md d-md-none mt-2 " style="cursor:pointer"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border mt-3 "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 col-md-2 d-flex justify-content-center p-0">
                                <div class="icon-delete">
                                    <i class="far fa-trash-alt fa-2x d-none d-md-block"style="cursor:pointer"></i>
                                    <i class="far fa-trash-alt fa-md d-md-none" style="cursor:pointer"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM CARD NEW -->
                    </div>
                    <div class="produk-addcart-index mb-5">
                        <!-- ITEM CARD NEW -->
                        <div class="row ml-2">
                            <div class="col-1 d-flex justify-content-start p-0">
                                <div class="icon-addcart d-flex align-items-center">
                                    <i class="fas fa-bookmark fa-2x d-none d-md-block"></i>
                                    <i class="fas fa-bookmark fa-lg d-md-none"></i>
                                </div>
                            </div>
                            <div class="col-5 col-md-3 d-flex justify-content-start p-0">
                                <div class="box-img-items d flex align-items-center">
                                    <img src="" alt="img-fluid" class="img-items">
                                </div>
                            </div>
                            <div class="col-5 col-md-6 d-flex justify-content-start p-0">
                                <div class="addcart-produk d-flex flex-column ml-2">
                                    <div class="box-text-display-addcart-index">
                                        <div class="text-display">Bakmi Mevah asdddddd</div>
                                        <div class="text-display mt-2">Rp. 50.000 ,-</div>
                                    </div>
                                    <div class="produk-addcart mt-auto ">
                                        <div class="border mb-3"></div>
                                        <div class="input-jumlah-produk mt-3">
                                            <div class="row">
                                                <div class="icon-minus ml-3 mr-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus fa-md d-none d-md-block mt-2" style="cursor:pointer"></i>
                                                    <i class="fas fa-minus fa-sm d-md-none mt-2" style="cursor:pointer"></i>
                                                </div>
                                                <div class="box-cart col-2 col-md-6 p-0">
                                                    <input class="form-control form-control-sm text-center p-0" type="number" min="0" value="1" style="background-color:rgba(196, 196, 196, 0.5);">
                                                </div>
                                                <div class="icon-plus ml-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus fa-md d-none d-md-block mt-2" style="cursor:pointer"></i>
                                                    <i class="fas fa-plus fa-sm d-md-none mt-2" style="cursor:pointer"></i>
                                                </div>
                                                <div class="icon-save ml-4 mr-3">
                                                    <i class="far fa-check-square fa-2x d-none d-md-block" style="cursor:pointer"></i>
                                                    <i class="far fa-check-square fa-md d-md-none mt-2 " style="cursor:pointer"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border mt-3 "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 col-md-2 d-flex justify-content-center p-0">
                                <div class="icon-delete">
                                    <i class="far fa-trash-alt fa-2x d-none d-md-block"style="cursor:pointer"></i>
                                    <i class="far fa-trash-alt fa-md d-md-none" style="cursor:pointer"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM CARD NEW -->
                    </div>
                    <div class="produk-addcart-index mb-5">
                        <!-- ITEM CARD NEW -->
                        <div class="row ml-2">
                            <div class="col-1 d-flex justify-content-start p-0">
                                <div class="icon-addcart d-flex align-items-center">
                                    <i class="fas fa-bookmark fa-2x d-none d-md-block"></i>
                                    <i class="fas fa-bookmark fa-lg d-md-none"></i>
                                </div>
                            </div>
                            <div class="col-5 col-md-3 d-flex justify-content-start p-0">
                                <div class="box-img-items d flex align-items-center">
                                    <img src="assets/img/gunting.png" alt="img-fluid" class="img-items">
                                </div>
                            </div>
                            <div class="col-5 col-md-6 d-flex justify-content-start p-0">
                                <div class="addcart-produk d-flex flex-column ml-2">
                                    <div class="box-text-display-addcart-index">
                                        <div class="text-display">Bakmi Mevah asdddddd</div>
                                        <div class="text-display mt-2">Rp. 50.000 ,-</div>
                                    </div>
                                    <div class="produk-addcart mt-auto ">
                                        <div class="border mb-3"></div>
                                        <div class="input-jumlah-produk mt-3">
                                            <div class="row">
                                                <div class="icon-minus ml-3 mr-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus fa-md d-none d-md-block mt-2" style="cursor:pointer"></i>
                                                    <i class="fas fa-minus fa-sm d-md-none mt-2" style="cursor:pointer"></i>
                                                </div>
                                                <div class="box-cart col-2 col-md-6 p-0">
                                                    <input class="form-control form-control-sm text-center p-0" type="number" min="0" value="1" style="background-color:rgba(196, 196, 196, 0.5);">
                                                </div>
                                                <div class="icon-plus ml-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus fa-md d-none d-md-block mt-2" style="cursor:pointer"></i>
                                                    <i class="fas fa-plus fa-sm d-md-none mt-2" style="cursor:pointer"></i>
                                                </div>
                                                <div class="icon-save ml-4 mr-3">
                                                    <i class="far fa-check-square fa-2x d-none d-md-block" style="cursor:pointer"></i>
                                                    <i class="far fa-check-square fa-md d-md-none mt-2 " style="cursor:pointer"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border mt-3 "></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 col-md-2 d-flex justify-content-center p-0">
                                <div class="icon-delete">
                                    <i class="far fa-trash-alt fa-2x d-none d-md-block"style="cursor:pointer"></i>
                                    <i class="far fa-trash-alt fa-md d-md-none" style="cursor:pointer"></i>
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

    <!-- ======= CheckOut Section ======= -->
    <section id="box-cekout " class="box-cekout shadow">
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-8 ">
                    <div class="row d-flex justify-content-end">
                        <div class="col-md-5"></div>
                        <div class="col-7 col-md-3 d-flex justify-content-end">
                            <div class="box mb-2">
                                <div class="row  ">
                                    <div class="text-hasil-search font-weight-light text-secondary ">Sub Total</div>
                                </div>
                                <div class="row">
                                    <div class="text-hasil-search">Rp. 50.000 ,-</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1 d-md-none"></div>
                        <div class="col-8 col-md-4">
                            <div class="text-display text-center font-weight-bold text-dark d-flex align-items-end justify-content-center  pt-1 pb-1" style="background-color:rgba(196, 196, 196, 0.5); cursor:pointer">CheckOut
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Checkhout -->








  </main>

@endsection
