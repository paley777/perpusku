<!DOCTYPE html>
<html>

<head>
    <title>Laporan Transaksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <center>
        <h5>Laporan Transaksi SMP Negeri 5 Bengkulu Tengah</h4>
            <h6>Jl. Raya Bengkulu Kepahiang KM. 24, Taba Mutung, Kec. Karang Tinggi, Kab. Bengkulu Tengah Prov. Bengkulu
        </h5>
    </center>

    <br>
    <center>Tabel Peminjaman Buku</center>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Nama Buku yang Dipinjam</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($borrows as $key => $borrow)
                    <td>{{ $borrows->firstItem() + $key }}</td>
                    <td>{{ $borrow->tgl }}</td>
                    <td>{{ $borrow->nama }}</td>
                    <td>{{ $borrow->kelas }}</td>
                    <td>{{ $borrow->pinjam }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <center>Tabel Pengembalian Buku</center>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Nama Buku yang Dikembalikan</th>
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
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
