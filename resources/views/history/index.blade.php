@extends('templates.main')

@section('main')
    @if (session()->has('success'))
        <div class="alert alert-success mx-5 mb-4" role="alert">
            {{ session('success') }}
        </div>
    @elseif(session()->has('failed'))
        <div class="alert alert-danger mx-5 mb-4" role="alert">
            {{ session('failed') }}
        </div>
    @endif

    <div class="header-section d-flex flex-row justify-content-between padding-section px-5">
        <p class="text-black fw-medium fs-2">@lang('messages.dashboard_title') {{ $page }}</p>

        <div class="wrapper d-none d-lg-flex gap-2">
            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" style="height: fit-content; padding: 13px 22px;" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
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

        <div class="d-xl-none hamburger-wrapper d-flex text-white align-self-center">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    <div class="main-content mt-4 px-5 mb-5">
        <div class="row px-3 py-4 rounded-1" style="background-color: white">
            <div class="col-12 my-2">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>@lang('messages.table_name')</td>
                            <td>@lang('messages.table_step')</td>
                            {{-- <td>@lang('messages.table_history')</td> --}}
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($histories->count() == 0)
                            <tr>
                                <td colspan="5" class="text-center py-3">@lang('messages.history_table_caption')</td>
                            </tr>
                        @else
                            @foreach ($histories as $i => $history)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    @foreach ($menus as $menu)
                                        @if ($menu->id == $history->menus_id)
                                            <td>{{ $menu->name }}</td>
                                        @endif
                                    @endforeach
                                    @if ($history->step_6 !== null)
                                        <td style="width: 400px;">6 Step</td>
                                    @elseif ($history->step_5 !== null)
                                        <td style="width: 400px;">5 Step</td>
                                    @elseif ($history->step_4 !== null)
                                        <td style="width: 400px;">4 Step</td>
                                    @elseif ($history->step_3 !== null)
                                        <td style="width: 400px;">3 Step</td>
                                    @elseif ($history->step_2 !== null)
                                        <td style="width: 400px;">2 Step</td>
                                    @elseif ($history->step_1 !== null)
                                        <td style="width: 400px;">1 Step</td>
                                    @else
                                        <td style="width: 400px;">-</td>
                                    @endif
                                    {{-- @if ($history->history !== null)
                                        <td class="text-wrap" style="width: 400px;">
                                            <p
                                                style="-webkit-line-clamp:2; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; color: #212529;">
                                                {{ $history->translation(session('locale'))->history ?? $history->history }}
                                            </p>
                                        </td>
                                    @else
                                        <td style="width: 400px;">-</td>
                                    @endif --}}
                                    <td class=" flex-row gap-1 d-lg-flex d-none">
                                        @foreach ($menus as $menu)
                                            @if ($menu->id == $history->menus_id)
                                                <a href="/admin/history/edit/{{ $history->id }}"
                                                    class="btn btn-edit d-lg-flex d-none p-0">
                                                    <img src="{{ asset('assets/img/btn/edit-icon.svg') }}">
                                                </a>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/9e88c62f38.js" crossorigin="anonymous"></script>

    <script>
        const btnHamburger = document.querySelector('.fa-bars');
        const sidebar = document.querySelector('.sidebar-wrapper');
        const body = document.querySelector('body');

        btnHamburger.addEventListener('click', function() {
            btnHamburger.classList.toggle('active');
            sidebar.classList.toggle('active');
        });
    </script>
@endsection
