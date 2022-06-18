<!DOCTYPE html>
<html>

<head>
    <title>Laporan Absensi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <center>
        <h5>Laporan Absensi SMP Negeri 5 Bengkulu Tengah</h4>
            <h6>Jl. Raya Bengkulu Kepahiang KM. 24, Taba Mutung, Kec. Karang Tinggi, Kab. Bengkulu Tengah Prov. Bengkulu
        </h5>
    </center>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <tr>
                @foreach ($absensis as $key => $absensi)
                    <td>{{ $i++ }}</td>
                    <td>{{ $absensi->tgl }}</td>
                    <td>{{ $absensi->nama }}</td>
                    <td>{{ $absensi->kelas }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
