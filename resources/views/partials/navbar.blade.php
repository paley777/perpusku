<nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient fixed-top">
    <div class="container-fluid">
        <a href="/" class="navbar-brand">
            <img src="{{ asset('storage/images/logo1.png') }}" height="50" alt="PerpusKu">
        </a>
        <a class="navbar-brand" href="/">PerpusKu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'index' ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'databuku' ? 'active' : '' }}" href="/databuku">Data Buku</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ $active === 'dataanggota' ? 'active' : '' }}" href="/dataanggota">Data
                        Anggota</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">Tentang Kami</a>
                </li>
            </ul>
            @if ($active === 'login')
                <a class="btn btn-outline-light me-3" href="/">Kembali</a>
            @else
                <a class="btn btn-outline-light me-3" href="/login"><i class="bi bi-box-arrow-in-right"></i> Masuk</a>
            @endif


        </div>
    </div>
</nav>
