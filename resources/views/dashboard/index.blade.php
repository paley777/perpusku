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

    <style>
        .card {
            box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transformcubic-bezier(.155, 1.105, .295, 1.12);
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }

    </style>

    @if (session()->has('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong> Silakan cek beragam fitur di sebelah kiri layar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h2 class="mt-3">Dashboard</h2>
    <div class="card">
        <div class="card-header">
            Summary
        </div>
        <div class="card-body">
            <div class="row text-center">
                <div class="col">
                    <div class="h-80 card bg-c-blue order-card">
                        <div class="card-block">
                            <h6 class="m-b-20">Data Buku</h6>
                            <h2 class="text-right"><span data-feather="book-open" class="align-text-bottom"></span>
                                <span class="count1" data-from="0" data-to="{{ $countbook }}"
                                    data-time="2000">0</span>
                            </h2>
                            <p class="m-b-0">Jumlah Buku Terdata</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col">
                    <div class="h-80 card bg-c-blue order-card">
                        <div class="card-block">
                            <h6 class="m-b-20">Data Anggota</h6>
                            <h2 class="text-right"><span data-feather="users" class="align-text-bottom"></span> <span
                                    class="count3" data-from="0" data-to="{{ $countmember }}"
                                    data-time="1500">0</span>
                            </h2>
                            <p class="m-b-0">Anggota Terdata</p>
                        </div>
                    </div>
                </div> --}}
                <div class="col">
                    <div class="h-80 card bg-c-blue order-card">
                        <div class="card-block">
                            <h6 class="m-b-20">Data Petugas</h6>
                            <h2 class="text-right"><span data-feather="user-check" class="align-text-bottom"></span>
                                <span class="count2" data-from="0" data-to="{{ $countuser }}"
                                    data-time="500">0</span>
                            </h2>
                            <p class="m-b-0">Petugas Terdata</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <div class="h-80 card bg-c-blue order-card">
                        <div class="card-block">
                            <h6 class="m-b-20">Absensi</h6>
                            <h2 class="text-right"><span data-feather="trending-up" class="align-text-bottom"></span>
                                <span class="count3" data-from="0" data-to="{{ $countabsensi }}"
                                    data-time="500">0</span>
                            </h2>
                            <p class="m-b-0">Pengunjung</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="h-80 card bg-c-blue order-card">
                        <div class="card-block">
                            <h6 class="m-b-20">Peminjaman</h6>
                            <h2 class="text-right"><span data-feather="hash" class="align-text-bottom"></span>
                                <span class="count4" data-from="0" data-to="{{ $countborrow }}"
                                    data-time="500">0</span>
                            </h2>
                            <p class="m-b-0">Peminjaman</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="h-80 card bg-c-blue order-card">
                        <div class="card-block">
                            <h6 class="m-b-20">Pengembalian</h6>
                            <h2 class="text-right"><span data-feather="hash" class="align-text-bottom"></span>
                                <span class="count6" data-from="0" data-to="{{ $countkembali }}"
                                    data-time="500">0</span>
                            </h2>
                            <p class="m-b-0">Pengembalian</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function($) {
            $.fn.counter = function() {
                const $this = $(this),
                    numberFrom = parseInt($this.attr('data-from')),
                    numberTo = parseInt($this.attr('data-to')),
                    delta = numberTo - numberFrom,
                    deltaPositive = delta > 0 ? 1 : 0,
                    time = parseInt($this.attr('data-time')),
                    changeTime = 10;

                let currentNumber = numberFrom,
                    value = delta * changeTime / time;
                var interval1;
                const changeNumber = () => {
                    currentNumber += value;
                    //checks if currentNumber reached numberTo
                    (deltaPositive && currentNumber >= numberTo) || (!deltaPositive && currentNumber <=
                        numberTo) ? currentNumber = numberTo: currentNumber;
                    this.text(parseInt(currentNumber));
                    currentNumber == numberTo ? clearInterval(interval1) : currentNumber;
                }

                interval1 = setInterval(changeNumber, changeTime);
            }
        }(jQuery));

        $(document).ready(function() {

            $('.count-up').counter();
            $('.count1').counter();
            $('.count2').counter();
            $('.count3').counter();
            $('.count4').counter();
            $('.count6').counter();

            new WOW().init();

            setTimeout(function() {
                $('.count5').counter();
            }, 3000);
        });
    </script>
@endsection
