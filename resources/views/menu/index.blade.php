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
            <button class="btn btn-color d-lg-flex d-none" data-bs-toggle="modal" data-bs-target="#exampleModal"
                style="height: fit-content; padding: 13px 22px;">@lang('messages.add_menu_modal_title')</button>
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
                            <td>@lang('messages.table_image')</td>
                            <td>@lang('messages.table_price')</td>
                            <td>@lang('messages.table_description')</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($menus->count() == 0)
                            <tr>
                                <td colspan="6" class="text-center py-3">@lang('messages.dashboard_table_caption')</td>
                            </tr>
                        @else
                            @foreach ($menus as $i => $menu)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $menu->translation(session('locale'))->name ?? $menu->name }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $menu->image) }}" alt="{{ $menu->name }} image"
                                            width="150">
                                    </td>
                                    <td>{{ $menu->translation(session('locale'))->price ?? $menu->price }}</td>
                                    <td style="width: 400px">
                                        <p
                                            style="-webkit-line-clamp:2; overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; color: #212529;">
                                            {{ $menu->translation(session('locale'))->description ?? $menu->description }}
                                        </p>
                                    </td>
                                    <td class=" flex-row gap-1 d-lg-flex d-none">
                                        <button class="btn btn-edit d-lg-flex d-none p-0" data-bs-toggle="modal"
                                            data-bs-target="#EditModal" data-id="{{ $menu->id }}">
                                            <img src="{{ asset('assets/img/btn/edit-icon.svg') }}">
                                        </button>
                                        <button class="btn btn-edit p-0 d-lg-flex d-none" data-bs-toggle="modal"
                                            data-bs-target="#DeleteModal" data-id="{{ $menu->id }}">
                                            <img src="{{ asset('assets/img/btn/delete-icon.svg') }}">
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <form action="{{ route('store-menu') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body p-5">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="text-center fs-3 title-font fw-medium">@lang('messages.add_menu_modal_title')</div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="pt-2 w-100">
                                    <input type="hidden" name="id" value="{{ $id + 1 }}">
                                    <div class="input-text-wrapper w-100 mt-2">
                                        <p class="text-black fw-medium fs-14">@lang('messages.modal_name')</p>
                                        <input type="text" name="name"
                                            class="w-100 input-text border-0 @error('name') is-invalid @enderror"
                                            placeholder="Enter menu name" value="{{ old('name') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="pt-2 w-100">
                                    <div class="input-text-wrapper w-100 mt-2">
                                        <p class="text-black fw-medium fs-14">@lang('messages.modal_name') EN</p>
                                        <input type="text" name="name_translation"
                                            class="w-100 input-text border-0 @error('name') is-invalid @enderror"
                                            placeholder="Enter menu name" value="{{ old('name') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="w-100">
                                    <div class="input-text-wrapper w-100 mt-2">
                                        <p class="text-black fw-medium fs-14">@lang('messages.modal_price')</p>
                                        <input type="text" name="price"
                                            class="w-100 input-text border-0 @error('price') is-invalid @enderror"
                                            placeholder="Enter menu price" value="{{ old('price') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="w-100">
                                    <div class="input-text-wrapper w-100 mt-2">
                                        <p class="text-black fw-medium fs-14">@lang('messages.modal_image')</p>
                                        <div class="d-flex flex-row align-items-end gap-2">
                                            <img src="{{ asset('assets/img/table/img-modal.svg') }}" alt="your image"
                                                class="tag-image img-preview" />
                                            <input type='file' class="input-file @error('image') is-invalid @enderror"
                                                size="150" name="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="w-100">
                                    <div class="input-text-wrapper w-100 mt-2">
                                        <p class="text-black fw-medium fs-14">@lang('messages.modal_description')</p>
                                        <textarea type="text" name="description"
                                            class="w-100 input-text border-0 @error('description') is-invalid @enderror" placeholder="Enter menu description"
                                            value="{{ old('description') }}"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="w-100">
                                    <div class="input-text-wrapper w-100 mt-2">
                                        <p class="text-black fw-medium fs-14">@lang('messages.modal_description') EN</p>
                                        <textarea type="text" name="description_translation"
                                            class="w-100 input-text border-0 @error('description') is-invalid @enderror" placeholder="Enter menu description"
                                            value="{{ old('description') }}"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex flex-row justify-content-center gap-2 pt-4">
                                <button type="button" class="btn btn-dark fs-15"
                                    data-bs-dismiss="modal">@lang('messages.add_menu_modal_button1')</button>
                                <button type="submit" class="btn btn-color fs-15">@lang('messages.add_menu_modal_button2')</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form id="edit-modal" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body p-5">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <div class="text-center fs-3 title-font fw-medium fw-medium">@lang('messages.edit_menu_modal_title')</div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="pt-2 w-100">
                                    <div class="input-text-wrapper w-100 mt-2">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.modal_name')</p>
                                        <input type="text" name="name" class="w-100 input-text border-0"
                                            data-value="name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="pt-2 w-100">
                                    <div class="input-text-wrapper w-100 mt-2">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.modal_name') EN</p>
                                        <input type="text" name="name_translation" class="w-100 input-text border-0"
                                            data-value="name_translation">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="w-100">
                                    <div class="input-text-wrapper w-100 mt-2">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.modal_price')</p>
                                        <input type="text" name="price" class="w-100 input-text border-0"
                                            data-value="price">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="w-100">
                                    <div class="input-text-wrapper w-100 mt-2">
                                        <input type="hidden" name="oldImage" data-value="oldImage">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.modal_image')</p>
                                        <div class="d-flex flex-row align-items-end gap-2">
                                            <img src="" class="tag-image-edit img-fluid" alt="Input Image"
                                                width="150" data-value="image">
                                            <input type='file'
                                                class="input-file-edit @error('image') is-invalid @enderror"
                                                size="150" name="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="w-100">
                                    <div class="input-text-wrapper w-100 mt-2">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.modal_description')</p>
                                        <textarea type="text" name="description" class="w-100 input-text border-0" data-value="description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="w-100">
                                    <div class="input-text-wrapper w-100 mt-2">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.modal_description') EN</p>
                                        <textarea type="text" name="description_translation" class="w-100 input-text border-0"
                                            data-value="description_translation"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-row justify-content-center gap-2 pt-4">
                                    <button type="button" class="btn btn-dark fs-15"
                                        data-bs-dismiss="modal">@lang('messages.edit_menu_modal_button1')</button>
                                    <button type="submit" class="btn btn-color fs-15">@lang('messages.edit_menu_modal_button2')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form id="delete-modal" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-5">
                        <div class="text-center fs-3 fw-medium title-font">@lang('messages.delete_menu_modal_title')</div>
                        <div class="pt-3 text-center">@lang('messages.delete_menu_modal_description')
                        </div>
                        <div class="d-flex flex-row justify-content-center gap-2 pt-4">
                            <button type="button" class="btn btn-dark"
                                data-bs-dismiss="modal">@lang('messages.delete_menu_modal_button1')</button>
                            <button type="submit" class="btn btn-color">@lang('messages.delete_menu_modal_button2')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="{{ asset('assets/js/jquery-3.5.1.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/9e88c62f38.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        $(document).on('click', '[data-bs-target="#EditModal"]', function() {
            let id = $(this).data('id');
            $('#edit-modal').attr('action', '/admin/menu/edit/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/menu/edit/' + id,
                success: function(data) {
                    console.log(data);
                    $('[data-value="name"]').val(data[0].name);
                    $('[data-value="name_translation"]').val(data[1][1].name);
                    $('[data-value="price"]').val(data[0].price);
                    $('[data-value="oldImage"]').val(data[0].image);
                    $('[data-value="image"]').attr("src", "/storage/" + data[0].image);
                    $('[data-value="description"]').val(data[0].description);
                    $('[data-value="description_translation"]').val(data[1][1].description);

                    console.log($('[data-value="image"]').attr("src"));
                }
            });
        });

        $(document).on('click', '[data-bs-target="#DeleteModal"]', function() {
            let id = $(this).data('id');
            $('#delete-modal').attr('action', '/admin/menu/delete/' + id);
        });

        const btnHamburger = document.querySelector('.fa-bars');
        const sidebar = document.querySelector('.sidebar-wrapper');
        const body = document.querySelector('body');
        const tagImage = document.querySelector('.tag-image');
        const inputImage = document.querySelector('.input-file');
        const tagImageEdit = document.querySelector('.tag-image-edit');
        const inputImageEdit = document.querySelector('.input-file-edit');

        btnHamburger.addEventListener('click', function() {
            btnHamburger.classList.toggle('active');
            sidebar.classList.toggle('active');
        });

        inputImage.addEventListener('change', function() {
            tagImage.src = URL.createObjectURL(inputImage.files[0]);
        });

        inputImageEdit.addEventListener('change', function() {
            tagImageEdit.src = URL.createObjectURL(inputImageEdit.files[0]);
        });
    </script>
@endsection
