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
            <a href="{{ route('create-chef') }}" class="btn btn-color d-lg-flex d-none">Add New Chef</a>
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
                            <td>No.</td>
                            <td>@lang('messages.table_name')</td>
                            <td>@lang('messages.table_location')</td>
                            <td>@lang('messages.table_cooked_menu')</td>
                            <td>@lang('messages.table_description')</td>
                            <td></td>
                        </tr>
                    </thead>
                    @if ($chefs->count() == 0)
                        <tr>
                            <td colspan="6" class="text-center py-3">@lang('messages.chef_table_caption')</td>
                        </tr>
                    @else
                        @foreach ($chefs as $i => $chef)
                            <tbody>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $chef->name }}</td>
                                @if ($chef->locations_id !== null)
                                    @foreach ($locations as $location)
                                        @if ($location->id == $chef->locations_id)
                                            <td>{{ $location->name }}</td>
                                        @endif
                                    @endforeach
                                @else
                                    <td>-</td>
                                @endif
                                @php
                                    $cooked_menu = explode(',', $chef->cooked_menu);
                                @endphp
                                <td>
                                    <ul>
                                        @foreach ($menus as $menu)
                                            @php
                                                $isExist = in_array($menu->id, $cooked_menu);
                                            @endphp
                                            @if ($isExist)
                                                <li>{{ $menu->name }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </td>
                                <td style="width: 300px;">
                                    <p
                                        style="-webkit-line-clamp:2; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; color: #212529;">
                                        {{ $chef->translation(session('locale'))->description ?? $chef->description }}
                                    </p>
                                </td>
                                <td class=" flex-row gap-1 d-lg-flex d-none">
                                    <a href="/admin/chef/edit/{{ $chef->id }}"
                                        class="btn btn-edit d-lg-flex d-none p-0">
                                        <img src="{{ asset('assets/img/btn/edit-icon.svg') }}" draggable="false">
                                    </a>
                                    <button class="btn btn-edit p-0 d-lg-flex d-none" data-bs-toggle="modal"
                                        data-bs-target="#DeleteModal" data-id="{{ $chef->id }}">
                                        <img src="{{ asset('assets/img/btn/delete-icon.svg') }}" draggable="false">
                                    </button>
                                </td>
                            </tbody>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>

    <form id="delete-modal" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-5">
                        <div class="text-center fs-4 fw-medium title-font">@lang('messages.delete_chef_modal_title')</div>
                        <div class="pt-3 text-center">@lang('messages.delete_chef_modal_description')</div>
                        <div class="d-flex flex-row justify-content-center gap-3 pt-4">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">@lang('messages.delete_chef_modal_button1')</button>
                            <button type="submit" class="btn btn-color">@lang('messages.delete_chef_modal_button2')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="{{ asset('asset/js/jquery-3.5.1.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/9e88c62f38.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        $(document).on('click', '[data-bs-target="#DeleteModal"]', function() {
            let id = $(this).data('id');
            console.log(id);
            $('#delete-modal').attr('action', '/admin/chef/delete/' + id);
        });

        const btnHamburger = document.querySelector('.fa-bars');
        const sidebar = document.querySelector('.sidebar-wrapper');
        const body = document.querySelector('body');

        btnHamburger.addEventListener('click', function() {
            btnHamburger.classList.toggle('active');
            sidebar.classList.toggle('active');
        });
    </script>
@endsection
