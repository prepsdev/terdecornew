@extends('app')

@section('content')
    <section class="hero-section text-white d-flex align-items-center">
        <div class="container text-center">
            <h1 class="display-4 fw-bold text-white">Desain Interior Rumah</h1>
        </div>
    </section>
    <section class="detail-section">
        <div class="container-fluid py-5">
            <div class="row g-4 justify-content-center">
                <div class="col-12">
                    <div class="horizontal-scroll w-100">
                        <img src="{{ asset('images/room1.jpg') }}" alt="Image 1">
                        <img src="{{ asset('images/room2.jpg') }}" alt="Image 1">
                        <img src="{{ asset('images/room3.jpg') }}" alt="Image 1">
                        <img src="{{ asset('images/room4.jpg') }}" alt="Image 1">
                        <img src="{{ asset('images/room5.jpg') }}" alt="Image 1">
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-5">
            <div class="row g-4 justify-content-center">
                <div class="col-12">
                    <h2 class="display-6 fw-bold" style="color: #484848">Paket Rumah A</h2>
                    <h6 class="text-muted">Rp 92.243.420 · 32m² · 3 ruang</h6>
                    <hr>
                    <div class="row text-center justify-content-center">
                        <div class="col-4 col-md-2 mb-3">
                            <i class="bi bi-house-door fs-4 text-primary"></i>
                            <div class="mt-1 small">Desain Modern</div>
                        </div>
                        <div class="col-4 col-md-2 mb-3">
                            <i class="bi bi-brush fs-4 text-success"></i>
                            <div class="mt-1 small">Finishing Rapi</div>
                        </div>
                        <div class="col-4 col-md-2 mb-3">
                            <i class="bi bi-lightbulb fs-4 text-warning"></i>
                            <div class="mt-1 small">Pencahayaan Optimal</div>
                        </div>
                        <div class="col-4 col-md-2 mb-3">
                            <i class="bi bi-door-open fs-4 text-danger"></i>
                            <div class="mt-1 small">Material Berkualitas</div>
                        </div>
                        <div class="col-4 col-md-2 mb-3">
                            <i class="bi bi-people fs-4 text-info"></i>
                            <div class="mt-1 small">Konsultasi Gratis</div>
                        </div>
                    </div>

                    <hr>
                    <div class="detail-description">
                        <h5 class="fw-bold">Deskripsi Paket</h5>
                        <h6 class="text-muted fw-light">
                            Paket interior efisien untuk rumah mungil dengan 3 ruang. Desain modern yang fungsional untuk
                            hunian 32m². Solusi praktis dengan material berkualitas, pencahayaan optimal, dan finishing
                            rapi. Dapatkan konsultasi gratis untuk menyesuaikan desain dengan kebutuhan Anda.
                        </h6>
                    </div>
                    <hr>
                    <div class="detail-description">
                        <h5 class="fw-bold">Rincian Paket</h5>
                        <div class="table-responsive">
                            <div class="item-row d-flex justify-content-between">
                                <div class="item-name text-truncate">1 | Dama Kabinet Dapur Atas</div>
                                <div class="item-price">Rp 25.000.000</div>
                            </div>
                            <div class="item-row d-flex justify-content-between">
                                <div class="item-name text-truncate">2 | Dama Kabinet Terbuka Atas</div>
                                <div class="item-price">Rp 18.500.000</div>
                            </div>
                            <div class="item-row d-flex justify-content-between">
                                <div class="item-name text-truncate">3 | Kuma Ambalan Dinding C</div>
                                <div class="item-price">Rp 12.743.420</div>
                            </div>
                            <div class="item-row d-flex justify-content-between">
                                <div class="item-name text-truncate">4 | Dama Kabinet Dapur Bawah</div>
                                <div class="item-price">Rp 20.000.000</div>
                            </div>
                            <div class="item-row d-flex justify-content-between">
                                <div class="item-name text-truncate">5 | SRV Rak Pengeringan Piring SC 800 mm</div>
                                <div class="item-price">Rp 16.000.000</div>
                            </div>
                            <div class="item-row d-flex justify-content-between fw-bold">
                                <div class="item-name text-truncate">Total</div>
                                <div class="item-price">Rp 92.243.420</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="floating-cta-wrapper d-lg-none">
        <a href="#" class="btn btn-get-price w-85">
            Dapatkan Harga Terbaik
        </a>
    </div>
@endsection
