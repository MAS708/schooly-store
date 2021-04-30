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
        <div class="margin mt-5">
            <div class="row">
                <div class="col-1"></div>
                    <div class="col-10 col-md-5">
                        <div class="text-hasil-search font-weight-light text-secondary text-center">Nama</div>
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control text-center mt-2" style="background-color:#FFF6E3; border:none;" aria-label="name" aria-describedby="validatedInputGroup" required>
                            </div>
                        </form>
                    </div>
                    <div class="col-5 d-none d-md-block">
                        <div class="text-hasil-search font-weight-light text-secondary text-center">No Telepon</div>
                        <form>
                            <div class="input-group">
                                <input type="number" class="form-control text-center mt-2" style="background-color:#FFF6E3; border:none;" aria-label="no" aria-describedby="validatedInputGroup" required>
                            </div>
                        </form>
                    </div>
                <div class="col-1"></div>
            </div>
        </div>
        <!-- ======= No Mobile ======= -->
        <div class="margin mt-5 d-md-none">
            <div class="row">
                <div class="col-1"></div>
                    <div class="col-10">
                        <div class="text-hasil-search font-weight-light text-secondary text-center">No Telepon</div>
                        <form>
                            <div class="input-group">
                                <input type="number" class="form-control text-center mt-2" style="background-color:#FFF6E3; border:none;" aria-label="no" aria-describedby="validatedInputGroup" required>
                            </div>
                        </form>
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
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control text-center mt-2" style="background-color:#FFF6E3; border:none;" aria-label="state" aria-describedby="validatedInputGroup" required>
                            </div>
                        </form>
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
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control text-center mt-2" style="background-color:#FFF6E3; border:none;" aria-label="city" aria-describedby="validatedInputGroup" required>
                            </div>
                        </form>
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
                        <form>
                            <div class="input-group">
                                <input type="number" class="form-control text-center mt-2" style="background-color:#FFF6E3; border:none;" aria-label="zip" aria-describedby="validatedInputGroup" required>
                            </div>
                        </form>
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
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control text-center mt-2" style="background-color:#FFF6E3; border:none;" aria-label="fulladdress" aria-describedby="validatedInputGroup" required>
                            </div>
                        </form>
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
                        <div class="text-display text-center font-weight-bold text-dark d-flex align-items-end justify-content-center  pt-1 pb-1" style="background-color:#FFF6E3; cursor:pointer">CheckOut
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







  </main>

@endsection
