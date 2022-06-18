<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="icon" type="image/png" href="{{ asset('storage/images/logo1.png') }}" />

    <title>PerpusKu | Sistem Informasi Perpustakaan</title>
</head>

<body class="bg-light bg-gradient">

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif !important;
        }

        .carousel-item {
            height: 100vh;
            min-height: 350px;
            width: 100%;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }

        .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }

    </style>
    <div class="preloader">
        <div class="loading">
            <div class="spinner-border text-primary" role="status">
            </div>
        </div>
    </div>
    @include('partials.navbar')
    <div id="scrollspyHeading1">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

</body>

@include('partials.footer')
<script>
    $(document).ready(function() {
        $(".preloader").fadeOut("slow");
    });
</script>
<script src="https://unpkg.com/@popperjs/core@2"></script>

</html>
