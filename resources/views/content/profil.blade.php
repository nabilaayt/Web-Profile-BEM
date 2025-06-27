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

                <li><a href="/profile" class="nav__link active">Profil</a></li>

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

<!--Slide Start-->
<section class="slider">
    <div class="owl-carousel owl-theme" style="padding-top: 80px">
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/inti.png" class="card-img-top" alt="...">
        </div>
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/Koorbid-Kerumahtanggaan.png" class="card-img-top" alt="...">
        </div>
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/Koorbid-Sospol.png" class="card-img-top" alt="...">
        </div>
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/Koorbid-Relasi.png" class="card-img-top" alt="...">
        </div>
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/Koorbid-Medtek.png" class="card-img-top" alt="...">
        </div>
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/Koorbid-Minbat.png" class="card-img-top" alt="...">
        </div>
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/BPH-PPSDM.png" class="card-img-top" alt="...">
        </div>
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/BPH-ADM.png" class="card-img-top" alt="...">
        </div>
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/BPH-ADPER.png" class="card-img-top" alt="...">
        </div>
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/BPH-SOSMASLING.png" class="card-img-top" alt="...">
        </div>
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/BPH-KASTRAT.png" class="card-img-top" alt="...">
        </div>
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/BPH-BISMIT.png" class="card-img-top" alt="...">
        </div>
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/BPH-HUNTER.png" class="card-img-top" alt="...">
        </div>
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/BPH-HUBEKS.png" class="card-img-top" alt="...">
        </div>
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/BPH-MEDINFO.png" class="card-img-top" alt="...">
        </div>
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/BPH-RISTEK.png" class="card-img-top" alt="...">
        </div>
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/BPH-OLAHRAGA.png" class="card-img-top" alt="...">
        </div>
        <div class="item" data-merge="3">
            <img loading="lazy" src="assets/image/BPH-SENBUD.png" class="card-img-top" alt="...">
        </div>
    </div>
</section>
<!--Slide End-->

<!--Inti Start-->
<section class="inti">
    <div class="container inti-wrapper">
        <div class="row1">
            <h2>INTI</h2>
            <div class="bar"></div>
        </div>
        <div class="row2">
            <div class="box-inti">
                <div class="box-kiri">
                    <img loading="lazy" src="assets/image/Card-Ketua.png" alt="">
                </div>
                <div class="box-kanan">
                    <img loading="lazy" src="assets/image/Card-Wakil-Ketua.png" alt="">
                </div>
            </div>
            <div class="box-inti">
                <div class="box-kiri">
                    <img loading="lazy" src="assets/image/Card-Inspektorat-Proker.png" alt="">
                </div>
                <div class="box-kanan">
                    <img loading="lazy" src="assets/image/Card-Inspektorat-Pengawasan.png" alt="">
                </div>
            </div>
            <div class="box-inti">
                <div class="box-kiri">
                    <img loading="lazy" src="assets/image/Card-Sekum.png" alt="">
                </div>
                <div class="box-kanan">
                    <img loading="lazy" src="assets/image/Card-Bendum.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--Inti End-->

