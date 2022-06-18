@extends('layouts.main')

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
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <div class="h-80 card bg-c-blue order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Tentang Kami</h6>
                        <h2 class="text-right"><i class="bi bi-geo-alt"></i> Perpustakaan SMP Negeri 5 Bengkulu Tengah
                            </h5>
                            <p class="card-text"> Jl. Raya Bengkulu Kepahiang KM. 24, Taba Mutung, Kec. Karang Tinggi,
                                Kab. Bengkulu
                                Tengah Prov. Bengkulu</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-3">
        <div class="row">
            <div class="col">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.2611015723473!2d102.41348581467545!3d-3.75322879726943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e36b6152f0ac5d3%3A0xdd4c71b600686ba2!2sSMP%20Negeri%205%20Bengkulu%20Tengah!5e0!3m2!1sid!2sid!4v1652287826287!5m2!1sid!2sid"
                    width="600" height="485" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col">
                <div class="card border-primary mb-3 mt-0">
                    <div class="card-header">Struktur Perpustakaan SMP Negeri 5 Bengkulu Tengah</div>
                    <div class="row">
                        <div class="col text-center">
                            <div class="card-body text-primary">
                                <h4 class="card-title">Kepala Sekolah</h4>
                                <h5 class="card-text">Syamsu, S.Pd</h5>
                                <span class="card-text">NIP. 196604121992031006</span>
                            </div>
                            <div class="card-body text-primary">
                                <h4 class="card-title">Kepala Perpustakaan</h4>
                                <h5 class="card-text">Erpa Hertati, S.Pd</h5>
                                <span class="card-text">NIP. 197904152008012012</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <div class="card-body text-primary">
                                <h4 class="card-title">Sirkulasi</h4>
                                <h5 class="card-text">Oktavia Fransiska, S.Pd</h5>
                                <h5 class="card-text">Esprita Septhyani, S.Pd</h5>
                            </div>
                        </div>
                        <div class="col text-center">
                            <div class="card-body text-primary">
                                <h4 class="card-title">Layanan</h4>
                                <h5 class="card-text">Ida Nengsi, S.IP</h5>
                                <h5 class="card-text">Rina Permatasari, S.Pd</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <div class="card-body text-primary">
                                <h4 class="card-title">Siswa</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="h-80 card bg-c-blue order-card">
                    <div class="card-block">
                        <h2 class=" text-center">VISI
                        </h2>
                        <p class="card-text  text-center">Terwujudnya perpustakaan yang representatif sebagai penyedia
                            informasi,
                            ilmu pengetahuan dan meningkatkan fungsi perpustakaan sebagai sumber belajar secara optimal.</p>
                    </div>
                    <div class="card-block">
                        <h2 class=" text-center">MISI
                        </h2>
                        <p class="card-text">1. Memberikan layanan yang ramah, tegas dan tertib.</p>
                        <p class="card-text">2. Mengembalikan perpustakaan sebagai jantungnya pendidikan di sekolah.
                        </p>
                        <p class="card-text">3. Menunjang aktivitas siswa dalam proses pembentukan ahlakul karimah.</p>
                        <p class="card-text">4. Melestarikan bahan pustaka.</p>
                        <p class="card-text">5. Meningkatkan minat baca warga sekolah.</p>
                        <p class="card-text">6. Mendidik siswa agar memelihara dan memanfaatkan bahan ajar secara tepat
                            guna.</p>
                        <p class="card-text">7. Meningkatkan kualitas dan kuantitas koleksi buku bacaan dan referensi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="h-80 card bg-c-blue order-card">
                    <div class="card-block">
                        <h2 class="text-center">TATA TERTIB
                        </h2>
                        <span>Dalam Ruang Perpustakaan</span>
                        <p class="card-text">1. Setiap pengunjung diwajibkan mengisi absen pengunjung.</p>
                        <p class="card-text">2. Tas, jaket, dll ditaruh di rak yang telah disediakan.
                        </p>
                        <p class="card-text">3. Pengunjung dilarang membawa makanan dan minuman.</p>
                        <p class="card-text">4. Pengunjung dilarang menimbulkan suara gaduh/bising yang mengganggu
                            pengunjung lain.</p>
                        <p class="card-text">5. Pengunjung dilarang merusak buku (merobek, melipat, mencoret atau
                            mengotori bahan pustaka).</p>
                        <p class="card-text">6. Buku yang sudah dibaca dikembalikan lagi ke tempat semula.</p>
                        <p class="card-text">7. Pengunjung dilarang memindahkan mebel (meja/kursi) dari tempatnya.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="h-80 card bg-c-blue order-card">
                    <div class="card-block">
                        <h2 class="text-center">SYARAT
                        </h2>
                        <span>Persyaratan Anggota</span>
                        <p class="card-text">1. Anggota perpustakaan adalah warga sekolah yang terdiri dari kepala
                            sekolah, guru, staf TU, dan siswa-siswi SMP Negeri 5 Bengkulu Tengah.</p>
                        <p class="card-text">2. Keanggotaan berlaku selama masih aktif bertugas dan belajar di SMP
                            Negeri 5 Bengkulu Tengah.
                        </p>
                        <p class="card-text">3. Setiap anggota harus memiliki kartu anggota yang digunakan dalam proses
                            peminjaman bahan pustaka.</p>
                        <p class="card-text">4. Setiap anggota perpustakaan harus menaati segala peraturan yang ada.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="h-80 card bg-c-blue order-card">
                    <div class="card-block">
                        <span>Syarat Peminjaman Buku</span>
                        <p class="card-text">1. Setiap anggota harus menyertakan kartu anggota perpustakaan pada saat
                            meminjam atau mengembalikan bahan pustaka.</p>
                        <p class="card-text">2. Peminjaman harus dilakukan dengan jadwal yang ada.
                        </p>
                        <p class="card-text">3. Peminjam harus datang sendiri pada proses peminjaman.</p>
                        <p class="card-text">4. Jumlah buku yang boleh dipinjam maksimal 3 buku.
                        </p>
                        <p class="card-text">5. Semua buku boleh dipinjam kecuali koleksi referensi (Kamus,
                            Ensiklopedia, dll).</p>
                        <p class="card-text">6. Jangka waktu peminjaman maksimal 1 minggu.</p>
                        <p class="card-text">7. Keterlambatan pengembalian buku akan dikenakan denda sebesar Rp. 500,-
                            /hari.</p>
                        <p class="card-text">8. Dilarang menyampul buku menggunakan kertas kado, kertas kacang, lem
                            atau necis yang dapat merusak buku.</p>
                        <p class="card-text">9. Apabila buku yang dipinjam rusak atau hilang, wajib diganti dengan buku
                            yang sama.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
