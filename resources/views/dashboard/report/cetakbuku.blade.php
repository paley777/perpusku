<!DOCTYPE html>
<html>

<head>
    <title>Laporan Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <center>
        <h5>Laporan Buku SMP Negeri 5 Bengkulu Tengah</h4>
            <h6>Jl. Raya Bengkulu Kepahiang KM. 24, Taba Mutung, Kec. Karang Tinggi, Kab. Bengkulu Tengah Prov. Bengkulu
        </h5>
    </center>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">No. Judul</th>
                <th scope="col">No. Eksemplar</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Edisi</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Asal</th>
                <th scope="col">Ket</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            <tr>
                @foreach ($books as $p)
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->tgl }}</td>
                    <td>{{ $p->no_judul }}</td>
                    <td>{{ $p->no_eks }}</td>
                    <td>{{ $p->judul }}</td>
                    <td>{{ $p->pengarang }}</td>
                    <td>{{ $p->edisi }}</td>
                    <td>{{ $p->penerbit }}</td>
                    <td>{{ $p->tahun_terbit }}</td>
                    <td>{{ $p->asal }}</td>
                    <td>{{ $p->keterangan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
