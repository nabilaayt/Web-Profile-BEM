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

                <li><a href="/about" class="nav__link active">Tentang Kami</a></li>

                <li><a href="/profile" class="nav__link">Profil</a></li>

                <!--=============== DROPDOWN 2 ===============-->
                <li class="dropdown__item">
                    <div class="nav__link">
                        BEM Apps <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <ul class="dropdown__menu">
                        <li>
                            <a href="/berita" class="dropdown__link">
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
<!--Hero Start-->
<section class="hero">
    <div class="container hero-wrapper">
        <div class="row">
            <div class="image">
                <img loading="lazy" src="assets/image/hero-logo.png" alt="">
            </div>
            <div class="hero-detail">
                <h1>DINAS RISET <span>& TEKNOLOGI</span></h1>
                <h3>
                    Mengelola pengembangan teknologi informasi untuk kebutuhan BEM dalam bentuk pengelolaan data dan
                    penerapan secara nyata teknologi.</h3>
            </div>
        </div>
    </div>
</section>
<!--Hero End-->
<!--Content Start-->
<section class="content">
    <div class="container content-wrapper">
        <div class="row1">
            <h1>DIVISI</h1>
            <div class="bar"></div>
            <div class="logo-wrapper">
                <img src="assets/image/logo-divisi.png" alt="">
            </div>
        </div>
        <div class="row2">
            <h1>BADAN PENGURUS HARIAN</h1>
            <div class="bar"></div>
            <div class="bph">
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="{{asset('assets/image/ristek/agung.png')}}" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>AGUNG HIDAYAH PUTRA</h2>
                            <h3>KEPALA DINAS</h3>
                            <p>Teknik Informatika Reguler 2022</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="{{asset('assets/image/ristek/rizki.png')}}" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>MUHAMMAD RIZKI FEBRIAN</h2>
                            <h3>DEPUTI DINAS</h3>
                            <p>Sistem Komputer Reguler 2022</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="{{asset('assets/image/ristek/fadly.png')}}" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>MUHAMMAD FADLY</h2>
                            <h3>KEPALA DIVISI PTI</h3>
                            <p>Teknik Informatika Bilingual 2022</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="{{asset('assets/image/ristek/risma.png')}}" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>RISMA NUR'AINI</h2>
                            <h3>KEPALA DIVISI RISDAT</h3>
                            <p>Sistem Informasi Reguler 2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row3">
            <h1>STAFF PENGEMBANGAN TEKNOLOGI INFORMASI</h1>
            <div class="bar"></div>
            <div class="staff">
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/farrel.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Farrel Athaillah Wijaya </h2>
                            <h3>STAFF PTI</h3>
                            <p>Teknik Informatika Bilingual 2023</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/fachry.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Fachry Ghifary</h2>
                            <h3>STAFF PTI</h3>
                            <p>Teknik Informatika Reguler 2023</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/rifqi.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Muhammad Rifqi Rizqullah</h2>
                            <h3>STAFF PTI</h3>
                            <p>Teknik Informatika Bilingual 2023</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/shofwan.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Shofwan Mahdi</h2>
                            <h3>STAFF PTI</h3>
                            <p>Teknik Informatika Reguler 2022</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/alif.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Muhammad Alif Alferdiansyah</h2>
                            <h3>STAFF PTI</h3>
                            <p>Teknik Informatika Bilingual 2022</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/dayef.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Dayef Alfarey Benjamin</h2>
                            <h3>STAFF PTI</h3>
                            <p>Sistem Komputer Reguler 2020</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/kevin.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Jhon Kevin Andianto Sinaga</h2>
                            <h3>STAFF PTI</h3>
                            <p>Sistem Informasi Reguler 2023</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/rey.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>M. Reyvaldo</h2>
                            <h3>STAFF PTI</h3>
                            <p>Teknik Komputer Bilingual 2023</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/jordi.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Jordi Abrar satria</h2>
                            <h3>STAFF PTI</h3>
                            <p>Teknik Informatika Bilingual 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row4">
            <h1>STAFF RISET DATA</h1>
            <div class="bar"></div>
            <div class="staff">
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/zwesty.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Zwesty Quatra</h2>
                            <h3>STAFF RISDAT</h3>
                            <p>Sistem Informasi Reguler 2023</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/alfarizi.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Muhammad Alfarizi Ramadhiyansa </h2>
                            <h3>STAFF RISDAT</h3>
                            <p>Sistem Informasi Bilingual 2022</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/lia.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Lia</h2>
                            <h3>STAFF RISDAT</h3>
                            <p>Komputerisasi Akuntansi Bilingual 2022</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/rifki.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>M. Rifki Tri Saputra </h2>
                            <h3>STAFF RISDAT</h3>
                            <p>Teknik Informatika Reguler 2023</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/faizal.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Muhammad Faizal</h2>
                            <h3>STAFF RISDAT</h3>
                            <p>Sistem Komputer Reguler 2022</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/fitran.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Fitran Husein</h2>
                            <h3>STAFF RISDAT</h3>
                            <p>Teknik Informatika Bilingual 2023</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/fathul.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Muhammad Fathul Akbar</h2>
                            <h3>STAFF RISDAT</h3>
                            <p>Teknik Informatika Reguler 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Content End-->
<!--Program Kerja Start-->
<section class="proker">
    <div class="container proker-wrapper">
        <h1>PROGRAM KERJA</h1>
        <div class="bar"></div>
        <div class="proker-list">
            <div class="box-proker">
                <h3>WEB BEM KM FASILKOM UNSRI</h3>
            </div>
            <div class="box-proker">
                <h3>WEB INTERNAL BEM KM FASILKOM UNSRI</h3>
            </div>
            <div class="box-proker">
                <h3>WEB Open Recruitment Staff BEM KM FASILKOM Unsri</h3>
            </div>
            <div class="box-proker">
                <h3>WEB shortlink BEM KM FASILKOM Unsri</h3>
            </div>
            <div class="box-proker">
                <h3>WEB Gaspol BEM KM FASILKOM UNSRI</h3>
            </div>
            <div class="box-proker">
                <h3>Fasilkom Learning Connection</h3>
            </div>
            <div class="box-proker">
                <h3>WEB PBGF</h3>
            </div>
            <div class="box-proker">
                <h3>E - Majalah BEM KM FASILKOM UNSRI</h3>
            </div>
            <div class="box-proker">
                <h3>Riset Grafis</h3>
            </div>
            <div class="box-proker">
                <h3>Riset Dan Pendataan</h3>
            </div>
            <div class="box-proker">
                <h3>Did You Know?</h3>
            </div>
        </div>
    </div>
</section>
<!--Program Kerja End-->
<footer>
    <div class="container footer-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
        <div class="row1">
            <div class="logo">
                <img loading="lazy" src="assets/image/logo.png" alt="">
                <div class="logo-detail">
                    <h3>BEM KM FASILKOM UNSRI</h3>
                    <p>#Kabinet Adibrata Kriya</p>
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
            <h2>© BEM KM FASILKOM UNSRI 2024 | Kabinet Adibrata Kriya</h2>
        </div>
    </div>
</footer>
@endsection