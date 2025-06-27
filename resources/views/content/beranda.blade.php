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

<!--Header Start-->
<section class="header">
    <div class="container header-wrapper">
        <div class="content-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
            <h2 class="typescript">HI! <span id="typescript"></span></h2>
            <h3>BEM KM FASILKOM UNSRI 2025</h3>
            <h1>KABINET Artha Dharma</h1>
            <h2>#TumbuhBersamaWujudkanAsa</h2>
            <p>BEM KM Fasilkom Unsri adalah organisasi eksekutif mahasiswa yang mewadahi aspirasi, inovasi, dan aksi nyata.</p>
        </div>
        <div class="content-right">
            <img loading="lazy" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100" src="assets/image/logo.png" alt="">
        </div>
    </div>
</section>
<!--Header End-->

<!--Inti Start-->
<section class="subheader">
    <div class="container subheader-wrapper">
        <div class="content-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
            <h2>Lebih dekat dengan</h2>
            <h3>BEM KM FASILKOM UNSRI 2025</h3>
            <div class="btn">
                <p><a href="/profile">Selengkapnya</a></p>
            </div>
        </div>
        <div class="content-right">
            <img loading="lazy" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100" src="assets/image/BPH INTI.png" alt="">
        </div>
    </div>
</section>
<!--Inti End-->



<!--Birokrasi Start-->
<section class="birokrasi">
    <div class="container birokrasi-wrapper">
        <div class="content-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
            <div class="card">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="card-inner">
                    <img loading="lazy" src="assets/image/gambar-birokrasi.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="card-inner">
                    <img loading="lazy" src="assets/image/gambar-birokrasi.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="card-inner">
                    <img loading="lazy" src="assets/image/gambar-birokrasi.png" alt="">
                </div>
            </div>
        </div>
        <div class="content-right" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="50">
            <h2>BIROKRASI TERKINI</h2>
            <div class="bar"></div>
        </div>
    </div>
</section>
<!--Birokrasi End-->

<!--BEM Apps Start-->
<section class="bem-apps">
    <div class="container apps-wrapper" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
        <div class="row1">
            <h2>BEM APPS</h2>
            <div class="bar"></div>
        </div>
        <div class="row2">
            <div class="box">
                <h3>ILKOM NEWS</h3>
                <div class="title orange">
                </div>
            </div>
            <div class="box">
                <h3>GASPOL</h3>
                <div class="title green">
                </div>
            </div>

        </div>
    </div>
</section>
<!--BEM Apps End-->

<!--Kata Tokoh Start-->
<section class="kata-tokoh">
    <div class="container tokoh-wrapper" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
        <div class="row1">
            <h2>KATA TOKOH</h2>
            <div class="bar"></div>
        </div>
        <div class="row2">
            <div class="blog-slider">
                <div class="blog-slider__wrp swiper-wrapper">

                    <div class="blog-slider__item swiper-slide">
                        <div class="blog-slider__img">
                            <img src="assets/image/dico.svg" alt="">
                        </div>
                        <div class="blog-slider__content">
                            <div class="blog-slider__title">Fernandico Geovardo</div>
                            <span class="blog-slider__code">Gubernur Mahasiswa BEM KM Fasilkom UNSRI 2022/2023</span>
                            <div class="blog-slider__text">“BEM KM Fasilkom Unsri merupakan organisasi eksekutif tertinggi di Fakultas Ilmu Komputer Universitas Sriwijaya. BEM KM Fasilkom Unsri sendiri terbagi atas 10 dinas, yang dimana masing-masing dinas memiliki tanggung jawab yang berbeda-beda pula. Tentunya BEM KM Fasilkom Unsri saat ini menjadi wadah yang memberikan kesempatan kepada seluruh mahasiswa Fasilkom agar dapat belajar dan berproses, serta menyalurkan apa yang menjadi minat mereka dalam berorganisasi. Kedepannya, saya berharap apa yang telah dibangun di BEM KM Fasilkom Unsri selama ini dapat terus berjalan, sehingga BEM KM Fasilkom Unsri dapat terus membagikan kebermanfaatan kepada seluruh mahasiswa Fasilkom Unsri. Hidup Mahasiswa!” </div>
                        </div>
                    </div>

                </div>
                <div class="blog-slider__pagination"></div>
            </div>
        </div>
    </div>
</section>
<!--Kata Tokoh End-->


<footer>
    <div class="container footer-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="row1">
            <div class="logo">
                <img loading="lazy" src="assets/image/logo.png" alt="">
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
                    <a href=""><img src="assets/image/LINE_logo.svg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="row2">
            <h2>© BEM KM FASILKOM UNSRI 2025 | Kabinet Artha Dharma</h2>
        </div>
    </div>
</footer>
<div id="preloader"></div>
@endsection