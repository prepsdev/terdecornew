@extends('app')
@extends('whatsapp')
@section('content')
    <section class="hero-section text-white d-flex align-items-center">
        <div class="container text-center">
            <h1 class="display-4 fw-bold text-white">Desain Interior Rumah</h1>
        </div>
    </section>
    <section class="product-section">
        <div class="container py-5">
            <div class="row g-4 justify-content-center">
                <div class="col-sm-12 col-lg-4">
                    <div class="card shadow-sm rounded-bottom-0">
                        <img src="{{ asset('images/home.jpg') }}" class="card-img-top" alt="Produk 1">
                        <div class="card-body">
                            <div
                                class="d-flex flex-row flex-lg-column justify-content-between align-items-center text-lg-start">
                                <h5 class="product-title mb-0 text-justify-custom w-lg-100">Paket Rumah A</h5>
                                <h5 class="product-subtitle mt-0 mt-lg-2 text-justify-custom w-lg-100">Rp 92.243.420 · 32m²
                                    · 3
                                    ruang</h5>
                            </div>
                            <p class="product-description mt-2 text-justify-custom">
                                Paket interior efisien untuk rumah mungil dengan 3 ruang. Desain modern yang fungsional
                                untuk hunian 32m².
                            </p>
                        </div>
                    </div>
                    <a href="{{ route('jasa.detail') }}" class="btn btn-primary w-100 rounded-top-0 rounded-bottom">Lihat
                        Selengkapnya</a>
                </div>

                <div class="col-sm-12 col-lg-4">
                    <div class="card shadow-sm rounded-bottom-0">
                        <img src="{{ asset('images/apartment.jpg') }}" class="card-img-top" alt="Produk 1">
                        <div class="card-body">
                            <div
                                class="d-flex flex-row flex-lg-column justify-content-between align-items-center text-lg-start">
                                <h5 class="product-title mb-0 text-justify-custom w-lg-100">Paket Rumah B</h5>
                                <h5 class="product-subtitle mt-0 mt-lg-2 text-justify-custom w-lg-100">Rp 52.890.296 · 19m²
                                    · 2 ruang
                                </h5>
                            </div>
                            <p class="product-description mt-2 text-justify-custom">
                                Solusi interior praktis untuk ruang terbatas. Cocok untuk hunian 19m² dengan 2 ruang yang
                                nyaman dan fungsional.
                            </p>
                        </div>
                    </div>
                    <a href="{{ route('jasa.detail') }}" class="btn btn-primary w-100 rounded-top-0 rounded-bottom">Lihat
                        Selengkapnya</a>
                </div>

            </div>
        </div>
    </section>
@endsection
