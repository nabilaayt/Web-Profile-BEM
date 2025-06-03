@extends('Layout/adminmain')
@section('konten')
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('assets/image/logo.png') }}" alt="">
                                    <span class="d-none d-lg-block">BEMILKOM UNSRI</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your username & password to login</p>
                                    </div>

                                    <form class="row g-3 needs-validation" action="/admin" method="POST">
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="email" class="form-control" id="email"
                                                    required>
                                                <div class="invalid-feedback">Please enter your username.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('assetsmain/vendor/apexc') }}harts/apexcharts.min.js"></script>
    <script src="{{ asset('assetsmain/vendor/boots') }}trap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assetsmain/vendor/chart') }}.js/chart.umd.js"></script>
    <script src="{{ asset('assetsmain/vendor/echar') }}ts/echarts.min.js"></script>
    <script src="{{ asset('assetsmain/vendor/quill') }}/quill.min.js"></script>
    <script src="{{ asset('assetsmain/vendor/simpl') }}e-datatables/simple-datatables.js"></script>
    <script src="{{ asset('assetsmain/vendor/tinym') }}ce/tinymce.min.js"></script>
    <script src="{{ asset('assetsmain/vendor/php-e') }}mail-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assetsmain/js/main.js') }}"></script>
@endsection
