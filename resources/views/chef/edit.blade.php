@extends('templates.main')

@section('main')
    <div class="px-5 pb-3">
        <div class="wrapper d-flex justify-content-between align-items-center">
            <p class="fs-2 text-black fw-semibold">
                @lang('messages.edit_chef_title')
            </p>
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
        <form action="/admin/chef/edit/{{ $chef->id }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="main-content mt-4 mb-5">
                <div class="row rounded-1">
                    <div class="col-12 my-2">
                        <div class="row">
                            <div class="col-10 mb-3">
                                <div class="row align-items-end">
                                    <div class="col-6">
                                        <input type="hidden" name="oldImage" value="{{ $chef->image }}">
                                        <p class="text-black fw-medium fs-14">@lang('messages.add_chef_form_image')</p>
                                        <div class="d-flex flex-row align-items-end gap-3">
                                            <img src="{{ asset('storage/' . $chef->image) }}" alt="Enter your image"
                                                class="tag-image img-preview" />
                                            <input type='file' class="input-file @error('image') is-invalid @enderror"
                                                size="150" name="image">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.add_chef_form_name')</p>
                                        <input type="text" name="name" id="name" class="input-text w-100 mt-2"
                                            value="{{ $chef->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 mb-3">
                                <p class="text-black fs-14 fw-medium">@lang('messages.add_chef_form_cooked_menu')</p>
                                <div class="row">
                                    @php
                                        $cooked_menu = explode(',', $chef->cooked_menu);
                                    @endphp
                                    @foreach ($menus as $menu)
                                        @php
                                            $isExist = in_array($menu->id, $cooked_menu);
                                        @endphp
                                        @if ($isExist)
                                            <div class="col-3">
                                                <div class="d-flex flex-row gap-3 mt-2">
                                                    <input type="checkbox" name="cooked_menu[]" id="{{ $menu->name }}"
                                                        value="{{ $menu->id }}" checked>
                                                    <label class="fs-14 fw-medium"
                                                        for="{{ $menu->name }}">{{ $menu->name }}</label>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-3">
                                                <div class="d-flex flex-row gap-3 mt-2">
                                                    <input type="checkbox" name="cooked_menu[]" id="{{ $menu->name }}"
                                                        value="{{ $menu->id }}">
                                                    <label class="fs-14 fw-medium"
                                                        for="{{ $menu->name }}">{{ $menu->name }}</label>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-10 mb-3">
                                <p class="text-black fs-14 fw-medium">@lang('messages.add_chef_form_location')</p>
                                <select name="locations_id" id="location" class="input-text w-100 mt-2">
                                    @if ($chef->locations_id == null)
                                        <option value="0">Select branch location</option>
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                                        @endforeach
                                    @else
                                        @foreach ($locations as $location)
                                            @if ($chef->locations_id == $location->id)
                                                <option value="{{ $location->id }}" selected>{{ $location->name }}
                                                </option>
                                            @else
                                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                                            @endif
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-5 mb-3">
                                <p class="text-black fs-14 fw-medium">@lang('messages.add_chef_form_description')</p>
                                <textarea class="input-text mt-2 w-100" name="description" rows="4">{{ $chef->description }}</textarea>
                            </div>
                            <div class="col-5 mb-3">
                                <p class="text-black fs-14 fw-medium">@lang('messages.add_chef_form_description') EN</p>
                                <textarea class="input-text mt-2 w-100" name="description_translation" rows="4">{{ $chefEN->description }}</textarea>
                            </div>
                            <div class="col-10">
                                <div class="d-flex flex-row gap-2">
                                    <a href="{{ route('index-chef') }}" class="btn btn-dark">@lang('messages.add_chef_form_button3')</a>
                                    <button type="submit" class="btn btn-color">@lang('messages.add_chef_form_button4')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script>
        const tagImage = document.querySelector('.tag-image');
        const inputImage = document.querySelector('.input-file');

        inputImage.addEventListener('change', function() {
            tagImage.src = URL.createObjectURL(inputImage.files[0]);
        });
    </script>
@endsection
