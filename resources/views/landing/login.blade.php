@extends('layouts.main')

@section('container')
    <!-- Section: Design Block -->
    <section class="">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start">
            <div class="container py-5">
                <div class="row gx-lg-5 align-items-center py-5">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <h1 class="my-3 display-3 fw-bold ls-tight">
                            Anda Admin? <br />
                            <span class="text-primary">Masuk disini.</span>
                        </h1>
                        <p style="color: hsl(217, 10%, 50.8%)">
                            Sistem informasi perpustakaan terintegrasi secara digital, beragam fitur yang memudahkan.
                        </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-body py-5 px-md-5">
                                <form action="/login" method="post">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" name="email" autofocus required
                                            value="{{ old('email') }}">
                                        <label for="floatingInput">Email</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" class="form-control" name="password" required>
                                        <label for="floatingPassword">Kata Sandi</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block mb-4 mt-4">
                                        Masuk
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
@endsection
