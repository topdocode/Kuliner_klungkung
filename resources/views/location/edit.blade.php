@extends('templates.main')

@section('main')
    <div class="px-5 pb-3">
        <p class="fs-2 text-black fw-semibold">
            @lang('messages.edit_branch_title')
        </p>
        <form action="/admin/location/edit/{{ $location->id }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="main-content mt-4 mb-5">
                <div class="row rounded-1">
                    <div class="col-12 my-2">
                        <div class="row">
                            <div class="col-10 mb-3">
                                <div class="row align-items-end">
                                    <div class="col-6">
                                        <input type="hidden" name="oldImage" value="{{ $location->image }}">
                                        <p class="text-black fw-medium fs-14">@lang('messages.add_chef_form_image')</p>
                                        <div class="d-flex flex-row align-items-end gap-3">
                                            <img src="{{ asset('storage/' . $location->image) }}" alt="Enter your image"
                                                class="tag-image img-preview" />
                                            <input type='file' class="input-file @error('image') is-invalid @enderror"
                                                size="150" name="image">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.add_chef_form_name')</p>
                                        <input type="text" name="name" id="name" class="input-text w-100 mt-2"
                                            value="{{ $location->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 mb-3">
                                <p class="text-black fs-14 fw-medium">@lang('messages.form_address')</p>
                                <input type="text" name="address" id="name" class="input-text w-100 mt-2"
                                    value="{{ $location->address }}">
                            </div>
                            <div class="col-10 mb-3">
                                <p class="text-black fs-14 fw-medium">@lang('messages.form_menu_available')</p>
                                <div class="row">
                                    @php
                                        $menu_available = explode(',', $location->menu_available);
                                    @endphp
                                    @foreach ($menus as $menu)
                                        @php
                                            $isExist = in_array($menu->id, $menu_available);
                                        @endphp
                                        @if ($isExist)
                                            <div class="col-3">
                                                <div class="d-flex flex-row gap-3 mt-2">
                                                    <input type="checkbox" name="menu_available[]" id="{{ $menu->name }}"
                                                        value="{{ $menu->id }}" checked>
                                                    <label class="fs-14 fw-medium"
                                                        for="{{ $menu->name }}">{{ $menu->name }}</label>
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-3">
                                                <div class="d-flex flex-row gap-3 mt-2">
                                                    <input type="checkbox" name="menu_available[]" id="{{ $menu->name }}"
                                                        value="{{ $menu->id }}">
                                                    <label class="fs-14 fw-medium"
                                                        for="{{ $menu->name }}">{{ $menu->name }}</label>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-5 mb-3">
                                <p class="text-black fs-14 fw-medium">@lang('messages.add_chef_form_description')</p>
                                <textarea class="input-text mt-2 w-100" name="description" rows="4">{{ $location->description }}</textarea>
                            </div>
                            <div class="col-5 mb-3">
                                <p class="text-black fs-14 fw-medium">@lang('messages.add_chef_form_description') EN</p>
                                <textarea class="input-text mt-2 w-100" name="description_translation" rows="4">{{ $locationEN->description }}</textarea>
                            </div>
                            <div class="col-10">
                                <div class="d-flex flex-row gap-2">
                                    <a href="{{ route('index-location') }}" class="btn btn-dark">@lang('messages.add_chef_form_button3')</a>
                                    <button type="submit" class="btn btn-color">@lang('messages.add_chef_form_button4')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        const tagImage = document.querySelector('.tag-image');
        const inputImage = document.querySelector('.input-file');

        inputImage.addEventListener('change', function() {
            tagImage.src = URL.createObjectURL(inputImage.files[0]);
        });
    </script>
@endsection
