@extends('layout/main')
@section('isi')
<!--Navbar Start-->
<div class="header-navbar">
    <nav class="nav container-navbar">
        <div class="nav__data">
            <a href="#" class="nav__logo">
                <img src="{{ asset('assets/image/logo.png')}}" alt=""> BEM KM FASILKOM UNSRI
            </a>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__burger"></i>
                <i class="ri-close-line nav__close"></i>
            </div>
        </div>

        <!--=============== NAV MENU ===============-->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li><a href="/" class="nav__link">Beranda</a></li>

                <li><a href="/about" class="nav__link">Tentang Kami</a></li>

                <li><a href="/profile" class="nav__link">Profil</a></li>

                <!--=============== DROPDOWN 2 ===============-->
                <li class="dropdown__item">
                    <div class="nav__link">
                        BEM Apps <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <ul class="dropdown__menu">
                        <li>
                            <a href="/berita" class="dropdown__link active">
                                <i class="ri-user-line"></i> Pojok Berita
                            </a>
                        </li>

                        <li>
                            <a href="/majalah" class="dropdown__link">
                                <i class="ri-lock-line"></i> E-Magazine
                            </a>
                        </li>

                        <li>
                            <a href="https://gaspol.bemilkomunsri.org" class="dropdown__link">
                                <i class="ri-code-line"></i> GASPOL
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown__link">
                                <i class="ri-code-line"></i> Fasilkom Learning Connection
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown__link">
                                <i class="ri-message-3-line"></i> Ilkom News
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown__link">
                                <i class="ri-message-3-line"></i> BEM Shortlink
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!--Navbar End-->

<!--Slide Start-->
<section class="slider">
    <div class="owl-carousel owl-theme" style="padding-top: 80px">
        <div class="item" data-merge="3">
            <div class="hero-berita2">
                <div class="berita-title">
                    <h3>Upgrading Staff BEM 2023</h3>
                    <p>12 Maret 2023</p>
                </div>
            </div>
        </div>
        <div class="item" data-merge="3">
            <div class="hero-berita2">
                <div class="berita-title">
                    <h3>Upgrading Staff BEM 2023</h3>
                    <p>32 Maret 2080, 10.00 </p>
                </div>
            </div>
        </div>
        <div class="item" data-merge="3">
            <div class="hero-berita2">
                <div class="berita-title">
                    <h3>Upgrading Staff BEM 2023</h3>
                    <p>32 Maret 2080, 10.00 </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Slide End-->

<!--listberita start-->
<section class="listberita">
    <div class="ornament">
        <img loading="lazy" class="ornament1" src="assets/image/ornament5.png" alt="">
        <img loading="lazy" class="ornament2" src="assets/image/Ornament6.png" alt="">
    </div>
    <div class="container listberita-wrapper">
        <div class="title-list">
            <h2>Pojok Berita</h2>
            <div class="bar"></div>
        </div>
        @if ($nilai_berita->isEmpty())
        <div class="warning" role="alert">
            data Link tidak ditemukan
        </div>
        @else
        @foreach ($nilai_berita as $item)
        <div class="mainberita">
            <div class="date">
                <h3>{{ date('M', strtotime($item->date)) }}</h3>
                <h1>{{ date('d', strtotime($item->date)) }}</h1>
            </div>
            <div class="image-berita">
                <img loading="lazy" src="image-berita/{{ $item->imageberita }}" alt="">
            </div>
            <div class="detail-berita">
                <h3>{{ $item->judulberita }}</h3>
                <p class="lokasi">At : {{ $item->lokasi }}</p>
                <p class="isi-berita">{{ Str::limit($item->isiberita, 200, '...') }}</p>
                <a href="/berita/isiberita/{{ $item->id }}">Read More</a>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</section>
<!--listberita end-->

<footer>
    <div class="container footer-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="row1">
            <div class="logo">
                <img loading="lazy" src="assets/image/logo.png" alt="">
                <div class="logo-detail">
                    <h3>BEM KM FASILKOM UNSRI</h3>
                    <p>#Kabinet Cakra Baswara</p>
                </div>
            </div>
            <div class="footer-detail">
                <h3>Kesekretariatan</h3>
                <p>Gedung Fakultas Ilmu Komputer Kampus Unsri Indralaya km 33</p>
                <h3>Contact Us :</h3>
                <p>@bemilkomunsri(Line)</p>
            </div>
            <div class="footer-media">
                <h3>Follow for more</h3>
                <div class="logo-media">
                    <a href="https://www.facebook.com/bemilkomunsri"><i class='bx bxl-facebook-square'></i></a>
                    <a href="https://www.linkedin.com/company/bemkmfasilkomunsri/mycompany/"><i class='bx bxl-linkedin-square'></i></a>
                    <a href="https://www.instagram.com/bemilkomunsri/"><i class='bx bxl-instagram'></i></a>
                    <a href=""><img src="assets/image/LINE_logo.svg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="row2">
            <h2>© BEM KM FASILKOM UNSRI 2023 | Kabinet Cakra Baswara</h2>
        </div>
    </div>
</footer>
@endsection