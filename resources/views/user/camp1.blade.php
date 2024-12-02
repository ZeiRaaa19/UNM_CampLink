@extends('layouts.main')

@section('content')
    <div class="content container">

        {{-- hero section --}}
        <section id="hero" class="hero">
            <h2 class="section-title fw-bold ">
                Camping Ground Sukamantri, Gunung Salak
            </h2>
            <div class="row mb-4">
                <div class="col-md-8">
                    <img alt="Main camping ground img" class="img-fluid main-image"
                        src="{{ asset('assets/img/camp1.png') }}" />
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <img alt="Camping ground img 1" class="img-fluid side-img"
                                src="{{ asset('assets/img/camp2.png') }}" />
                        </div>
                        <div class="col-12 mb-2">
                            <img alt="Camping ground img 2" class="img-fluid side-img"
                                src="{{ asset('assets/img/camp3.png') }}" />
                        </div>
                    </div>
                </div>
                <div class="row my-4 justify-content-between">
                    <div class="col-md-4">
                        <img alt="Camping ground img 4" class="img-fluid buttom-img"
                            src="{{ asset('assets/img/camp4.png') }}" />
                    </div>
                    <div class="col-md-4">
                        <img alt="Camping ground img 5" class="img-fluid buttom-img"
                            src="{{ asset('assets/img/camp5.png') }}" />
                    </div>
                    <div class="col-md-4">
                        <iframe title="Embedded map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9039.136229362803!2d106.89961163187726!3d-6.2457865662323915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f32c339cdd87%3A0x279ceb8fffbb3057!2sUniversitas%20Nusa%20Mandiri%20Jatiwaringin!5e0!3m2!1sid!2sid!4v1733124717326!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="false" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
        </section>

        {{-- section camps list --}}
        <section id="camps" class="camps">
            <h2 class="section-title fw-bold ">Pilihan Camping</h2>
            <div class="camp-item">
                <div class="row mb-4">
                    <div class="col-md-3">
                        <img alt="Tent for 4 people" class="img-fluid"
                            src="{{ asset('assets/img/camp3.png') }}">
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-9 info1">
                                <h4 class="title-item">
                                    Tenda Kapasitas 4 Orang
                                </h4>
                                <p>Fasilitas:</p>
                                <ul>
                                    <li>
                                        Matras 2 bed
                                    </li>
                                    <li>
                                        Toilet Outside (Water Heater)
                                    </li>
                                    <li>
                                        Termasuk Sarapan (4 pax)
                                    </li>
                                    <li>
                                        Bonfire
                                    </li>
                                    <li>
                                        Gratis Tiket Masuk Wahana Sekitar Camping
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 info2">
                                <p>
                                    <strong class="price">IDR 105.000</strong>
                                </p>
                                <h5>1 camp, 1 malam</h5>
                                <h4 class="my-4">Harga Termasuk Pajak</h4>
                                <button class="btn btn-primary">Booking</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="camp-item">
                <div class="row mb-4">
                    <div class="col-md-3">
                        <img alt="Tent for 4 people" class="img-fluid"
                            src="{{ asset('assets/img/camp3.png') }}">
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-9 info1">
                                <h4 class="title-item">
                                    Tenda Kapasitas 4 Orang
                                </h4>
                                <p>Fasilitas:</p>
                                <ul>
                                    <li>
                                        Matras 2 bed
                                    </li>
                                    <li>
                                        Toilet Outside (Water Heater)
                                    </li>
                                    <li>
                                        Termasuk Sarapan (4 pax)
                                    </li>
                                    <li>
                                        Bonfire
                                    </li>
                                    <li>
                                        Gratis Tiket Masuk Wahana Sekitar Camping
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 info2">
                                <p>
                                    <strong class="price">IDR 105.000</strong>
                                </p>
                                <h5>1 camp, 1 malam</h5>
                                <h4 class="my-4">Harga Termasuk Pajak</h4>
                                <button class="btn btn-primary">Booking</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="camp-item">
                <div class="row mb-4">
                    <div class="col-md-3">
                        <img alt="Tent for 4 people" class="img-fluid"
                            src="{{ asset('assets/img/camp3.png') }}">
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-9 info1">
                                <h4 class="title-item">
                                    Tenda Kapasitas 4 Orang
                                </h4>
                                <p>Fasilitas:</p>
                                <ul>
                                    <li>
                                        Matras 2 bed
                                    </li>
                                    <li>
                                        Toilet Outside (Water Heater)
                                    </li>
                                    <li>
                                        Termasuk Sarapan (4 pax)
                                    </li>
                                    <li>
                                        Bonfire
                                    </li>
                                    <li>
                                        Gratis Tiket Masuk Wahana Sekitar Camping
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3 info2">
                                <p>
                                    <strong class="price">IDR 105.000</strong>
                                </p>
                                <h5>1 camp, 1 malam</h5>
                                <h4 class="my-4">Harga Termasuk Pajak</h4>
                                <button class="btn btn-primary">Booking</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- section recomendation --}}
        <section id="recomendation" class="recomendation">
            <h2 class="section-title fw-bold text-center">Refrence Camp</h2>
            <div class="row justify-content-between">
                <div class="col-md-2">
                    <img alt="Recommended camp 1" class="img-fluid" src="{{ asset('assets/img/camp1.png') }}" />
                </div>
                <div class="col-md-2">
                    <img alt="Recommended camp 2" class="img-fluid" src="{{ asset('assets/img/camp2.png') }}" />
                </div>
                <div class="col-md-2">
                    <img alt="Recommended camp 3" class="img-fluid" src="{{ asset('assets/img/camp3.png') }}" />
                </div>
                <div class="col-md-2">
                    <img alt="Recommended camp 4" class="img-fluid" src="{{ asset('assets/img/camp4.png') }}" />
                </div>
                <div class="col-md-2">
                    <img alt="Recommended camp 5" class="img-fluid" src="{{ asset('assets/img/camp5.png') }}" />
                </div>
            </div>
    </div>
    </section>
@endsection
