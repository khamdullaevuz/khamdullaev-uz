@extends('layouts.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                     data-aos="fade-up" data-aos-delay="200">
                    <h1>Elbek Khamdullaev</h1>
                    <h2>Backend dasturchi</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Men haqimda</a>
                        <a href="uploads/resume.pdf" class="btn-watch-video"><i
                                class="bi bi-cloud-download"></i><span>Rezyume</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Men haqimda</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            Men backend va telegram bot dasturchisiman.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Istalgan turdagi veb saytlar yaratib beraman</li>
                            <li><i class="ri-check-double-line"></i> Istalgan turdagi telegram botlar yaratib beraman
                            </li>
                            <li><i class="ri-check-double-line"></i> Mobil ilovalar yoki frontend uchun rest api yaratib beraman</li>
                            <li><i class="ri-check-double-line"></i> Veb sayt va telegram botlarni click, payme va boshqa to'lov tizimlariga ulab beraman</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Men Elbek Khamdullaev backend dasturchiman. Hozirda ABIZ kompaniyasida faoliyat olib bormoqdaman. Men haqimda batafsil ma'lumotni quyidagi rezyume orqali bilib olishingiz mumkin
                        </p>
                        <a href="uploads/resume.pdf" class="btn-learn-more">Rezyume</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3>Ko'p beriladigan <strong>savollar</strong></h3>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse link"
                                       data-bs-target="#accordion-list-1"><span>01</span> Buyurtmalarni bajarishingiz
                                        uchun
                                        qancha vaqt talab etiladi? <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p>
                                            Buyurtmalarni bajarish vaqti (deadline) ishning murakkabligiga qarab 1
                                            kundan 1
                                            oycha muddatni tashkil etadi.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                       class="collapsed  link"><span>02</span>
                                        Buyurtmalarning narxini qanday belgilaysiz? <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Buyurtmalarni narxini buyurtma murakkabligiga qarab belgilayman.
                                            Boshlang'ich
                                            narxlar bilan <a href="#pricing" class="scrollto">narxlar</a> bo'limida
                                            tanishishingiz mumkin. Nega buncha qimmat deyishdan avval ketadigan
                                            vaqtimiz,
                                            bilmimiz va asablarimizni ham hisobga olishingizni so'rab qolaman :)
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                       class="collapsed  link"><span>03</span>
                                        Qanday buyurtma bersam bo'ladi? <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Buyurtma berish uchun <a href="#contact">bog'lanish</a> bo'limidan
                                            foydalanishingiz, telegramda <a href="https://t.me/khamdullaevuz">@khamdullaevuz</a>ga
                                            murojaat qilishingiz yoki <a href="tel:990718525">+998 (99) 071 85 25</a>
                                            telefon raqamiga qo'ng'iroq qilishingiz mumkin!
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                         style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in"
                         data-aos-delay="150">
                        &nbsp;
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Xizmatlar</h2>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-archive"></i></div>
                            <h4>Backend</h4>
                            <p>Veb saytlarning backend qismini dasturlash va serverga o'rnatish</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                         data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-hdd-network"></i></div>
                            <h4>Rest API</h4>
                            <p>Mobil ilovalar va frontendchilar uchun rest api yaratib berish</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                         data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4>Telegram bot</h4>
                            <p>Istalgan murakkablikdagi telegram botlarni va admin panelini yaratish</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                         data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-dollar"></i></div>
                            <h4>To'lov tizimlari</h4>
                            <p>Veb sayt va telegram botlarni click, payme va boshqa to'lov tizimlariga ulab berish</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Buyurtma bermoqchimisiz?</h3>
                        <p> Unda hoziroq qo'ng'iroq qiling yoki telegram orqali murojaat qiling!</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="tel:990718525"><i class="bi bi-telephone-fill"></i></a><a class="cta-btn align-middle" href="https://t.me/khamdullaevuz"><i class="bx bxl-telegram"></i></a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Hozirgacha yaratgan loyihalarim bilan shu yerda tanishishingiz mumkin!</p>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach($works as $work)
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="portfolio-img"><img src="uploads/{{$work->photo}}" class="img-fluid"
                                                            alt="">
                            </div>
                            <div class="portfolio-info">
                                <h4>{{$work->name}}</h4>
                                <p>{{$work->description}}</p>
                                <a href="uploads/{{$work->photo}}" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox preview-link" title="{{$work->name}}"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{$work->link}}" class="details-link" title="Ko'proq ma'lumot"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Bog'lanish</h2>
                    <p>Buyurtma bermoqchimisiz? Yoki yana boshqa savollaringiz bormi unda men bilan quyidagi ma'lumotlar
                        orqali bog'lanishingiz mumkin!</p>
                </div>


                    <div class="d-flex align-items-stretch">
                        <div class="info row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Elektron pochta:</h4>
                                <p><a href="mailto:elbek.khamdullaev@gmail.com" class="custom-link">elbek.khamdullaev@gmail.com</a></p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telefon:</h4>
                                <p><a href="tel:990718525" class="custom-link">+998 (99) 071 85 25</a></p>
                            </div>
                     <div class="telegram">

                                <i class="bx bxl-telegram"></i>

                                <h4>Telegram:</h4>
                                <p><a href="https://t.me/khamdullaevuz" class="custom-link">@khamdullaevuz</a></p>
                            </div>
                            </div><div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="linkedin">
                                <i class="bi bi-linkedin"></i>
                                <h4>LinkedIn:</h4>
                                <p><a href="https://linkedin.com/in/khamdullaevuz" class="custom-link">in/khamdullaevuz</a></p>
                            </div>

                            <div class="twitter">
                                <i class="bi bi-twitter"></i>
                                <h4>Twitter:</h4>
                                <p><a href="https://twitter.com/khamdullaevuz" class="custom-link">@khamdullaevuz</a></p>
                            </div>
                     <div class="telegram">

                                <i class="bi bi-facebook"></i>

                                <h4>Facebook:</h4>
                                <p><a href="https://facebook.com/khamdullaevuz" class="custom-link">@khamdullaevuz</a></p>
                            </div>
                            </div>
                        </div>


                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
