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
                <li><a href="/" class="nav__link active">Beranda</a></li>

                <li><a href="/about" class="nav__link">Tentang Kami</a></li>

                <li><a href="/profile" class="nav__link">Profil</a></li>

                <!--=============== DROPDOWN 2 ===============-->
                <li class="dropdown__item">
                    <div class="nav__link">
                        BEM Apps <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <ul class="dropdown__menu">
                        <li>
                            <a href="https://gaspol.bemilkomunsri.org" class="dropdown__link">
                                <i class="ri-code-line"></i> GASPOL
                            </a>
                        </li>
                        <li>
                            <a href="https://ilkomnews.bemilkomunsri.org/" class="dropdown__link">
                                <i class="ri-message-3-line"></i> Ilkom News
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!--Navbar End-->

<section class="isiberita">
    <div class="container isiberita-wrapper">
        <div class="content-left">
            <h3>Daftar Berita</h3>
            <div class="list-berita">
                <div class="bar"></div>
                <ul>
                    @foreach ($beritalist as $item)
                    <li><a href="/berita/isiberita/{{ $item->id }}">{{ $item->judulberita }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="content-right">
            <img loading="lazy" src="{{ asset('image-berita/' . $berita->imageberita) }}" alt="">
            <div class="text-berita">
                <h3>{{ $berita->judulberita }}</h3>
                <p>{{ $berita->isiberita }}</p>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container footer-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="row1">
            <div class="logo">
                <img loading="lazy" src="{{ asset('assets/image/logo.png') }}" alt="">
                <div class="logo-detail">
                    <h3>BEM KM FASILKOM UNSRI</h3>
                    <p>#Kabinet Artha Dharma</p>
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
                    <a href=""><img src="{{ asset('assets/image/LINE_logo.svg') }}" alt=""></a>
                </div>
            </div>
        </div>
        <div class="row2">
            <h2>© BEM KM FASILKOM UNSRI 2023 | Kabinet Artha Dharma</h2>
        </div>
    </div>
</footer>
@endsection