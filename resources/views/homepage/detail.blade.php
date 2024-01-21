<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Menu {{ $page }} | Delicious Klungkung</title>
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
                        <a class="nav-link px-3 active fw-medium" href="/homepage#body">@lang('messages.nav_link1')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 fw-medium" href="/homepage#featured">@lang('messages.nav_link2')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 fw-medium" href="/homepage#about">@lang('messages.nav_link3')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 fw-medium" href="/homepage#menu">@lang('messages.nav_link4')</a>
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
        <section class="detail-hero position-relative">
            <div class="bg-section position-absolute top-0"></div>
            <div class="container position-relative">
                <div class="row justify-content-start">
                    <div class="col-xl-6 col-lg-7 col-12">
                        <div class="badge-section">
                            <p class="main-color fs-13">
                                @lang('messages.detail_subtitle')
                            </p>
                        </div>
                        <p class="fw-semibold display-3 mt-3 text-black">
                            @lang('messages.detail_title') {{ $menu->translation(session('locale'))->name ?? $menu->name }}
                        </p>
                        <article class="mt-3">
                            <p> @lang('messages.detail_paragraph1')
                            </p>
                            <p class="mt-1">@lang('messages.detail_paragraph2')
                            </p>
                        </article>
                        <div class="mt-4 d-flex flex-row gap-2">
                            <a href="#history" class="btn btn-color">@lang('messages.detail_button1')</a>
                            <a href="{{ route('homepage') }}"
                                class="btn btn-dark d-flex flex-row align-items-center gap-2">
                                @lang('messages.detail_button2')
                                <img src="{{ asset('assets/img-homepage/arr-btn-dark.svg') }}" alt=""
                                    class="" draggable="false">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row position-absolute d-none top-0 banner-background end-0 d-lg-inline-block">
                <img src="{{ asset('storage/' . $menu->image) }}" class="p-0" style="height: 100%; width: auto">
            </div>
        </section>

        <section class="step-section container">
            <div class="top-section row gy-4">
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="d-flex flex-column">
                        <div class="badge-section">
                            <p class="fs-13 fw-medium main-color">
                                @lang('messages.step_subtitle')
                            </p>
                        </div>
                        <p class="mt-2 display-5 fw-semibold text-black">
                            @lang('messages.step_title')
                        </p>
                    </div>
                </div>
                <div class="col-lg-1 d-lg-block d-none"></div>
                <div class="col-lg-5 align-self-end col-md-6 col-12">
                    @lang('messages.step_paragraph')
                </div>
            </div>
            <div class="content-section mt-5">
                <div class="row row-cols-md-2 row-cols-1 gy-4">
                    <div class="col">
                        @if ($history->step_1 !== null)
                            <div class="card-step">
                                <div class="wrapper-number d-flex justify-content-center align-items-center">
                                    <p class="mb-0">1</p>
                                </div>
                                <p class="text-black mt-2 fs-17 fw-semibold">
                                    {{ $history->translation(session('locale'))->title_1 ?? $history->title_1 }}</p>
                                <p class="mt-1 fw-medium fs-15">
                                    {{ $history->translation(session('locale'))->step_1 ?? $history->step_1 }}
                                </p>
                            </div>
                        @endif
                        @if ($history->step_2 !== null)
                            <div class="card-step mt-4">
                                <div class="wrapper-number d-flex justify-content-center align-items-center">
                                    <p class="mb-0">2</p>
                                </div>
                                <p class="text-black mt-2 fs-17 fw-semibold">
                                    {{ $history->translation(session('locale'))->title_2 ?? $history->title_2 }}</p>
                                <p class="mt-1 fw-medium fs-15">
                                    {{ $history->translation(session('locale'))->step_2 ?? $history->step_2 }}
                                </p>
                            </div>
                        @endif
                        @if ($history->step_3 !== null)
                            <div class="card-step mt-4">
                                <div class="wrapper-number d-flex justify-content-center align-items-center">
                                    <p class="mb-0">3</p>
                                </div>
                                <p class="text-black mt-2 fs-17 fw-semibold">
                                    {{ $history->translation(session('locale'))->title_3 ?? $history->title_3 }}</p>
                                <p class="mt-1 fw-medium fs-15">
                                    {{ $history->translation(session('locale'))->step_3 ?? $history->step_3 }}
                                </p>
                            </div>
                        @endif
                    </div>
                    <div class="col">
                        @if ($history->step_4 !== null)
                            <div class="card-step mt-4 mt-md-0">
                                <div class="wrapper-number d-flex justify-content-center align-items-center">
                                    <p class="mb-0">4</p>
                                </div>
                                <p class="text-black mt-2 fs-17 fw-semibold">
                                    {{ $history->translation(session('locale'))->title_4 ?? $history->title_4 }}</p>
                                <p class="mt-1 fw-medium fs-15">
                                    {{ $history->translation(session('locale'))->step_4 ?? $history->step_4 }}
                                </p>
                            </div>
                        @endif
                        @if ($history->step_5 !== null)
                            <div class="card-step mt-4">
                                <div class="wrapper-number d-flex justify-content-center align-items-center">
                                    <p class="mb-0">5</p>
                                </div>
                                <p class="text-black mt-2 fs-17 fw-semibold">
                                    {{ $history->translation(session('locale'))->title_5 ?? $history->title_5 }}</p>
                                <p class="mt-1 fw-medium fs-15">
                                    {{ $history->translation(session('locale'))->step_5 ?? $history->step_5 }}
                                </p>
                            </div>
                        @endif
                        @if ($history->step_6 !== null)
                            <div class="card-step mt-4">
                                <div class="wrapper-number d-flex justify-content-center align-items-center">
                                    <p class="mb-0">6</p>
                                </div>
                                <p class="text-black mt-2 fs-17 fw-semibold">
                                    {{ $history->translation(session('locale'))->title_6 ?? $history->title_6 }}</p>
                                <p class="mt-1 fw-medium fs-15">
                                    {{ $history->translation(session('locale'))->step_6 ?? $history->step_6 }}
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="menu-history-section position-relative" id="history">
            <div class="bg-section"></div>
            <div class="row p-0 position-absolute d-none top-0 banner-background start-0 d-lg-inline-block">
                <img src="{{ asset('storage/' . $menu->image) }}" class="p-0" style="height: 100%; width: 100%;">
            </div>
            <div class="container position-relative">
                <div class="row justify-content-end">
                    <div class="col-xl-6 col-lg-7 col-12">
                        <div class="badge-section">
                            <p class="main-color fs-13">
                                @lang('messages.menu_history_subtitle') {{ $menu->translation(session('locale'))->name ?? $menu->name }}
                            </p>
                        </div>
                        <p class="fw-semibold display-5 mt-3 text-black">
                            {{ $menu->translation(session('locale'))->name ?? $menu->name }}, @lang('messages.menu_history_title')
                        </p>
                        <article class="mt-3 fw-medium">
                            <p>{{ $history->translation(session('locale'))->history ?? $history->history }}</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="menu-recommendation-section container">
            <div class="top-section row gy-4">
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="d-flex flex-column">
                        <div class="badge-section">
                            <p class="fs-13 fw-medium main-color">
                                @lang('messages.menu_recommendation_subtitle')
                            </p>
                        </div>
                        <p class="mt-2 display-5 fw-semibold text-black">
                            @lang('messages.menu_recommendation_title')
                        </p>
                    </div>
                </div>
                <div class="col-lg-1 d-lg-block d-none"></div>
                <div class="col-lg-5 align-self-end col-md-6 col-12">
                    <p>
                        @lang('messages.menu_recommendation_paragraph')
                    </p>
                </div>
            </div>
            <div class="content-section mt-5">
                <div class="swiper swiper-restaurant pb-5">
                    <div class="swiper-wrapper">
                        @foreach ($recommendations as $menu)
                            <div class="swiper-slide">
                                <div class="card-menu">
                                    <img src="{{ asset('storage/' . $menu->image) }}" alt="Klungkung Chicken Rise"
                                        class="w-100">
                                    <p class="text-black fw-semibold mt-3 fs-17">
                                        {{ $menu->translation(session('locale'))->name ?? $menu->name }}</p>
                                    <p class="fs-15 mt-2">
                                        {{ $menu->translation(session('locale'))->description ?? $menu->description }}
                                    </p>
                                    <div class="d-flex flex-row justify-content-between mt-3 gap-2">
                                        <button type="button" class="btn btn-color fs-13 btn-sm"
                                            data-bs-toggle="modal" data-bs-target="#MenuDetail"
                                            data-id="{{ $menu->id }}"
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
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-content pb-3 row gy-5">
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
                        <a href="/hompepage#home" class="footer-color footer-link ">@lang('messages.footer_column1_item1')</a>
                        <a href="/hompepage#featured" class="footer-color footer-link pt-3">@lang('messages.footer_column1_item2')</a>
                        <a href="/hompepage#about" class="footer-color footer-link pt-3">@lang('messages.footer_column1_item3')</a>
                        <a href="/hompepage#menu" class="footer-color footer-link pt-3">@lang('messages.footer_column1_item4')</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <p class="text-white title-font second-font fw-medium" style="font-size: 1.125rem;">
                        @lang('messages.footer_column2_title')
                    </p>
                    <div class="d-flex flex-column pt-4">
                        <a href="/hompepage#featured" class="footer-color footer-link ">@lang('messages.footer_column2_item1')</a>
                        <a href="/hompepage#featured" class="footer-color footer-link pt-3">@lang('messages.footer_column2_item2')</a>
                        <a href="/hompepage#featured" class="footer-color footer-link pt-3">@lang('messages.footer_column2_item3')</a>
                        <a href="/hompepage#featured" class="footer-color footer-link pt-3">@lang('messages.footer_column2_item4')</a>
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
                            <img src="" class="w-100" data-value="image">
                        </div>
                        <div class="col">
                            <div class="d-flex flex-column gap-4">
                                <div class="d-flex flex-column">
                                    <p class="text-black fw-medium fs-14">@lang('messages.modal_menu_detail_name')</p>
                                    <input type="text" class="input-text mt-1" disabled data-value="name">
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="text-black fw-medium fs-14">@lang('messages.modal_menu_detail_price')</p>
                                    <input type="text" class="input-text mt-1" disabled data-value="price">
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="text-black fw-medium fs-14">@lang('messages.modal_menu_detail_description')</p>
                                    <textarea type="text" class="input-text mt-1" disabled data-value="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row gap-3 mt-4 justify-content-center">
                        <button type="button" class="btn btn-dark btn-sm fs-15 fw-medium"
                            data-bs-dismiss="modal">@lang('messages.modal_menu_detail_button1')</button>
                        <a href="" data-value="id"
                            class="btn btn-color btn-sm fs-15 fw-medium">@lang('messages.modal_menu_detail_button2')</a>
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
                    $('[data-value="id"]').attr("href", "/detail/" + data.id);
                    $('[data-value="title"]').html('Detail ' + data.name);
                    $('[data-value="name"]').val(data.name);
                    $('[data-value="price"]').val(data.price);
                    $('[data-value="image"]').attr("src", "/storage/" + data.image);
                    $('[data-value="description"]').val(data.description);
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
        });
    </script>
