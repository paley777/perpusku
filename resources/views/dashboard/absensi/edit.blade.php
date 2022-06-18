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
    <h2 class="mt-3 mb-4">Edit Absensi</h2>
    <span>Apabila data tidak tersedia, masukan strip ( - ) untuk setiap kolom.</span>
    <form method="post" action="/dashboard/absensi/{{ $absensi->id }}" class="row mt-3 g-3">
        @method('put')
        @csrf
        <div class="col-md-4">
            <label for="inputEmail3" class="form-label">ID</label>
            <input type="text" class="form-control" name="id" value="{{ old('id', $absensi->id) }}"
                placeholder="Masukkan Nama Siswa." required readonly>
        </div>
        <div class="col-md-4">
            <label for="inputEmail3" class="form-label">Tanggal Absensi</label>
            <input type="date" class="form-control" name="tgl" value="{{ old('tgl', $absensi->tgl) }}">
        </div>
        <div class="col-md-4">
            <label for="inputEmail3" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" value="{{ old('nama', $absensi->nama) }}"
                placeholder="Masukkan Nama Siswa." autofocus required>
        </div>
        <div class="col-md-4">
            <label for="inputEmail3" class="form-label">Kelas</label>
            <input type="text" class="form-control" name="kelas" value="{{ old('kelas', $absensi->kelas) }}"
                placeholder="Masukkan Kelas Siswa." autofocus required>
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data Absensi</button>
    </form>
@endsection
