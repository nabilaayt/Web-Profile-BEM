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
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/adiaz.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhamad Anandithyo Aftarudzaki</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/anggita.png" alt="Image">
                            <div class="slider__info">
                                <h2>Bagus Prihantoro</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/aulia.png" alt="Image">
                            <div class="slider__info">
                                <h2>M. Bintang Naufal Riansyah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/elisa.png" alt="Image">
                            <div class="slider__info">
                                <h2>Edo Wicaksono</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/fahdel.png" alt="Image">
                            <div class="slider__info">
                                <h2>Ferdio Putra Prakarsa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/farhan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Khoiron Abdullah Muqsith</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/hauzan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Rahel Alifia</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/leiden.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Razaan Arjuna</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/naila.png" alt="Image">
                            <div class="slider__info">
                                <h2>Suci Lestari</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/novita.png" alt="Image">
                            <div class="slider__info">
                                <h2>Zakirah Sabrina Putri Pasha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/qaishar.png" alt="Image">
                            <div class="slider__info">
                                <h2>Erlangga Saputra</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/rahmad.png" alt="Image">
                            <div class="slider__info">
                                <h2>Batara Obed H. Simbolon</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/ramanuddin.png" alt="Image">
                            <div class="slider__info">
                                <h2>Aulia Khairunnisa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/shadiqa.png" alt="Image">
                            <div class="slider__info">
                                <h2>Jihan Badiatus Shaliha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/siti.png" alt="Image">
                            <div class="slider__info">
                                <h2> M. Rasyid Ridho</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/virnaldias.png" alt="Image">
                            <div class="slider__info">
                                <h2>Parnata Nalom Banjarnahor</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ppsdm/zahra.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Maharani</h2>
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
                            <img loading="lazy" class="slider__image" src="assets/image/adm/deasyana.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhamad Anandithyo Aftarudzaki</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/desna.png" alt="Image">
                            <div class="slider__info">
                                <h2>Bagus Prihantoro</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/dina.png" alt="Image">
                            <div class="slider__info">
                                <h2>M. Bintang Naufal Riansyah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/githa.png" alt="Image">
                            <div class="slider__info">
                                <h2>Edo Wicaksono</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/ilma.png" alt="Image">
                            <div class="slider__info">
                                <h2>Ferdio Putra Prakarsa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/khai.png" alt="Image">
                            <div class="slider__info">
                                <h2>Khoiron Abdullah Muqsith</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/khoirunnisa.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Rahel Alifia</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/meiyin.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Razaan Arjuna</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/nadia.png" alt="Image">
                            <div class="slider__info">
                                <h2>Suci Lestari</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/nurhalizah.png" alt="Image">
                            <div class="slider__info">
                                <h2>Zakirah Sabrina Putri Pasha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/putri.png" alt="Image">
                            <div class="slider__info">
                                <h2>Erlangga Saputra</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/redinda.png" alt="Image">
                            <div class="slider__info">
                                <h2>Batara Obed H. Simbolon</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/rosmalinda.png" alt="Image">
                            <div class="slider__info">
                                <h2>Aulia Khairunnisa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/adm/xenia.png" alt="Image">
                            <div class="slider__info">
                                <h2>Jihan Badiatus Shaliha</h2>
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
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/anandithyo.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhamad Anandithyo Aftarudzaki</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/bagus.png" alt="Image">
                            <div class="slider__info">
                                <h2>Bagus Prihantoro</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/bintang.png" alt="Image">
                            <div class="slider__info">
                                <h2>M. Bintang Naufal Riansyah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/edo.png" alt="Image">
                            <div class="slider__info">
                                <h2>Edo Wicaksono</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/ferdio.png" alt="Image">
                            <div class="slider__info">
                                <h2>Ferdio Putra Prakarsa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/khoiron.png" alt="Image">
                            <div class="slider__info">
                                <h2>Khoiron Abdullah Muqsith</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/rahel.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Rahel Alifia</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/razaan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Razaan Arjuna</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/suci.png" alt="Image">
                            <div class="slider__info">
                                <h2>Suci Lestari</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/zakirah.png" alt="Image">
                            <div class="slider__info">
                                <h2>Zakirah Sabrina Putri Pasha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/erlangga.png" alt="Image">
                            <div class="slider__info">
                                <h2>Erlangga Saputra</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/batara.png" alt="Image">
                            <div class="slider__info">
                                <h2>Batara Obed H. Simbolon</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/aulia.png" alt="Image">
                            <div class="slider__info">
                                <h2>Aulia Khairunnisa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/jihan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Jihan Badiatus Shaliha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/rasyid.png" alt="Image">
                            <div class="slider__info">
                                <h2> M. Rasyid Ridho</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/parnata.png" alt="Image">
                            <div class="slider__info">
                                <h2>Parnata Nalom Banjarnahor</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/putri.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Maharani</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas Relasi merupakan dinas yang menghubungkan BEM KM Fasilkom UNSRI kepada pihak internal
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
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/anandithyo.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhamad Anandithyo Aftarudzaki</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/bagus.png" alt="Image">
                            <div class="slider__info">
                                <h2>Bagus Prihantoro</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/bintang.png" alt="Image">
                            <div class="slider__info">
                                <h2>M. Bintang Naufal Riansyah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/edo.png" alt="Image">
                            <div class="slider__info">
                                <h2>Edo Wicaksono</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/ferdio.png" alt="Image">
                            <div class="slider__info">
                                <h2>Ferdio Putra Prakarsa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/khoiron.png" alt="Image">
                            <div class="slider__info">
                                <h2>Khoiron Abdullah Muqsith</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/rahel.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Rahel Alifia</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/razaan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Razaan Arjuna</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/suci.png" alt="Image">
                            <div class="slider__info">
                                <h2>Suci Lestari</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/zakirah.png" alt="Image">
                            <div class="slider__info">
                                <h2>Zakirah Sabrina Putri Pasha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/erlangga.png" alt="Image">
                            <div class="slider__info">
                                <h2>Erlangga Saputra</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/batara.png" alt="Image">
                            <div class="slider__info">
                                <h2>Batara Obed H. Simbolon</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/aulia.png" alt="Image">
                            <div class="slider__info">
                                <h2>Aulia Khairunnisa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/jihan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Jihan Badiatus Shaliha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/rasyid.png" alt="Image">
                            <div class="slider__info">
                                <h2> M. Rasyid Ridho</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/parnata.png" alt="Image">
                            <div class="slider__info">
                                <h2>Parnata Nalom Banjarnahor</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/putri.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Maharani</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas Bismit merupakan dinas yang berperan untuk menunjang keuangan internal serta menjalin
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
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/anandithyo.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhamad Anandithyo Aftarudzaki</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/bagus.png" alt="Image">
                            <div class="slider__info">
                                <h2>Bagus Prihantoro</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/bintang.png" alt="Image">
                            <div class="slider__info">
                                <h2>M. Bintang Naufal Riansyah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/edo.png" alt="Image">
                            <div class="slider__info">
                                <h2>Edo Wicaksono</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/ferdio.png" alt="Image">
                            <div class="slider__info">
                                <h2>Ferdio Putra Prakarsa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/khoiron.png" alt="Image">
                            <div class="slider__info">
                                <h2>Khoiron Abdullah Muqsith</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/rahel.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Rahel Alifia</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/razaan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Razaan Arjuna</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/suci.png" alt="Image">
                            <div class="slider__info">
                                <h2>Suci Lestari</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/zakirah.png" alt="Image">
                            <div class="slider__info">
                                <h2>Zakirah Sabrina Putri Pasha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/erlangga.png" alt="Image">
                            <div class="slider__info">
                                <h2>Erlangga Saputra</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/batara.png" alt="Image">
                            <div class="slider__info">
                                <h2>Batara Obed H. Simbolon</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/aulia.png" alt="Image">
                            <div class="slider__info">
                                <h2>Aulia Khairunnisa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/jihan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Jihan Badiatus Shaliha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/rasyid.png" alt="Image">
                            <div class="slider__info">
                                <h2> M. Rasyid Ridho</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/parnata.png" alt="Image">
                            <div class="slider__info">
                                <h2>Parnata Nalom Banjarnahor</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/putri.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Maharani</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas Bismit merupakan dinas yang berperan untuk menunjang keuangan internal serta menjalin
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
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/anandithyo.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhamad Anandithyo Aftarudzaki</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/bagus.png" alt="Image">
                            <div class="slider__info">
                                <h2>Bagus Prihantoro</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/bintang.png" alt="Image">
                            <div class="slider__info">
                                <h2>M. Bintang Naufal Riansyah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/edo.png" alt="Image">
                            <div class="slider__info">
                                <h2>Edo Wicaksono</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/ferdio.png" alt="Image">
                            <div class="slider__info">
                                <h2>Ferdio Putra Prakarsa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/khoiron.png" alt="Image">
                            <div class="slider__info">
                                <h2>Khoiron Abdullah Muqsith</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/rahel.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Rahel Alifia</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/razaan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Razaan Arjuna</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/suci.png" alt="Image">
                            <div class="slider__info">
                                <h2>Suci Lestari</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/zakirah.png" alt="Image">
                            <div class="slider__info">
                                <h2>Zakirah Sabrina Putri Pasha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/erlangga.png" alt="Image">
                            <div class="slider__info">
                                <h2>Erlangga Saputra</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/batara.png" alt="Image">
                            <div class="slider__info">
                                <h2>Batara Obed H. Simbolon</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/aulia.png" alt="Image">
                            <div class="slider__info">
                                <h2>Aulia Khairunnisa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/jihan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Jihan Badiatus Shaliha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/rasyid.png" alt="Image">
                            <div class="slider__info">
                                <h2> M. Rasyid Ridho</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/parnata.png" alt="Image">
                            <div class="slider__info">
                                <h2>Parnata Nalom Banjarnahor</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/putri.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Maharani</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas Kajian Strategis menyediakan sebuah media untuk penyajian informasi dalam bentuk berupa
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
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/anandithyo.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhamad Anandithyo Aftarudzaki</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/bagus.png" alt="Image">
                            <div class="slider__info">
                                <h2>Bagus Prihantoro</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/bintang.png" alt="Image">
                            <div class="slider__info">
                                <h2>M. Bintang Naufal Riansyah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/edo.png" alt="Image">
                            <div class="slider__info">
                                <h2>Edo Wicaksono</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/ferdio.png" alt="Image">
                            <div class="slider__info">
                                <h2>Ferdio Putra Prakarsa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/khoiron.png" alt="Image">
                            <div class="slider__info">
                                <h2>Khoiron Abdullah Muqsith</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/rahel.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Rahel Alifia</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/razaan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Razaan Arjuna</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/suci.png" alt="Image">
                            <div class="slider__info">
                                <h2>Suci Lestari</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/zakirah.png" alt="Image">
                            <div class="slider__info">
                                <h2>Zakirah Sabrina Putri Pasha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/erlangga.png" alt="Image">
                            <div class="slider__info">
                                <h2>Erlangga Saputra</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/batara.png" alt="Image">
                            <div class="slider__info">
                                <h2>Batara Obed H. Simbolon</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/aulia.png" alt="Image">
                            <div class="slider__info">
                                <h2>Aulia Khairunnisa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/jihan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Jihan Badiatus Shaliha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/rasyid.png" alt="Image">
                            <div class="slider__info">
                                <h2> M. Rasyid Ridho</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/parnata.png" alt="Image">
                            <div class="slider__info">
                                <h2>Parnata Nalom Banjarnahor</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/putri.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Maharani</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas Sosmasling merupakan salah satu dinas yang ada di organisasi BEM Fasilkom yang bertugas
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
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/anandithyo.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhamad Anandithyo Aftarudzaki</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/bagus.png" alt="Image">
                            <div class="slider__info">
                                <h2>Bagus Prihantoro</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/bintang.png" alt="Image">
                            <div class="slider__info">
                                <h2>M. Bintang Naufal Riansyah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/edo.png" alt="Image">
                            <div class="slider__info">
                                <h2>Edo Wicaksono</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/ferdio.png" alt="Image">
                            <div class="slider__info">
                                <h2>Ferdio Putra Prakarsa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/khoiron.png" alt="Image">
                            <div class="slider__info">
                                <h2>Khoiron Abdullah Muqsith</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/rahel.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Rahel Alifia</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/razaan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Razaan Arjuna</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/suci.png" alt="Image">
                            <div class="slider__info">
                                <h2>Suci Lestari</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/zakirah.png" alt="Image">
                            <div class="slider__info">
                                <h2>Zakirah Sabrina Putri Pasha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/erlangga.png" alt="Image">
                            <div class="slider__info">
                                <h2>Erlangga Saputra</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/batara.png" alt="Image">
                            <div class="slider__info">
                                <h2>Batara Obed H. Simbolon</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/aulia.png" alt="Image">
                            <div class="slider__info">
                                <h2>Aulia Khairunnisa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/jihan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Jihan Badiatus Shaliha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/rasyid.png" alt="Image">
                            <div class="slider__info">
                                <h2> M. Rasyid Ridho</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/parnata.png" alt="Image">
                            <div class="slider__info">
                                <h2>Parnata Nalom Banjarnahor</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/putri.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Maharani</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas Sosmasling merupakan salah satu dinas yang ada di organisasi BEM Fasilkom yang bertugas
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
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/anandithyo.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhamad Anandithyo Aftarudzaki</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/bagus.png" alt="Image">
                            <div class="slider__info">
                                <h2>Bagus Prihantoro</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/bintang.png" alt="Image">
                            <div class="slider__info">
                                <h2>M. Bintang Naufal Riansyah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/edo.png" alt="Image">
                            <div class="slider__info">
                                <h2>Edo Wicaksono</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/ferdio.png" alt="Image">
                            <div class="slider__info">
                                <h2>Ferdio Putra Prakarsa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/khoiron.png" alt="Image">
                            <div class="slider__info">
                                <h2>Khoiron Abdullah Muqsith</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/rahel.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Rahel Alifia</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/razaan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Razaan Arjuna</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/suci.png" alt="Image">
                            <div class="slider__info">
                                <h2>Suci Lestari</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/zakirah.png" alt="Image">
                            <div class="slider__info">
                                <h2>Zakirah Sabrina Putri Pasha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/erlangga.png" alt="Image">
                            <div class="slider__info">
                                <h2>Erlangga Saputra</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/batara.png" alt="Image">
                            <div class="slider__info">
                                <h2>Batara Obed H. Simbolon</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/aulia.png" alt="Image">
                            <div class="slider__info">
                                <h2>Aulia Khairunnisa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/jihan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Jihan Badiatus Shaliha</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/rasyid.png" alt="Image">
                            <div class="slider__info">
                                <h2> M. Rasyid Ridho</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/parnata.png" alt="Image">
                            <div class="slider__info">
                                <h2>Parnata Nalom Banjarnahor</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/medinfo/putri.png" alt="Image">
                            <div class="slider__info">
                                <h2>Putri Maharani</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas medinfo ialah dinas yang mengelola masuk keluarnya informasi di BEM KM Fasilkom Unsri dalam
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
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/farrel.png" alt="Image">
                            <div class="slider__info">
                                <h2>Farrel Athaillah Wijaya </h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/shofwan.png" alt="Image">
                            <div class="slider__info">
                                <h2>Shofwan Mahdi</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/rifqi.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Rifqi Rizqullah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/fachry.png" alt="Image">
                            <div class="slider__info">
                                <h2>Fachry Ghifary</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/dayef.png" alt="Image">
                            <div class="slider__info">
                                <h2>Dayef Alfarey Benjamin</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/alif.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Alif Alferdiansyah</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/jordi.png" alt="Image">
                            <div class="slider__info">
                                <h2>Jordi Abrar satria</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/rey.png" alt="Image">
                            <div class="slider__info">
                                <h2>M. Reyvaldo</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/kevin.png" alt="Image">
                            <div class="slider__info">
                                <h2>Jhon Kevin Andianto Sinaga</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/fitran.png" alt="Image">
                            <div class="slider__info">
                                <h2>Fitran Husein</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/lia.png" alt="Image">
                            <div class="slider__info">
                                <h2>Lia</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/zwesty.png" alt="Image">
                            <div class="slider__info">
                                <h2>Zwesty Quatra</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/faizal.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Faizal</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/fathul.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Fathul Akbar</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/rifki.png" alt="Image">
                            <div class="slider__info">
                                <h2>M. Rifki Tri Saputra </h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/ristek/alfarizi.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Alfarizi Ramadhiyansa</h2>
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
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/amrina.png" alt="Image">
                            <div class="slider__info">
                                <h2>Amrina Rosyada Zikri</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/archie.png" alt="Image">
                            <div class="slider__info">
                                <h2>Archie PH Sinaga</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/bahij.png" alt="Image">
                            <div class="slider__info">
                                <h2>Bahij Ammar Dzakwan Al Faiq</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/basyar.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhammad Basyar</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/cahaya.png" alt="Image">
                            <div class="slider__info">
                                <h2>Cahaya Hijrun</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/gyiash.png" alt="Image">
                            <div class="slider__info">
                                <h2>Gyiash Augis Ahmad</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/irsal.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muzaniirsal</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/marsanda.png" alt="Image">
                            <div class="slider__info">
                                <h2>Marsanda</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/nazif.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nazif Nizal</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/neza.png" alt="Image">
                            <div class="slider__info">
                                <h2>Neza Rayendra</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/rani.png" alt="Image">
                            <div class="slider__info">
                                <h2>Rani Sagita</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/olahraga/zacky.png" alt="Image">
                            <div class="slider__info">
                                <h2>Zacky Bayu Iskandar</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Secara garis besar dinas olahraga pada BEM KM FASILKOM adalah untuk Menjaring atau mewadahi
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
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/cisa.png" alt="Image">
                            <div class="slider__info">
                                <h2>Cisa Livia Virnandyka</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/fakhrel.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muhamad Fakhrel Bagaskara</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/ghea.png" alt="Image">
                            <div class="slider__info">
                                <h2>Ghea Khairunnisa</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/iqbal.png" alt="Image">
                            <div class="slider__info">
                                <h2>Iqbal Akbar Kurniawan</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/muanai.png" alt="Image">
                            <div class="slider__info">
                                <h2>Muanai Khalifah Revindo</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/nayla.png" alt="Image">
                            <div class="slider__info">
                                <h2>Nayla Mutia Renata</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/raden.png" alt="Image">
                            <div class="slider__info">
                                <h2>Raden Ayu Hikmah Rizky</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/rizky.png" alt="Image">
                            <div class="slider__info">
                                <h2>Rizky Daffa Permana</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/silvia.png" alt="Image">
                            <div class="slider__info">
                                <h2>Silvia Nabila Putri</h2>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img loading="lazy" class="slider__image" src="assets/image/senbud/tanjung.png" alt="Image">
                            <div class="slider__info">
                                <h2>M. A. Tanjung Idrussalam</h2>
                            </div>
                        </div>
                    </div>
                    <div class="slider__nav" style="display: flex;justify-content: center;">
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
                        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
                    </div>
                </div>
                <div class="detail-dinas">
                    <p>Dinas seni budaya di bem ini merupakan dinas yang bertanggung jawab untuk mengelola kegiatan dan
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
<!--Bidang End-->
@endsection