@extends('layout/e-majalah')
@section('konten')
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
<section class="hero-majalah">
    <div class="container heromajalah-wrapper">
        <div class="content-left" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100">
            <h1 class="baris1">E-Magazine Edisi<span> Terbaru</span></h1>
            <h1 class="baris2">Dengan Tema<span> FINANOLOGY</span></h1>
            <p data-aos=>Menampilkan Edisi Terbaru Dari Majalah BEM KM Fasilkom Unsri</p>
            <div class="button">
                <a id="container5" href="#book5_">Baca Sekarang</a>
            </div>
        </div>
        <div class="content-right" data-aos="fade-left" data-aos-duration="1500">
            <img loading="lazy" src="assets/image/majalah/5/E-magz-01.png" alt="">
        </div>
    </div>
</section>
<!--Hero End-->

<!--List Majalah Start-->
<section class="majalah-list">
    <div class="container majalahlist-wrapper" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
        <div class="row1">
            <div class="title">
                <h3>Algorithm Magazine</h3>
                <div class="bar"></div>
            </div>
        </div>
        <div class="row2">
            <!-- Magazine 1 -->
            <div class="box-majalah" onclick="this.classList.toggle('flipped')">
                <div class="flip-container">
                    <div class="flipper">
                        <div class="front">
                            <img loading="lazy" src="assets/image/majalah/1/0.jpg" alt="E-Magazine Edisi 1">
                            <button class="flip-button">Click Here!</button>
                        </div>
                        <div class="back">
                            <h2>E-Magazine Edisi 1</h2>
                            <h3>Tema : #inovaTIon</h3>
                            <p>Launching : Juli 2022</p>
                            <div class="button-majalah">
                                <a id="container1" href="#book1_">Baca Sekarang</a>
                            </div>
                            <button class="flip-button">Back</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Magazine 2 -->
            <div class="box-majalah" onclick="this.classList.toggle('flipped')">
                <div class="flip-container">
                    <div class="flipper">
                        <div class="front">
                            <img loading="lazy" src="assets/image/majalah/2.jpg" alt="E-Magazine Edisi 2">
                            <button class="flip-button">Click Here!</button>
                        </div>
                        <div class="back">
                            <h2>E-Magazine Edisi 2</h2>
                            <h3>Tema : #PSYCHE</h3>
                            <p>Launching : Oktober 2022</p>
                            <div class="button-majalah">
                                <a id="container2" href="#book2_">Baca Sekarang</a>
                            </div>
                            <button class="flip-button">Back</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Magazine 3 -->
            <div class="box-majalah" onclick="this.classList.toggle('flipped')">
                <div class="flip-container">
                    <div class="flipper">
                        <div class="front">
                            <img loading="lazy" src="assets/image/majalah/3/1.png" alt="E-Magazine Edisi 3">
                            <button class="flip-button">Click Here!</button>
                        </div>
                        <div class="back">
                            <h2>E-Magazine Edisi 3</h2>
                            <h3>Tema : #DUALitY</h3>
                            <p>Launching : Juli 2022</p>
                            <div class="button-majalah">
                                <a id="container3" href="#book3_">Baca Sekarang</a>
                            </div>
                            <button class="flip-button">Back</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Magazine 4 -->
            <div class="box-majalah" onclick="this.classList.toggle('flipped')">
                <div class="flip-container">
                    <div class="flipper">
                        <div class="front">
                            <img loading="lazy" src="assets/image/majalah/4/E-Mags-01.png" alt="E-Magazine Edisi 4">
                            <button class="flip-button">Click Here!</button>
                        </div>
                        <div class="back">
                            <h2>E-Magazine Edisi 4</h2>
                            <h3>Tema : #RevolutioningCreativity</h3>
                            <p>Launching : Juni 2023</p>
                            <div class="button-majalah">
                                <a id="container4" href="#book4_">Baca Sekarang</a>
                            </div>
                            <button class="flip-button">Back</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Magazine 5 -->
            <div class="box-majalah" onclick="this.classList.toggle('flipped')">
                <div class="flip-container">
                    <div class="flipper">
                        <div class="front">
                            <img loading="lazy" src="assets/image/majalah/5/E-magz-01.png" alt="E-Magazine Edisi 5">
                            <button class="flip-button">Click Here!</button>
                        </div>
                        <div class="back">
                            <h2>E-Magazine Edisi 5</h2>
                            <h3>Tema : #FINANOLOGY</h3>
                            <p>Launching : April 2024</p>
                            <div class="button-majalah">
                                <a id="container7" href="#book7_">Baca Sekarang</a>
                            </div>
                            <button class="flip-button">Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--List Majalah End-->

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