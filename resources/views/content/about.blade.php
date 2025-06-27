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
<!--Hero Start-->
<section class="hero">
    <div class="container hero-wrapper">
        <div class="row">
            <div class="image">
                <img loading="lazy" src="assets/image/logo RISTEK Hitam.png" alt="">
            </div>
            <div class="hero-detail">
                <h1>DINAS RISET DATA <span>& TEKNOLOGI</span></h1>
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
            <h1>DIVISI PTI DAN AKADEMIK</h1>
            <div class="bar"></div>
            <div class="logo-wrapper">
                <img src="assets/image/Logo RISTEK.png" alt="">
            </div>
        </div>
        <div class="row2">
            <h1>BADAN PENGURUS HARIAN</h1>
            <div class="bar"></div>
            <div class="bph">
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="{{asset('assets/image/ristek/Card Kadin Ristek.png')}}" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>JORDI ABRAR SATRIA</h2>
                            <h3>KEPALA DINAS</h3>
                            <p>Teknik Informatika 2023</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="{{asset('assets/image/ristek/Card Deputi Ristek.png')}}" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>FARREL ATHAILLAH WIJAYA</h2>
                            <h3>DEPUTI DINAS</h3>
                            <p>Teknik Informatika 2023</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="{{asset('assets/image/ristek/Card Kadiv PTI.png')}}" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>NABILA AYU TALITA</h2>
                            <h3>KEPALA DIVISI PTI</h3>
                            <p>Teknik Informatika 2023</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="{{asset('assets/image/ristek/Card Kadiv Akademik.png')}}" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>NABILA SHAMID</h2>
                            <h3>KEPALA DIVISI AKADEMIK</h3>
                            <p>Teknik Informatika 2023</p>
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
                            <img loading="lazy" src="assets/image/ristek/Card Nabil_PTI.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>M. Nabil Rafasya </h2>
                            <h3>STAFF PTI</h3>
                            <p>Teknik Informatika 2023</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Stevanus_PTI.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Stevanus Parise Jona Sitorus</h2>
                            <h3>STAFF PTI</h3>
                            <p>Teknik Informatika 2024</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Farhan_PTI.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Farhan Bayu Maulana</h2>
                            <h3>STAFF PTI</h3>
                            <p>Sistem Komputer 2024</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Ridho P_PTI.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>KGS. M. Ridho Pasha</h2>
                            <h3>STAFF PTI</h3>
                            <p>Sistem Komputer 2024</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Ridho T_PTI.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Ridho Toyyib Al-Amin</h2>
                            <h3>STAFF PTI</h3>
                            <p>Sistem Komputer 2024</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Ridho M_PTI.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Ridho Mulya</h2>
                            <h3>STAFF PTI</h3>
                            <p>Teknik Komputer 2024</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Juwita_PTI.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Juwita Mayasari</h2>
                            <h3>STAFF PTI</h3>
                            <p>Sistem Informasi 2024</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Ari_PTI.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Afratsin Wiradhiyaa Asaari</h2>
                            <h3>STAFF PTI</h3>
                            <p>Teknik Informatika 2023</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Richard_PTI.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Richard Caesar</h2>
                            <h3>STAFF PTI</h3>
                            <p>Komputerisasi Akuntansi 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row4">
            <h1>STAFF AKADEMIK</h1>
            <div class="bar"></div>
            <div class="staff">
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Syarif_Akademik.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Syarif Ahmad Al-Bukhori</h2>
                            <h3>STAFF AKADEMIK</h3>
                            <p>Sistem Komputer 2024</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Zaif_Akademik.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>M. Zaif Daffarian </h2>
                            <h3>STAFF AKADEMIK</h3>
                            <p>Teknik Informatika 2024</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Rifqoh_Akademik.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>M. Rifqoh</h2>
                            <h3>STAFF AKADEMIK</h3>
                            <p>Teknik Komputer 2024</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Rafly_Akademik.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Rafly Adrian </h2>
                            <h3>STAFF AKADEMIK</h3>
                            <p>Sistem Komputer 2024</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Naufal_Akademik.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Naufal Rizky Meideyan</h2>
                            <h3>STAFF AKADEMIK</h3>
                            <p>Manajemen Informatika 2024</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Nasywa_Akademik.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Nasywa Afifah</h2>
                            <h3>STAFF AKADEMIK</h3>
                            <p>Sistem Informasi 2024</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Indri_Akademik.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Indri Suryani Manik</h2>
                            <h3>STAFF AKADEMIK</h3>
                            <p>Komputerisasi Akuntansi 2024</p>
                        </div>
                    </div>
                </div>
                    <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Joda_Akademik.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>M. Rizki Joda Saputra</h2>
                            <h3>STAFF AKADEMIK</h3>
                            <p>Manajemen Informatika 2024</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Luthfi_Akademik.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>M. Luthfi Muta'ali</h2>
                            <h3>STAFF AKADEMIK</h3>
                            <p>Manajemen Informatika 2024</p>
                        </div>
                    </div>
                </div>
                <div class="box-bph">
                    <div class="box">
                        <div class="box-imagebph">
                            <img loading="lazy" src="assets/image/ristek/Card Hilma_Akademik.png" alt="">
                        </div>
                        <div class="box-detail">
                            <h2>Hilma Rida Azzahra</h2>
                            <h3>STAFF AKADEMIK</h3>
                            <p>Manajemen Informatika 2024</p>
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
                <h3>WEBJAM PTI</h3>
            </div>
            <div class="box-proker">
                <h3>WEBSITE BEM KM FASILKOM UNSRI</h3>
            </div>
            <div class="box-proker">
                <h3>WEBSITE GASPOL</h3>
            </div>
            <div class="box-proker">
                <h3>WEBSITE ILKOM NEWS</h3>
            </div>
            <div class="box-proker">
                <h3>AKADEMIK EMPOWER</h3>
            </div>
            <div class="box-proker">
                <h3>WONGDEV ILKOM</h3>
            </div>
            <div class="box-proker">
                <h3>WONGDEV WEBINAR</h3>
            </div>
            <div class="box-proker">
                <h3>WONGDEV WORKSHOP</h3>
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
@endsection