<!--Bidang Start-->
<section class="bidang">
    <!--KerumahTanggaan-->
    <div class="intro">
        <h2>BIDANG KERUMAHTANGAAN</h2>
        <div class="bar"></div>
        <img loading="lazy" src="assets/image/Bidang-Kerumahtanggan.png" alt="">
    </div>
    <div class="container bidang-wrapper">
        <div class="row1">
            <div class="box-bidang">
                <div class="box-kiri">
                    <img loading="lazy" src="assets/image/Card-Koorbid-Kerumahtanggan_Mutia.png" alt="">
                </div>
                <div class="box-kanan">
                    <img loading="lazy" src="assets/image/Card-Koorbid-Kerumahtanggan_Diva.png" alt="">
                </div>
            </div>
        </div>
        
        <div class="row2">
            <div class="content-dinas">
                <div class="title-dinas">
                    <h3>Dinas PPSDM</h3>
                    <div class="bar"></div>
                </div>
                <div class="slider" x-data="{start: true, end: false}" style="padding-top: 40px;">
                    <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/Card Masayu_MSDM.png" alt="Image">
                            <div class="slider__info">
                                <h2>Masayu Jihan Salmalia</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/Card Naswazein_MSDM.png" alt="Image">
                            <div class="slider__info">
                                <h2>Naswazein Vitto Febrilian</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/Card Jingga_MSDM.png" alt="Image">
                            <div class="slider__info">
                                <h2>Jingga</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/Card Bintang_MSDM.png" alt="Image">
                            <div class="slider__info">
                                <h2>Bintang Dwi Cahya Dati</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/fahdel.png" alt="Image">
                            <div class="slider__info">
                                <h2>Amani Alfaqih</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/Card Adis_MSDM.png" alt="Image">
                            <div class="slider__info">
                                <h2>Adis Santia</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/Card Fathan_MSDM.png" alt="Image">
                            <div class="slider__info">
                                <h2>M. Fathan Ardiansyah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/Card Ramzi_MSDM.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Ramzi</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/Card Fiqih_MSDM.png" alt="Image">
                            <div class="slider__info">
                                <h2>Fiqih Ade Julianda</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/Card Pirgi_HARMONISASI.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Pirgi Jonatan</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/Card Zaki_HARMONISASI.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Zaki Nafi Pratama</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/Card Fadhil_HARMONISASI.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Fadhil Pratama</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/Card Salsabila_HARMONISASI.png" alt="Image">
                            <div class="slider__info">
                                <h2> Salsabila Alfath Annisaa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/Card Viviey_HARMONISASI.png" alt="Image">
                            <div class="slider__info">
                                <h2>Vivie Alayda</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/Card Dzakiy_HARMONISASI.png" alt="Image">
                            <div class="slider__info">
                                <h2>Dzakiy Erlang Hersiando</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/Card Naufal_HARMONISASI.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Naufal Al Faiz</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/zahra.png" alt="Image">
                            <div class="slider__info">
                                <h2>Sazkiya Sayandra Saimona</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas PPSDM merupakan dinas yang berperan dalam menumbuhkan rasa kekeluargaan, memanajemen sumber
                        daya manusia serta bertanggung jawab atas kaderisasi pada seluruh elemen BEM KM Fasilkom Unsri.
                    </p>
                </div>
            </div>
        </div>
        <div class="row3">
            <div class="content-dinas">
                <div class="title-dinas">
                    <h3>Dinas ADMINISTRASI</h3>
                    <div class="bar"></div>
                </div>
                <div class="slider" x-data="{start: true, end: false}" style="padding-top: 40px;">
                    <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/Card Ma'arifa_Keuangan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nabila Ma’arifa Alzahra</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/Card Ameylia_Keuangan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Zaskia Ameylia Putri</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/Card Rinis_Keuangan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Rinis Junika</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/Card Elsa_Keuangan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Elsa Fauzizah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/ilma.png" alt="Image">
                            <div class="slider__info">
                                <h2>Rahma Ayu Sakila</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/Card Khomsah_Keuangan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Khomsah Wijaya Kusumawati</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/Card Prenata_Keuangan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Prenata Anju Helma Suci</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/Card Safwan_Kesekertariatan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nabilla Safwan</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/Card Zaskia_Kesekertariatan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Zaskia Azila</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/Card Adlia_Kesekertariatan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nabila Adlia Ramadhani</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/Card Novelita_Kesekertariatan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Novelita Difani</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/Card Nisa_Kesekertariatan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nisa Nofrianti</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/Card Saniya_Kesekertariatan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Saniyaa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/Card Annisa_Kesekertariatan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Annisa Rahma</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas Administrasi adalah dinas yang bertanggung jawab dalan mengelola surat menyurat terkait
                        administrasi pada bidang kesekretariatan serta alur keuangan internal BEM KM Fasilkom Unsri.
                        Dinas administrasi dibagi menjadi 2 divisi yaitu Divisi Kesekretariatan dan Divisi Keuangan</p>
                </div>
            </div>
        </div>
    </div>
    <!--SOSPOL-->
    <div class="intro">
        <h2>BIDANG SOSIAL POLITIK</h2>
        <div class="bar"></div>
        <img loading="lazy" src="assets/image/Bidang-Sospol.png" alt="">
    </div>
    <div class="container bidang-wrapper">
        <div class="row1">
            <div class="box-bidang">
                <div class="box-kiri">
                    <img loading="lazy" src="assets/image/Card-Koorbid-Sospol_Dzawil.png" alt="">
                </div>
                <div class="box-kanan">
                    <img loading="lazy" src="assets/image/Card-Koorbid-Sospol_Dini.png" alt="">
                </div>
            </div>
        </div>
        <div class="row2">
            <div class="content-dinas">
                <div class="title-dinas">
                    <h3>Dinas ADPER</h3>
                    <div class="bar"></div>
                </div>
                <div class="slider" x-data="{start: true, end: false}" style="padding-top: 40px;">
                    <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adper/Card Rifki_Adkesma.png" alt="Image">
                            <div class="slider__info">
                                <h2>Rifki Alkazim</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adper/Card Tri_Adkesma.png" alt="Image">
                            <div class="slider__info">
                                <h2>Tri Dinda R</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adper/Card Nabila_Adkesma.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nabila Aurelia</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adper/Card Henrie_Adkesma.png" alt="Image">
                            <div class="slider__info">
                                <h2>Henrie Rafi Ardiyanto</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adper/Card Nurul_Adkesma.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nurul A'ina Mardhiyah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adper/Card Buffon_Adkesma.png" alt="Image">
                            <div class="slider__info">
                                <h2>⁠Muhammad Buffon Prima</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adper/Card Gaizkha_Adkesma.png" alt="Image">
                            <div class="slider__info">
                                <h2>Gaizkha Shafiya</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adper/Card Intan_Pemberdayaan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Intan Nuraini</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adper/Card Yoga_Pemberdayaan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Yoga Aldian</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adper/Card Meutya_Pemberdayaan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Meutya Salsabila P</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adper/Card Putri_Pemberdayaan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Julianti</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adper/Card Dedi_Pemberdayaan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Dedi Kesuma</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adper/Card Bunga_Pemberdayaan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Bunga Eka Rahma Donna</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adper/Card Daffa_Pemberdayaan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Daffa Ramadhan</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas Adper merupakan dinas yang menghubungkan BEM KM Fasilkom UNSRI kepada pihak internal
                        (contoh: ormawa dan UKM di dalam lingkup Fakultas Ilmu Komputer) dan eksternal UNSRI (contoh:
                        fakultas lain di UNSRI maupun di universitas lain) serta menjadi representatif BEM KM Fasilkom
                        UNSRI pada masyarakat luas.

                        Dinas Relasi terbagi menjadi 2 divisi, yaitu Divisi Internal dan Divisi Eksternal.
                    </p>
                </div>
            </div>
        </div>
        <div class="row3">
            <div class="content-dinas">
                <div class="title-dinas">
                    <h3>Dinas SOSMASLING</h3>
                    <div class="bar"></div>
                </div>
                <div class="slider" x-data="{start: true, end: false}" style="padding-top: 40px;">
                    <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/sosmasling/Card Raihan_Sosmas.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Raihan Arsyad</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/sosmasling/Card Winolla_Sosmas.png" alt="Image">
                            <div class="slider__info">
                                <h2>Winolla Najwa Syafira</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/sosmasling/Card Ahmad_Sosmas.png" alt="Image">
                            <div class="slider__info">
                                <h2>Ahmad Maulana Azhari</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/sosmasling/Card Qanita_Sosmas.png" alt="Image">
                            <div class="slider__info">
                                <h2>Qanita Salsabila</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/sosmasling/Card Viardo_Sosmas.png" alt="Image">
                            <div class="slider__info">
                                <h2>Viardo Ardi Firansyah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/sosmasling/Card Ojie_Sosmas.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Ojie Gusti Prakasa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/sosmasling/Card Indi_Sosmas.png" alt="Image">
                            <div class="slider__info">
                                <h2>Indi Rahmadani</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/sosmasling/Card Ardi_Lingkungan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Ardi Andrian</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/sosmasling/Card Nyoman_Lingkungan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nyoman Sri Astuti</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/sosmasling/Card Adinda_Lingkungan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Adinda Zulvy Zumala Izzatissabyla</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/sosmasling/Card Kiki_Lingkungan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Kiki Muttaqin</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/sosmasling/Card Chantika_Lingkungan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Chantika Maharani</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/sosmasling/Card Aghnin_Lingkungan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Aghnin Ni'am</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/sosmasling/Card Musyawir_Lingkungan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Musyawir Halim</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas Sosmasling merupakan dinas yang berperan untuk menunjang keuangan internal serta menjalin
                        kemitraan dengan pihak-pihak luar guna menuhi kebutuhan internal BEM KM Fasilkom Unsri serta
                        mewadahi potensi mahasiswa di bidang kewirausahaan.</p>
                </div>
            </div>
        </div>
        <div class="row4">
            <div class="content-dinas">
                <div class="title-dinas">
                    <h3>Dinas KASTRAT</h3>
                    <div class="bar"></div>
                </div>
                <div class="slider" x-data="{start: true, end: false}" style="padding-top: 40px;">
                    <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/kastrat/Card Bunga_Kastrat.png" alt="Image">
                            <div class="slider__info">
                                <h2>Bunga Angelica Ramadhani</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/kastrat/Card Naufalista_Kastrat.png" alt="Image">
                            <div class="slider__info">
                                <h2>Naufalista Gemilang</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/kastrat/Card Raflyza_Kastrat.png" alt="Image">
                            <div class="slider__info">
                                <h2>Raflyza</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/kastrat/Card Okta_Kastrat.png" alt="Image">
                            <div class="slider__info">
                                <h2>Okta Mayang Sari</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/kastrat/Card Marsha_Kastrat.png" alt="Image">
                            <div class="slider__info">
                                <h2>Marsha Sabrina Alexandra</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/kastrat/Card Habil_Kastrat.png" alt="Image">
                            <div class="slider__info">
                                <h2>Habil Al-Farisy</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/sosmasling/.png" alt="Image">
                            <div class="slider__info">
                                <h2>Zidane Alfarez Suherman</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/kastrat/Card Ruben_Kastrat.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Ruben Farras</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas Kastrat merupakan dinas yang berperan untuk menunjang keuangan internal serta menjalin
                        kemitraan dengan pihak-pihak luar guna menuhi kebutuhan internal BEM KM Fasilkom Unsri serta
                        mewadahi potensi mahasiswa di bidang kewirausahaan.</p>
                </div>
            </div>
        </div>
    </div>
    <!--Relasi-->
    <div class="intro">
        <h2>BIDANG RELASI</h2>
        <div class="bar"></div>
        <img loading="lazy" src="assets/image/Bidang-Relasi.png" alt="">
    </div>
    <div class="container bidang-wrapper">
        <div class="row1">
            <div class="box-bidang">
                <div class="box-kiri">
                    <img loading="lazy" src="assets/image/Card-Koorbid-Relasi_Ferry.png" alt="">
                </div>
                <div class="box-kanan">
                    <img loading="lazy" src="assets/image/Card-Koorbid-Relasi_Putri.png" alt="">
                </div>
            </div>
        </div>
        <div class="row2">
            <div class="content-dinas">
                <div class="title-dinas">
                    <h3>Dinas BISMIT</h3>
                    <div class="bar"></div>
                </div>
                <div class="slider" x-data="{start: true, end: false}" style="padding-top: 40px;">
                    <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/bismit/Card Adventha_Bismit.png" alt="Image">
                            <div class="slider__info">
                                <h2>Adventha Dwi Cristia Putri</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/bismit/Card Eska_Bismit.png" alt="Image">
                            <div class="slider__info">
                                <h2>Eska Roulina Sihombing</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/bismit/Card Khusnul_Bismit.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Khusnul Zakky</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/bismit/Card Lela_Bismit.png" alt="Image">
                            <div class="slider__info">
                                <h2>Lela Sari</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/bismit/Card Nabila_Bismit.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nabila Putri Ramadani</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/bismit/Card Zahra_Bismit.png" alt="Image">
                            <div class="slider__info">
                                <h2>Zahra Citra Anggraeni</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/bismit/Card Aliya_Bismit.png" alt="Image">
                            <div class="slider__info">
                                <h2>Aliya Faiza</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/bismit/Card Roitona_Bismit.png" alt="Image">
                            <div class="slider__info">
                                <h2>Roitona Takaya</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/bismit/Card Makayasa_Bismit.png" alt="Image">
                            <div class="slider__info">
                                <h2>Makayasa Aidil Fathan</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/bismit/Card Nauval_Bismit.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nauval Dutta</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas Bismit menyediakan sebuah media untuk penyajian informasi dalam bentuk berupa
                        postingan , story , dan juga artikel yang di publikasikan ke sosial media dan juga Kastrat On
                        Media Berkolaborasi bersama Dinas Medinfo sebagai media pengeditan.</p>
                </div>
            </div>
        </div>
        <div class="row3">
            <div class="content-dinas">
                <div class="title-dinas">
                    <h3>Dinas HUNTER</h3>
                    <div class="bar"></div>
                </div>
                <div class="slider" x-data="{start: true, end: false}" style="padding-top: 40px;">
                    <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hunter/Card Ashifa_Hunter.png" alt="Image">
                            <div class="slider__info">
                                <h2>Ashifa Shabila</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hunter/Card Tasya_Hunter.png" alt="Image">
                            <div class="slider__info">
                                <h2>Tasya Thalita</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hunter/Card Bima_Hunter.png" alt="Image">
                            <div class="slider__info">
                                <h2>Bima Afif Setiawan</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hunter/Card Anra_Hunter.png" alt="Image">
                            <div class="slider__info">
                                <h2>Anra Dhani Kirana</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hunter/Card Rahma_Hunter.png" alt="Image">
                            <div class="slider__info">
                                <h2>Rahma Maulin</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hunter/Card Nabilla_Hunter.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nabilla Tri Anggraini</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hunter/Card Bintang_Hunter.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Bintang Lazuardi</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hunter/Card Nazwa_Hunter.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nazwa Kamila Tabita Sari</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hunter/Card Zaki_Hunter.png" alt="Image">
                            <div class="slider__info">
                                <h2>⁠Muhammad Zaki Al Fattah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hunter/Card Made_Hunter.png" alt="Image">
                            <div class="slider__info">
                                <h2>Made Rengganis Atikah</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas Hunter merupakan salah satu dinas yang ada di organisasi BEM Fasilkom yang bertugas
                        dalam mengembangkan dan mengelola program-program yang berfokus pada aspek sosial, masyarakat,
                        dan lingkungan di lingkungan Fakultas. Dinas ini bertanggung jawab untuk memperhatikan
                        kepedulian sosial serta isu-isu yang berkaitan dengan masyarakat dan lingkungan sekitar.</p>
                </div>
            </div>
        </div>
        <div class="row4">
            <div class="content-dinas">
                <div class="title-dinas">
                    <h3>Dinas HUBEKS</h3>
                    <div class="bar"></div>
                </div>
                <div class="slider" x-data="{start: true, end: false}" style="padding-top: 40px;">
                    <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src=" assets/image/hubeks/Card Maulana_Hubeks.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Maulana</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hubeks/Card Mery_Hubeks.png" alt="Image">
                            <div class="slider__info">
                                <h2>Mery Efrilia</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/bintang.png" alt="Image">
                            <div class="slider__info">
                                <h2>Witri Ayu Kartika</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hubeks/Card Egir_Hubeks.png" alt="Image">
                            <div class="slider__info">
                                <h2>Egir Extra Apena</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hubeks/Card Firdi_Hubeks.png" alt="Image">
                            <div class="slider__info">
                                <h2>Abdul Fattah Firdaus</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hubeks/Card Bagas_Hubeks.png" alt="Image">
                            <div class="slider__info">
                                <h2>Bagas Dewarianthara Putra</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hubeks/Card Della_Hubeks.png" alt="Image">
                            <div class="slider__info">
                                <h2>Della Aulia</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hubeks/Card Zakiah_Hubeks.png" alt="Image">
                            <div class="slider__info">
                                <h2>Zakiah Rahmah Arrindani</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hubeks/Card Ghatfan_Hubeks.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Ghatfan Fatih</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/hubeks/Card Fatma_Hubeks.png" alt="Image">
                            <div class="slider__info">
                                <h2>Fatma Dini</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas Hubeks merupakan salah satu dinas yang ada di organisasi BEM Fasilkom yang bertugas
                        dalam mengembangkan dan mengelola program-program yang berfokus pada aspek sosial, masyarakat,
                        dan lingkungan di lingkungan Fakultas. Dinas ini bertanggung jawab untuk memperhatikan
                        kepedulian sosial serta isu-isu yang berkaitan dengan masyarakat dan lingkungan sekitar.</p>
                </div>
            </div>
        </div>
    </div>
    <!--Medtek-->
    <div class="intro">
        <h2 class="medtek">BIDANG MEDIA & TEKNOLOGI</h2>
        <div class="bar"></div>
        <img loading="lazy" src="assets/image/Bidang-Medtek.png" alt="">
    </div>
    <div class="container bidang-wrapper">
        <div class="row1">
            <div class="box-bidang">
                <div class="box-kiri">
                    <img loading="lazy" src="assets/image/Card-Koorbid-Medtek_Faisal.png" alt="">
                </div>
                <div class="box-kanan">
                    <img loading="lazy" src="assets/image/Card-Koorbid-Medtek_Ubit.png" alt="">
                </div>
            </div>
        </div>
        
        <div class="row2">
            <div class="content-dinas">
                <div class="title-dinas">
                    <h3>Dinas MEDINFO</h3>
                    <div class="bar"></div>
                </div>
                <div class="slider" x-data="{start: true, end: false}" style="padding-top: 40px;">
                    <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card David_Mulmed.png" alt="Image">
                            <div class="slider__info">
                                <h2>David Sinurat</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Bintang_Mulmed.png" alt="Image">
                            <div class="slider__info">
                                <h2>Bintang Ramadan</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Eka_Mulmed.png" alt="Image">
                            <div class="slider__info">
                                <h2>Eka Prasetya A.N</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Iqbal_Mulmed.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Iqbal Kurniawan</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Gita_Mulmed.png" alt="Image">
                            <div class="slider__info">
                                <h2>Gita Sri Devi</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Gistra_Mulmed.png" alt="Image">
                            <div class="slider__info">
                                <h2>Gistra Risky Fitriansyah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Amanda_Mulmed.png" alt="Image">
                            <div class="slider__info">
                                <h2>Amanda Alya Nur Afla</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Clara_Mulmed.png" alt="Image">
                            <div class="slider__info">
                                <h2>Clara Aulia Septiani</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Satrio_Mulmed.png" alt="Image">
                            <div class="slider__info">
                                <h2>Satrio</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Arya_Mulmed.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Arya Hatta</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Cristian_Mulmed.png" alt="Image">
                            <div class="slider__info">
                                <h2>Cristian Gigs</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Rifqi_Mulmed.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Rifqi</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Dzaki_Publikasi.png" alt="Image">
                            <div class="slider__info">
                                <h2>Dzaki Eka Perdana</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Bayu_Publikasi.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Bayu Nur Rizky</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Nabila_Publikasi.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nabila Ramadhani</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Unaisah_Publikasi.png" alt="Image">
                            <div class="slider__info">
                                <h2>Unaisah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Dinda_Publikasi.png" alt="Image">
                            <div class="slider__info">
                                <h2>Dinda Aulika Elfarin Aritonang</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Fhara_Publikasi.png" alt="Image">
                            <div class="slider__info">
                                <h2>Fhara Amanda Putri</h2>
                            </div>
                          </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Islamay_Publikasi.png" alt="Image">
                            <div class="slider__info">
                                <h2>Islamay Shafira Fasya</h2>
                            </div>
                          </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/Card Drias_Publikasi.png" alt="Image">
                            <div class="slider__info">
                                <h2>Drias Vohara</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas Medinfo ialah dinas yang mengelola masuk keluarnya informasi di BEM KM Fasilkom Unsri dalam
                        bentuk media cetak atau elektronik serta menjadi dinas yang membantu keperluan dinas-dinas lain
                        dalam editing dan publikasi.</p>
                </div>
            </div>
        </div>
        <div class="row3">
            <div class="content-dinas">
                <div class="title-dinas">
                    <h3>Dinas RISTEK</h3>
                    <div class="bar"></div>
                </div>
                <div class="slider" x-data="{start: true, end: false}" style="padding-top: 40px;">
                    <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Stevanus_PTI.png" alt="Image">
                            <div class="slider__info">
                                <h2>Stevanus Parise Jona Sitorus</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Nabil_PTI.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Nabil Rafasya</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Ari_PTI.png" alt="Image">
                            <div class="slider__info">
                                <h2>Afratsin Wiradhiyaa Asaari</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Farhan_PTI.png" alt="Image">
                            <div class="slider__info">
                                <h2>Farhan Bayu Maulana</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Ridho P_PTI.png" alt="Image">
                            <div class="slider__info">
                                <h2>Kgs.M.Ridho Pasha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Ridho T_PTI.png" alt="Image">
                            <div class="slider__info">
                                <h2>Ridho Toyyib Al-Amin</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Juwita_PTI.png" alt="Image">
                            <div class="slider__info">
                                <h2>Juwita Mayasari</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Ridho M_PTI.png" alt="Image">
                            <div class="slider__info">
                                <h2>Ridho Mulya</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Richard_PTI.png" alt="Image">
                            <div class="slider__info">
                                <h2>Richard Caesar</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Rafly_Akademik.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Rafly Adrian Saputra</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Nasywa_Akademik.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nasywa Afifah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Indri_Akademik.png" alt="Image">
                            <div class="slider__info">
                                <h2>Indri Suryani Manik</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Naufal_Akademik.png" alt="Image">
                            <div class="slider__info">
                                <h2>Naufal Rizky Meideyan</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Luthfi_Akademik.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Luthfi Muta'ali</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Hilma_Akademik.png" alt="Image">
                            <div class="slider__info">
                                <h2>Hilma Rida Azzahra</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Syarif_Akademik.png" alt="Image">
                            <div class="slider__info">
                                <h2>Syarif Ahmad Al-Bukhori</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Joda_Akademik.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Rizki Joda Saputra</h2>
                            </div>
                        </div>
                            <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Rifqoh_Akademik.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Rifqoh</h2>
                            </div>
                        </div>
                            <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/Card Zaif_Akademik.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Zaif Daffarian</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas Riset dan Teknologi Bertanggung jawab atas riset dan pengolahan data serta pengembangan
                        teknologi informasi di lingkungan BEM KM Fasilkom UNSRI untuk mendukung segala kebutuhan agar
                        memudahkan dalam problem solving. Dinas Ristek terbagi menjadi 2 divisi yaitu divisi
                        pengembangan teknologi informasi dan divisi riset data</p>
                </div>
            </div>
        </div>
    </div>
    <!--Minat dan bakat-->
    <div class="intro">
        <h2>BIDANG MINAT & BAKAT</h2>
        <div class="bar"></div>
        <img loading="lazy" src="assets/image/Bidang-Minbat.png" alt="">
    </div>
    <div class="container bidang-wrapper">
        <div class="row1">
            <div class="box-bidang">
                <div class="box-kiri">
                    <img loading="lazy" src="assets/image/Card-Koorbid-Minbat_Bagas.png" alt="">
                </div>
                <div class="box-kanan">
                    <img loading="lazy" src="assets/image/Card-Koorbid-Minbat_Azmi.png" alt="">
                </div>
            </div>
        </div>
        <div class="row2">
            <div class="content-dinas">
                <div class="title-dinas">
                    <h3>Dinas OLAHRAGA</h3>
                    <div class="bar"></div>
                </div>
                <div class="slider" x-data="{start: true, end: false}" style="padding-top: 40px;">
                    <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/Card Zakki_Olahraga.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Zakki</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/Card Raihan_Olahraga.png" alt="Image">
                            <div class="slider__info">
                                <h2>Raihan Agasi</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/Card Rachel_Olahraga.png" alt="Image">
                            <div class="slider__info">
                                <h2>Rachel Maryam</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/Card Arielendra_Olahraga.png" alt="Image">
                            <div class="slider__info">
                                <h2>Arielendra Febriano Dewa Putra</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/Card Faiz_Olahraga.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Faiz</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/Card Ariel_Olahraga.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Ariel Ortega</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/Card Nafisa_Olahraga.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nafisa Ayu Nadiya</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/Card Leo_Olahraga.png" alt="Image">
                            <div class="slider__info">
                                <h2>Leo Apriansah</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Secara garis besar Dinas Olahraga pada BEM KM FASILKOM adalah untuk Menjaring atau mewadahi
                        seluruh mahasiswa Fasilkom pada bidang olahraga dan juga mencari bakat olahraga untuk sebagai
                        perwakilan fakultas pada ajang lomba antar fakultas</p>
                </div>
            </div>
        </div>
        <div class="row3">
            <div class="content-dinas">
                <div class="title-dinas">
                    <h3>Dinas SENI BUDAYA</h3>
                    <div class="bar"></div>
                </div>
                <div class="slider" x-data="{start: true, end: false}" style="padding-top: 40px;">
                    <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/Card Nadia_Senbud.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nadia Ramadhani</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/Card Nadhilah_Senbud.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nadhilah Al Adawiyah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/Card Sri_Senbud.png" alt="Image">
                            <div class="slider__info">
                                <h2>Sri Supadmi</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/Card Nur_Senbud.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nur Kholisna</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/Card Meysah_Senbud.png" alt="Image">
                            <div class="slider__info">
                                <h2>Meysah Amanda Dira Cantika</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/Card Tisi_Senbud.png" alt="Image">
                            <div class="slider__info">
                                <h2>Tisi Karintia</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/Card Javier_Senbud.png" alt="Image">
                            <div class="slider__info">
                                <h2>Javier Rashad Agustrisyah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/Card Afrizal_Senbud.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Afrizal</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/silvia.png" alt="Image">
                            <div class="slider__info">
                                <h2>Alya Putri Adhetya</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas Seni Budaya di BEM ini merupakan dinas yang bertanggung jawab untuk mengelola kegiatan dan
                        program seni di lingkungan kampus,
                        seperti pengembangan dan promosi seni budaya di kalangan mahasiswa contohnya mengadakan festival
                        ataupun pameran. menyediakan sarana buat mahasiswa untuk mengekspresikan diri dan mengembangkan
                        kreativitas melalui seni. intinya dinas senibudaya ini merupakan dinas yang bertanggung jawab
                        untuk melakukan penjaringan, pengembangan dan penyaluran minat dan bakat mahasiswa fasilkom
                        unsri
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

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
<!--Bidang End-->
@endsection