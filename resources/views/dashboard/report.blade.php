@extends('dashboard.layouts.main')

@section('container')
    <style>
        body {
            margin-top: 80px;
            background: #FAFAFA;
        }

        .order-card {
            color: #fff;
        }

        .bg-c-blue {
            background: linear-gradient(45deg, #4099ff, #73b4ff);
        }

        .bg-c-green {
            background: linear-gradient(45deg, #2ed8b6, #59e0c5);
        }

        .bg-c-yellow {
            background: linear-gradient(45deg, #FFB64D, #ffcb80);
        }

        .bg-c-pink {
            background: linear-gradient(45deg, #FF5370, #ff869a);
        }


        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
            box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
            border: none;
            margin-bottom: 30px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .card .card-block {
            padding: 25px;
        }

        .order-card i {
            font-size: 26px;
        }

        .f-left {
            float: left;
        }

        .f-right {
            float: right;
        }

    </style>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <div class="card bg-c-blue order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Laporan</h6>
                        <h2 class="text-right"><span data-feather="book-open" class="align-text-bottom"></span>
                            5</span></h2>
                        <p class="m-b-0">Tabel Laporan</p>
                        <a href="/cetak/book" class="btn btn-light" target="_blank">Cetak Laporan Buku</a>
                        <a href="/cetak/user" class="btn btn-light" target="_blank">Cetak Laporan Petugas</a>
                        <a href="/cetak/absensi" class="btn btn-light" target="_blank">Cetak Laporan Absensi</a>
                        <a href="/cetak/transaksi" class="btn btn-light" target="_blank">Cetak Laporan Transaksi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
