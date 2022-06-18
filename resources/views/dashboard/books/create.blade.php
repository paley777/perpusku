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
    <h2 class="mt-3 mb-4">Tambah Buku</h2>
    <span>Apabila data tidak tersedia, masukan strip ( - ) untuk setiap kolom.</span>
    <form method="post" action="/dashboard/books" class="row mt-3 g-3">
        @csrf
        <div class="col-md-4">
            <label for="inputEmail3" class="form-label">Tanggal Masuk</label>
            <input type="date" class="form-control" name="tgl" value="<?php echo date('Y-m-d'); ?>">
        </div>
        <div class="col-md-4">
            <label for="inputEmail3" class="form-label">Nomor Induk Judul</label>
            <input type="text" class="form-control" placeholder="Contoh : 0003" name="no_judul" value="" autofocus required>
        </div>
        <div class="col-md-4">
            <label for="inputEmail3" class="form-label">Nomor Induk Eksemplar</label>
            <input type="text" class="form-control" name="no_eks" placeholder="Contoh : 357" value="" required>
        </div>
        <div class="col-md-8">
            <label for="inputEmail3" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Buku" value="" required>
        </div>
        <div class="col-md-4">
            <label for="inputEmail3" class="form-label">Edisi/Cetakan</label>
            <input type="text" class="form-control" name="edisi" placeholder="Contoh : Cetakan Ke-1" value="" required>
        </div>
        <div class="col-md-4">
            <label for="inputEmail3" class="form-label">Pengarang</label>
            <input type="text" class="form-control" name="pengarang" placeholder="Masukkan Nama Pengarang" value="" required>
        </div>
        <div class="col-md-4">
            <label for="inputEmail3" class="form-label">Penerbit</label>
            <input type="text" class="form-control" name="penerbit" placeholder="Masukkan Nama Penerbit" value="" required>
        </div>
        <div class="col-md-2">
            <label for="inputEmail3" class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" name="tahun_terbit" placeholder="Masukkan Tahun Terbit" value="" required>
        </div>
        <div class="col-md-2">
            <label for="inputEmail3" class="form-label">Asal Buku</label>
            <input type="text" class="form-control" name="asal" placeholder="Contoh : BOS/APBD" value="" required>
        </div>
        <div class="col-md-6">
            <label for="inputEmail3" class="form-label">Keterangan</label>
            <input class="form-check-input" type="radio" name="keterangan" value="Baik" checked>
            <label class="form-check-label">
                Baik
            </label>

            <input class="form-check-input" type="radio" value="Buruk" name="keterangan">
            <label class="form-check-label">
                Buruk
            </label>

        </div>

        <button type="submit" class="btn btn-primary">Tambahkan Buku</button>
    </form>
@endsection
