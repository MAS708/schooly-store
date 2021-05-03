@extends('layouts.indexed')

@section('content')

  <main id="main">

    <!-- ======= Banner-atas Section ======= -->
    <section id="banner-atas" class="banner-atas">
    </section>
    <!-- End Hero -->

    <!-- ======= input Section ======= -->
    <section id="Input Data" class="input">
            <!-- ======= Nama dan No web ======= -->
    <form action="{{route('orders.store')}}" method="post">
        @csrf
            <div class="margin mt-5">
                <div class="row">
                    <div class="col-1"></div>
                        <div class="col-5">
                            <div class="text-hasil-search font-weight-light text-secondary text-center">Nama</div>
                                <div class="input-group">
                                    <input type="text" name="shipping_fullname" class="form-control text-center mt-2" style="background-color:#FFF6E3; border:none;" aria-label="name" aria-describedby="validatedInputGroup" required>
                                </div>
                        </div>
                        <div class="col-5">
                            <div class="text-hasil-search font-weight-light text-secondary text-center">No Telepon</div>
                                <div class="input-group">
                                    <input type="number" name="shipping_phone" class="form-control text-center mt-2" style="background-color:#FFF6E3; border:none;" aria-label="no" aria-describedby="validatedInputGroup" required>
                                </div>
                        </div>
                    <div class="col-1"></div>
                </div>
            </div>
            <div class="margin mt-5">
                <div class="row">
                    <div class="col-1"></div>
                        <div class="col-10">
                            <div class="text-hasil-search font-weight-light text-secondary text-center">Provinsi</div>
                                <div class="input-group">
                                    <input type="text" name="shipping_state" class="form-control text-center mt-2" style="background-color:#FFF6E3; border:none;" aria-label="state" aria-describedby="validatedInputGroup" required>
                                </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
            <div class="margin mt-5">
                <div class="row">
                    <div class="col-1"></div>
                        <div class="col-10">
                            <div class="text-hasil-search font-weight-light text-secondary text-center">Kota</div>
                                <div class="input-group">
                                    <input type="text" name="shipping_city" class="form-control text-center mt-2" style="background-color:#FFF6E3; border:none;" aria-label="city" aria-describedby="validatedInputGroup" required>
                                </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
            <div class="margin mt-5">
                <div class="row">
                    <div class="col-1"></div>
                        <div class="col-10">
                            <div class="text-hasil-search font-weight-light text-secondary text-center">Zip</div>
                                <div class="input-group">
                                    <input type="number" name="shipping_zipcode" class="form-control text-center mt-2" style="background-color:#FFF6E3; border:none;" aria-label="zip" aria-describedby="validatedInputGroup" required>
                                </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
            <div class="margin mt-5">
                <div class="row">
                    <div class="col-1"></div>
                        <div class="col-10">
                            <div class="text-hasil-search font-weight-light text-secondary text-center">Alamat Lengkap</div>
                                <div class="input-group">
                                    <input type="text" name="shipping_address" class="form-control text-center mt-2" style="background-color:#FFF6E3; border:none;" aria-label="fulladdress" aria-describedby="validatedInputGroup" required>
                                </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>

        </section>
        <!-- End barang Section -->

        <!-- ======= CheckOut Section ======= -->
            <section id="box-cekout" class="box-cekout p-0 mb-0">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="row d-flex justify-content-end">
                            <div class="col-8 col-md-4">
                                <div class="text-display text-center font-weight-bold text-dark d-flex align-items-end justify-content-center  pt-1 pb-1" style="background-color:#FFF6E3; cursor:pointer">
                                    <button type="submit" class="btn btn-link p-0 text-dark">CheckOut</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>

                <!--Border-->
                <div class="row mt-5">
                    <div class="col-1"></div>
                    <div class="col-10 d-flex justify-content-center border-top border-secondary"></div>
                    <div class="col-1"></div>
                </div>
            </section>
        <!-- End Checkout -->
    </form>
  </main>

@endsection
