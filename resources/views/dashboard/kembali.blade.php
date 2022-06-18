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
                        <h6 class="m-b-20">Pengembalian Buku</h6>
                        <h2 class="text-right"><span data-feather="book-open" class="align-text-bottom"></span>
                            {{ $count }}</span></h2>
                        <p class="m-b-0">Pengembalian Terdata</p>
                        <a href="/dashboard/kembalis/create" class="btn btn-light">Tambah Transaksi</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-1">
            <div class="row">
                <div class="col">
                    <div>
                        <p>Cari berdasarkan Nama</p>
                    </div>
                </div>
            </div>
            <form action="/dashboard/borrows">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Nama Buku yang Dikembalikan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($kembalis as $key => $kembali)
                        <td>{{ $kembalis->firstItem() + $key }}</td>
                        <td>{{ $kembali->tgl }}</td>
                        <td>{{ $kembali->nama }}</td>
                        <td>{{ $kembali->kelas }}</td>
                        <td>{{ $kembali->kembali }}</td>
                        <td>
                            <a href="/dashboard/kembalis/{{ $kembali->id }}/edit"
                                class="badge bg-warning border-0">Edit</a>
                            <form action="/dashboard/kembalis/{{ $kembali->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Konfirmasi Penghapusan Data')">Hapus</button>
                            </form>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $kembalis->links() }} </div>
    </div>
@endsection
