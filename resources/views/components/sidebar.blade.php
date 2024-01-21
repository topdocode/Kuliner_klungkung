<div class="sidebar d-flex flex-column content-wrapper container pt-5 sticky-top">
    <div class="d-flex flex-column align-items-end h-100" style="min-height:92vh">
        <div class="d-flex justify-content-center flex-column logo-wrapper w-100">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/img/sidebar/logo.svg') }}" class="img-fluid" alt="Logo Delicious Klungkung">
            </div>
        </div>
        <div class="sidebar-menu-wrapper row mt-4 gy-2 pt-2">
            <div class="col-12">
                <div class="menu-sidebar ps-4 pe-3">
                    <a href="{{ route('dashboard') }}"
                        class="{{ Request::is('*dashboard') ? 'active' : '' }} d-flex align-items-center menu-wrapper gap-3 text-decoration-none">
                        <div class="icon-sidebar dashboard-icon"></div>
                        <p class="mb-0">Dashboard</p>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <div class="menu-sidebar ps-4 pe-3">
                    <a href="{{ route('index-menu') }}"
                        class="{{ Request::is('*menu*') ? 'active' : '' }} d-flex align-items-center menu-wrapper gap-3 text-decoration-none">
                        <div class="icon-sidebar menu-icon"></div>
                        <p class="mb-0">Menu</p>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <div class="menu-sidebar ps-4 pe-3">
                    <a href="{{ route('index-location') }}"
                        class="{{ Request::is('*location*') ? 'active' : '' }} d-flex align-items-center menu-wrapper py-3 gap-3 text-decoration-none">
                        <div class="icon-sidebar location-icon"></div>
                        <p class="mb-0">@lang('messages.sidebar1')</p>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <div class="menu-sidebar ps-4 pe-3">
                    <a href="{{ route('index-history') }}"
                        class="{{ Request::is('*history*') ? 'active' : '' }} d-flex align-items-center menu-wrapper py-3 gap-3 text-decoration-none">
                        <div class="icon-sidebar history-icon"></div>
                        <p class="mb-0">@lang('messages.sidebar2')</p>
                    </a>
                </div>
            </div>
            {{-- <div class="col-12">
                <div class="menu-sidebar ps-4 pe-3">
                    <a href="{{ route('index-chef') }}"
                        class="{{ Request::is('*chef*') ? 'active' : '' }} d-flex align-items-center menu-wrapper py-3 gap-3 text-decoration-none">
                        <div class="icon-sidebar chef-icon"></div>
                        <p class="mb-0">Chef</p>
                    </a>
                </div>
            </div> --}}
            <div class="col-12">
                <div class="menu-sidebar ps-4 pe-3">
                    <a href="{{ route('index-feedback') }}"
                        class="{{ Request::is('*feedback*') ? 'active' : '' }} d-flex align-items-center menu-wrapper py-3 gap-3 text-decoration-none">
                        <div class="icon-sidebar feedback-icon"></div>
                        <p class="mb-0">@lang('messages.sidebar3')</p>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <div class="menu-sidebar ps-4 pe-3">
                    <form action="{{ route('logout.action') }}" method="post" class="d-inline-block"
                        style="width: 100%;">
                        @csrf
                        <button type="submit"
                            class="d-flex align-items-center menu-wrapper py-3 gap-3 text-decoration-none">
                            <div class="icon-sidebar logout-icon"></div>
                            <p class="mb-0">Logout</p>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
