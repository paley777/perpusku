<nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient fixed-top">
    <div class="container-fluid">
        <a href="/dashboard" class="navbar-brand">
            <img src="{{ asset('storage/images/logo1.png') }}" height="50" alt="PerpusKu">
        </a>
        <a class="navbar-brand" href="/dashboard">PerpusKu | Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Hai, {{ auth()->user()->nama }}
                </button>
                <ul class="dropdown-menu">
                    <form action="/logout" method="post">
                        @csrf
                        <li><button type="submit" class="dropdown-item">
                                Keluar
                            </button></li>
                    </form>
                </ul>
            </div>


        </div>
    </div>
</nav>
