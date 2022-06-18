@extends('layouts.main')

@section('container')
    <style>
        .carousel-item {
            height: 100vh;
            min-height: 350px;
            width: 100%;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;


        }

    </style>
    <style>
        .card {
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transformcubic-bezier(.155, 1.105, .295, 1.12);
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }

    </style>
    <header>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active"
                    style="background-image: url({{ asset('storage/images/carousel1.jpg') }}); filter: brightness(75%);">
                </div>
                <div class="carousel-caption">
                    <h5>Selamat Datang di PerpusKu</h5>
                    <p>Sistem Informasi Perpustakaan SMP Negeri 5 Bengkulu tengah.</p>
                </div>
                <div class="carousel-item"
                    style="background-image: url({{ asset('storage/images/carousel2.jpg') }}); filter: brightness(100%);">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <section id="gallery">
        <div class="container py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/images/landing1.jpg') }}" alt="" class="card-img-top"
                            style=" height: 200px; width:auto; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Data Buku</h5>
                            <p class="card-text">Klik tombol di bawah ini untuk masuk ke dalam laman data buku dengan
                                hampir <mark>100 buku terdata.</mark></p>
                            <a href="/databuku" class="btn btn-outline-success btn-sm">Data Buku</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/images/landing2.jpg') }}" alt="" class="card-img-top"
                            style=" height: 200px; width:auto; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Data Anggota</h5>
                            <p class="card-text">Klik tombol di bawah ini untuk masuk ke dalam laman data buku dengan
                                hampir <mark>500 siswa terdata.</mark></p>
                            <a href="/dataanggota" class="btn btn-outline-success btn-sm">Data Anggota</a>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/images/logo1.png') }}" alt="" class="card-img-top"
                            style=" height: 200px; width:auto; object-fit: contain;">
                        <div class="card-body">
                            <h5 class="card-title">Tentang Kami</h5>
                            <p class="card-text">Klik tombol di bawah ini untuk masuk ke dalam laman Tentang Kami</p>
                            <a href="/about" class="btn btn-outline-success btn-sm">Tentang Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
