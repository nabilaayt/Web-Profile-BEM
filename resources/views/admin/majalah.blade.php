@extends('Layout/adminmain')
@section('konten')
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/image/logo.png') }}" alt="">
                <span class="d-none d-lg-block">BEMILKOM UNSRI</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="{{ asset('assetsmain/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Session('username') }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ Session('username') }}</h6>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="/admin/main">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link" href="/admin/e-majalah">
                    <i class="bi bi-menu-button-wide"></i><span>E-Magazine</span><i></i>
                </a>
            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" href="/admin/berita">
                    <i class="bi bi-journal-text"></i><span>Pojok Berita</span><i></i>
                </a>
            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" href="/admin/birokrasi">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Birokrasi Terkini</span><i></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" href="/admin/ilkomnews">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Ilkom news</span><i></i>
                </a>
            </li>
            <!-- End Tables Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Form E - Magazine</h1>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Inpu Data E - Magazine</h5>

                            <!-- Horizontal Form -->
                            <form action="/admin/e-majalah/store" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="judul" class="col-sm-2 col-form-label">Judul Majalah</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="judul" id="judul"
                                            placeholder="Title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tema" class="col-sm-2 col-form-label">Tema</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tema" id="tema"
                                            placeholder="Theme">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="launching-date" class="col-sm-2 col-form-label">Launching</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="launching-date"
                                            id="launching-date">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="foto" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="foto" id="foto">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10 offset-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1" required>
                                            <label class="form-check-label" for="gridCheck1">
                                                Correct
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- End Horizontal Form -->
                            <br>
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
            </div>
        </section>

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assetsmain/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assetsmain/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetsmain/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assetsmain/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assetsmain/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assetsmain/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assetsmain/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assetsmain/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assetsmain/js/main.js') }}"></script>
@endsection
