@extends('layouts.frontend.master')

@section('content')
    <div class="wrapper">

        <!-- ========================
                       page title
                    =========================== -->
        <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
            <div class="bg-img"><img src="{{ url('solatec/assets/images/page-titles/1.jpg') }}" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="pagetitle__heading mb-0">Tentang Kami</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                            </ol>
                        </nav>
                        <a href="#about" class="scroll-down">
                            <i class="icon-arrow-down"></i>
                        </a>
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.page-title -->


        <section class="about-layout1 pt-130 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">
                        <div class="heading__layout2 mb-60">
                            <h2 class="heading__subtitle">Menjadi Inovasi dan Membantu DKM Daerah di Indonesia</h2>
                            <h3 class="heading__title">Mengoptimalkan layanan pengumpulan dan pendistribusian zakat fitrah
                            </h3>
                        </div><!-- /.heading__layout2 -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
                <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-2 d-flex justify-content-between">
                        <!-- counter item #1 -->
                        <div class="counter-item" style="margin-right: 300px;" >
                            <h4 class="counter">{{ $jumlah_zakat->total_beras }}</h4>
                            <p class="counter__desc pr-0">Kilogram Beras yang telah di distribusikan</p>
                            <div class="divider__line"></div>
                        </div>
                        <!-- counter item #2 -->
                        <div class="counter-item" style="margin-right: 300px;">
                            <h4 class="counter">{{ $jumlah_zakat->total_uang }}</h4>
                            <p class="counter__desc pr-0">Uang yang telah di distribusikan</p>
                            <div class="divider__line"></div>
                        </div>
                        <!-- counter item #3 -->
                        <div class="counter-item" style="margin-right: 30px;">
                            <h4 class="counter">{{ $jumlah_zakat->total_distribusi }}</h4>
                            <p class="counter__desc pr-0">Total semua distribusi zakat</p>
                            <div class="divider__line"></div>
                        </div>
                    </div><!-- /.col-lg-2 --> 
                    
                   
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.About Layout 1 -->

        <!-- ======================
                                                                                                                                                          services Layout 2
                                                                                                                                                          ========================= -->
        <section class="services-layout2 pt-120">
            <div class="bg-img"><img src="{{ url('solatec/assets/images/backgrounds/5.jpg') }}" alt="background"></div>
            <div class="container">
                <div class="row mb-70">
                    <div class="col-12">
                        <h2 class="heading__subtitle color-primary">Kategori mustahik yang kami terima</h2>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <h3 class="heading__title color-white">Berikut adalah kategori mustahik yang berhak mendapatkan
                            zakat fitrah.</h3>
                    </div><!-- /col-lg-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                        <p class="heading__desc font-weight-bold color-gray mb-30">Bagi muslim yang tidak mampu mencukupi
                            biaya hidup, mereka tidak wajib membayar zakat, sebaliknya, mereka malah harus diberikan zakat.

                            Siapa saja orang-orang yang berhak menerima zakat?</p>
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="slick-carousel carousel-arrows-light"
                            data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2, "slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1, "slidesToScroll": 1}}]}'>
                            <!-- service item #1 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ url('solatec/assets/images/services/1.jpg') }}" alt="service"
                                        loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Fakir</h4>
                                    <p class="service__desc">Fakir ialah orang-orang yang punya harta tapi sedikit. Mereka
                                        tak punya penghasilan, jarang bisa memenuhi kebutuhan sehari-hari.</p>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <!-- service item #2 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ url('solatec/assets/images/services/2.jpg') }}" alt="service"
                                        loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Miskin</h4>
                                    <p class="service__desc">Orang-orang dengan harta sedikit, penghasilan pas-pasan. Cukup
                                        untuk makan, minum dan tak lebih. Namun, kebutuhan lain harus ditunda.</p>

                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <!-- service item #3 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ url('solatec/assets/images/services/3.jpg') }}" alt="service"
                                        loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Amil</h4>
                                    <p class="service__desc">Mereka mengurus zakat mulai dari penerimaan hingga menyalurkan
                                        ke orang yang membutuhkan. Berupaya agar zakat sampai ke penerima yang tepat. </p>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <!-- service item #4 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ url('solatec/assets/images/services/4.jpg') }}" alt="service"
                                        loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Mu'allaf </h4>
                                    <p class="service__desc">Mu'allaf dan yang baru masuk Islam berhak menerima zakat. Agar
                                        semakin mantap dalam memeluk agama dan meningkatkan ketaqwaan.</p>

                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <!-- service item #5 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ url('solatec/assets/images/services/5.jpg') }}" alt="service"
                                        loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Riqab</h4>
                                    <p class="service__desc">Dahulu zakat membayar atau menebus budak yang dijadikan oleh
                                        saudagar kaya. Mereka dimerdekakan dengan zakat.</p>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <!-- service item #6 -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ url('solatec/assets/images/services/6.jpg') }}" alt="service"
                                        loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Gharim</h4>
                                    <p class="service__desc">Gharim berhak menerima zakat. Namun, berhutang untuk maksiat
                                        dan bangkrut, hak zakat gugur. Agar zakat tepat sasaran.</p>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ url('solatec/assets/images/services/6.jpg') }}" alt="service"
                                        loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Fi Sabilillah</h4>
                                    <p class="service__desc">Sabilillah adalah kegiatan untuk kepentingan di jalan Allah.
                                        Misalnya pengembangan pendidikan, dakwah, kesehatan, panti asuhan, madrasah diniyah.
                                    </p>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                            <div class="service-item">
                                <div class="service__img">
                                    <img src="{{ url('solatec/assets/images/services/6.jpg') }}" alt="service"
                                        loading="lazy">
                                </div><!-- /.service__img -->
                                <div class="service__body">
                                    <h4 class="service__title">Ibnu Sabil</h4>
                                    <p class="service__desc">Ibnu Sabil atau musaffir, termasuk pekerja dan pelajar di
                                        tanah perantauan. Mereka mendapat hak sama seperti yang lain, agar bisa beraktivitas
                                        dengan baik.
                                    </p>
                                </div><!-- /.service__body -->
                            </div><!-- /.service-item -->
                        </div><!-- /.carousel-->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-5">
                        <p class="read-note__text">
                            <strong class="color-white">Sumber yang saya terima merupakan golongan yang berhak menerima
                                zakat dari website, </strong>
                            <a href="#" class="text-underlined-primary color-primary font-weight-bold">
                                <span>Indonesiabaik.id </span> <i class="icon-arrow-right"></i>
                            </a>
                        </p>
                    </div><!-- /.col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.services Layout 2 -->

        <!-- ======================
                                                                                                                                                            Blog Grid
                                                                                                                                                          ========================= -->
        

    </div>
@endsection
