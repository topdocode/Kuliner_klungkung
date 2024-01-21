<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page | Delicious Klungkung</title>
    <link rel="icon" href="{{ asset('assets/img-homepage/logo.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css-homepage/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css-homepage/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>

<body id="home">
    @if (session()->has('success'))
        <script>
            alert('Submit Feedback Successfully!');
        </script>
    @elseif(session()->has('failed'))
        <script>
            alert('Submit Feedback Failed!');
        </script>
    @endif

    <nav class="navbar navbar-expand-lg py-3">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/img-homepage/logo.svg') }}"
                    alt="" draggable="false"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link px-3 active fw-medium" href="#body">@lang('messages.nav_link1')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 fw-medium" href="#featured">@lang('messages.nav_link2')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 fw-medium" href="#about">@lang('messages.nav_link3')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 fw-medium" href="#menu">@lang('messages.nav_link4')</a>
                    </li>
                </ul>
            </div>
            <div class="d-lg-flex justify-content-end align-items-center d-none gap-2">
                <a href="https://wa.me/+62123456789" target="_blank" class="btn btn-color"
                    style="height: fit-content; padding: 13px 22px;">@lang('messages.nav_button')</a>
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" style="height: fit-content; padding: 13px 22px;"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ strtoupper(session('locale')) ?? strtoupper(config('app.locale')) }}
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('switch-language', ['locale' => 'id']) }}">ID</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('switch-language', ['locale' => 'en']) }}">EN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main class="mt-2">
        <section class="hero-section position-relative">
            <div class="bg-section position-absolute top-0" style="height: 100vh;"></div>
            <div class="container position-relative">
                <div class="row justify-content-start">
                    <div class="col-xl-6 col-lg-7 col-12">
                        <div class="badge-section">
                            <p class="main-color fs-13">
                                @lang('messages.hero_subtitle')
                            </p>
                        </div>
                        <p class="fw-semibold display-4 mt-3 text-black">
                            @lang('messages.hero_headline')
                        </p>
                        <article class="mt-3">
                            <p>
                                @lang('messages.hero_paragraph1')
                            </p>
                            <p class="mt-1">
                                @lang('messages.hero_paragraph2')
                            </p>
                        </article>
                        <div class="mt-4 d-flex flex-row gap-2">
                            <a href="#about" class="btn btn-color"> @lang('messages.hero_button1')
                            </a>
                            <a href="#menu" class="btn btn-dark d-flex flex-row align-items-center gap-2">
                                @lang('messages.hero_button2')
                                <img src="{{ asset('assets/img-homepage/arr-btn-dark.svg') }}" draggable="false">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-banner row  position-absolute d-none top-0 banner-background end-0 d-lg-inline-block">
            </div>
        </section>

        <section id="featured" class="benefit-section container">
            <div class="top-section row gy-4">
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="d-flex flex-column">
                        <div class="badge-section">
                            <p class="fs-13 fw-medium main-color">@lang('messages.featured_subtitle')</p>
                        </div>
                        <p class="mt-2 display-5 fw-semibold text-black">
                            @lang('messages.featured_title')
                        </p>
                    </div>
                </div>
                <div class="col-lg-1 d-lg-block d-none"></div>
                <div class="col-lg-5 align-self-end col-md-6 col-12">
                    @lang('messages.featured_paragraph')
                </div>
            </div>
            <div class="content-section mt-5 row row-cols-xl-4 gy-4 row-cols-lg-3 row-cols-md-2 row-cols-1">
                <div class="col">
                    <div class="card-benefit">
                        <img src="{{ asset('assets/img-homepage/benefit1.svg') }}" alt="benefit-icon"
                            draggable="false">
                        <div class="d-flex flex-column mt-3">
                            <p class="fs-17 fw-semibold text-black">@lang('messages.featured_item1_title')</p>
                            <p class="fs-15 fw-medium">
                                @lang('messages.featured_item1_description')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-benefit">
                        <img src="{{ asset('assets/img-homepage/benefit2.svg') }}" alt="benefit-icon"
                            draggable="false">
                        <div class="d-flex flex-column mt-3">
                            <p class="fs-17 fw-semibold text-black">@lang('messages.featured_item2_title')</p>
                            <p class="fs-15 fw-medium">
                                @lang('messages.featured_item2_description')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-benefit">
                        <img src="{{ asset('assets/img-homepage/benefit3.svg') }}" alt="benefit-icon"
                            draggable="false">
                        <div class="d-flex flex-column mt-3">
                            <p class="fs-17 fw-semibold text-black">@lang('messages.featured_item3_title')</p>
                            <p class="fs-15 fw-medium">
                                @lang('messages.featured_item3_description')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-benefit">
                        <img src="{{ asset('assets/img-homepage/benefit4.svg') }}" alt="benefit-icon"
                            draggable="false">
                        <div class="d-flex flex-column mt-3">
                            <p class="fs-17 fw-semibold text-black">@lang('messages.featured_item4_title')</p>
                            <p class="fs-15 fw-medium">
                                @lang('messages.featured_item4_description')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about-section position-relative">
            <div class="bg-section"></div>
            <div class="row about-banner position-absolute d-none top-0 banner-background start-0 d-lg-inline-block">
            </div>
            <div class="container position-relative">
                <div class="row justify-content-end">
                    <div class="col-xl-6 col-lg-7 col-12">
                        <div class="badge-section">
                            <p class="main-color fs-13">
                                @lang('messages.about_subtitle')
                            </p>
                        </div>
                        <p class="fw-semibold display-5 mt-3 text-black">
                            @lang('messages.about_title')
                        <article class="mt-3">
                            <p>
                                @lang('messages.about_paragraph1')
                            <p class="mt-1">
                                @lang('messages.about_paragraph2')
                        </article>
                        <div class="mt-4 d-flex row gy-4 justify-content-lg-center align-items-center">
                            <div class="col col-lg-4 col-md-3 col-12">
                                <div class="d-flex flex-column align-items-center">
                                    <p class="display-5 main-color fw-bolder">{{ $menu_count }}</p>
                                    <p class="fw-medium">
                                    <p class="fs-13">
                                        @lang('messages.about_caption1')</p>
                                </div>
                            </div>
                            <div class="col d-lg-block d-none col-lg-1 col-md-6 col-12">
                                <div class="">
                                    <img src="{{ asset('assets/img-homepage/hr-abt.svg') }}" class="img-fluid"
                                        draggable="false">
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-12">
                                <div class="d-flex flex-column align-items-center">
                                    <p class="display-5 main-color fw-bolder">{{ $feedback_count }}</p>
                                    <p class="fw-medium">
                                    <p class="fs-13">
                                        @lang('messages.about_caption2')</p>
                                </div>
                            </div>
                            <div class="col d-lg-block d-none col-lg-1 col-md-6 col-12">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('assets/img-homepage/hr-abt.svg') }}" class="img-fluid"
                                        draggable="false">
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-3 col-12">
                                <div class="d-flex flex-column align-items-center">
                                    <p class="display-5 main-color fw-bolder">{{ $location_count }}</p>
                                    <p class="fw-medium">
                                    <p class="fs-13">
                                        @lang('messages.about_caption3')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="restaurant-section container">
            <div class="top-section row gy-4">
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="d-flex flex-column">
                        <div class="badge-section">
                            <p class="fs-13 fw-medium main-color">
                                @lang('messages.restaurant_subtitle')
                            </p>
                        </div>
                        <p class="mt-2 display-5 fw-semibold text-black">
                            @lang('messages.restaurant_title')
                        </p>
                    </div>
                </div>
                <div class="col-lg-1 d-lg-block d-none"></div>
                <div class="col-lg-5 align-self-end col-md-6 col-12">
                    @lang('messages.restaurant_paragraph')
                </div>
            </div>
            <div class="content-section mt-5">
                <div class="swiper swiper-restaurant pb-5">
                    <div class="swiper-wrapper">
                        @foreach ($locations as $i => $location)
                            <div class="swiper-slide">
                                <div class="card-restaurant">
                                    <img src="{{ asset('storage/' . $location->image) }}" alt="Restaurant Image"
                                        class="w-100">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#LocationModal"
                                        data-id="{{ $location->id }}" class="text-black fw-semibold fs-17 mt-3 p-0"
                                        style="background-color: transparent; border: none; stroke: none">{{ $location->name }}</button>
                                    <p class="fs-15 mt-1"
                                        style="-webkit-line-clamp:2; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; color: #212529black;">
                                        {{ $location->translation(session('locale'))->description ?? $location->description }}
                                    </p>
                                    <p class="main-color fs-13 mt-2 fw-semibold">{{ $location->address }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <section class="history-section position-relative">
            <div class="bg-section position-absolute top-0"></div>
            <div class="container position-relative">
                <div class="row justify-content-start">
                    <div class="col-xl-6 col-lg-7 col-12">
                        <div class="badge-section">
                            <p class="main-color fs-13">
                                @lang('messages.restaurant_subtitle')
                            </p>
                        </div>
                        <p class="fw-semibold display-5 mt-3 text-black">
                            @lang('messages.history_title')
                        </p>
                        <article class="mt-3">
                            <p>
                                @lang('messages.history_paragraph1')
                            </p>
                            <p class="mt-1">
                                @lang('messages.history_paragraph2')
                            </p>
                        </article>
                        <div class="mt-4 d-flex flex-row gap-3">
                            <a href="#chef" class="btn btn-color">@lang('messages.history_button1')</a>
                            <a href="https://wa.me/+62123456789" target="_blank"
                                class="btn btn-dark d-flex flex-row align-items-center gap-2">@lang('messages.history_button2') <img
                                    src="{{ asset('assets/img-homepage/arr-btn-dark.svg') }}" draggable="false">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="history-banner row  position-absolute d-none top-0 banner-background end-0 d-lg-inline-block">
            </div>
        </section>

        <section id="menu" class="menu-section container">
            <div class="top-section row gy-4">
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="d-flex flex-column">
                        <div class="badge-section">
                            <p class="fs-13 fw-medium main-color">
                                @lang('messages.menu_subtitle')
                            </p>
                        </div>
                        <p class="mt-2 display-5 fw-semibold text-black">
                            @lang('messages.menu_title')
                        </p>
                    </div>
                </div>
                <div class="col-lg-1 d-lg-block d-none"></div>
                <div class="col-lg-5 align-self-end col-md-6 col-12">
                    <p>
                        @lang('messages.menu_paragraph')
                    </p>
                </div>
            </div>
            <div class="content-section mt-5 gy-4 row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1">
                @foreach ($menus as $menu)
                    <div class="col">
                        <div class="card-menu">
                            <img src="{{ asset('storage/' . $menu->image) }}" alt="Klungkung Chicken Rise"
                                class="w-100">
                            <p class="text-black fw-semibold mt-3 fs-17">
                                {{ $menu->translation(session('locale'))->name ?? $menu->name }}</p>
                            <p class="fs-15 mt-2"
                                style="-webkit-line-clamp:2; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; color: #212529;">
                                {{ $menu->translation(session('locale'))->description ?? $menu->description }}
                            </p>
                            <div class="d-flex flex-row justify-content-between mt-3 gap-2">
                                <button type="button" class="btn btn-color fs-13 btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#MenuDetail" data-id="{{ $menu->id }}"
                                    style="width: 100%; padding-right: 0; padding-left: 0;">
                                    @lang('messages.menu_button1')
                                </button>
                                <a href="/detail/{{ $menu->id }}" class="btn btn-border fs-13 btn-sm"
                                    style="width: 100%; padding-right: 0; padding-left: 0;">@lang('messages.menu_button2')</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="testi-section position-relative" id="chef">
            <div class="bg-section h-100"></div>
            <div class="row testi-banner position-absolute d-none top-0 banner-background start-0 d-lg-inline-block">
            </div>
            <div class="container position-relative">
                <div class="row justify-content-end">
                    <div class="col-xl-6 col-lg-7 col-12">
                        <div class="badge-section">
                            <p class="main-color fs-13">
                                @lang('messages.testimonial_subtitle')
                            </p>
                        </div>
                        <p class="fw-semibold display-5 mt-3 text-black">
                            @lang('messages.testimonial_title')
                        </p>
                        <article class="mt-3">
                            <p>
                                @lang('messages.testimonial_paragraph')
                            </p>
                        </article>
                        <div class="mt-4 swiper swiper-testi pb-5">
                            <div class="swiper-wrapper">
                                @foreach ($chefs as $i => $chef)
                                    <div class="swiper-slide">
                                        <div class="card-testi">
                                            <div class="d-flex flex-column">
                                                <div class="d-flex flex-row gap-3 align-items-center">
                                                    <img src="{{ asset('storage/' . $chef->image) }}"
                                                        alt="testimonial img" class="img-fluid" width="52">
                                                    <div class="d-flex flex-column">
                                                        <button type="button" data-bs-toggle="modal"
                                                            data-bs-target="#ChefModal" data-id="{{ $chef->id }}"
                                                            class="main-color fw-medium p-0"
                                                            style="background-color: transparent; border: none; stroke: none">{{ $chef->name }}</button>
                                                        @if ($chef->locations_id !== null)
                                                            @foreach ($locations as $location)
                                                                @if ($location->id == $chef->locations_id)
                                                                    <p class="text-black fw-medium fs-13">
                                                                        {{ $location->name }}</p>
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            <p class="text-black fw-medium fs-13">-</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <p class="fw-medium fs-14 mt-2"
                                                    style="-webkit-line-clamp:2; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; color: #212529;">
                                                    {{ $chef->translation(session('locale'))->description ?? $chef->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination justify-content-start d-flex"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq-section container">
            <div class="top-section row gy-4">
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="d-flex flex-column">
                        <div class="badge-section">
                            <p class="fs-13 fw-medium main-color">
                                @lang('messages.faq_subtitle')
                            </p>
                        </div>
                        <p class="mt-2 display-5 fw-semibold text-black">
                            @lang('messages.faq_title')
                        </p>
                    </div>
                </div>
                <div class="col-lg-1 d-lg-block d-none"></div>
                <div class="col-lg-5 align-self-end col-md-6 col-12">
                    <p>
                        @lang('messages.faq_paragraph')
                    </p>
                </div>
            </div>
            <div class="content-section mt-5 gy-4 row row-cols-md-2 row-cols-1">
                <div class="col">
                    <div class="accordion" id="myAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button"
                                    class="accordion-button ps-0  collapsed gap-1 title-font fs-18 fw-semibold"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne">@lang('messages.faq_question1_title')</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p class="fs-15 desc-color fw-medium">
                                        @lang('messages.faq_question1_answear')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="accordion" id="myAccordion2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button type="button"
                                    class="accordion-button ps-0  collapsed gap-1 title-font fs-18 fw-semibold"
                                    data-bs-toggle="collapse" data-bs-target="#collapse2">@lang('messages.faq_question2_title')</button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#myAccordion2">
                                <div class="card-body">
                                    <p class="fs-15 desc-color fw-medium">
                                        @lang('messages.faq_question2_answear')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="accordion" id="myAccordion3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button type="button"
                                    class="accordion-button ps-0  collapsed gap-1 title-font fs-18 fw-semibold"
                                    data-bs-toggle="collapse" data-bs-target="#collapse3">@lang('messages.faq_question3_title')</button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#myAccordion3">
                                <div class="card-body">
                                    <p class="fs-15 desc-color fw-medium">
                                        @lang('messages.faq_question3_answear')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="accordion" id="myAccordion4">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button type="button"
                                    class="accordion-button ps-0  collapsed gap-1 title-font fs-18 fw-semibold"
                                    data-bs-toggle="collapse" data-bs-target="#collapse4">@lang('messages.faq_question4_title')</button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#myAccordion4">
                                <div class="card-body">
                                    <p class="fs-15 desc-color fw-medium">
                                        @lang('messages.faq_question4_answear')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="accordion" id="myAccordion5">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button type="button"
                                    class="accordion-button ps-0  collapsed gap-1 title-font fs-18 fw-semibold"
                                    data-bs-toggle="collapse" data-bs-target="#collapse5">@lang('messages.faq_question5_title')</button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                <div class="card-body">
                                    <p class="fs-15 desc-color fw-medium">
                                        @lang('messages.faq_question5_answear')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="accordion" id="myAccordion6">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading6">
                                <button type="button"
                                    class="accordion-button ps-0  collapsed gap-1 title-font fs-18 fw-semibold"
                                    data-bs-toggle="collapse" data-bs-target="#collapse6">@lang('messages.faq_question6_title')</button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#myAccordion6">
                                <div class="card-body">
                                    <p class="fs-15 desc-color fw-medium">
                                        @lang('messages.faq_question6_answear')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-section position-relative">
            <div class="bg-section position-absolute top-0"></div>
            <div class="container position-relative">
                <div class="row justify-content-start">
                    <div class="col-xl-6 col-lg-7 col-12">
                        <div class="badge-section">
                            <p class="main-color fs-13">
                                @lang('messages.cta_subtitle')
                            </p>
                        </div>
                        <p class="fw-semibold display-5 mt-3 text-black">
                            @lang('messages.cta_title')
                        </p>
                        <article class="mt-2">
                            <p>
                                @lang('messages.cta_paragraph')
                            </p>
                        </article>
                        <form action="{{ route('store-feedback') }}" method="post">
                            @csrf
                            <div class="mt-3 row gy-4">
                                <div class="col-md-6 col-12">
                                    <div class="d-flex flex-column">
                                        <p class="fs-15 fw-medium text-black">@lang('messages.cta_form1')</p>
                                        <input type="text" name="name" class="input-text mt-1"
                                            placeholder="@lang('messages.cta_form1_placeholder')">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="d-flex flex-column">
                                        <p class="fs-15 fw-medium text-black">@lang('messages.cta_form2')</p>
                                        <input type="email" name="email" class="input-text mt-1"
                                            class="input-text" placeholder="@lang('messages.cta_form2_placeholder')">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p class="fs-15 fw-medium text-black">@lang('messages.cta_form3')</p>
                                    <textarea name="message" class="input-text mt-1 w-100" class="input-text" placeholder="@lang('messages.cta_form3_placeholder')"
                                        rows="4"></textarea>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-color">@lang('messages.cta_button')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="cta-banner row  position-absolute d-none top-0 banner-background end-0 d-lg-inline-block">
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer-content pb-3 row gy-5">

                <div style="">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 col-lg-12">
                            <div class="card shadow-0 border" style="background-color: #f0f2f5;">
                                <div class="card-body p-4" style="height: 250px; overflow-y: auto">
                                    @foreach ($feedbacks as $item)
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <p>{{ $item?->email }}</p>

                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-row align-items-center">
                                                        <img src="{{ asset('assets/user.png') }}" alt="avatar"
                                                            width="25" height="25" />
                                                        <p class="small mb-0 ms-2">{{ $item?->name }}</p>
                                                    </div>
                                                </div>
                                                <p class="" style="margin-top: 5px">{{ $item?->message }}</p>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-12 ">
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-column">
                            <div class="">
                                <img src="{{ asset('assets/img-homepage/logo.svg') }}" class="img-fluid"
                                    alt="logo">
                            </div>
                            <p class="footer-color pt-3 footer-desc">
                                @lang('messages.footer_paragraph')
                            </p>
                        </div>
                        <div class="d-flex flex-row pt-4 gap-2">
                            <a target="_blank" href="https://www.instagram.com/" class="btn footer-btn">
                                <i class="fa-brands fa-instagram the-arrow footer-color fs-6"></i>
                            </a>
                            <a target="_blank" href="https://id-id.facebook.com/" class="btn footer-btn">
                                <i class="fa-brands fa-facebook-f the-arrow footer-color fs-6"></i>
                            </a>
                            <a target="_blank" href="https://twitter.com/" class="btn footer-btn">
                                <i class="fa-brands fa-twitter the-arrow footer-color  fs-6"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12 pe-5" style="width:fit-content;">
                    <p class="text-white title-font second-font fw-medium" style="font-size: 1.125rem;">
                        @lang('messages.footer_column1_title')</p>
                    <div class="d-flex flex-column pt-4">
                        <a href="#home" class="footer-color footer-link ">@lang('messages.footer_column1_item1')</a>
                        <a href="#featured" class="footer-color footer-link pt-3">@lang('messages.footer_column1_item2')</a>
                        <a href="#about" class="footer-color footer-link pt-3">@lang('messages.footer_column1_item3')</a>
                        <a href="#menu" class="footer-color footer-link pt-3">@lang('messages.footer_column1_item4')</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <p class="text-white title-font second-font fw-medium" style="font-size: 1.125rem;">
                        @lang('messages.footer_column2_title')
                    </p>
                    <div class="d-flex flex-column pt-4">
                        <a href="#featured" class="footer-color footer-link ">@lang('messages.footer_column2_item1')</a>
                        <a href="#featured" class="footer-color footer-link pt-3">@lang('messages.footer_column2_item2')</a>
                        <a href="#featured" class="footer-color footer-link pt-3">@lang('messages.footer_column2_item3')</a>
                        <a href="#featured" class="footer-color footer-link pt-3">@lang('messages.footer_column2_item4')</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <p class="text-white title-font second-font fw-medium" style="font-size: 1.125rem;">
                        @lang('messages.footer_column3_title')
                    </p>
                    <div class="d-flex flex-column pt-4">
                        <a href="/" class="footer-color footer-link ">@lang('messages.footer_column3_item1')</a>
                        <a href="/" class="footer-color footer-link pt-3">@lang('messages.footer_column3_item2')</a>
                        <a target="_blank" href="https://wa.me/+62123456789"
                            class="footer-color footer-link pt-3">@lang('messages.footer_column3_item3')</a>
                    </div>
                </div>
                <div class="d-flex justify-content-center flex-column mt-5 pt-5 pb-4">
                    <hr class="hr-footer opacity-100 bg-opacity-100 w-100">
                    <p class="text-center fs-14" style="color: rgba(255, 255, 255, 0.32)">@lang('messages.copyright_label')</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="MenuDetail" tabindex="-1" aria-labelledby="MenuDetail" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content modal-menu ">
                <div class="modal-body">
                    <p class="text-center fw-medium fs-3 text-black" data-value="title">Detail</p>
                    <div class="row row-cols-md-2 row-cols-1 gy-4 mt-1">
                        <div class="col d-flex justify-content-center" style="overflow: hidden">
                            <img src="" class="w-100 rounded-1" data-value="image">
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column gap-4">
                                <div class="d-flex flex-column">
                                    <p class="text-black fw-medium fs-14">@lang('messages.modal_menu_name')</p>
                                    <input type="text" class="input-text mt-1" disabled data-value="name">
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="text-black fw-medium fs-14">@lang('messages.modal_menu_price')</p>
                                    <input type="text" class="input-text mt-1" disabled data-value="price">
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="text-black fw-medium fs-14">@lang('messages.modal_menu_description')</p>
                                    <textarea type="text" class="input-text mt-1" disabled data-value="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row gap-3 mt-4 justify-content-center">
                        <button type="button" class="btn btn-dark btn-sm fs-15 fw-medium"
                            data-bs-dismiss="modal">@lang('messages.modal_menu_button1')</button>
                        <a href="" data-value="id"
                            class="btn btn-color btn-sm fs-15 fw-medium">@lang('messages.modal_menu_button2')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ChefModal" tabindex="-1" aria-labelledby="ChefModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content modal-menu ">
                <div class="modal-body">
                    <p class="text-center fw-medium fs-3 text-black" data-value="title">Chef</p>
                    <div class="row row-cols-md-2 row-cols-1 gy-4 mt-1">
                        <div class="col d-flex justify-content-center" style="overflow: hidden">
                            <img src="" class="w-100 rounded-1" data-value="image">
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column gap-4">
                                <div class="d-flex flex-column">
                                    <p class="text-black fw-medium fs-14">@lang('messages.modal_chef_name')</p>
                                    <input type="text" class="input-text mt-1" disabled data-value="name">
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="text-black fw-medium fs-14">@lang('messages.modal_chef_menu')</p>
                                    <input type="text" class="input-text mt-1" disabled data-value="menu">
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="text-black fw-medium fs-14">@lang('messages.modal_chef_description')</p>
                                    <textarea type="text" class="input-text mt-1" disabled data-value="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row gap-3 mt-4 justify-content-center">
                        <button type="button" class="btn btn-dark btn-sm fs-15 fw-medium"
                            data-bs-dismiss="modal">@lang('messages.modal_chef_button')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="LocationModal" tabindex="-1" aria-labelledby="LocationModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-menu ">
                <div class="modal-body">
                    <p class="text-center fw-medium fs-3 text-black" data-value="name">
                        @lang('messages.modal_location_title')
                    </p>
                    <div class="wrapper mt-3">
                        <p class="fs-15 main-color" style="font-weight: 600">@lang('messages.modal_location_description'):</p>
                        <p class="fs-15" data-value="description">
                        </p>
                    </div>
                    <div class="wrapper mt-3">
                        <p class="fs-15 main-color" style="font-weight: 600">@lang('messages.modal_location_menu'):</p>
                        <p class="fs-15" data-value="menu">
                        </p>
                    </div>
                    <div class="d-flex flex-row gap-3 mt-4 justify-content-center">
                        <button type="button" class="btn btn-dark btn-sm fs-15 fw-medium"
                            data-bs-dismiss="modal">@lang('messages.modal_location_button')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/9e88c62f38.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js-homepage/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js-homepage/bootstrap.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        $(document).on('click', '[data-bs-target="#MenuDetail"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/homepage/detail-menu/' + id,
                success: function(data) {
                    console.log(data);
                    $('[data-value="id"]').attr("href", "/detail/" + data.id);
                    $('[data-value="title"]').html('Detail ' + data.name);
                    $('[data-value="name"]').val(data.name);
                    $('[data-value="price"]').val(data.price);
                    $('[data-value="image"]').attr("src", "storage/" + data.image);
                    $('[data-value="description"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#LocationModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/homepage/location/' + id,
                success: function(data) {
                    $('[data-value="name"]').html(data[0].name);
                    $('[data-value="description"]').html(data[0].description);
                    $('[data-value="menu"]').html(data[1]);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#ChefModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/homepage/chef/' + id,
                success: function(data) {
                    console.log(data);
                    $('[data-value="title"]').html('Chef ' + data[0].name);
                    $('[data-value="name"]').val(data[0].name);
                    $('[data-value="image"]').attr("src", "storage/" + data[0].image);
                    $('[data-value="menu"]').val(data[1]);
                    $('[data-value="description"]').val(data[0].description);
                }
            });
        });

        const swiperBranch = new Swiper('.swiper-restaurant', {
            speed: 500,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
            },
            navigation: {
                nextEl: ".btn-next",
                prevEl: ".btn-prev",
            },
            breakpoints: {
                1: {
                    slidesPerView: 1,
                    spaceBetween: 0
                },
                500: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                900: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                1100: {
                    slidesPerView: 4,
                    spaceBetween: 20
                }
            }
        })
        const swiperTesti = new Swiper('.swiper-testi', {
            speed: 500,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                1: {
                    slidesPerView: 1,
                    spaceBetween: 0
                },
                500: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
            }
        })
    </script>
</body>

</html>
