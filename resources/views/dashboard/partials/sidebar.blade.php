<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }
</style>
<style>
    /*
   * Sidebar
   */

    .sidebar {
        position: fixed;
        top: 1em;
        /* rtl:raw:
    right: 0;
    */
        bottom: 0;
        /* rtl:remove */
        left: 0;
        z-index: 100;
        /* Behind the navbar */
        padding: 48px 0 0;
        /* Height of navbar */
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    @media (max-width: 767.98px) {
        .sidebar {
            top: 5rem;
        }
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */
    }

    .sidebar .nav-link {
        font-weight: 500;
        color: #333;

    }

    .sidebar .nav-link .feather {
        margin-right: 4px;
        color: #727272;

    }

    .sidebar .nav-link.active {
        color: #2470dc;
    }

    .sidebar .nav-link:hover .feather,
    .sidebar .nav-link.active .feather {
        color: inherit;
    }

    .sidebar-heading {
        font-size: .75rem;
    }

    /*
   * Navbar
   */



    .form-control-dark {
        color: #fff;
        background-color: rgba(255, 255, 255, .1);
        border-color: rgba(255, 255, 255, .1);
    }

    .form-control-dark:focus {
        border-color: transparent;
        box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
    }
</style>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column" style="font-size: 16px">
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'dashboard' ? 'active' : '' }}" aria-current="page"
                            href="/dashboard">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'absensi' ? 'active' : '' }}" href="/dashboard/absensi">
                            <span data-feather="edit" class="align-text-bottom"></span>
                            Absensi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'report' ? 'active' : '' }}" href="/dashboard/report">
                            <span data-feather="file-text" class="align-text-bottom"></span>
                            Laporan
                        </a>
                    </li>
                </ul>
                <h6
                    class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                    <span>Olah Data</span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2 " style="font-size: 16px">
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#" style="font-size: 16px">
                            <span data-feather="database" class="align-text-bottom"></span>
                            Data Anggota
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'databuku' ? 'active' : '' }}" href="/dashboard/books">
                            <span data-feather="database" class="align-text-bottom"></span>
                            Data Buku
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'datapetugas' ? 'active' : '' }}" href="/dashboard/users">
                            <span data-feather="database" class="align-text-bottom"></span>
                            Data Petugas
                        </a>
                    </li>
                </ul>

                <h6
                    class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                    <span>Transaksi</span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item" style="font-size: 16px">
                        <a class="nav-link {{ $active === 'pinjam' ? 'active' : '' }}" href="/dashboard/borrows">
                            <span data-feather="hash" class="align-text-bottom"></span>
                            Peminjaman
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'kembali' ? 'active' : '' }}" href="/dashboard/kembalis">
                            <span data-feather="hash" class="align-text-bottom"></span>
                            Pengembalian
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
