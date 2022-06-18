<!DOCTYPE html>
<html>

<head>
    <title>Laporan Petugas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <center>
        <h5>Laporan Petugas SMP Negeri 5 Bengkulu Tengah</h4>
            <h6>Jl. Raya Bengkulu Kepahiang KM. 24, Taba Mutung, Kec. Karang Tinggi, Kab. Bengkulu Tengah Prov. Bengkulu
        </h5>
    </center>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NIP</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Username</th>
                <th scope="col">E-mail</th>
                <th scope="col">Jabatan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <tr>
                @foreach ($users as $key => $user)
                    <td>{{ $i++ }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->nip }}</td>
                    <td>{{ $user->tgl_lahir }}</td>
                    <td>{{ $user->jenis_kel }}</td>
                    <td>{{ $user->alamat }}</td>
                    <td>{{ $user->no_tlp }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->jabatan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
