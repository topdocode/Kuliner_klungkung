@extends('templates.main')

@section('main')
    <div class="px-5 pb-3">
        <div class="wrapper d-flex justify-content-between align-items-center">
            <p class="fs-2 text-black fw-semibold">@lang('messages.edit_history_title')</p>
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
        <form action="/admin/history/edit/{{ $history->id }}" method="post">
            @csrf
            <div class="main-content mt-4 mb-5">
                <div class="row rounded-1">
                    <div class="col-12 my-2">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <p class="text-black fs-14 fw-medium">@lang('messages.edit_form_name')</p>
                                @foreach ($menus as $menu)
                                    @if ($menu->id == $history->menus_id)
                                        <input type="text" class="input-text w-100 mt-2" value="{{ $menu->name }}"
                                            disabled>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-12 mb-3">
                                <div class="row">
                                    <div class="col-3">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.edit_form_title_1')</p>
                                        <input type="text" class="input-text w-100 my-2" placeholder="Enter title 1 menu"
                                            name="title_1" value="{{ $history->title_1 }}">
                                        <textarea type="text" name="step_1" class="input-text w-100" placeholder="Enter step 1 menu" rows="4">{{ $history->step_1 }}</textarea>
                                    </div>
                                    <div class="col-3">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.edit_form_title_1') EN</p>
                                        <input type="text" class="input-text w-100 my-2" placeholder="Enter title 1 menu"
                                            name="title_1_translation" value="{{ $history->title_1 }}">
                                        <textarea type="text" name="step_1_translation" class="input-text w-100" placeholder="Enter step 1 menu"
                                            rows="4">{{ $history->step_1 }}</textarea>
                                    </div>
                                    <div class="col-3">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.edit_form_title_2')</p>
                                        <input type="text" class="input-text w-100 my-2" placeholder="Enter title 2 menu"
                                            name="title_2" value="{{ $history->title_2 }}">
                                        <textarea type="text" name="step_2" class="input-text w-100" placeholder="Enter step 2 menu" rows="4">{{ $history->step_2 }}</textarea>
                                    </div>
                                    <div class="col-3">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.edit_form_title_2') EN</p>
                                        <input type="text" class="input-text w-100 my-2" placeholder="Enter title 2 menu"
                                            name="title_2_translation" value="{{ $history->title_2 }}">
                                        <textarea type="text" name="step_2_translation" class="input-text w-100" placeholder="Enter step 2 menu"
                                            rows="4">{{ $history->step_2 }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="row">
                                    <div class="col-3">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.edit_form_title_3')</p>
                                        <input type="text" class="input-text w-100 my-2" placeholder="Enter title 3 menu"
                                            name="title_3" value="{{ $history->title_3 }}">
                                        <textarea type="text" name="step_3" class="input-text w-100" placeholder="Enter step 3 menu" rows="4">{{ $history->step_3 }}</textarea>
                                    </div>
                                    <div class="col-3">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.edit_form_title_3') EN</p>
                                        <input type="text" class="input-text w-100 my-2" placeholder="Enter title 3 menu"
                                            name="title_3_translation" value="{{ $history->title_3 }}">
                                        <textarea type="text" name="step_3_translation" class="input-text w-100" placeholder="Enter step 3 menu"
                                            rows="4">{{ $history->step_3 }}</textarea>
                                    </div>
                                    <div class="col-3">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.edit_form_title_4')</p>
                                        <input type="text" class="input-text w-100 my-2"
                                            placeholder="Enter title 4 menu" name="title_4"
                                            value="{{ $history->title_4 }}">
                                        <textarea type="text" name="step_4" class="input-text w-100" placeholder="Enter step 4 menu" rows="4">{{ $history->step_4 }}</textarea>
                                    </div>
                                    <div class="col-3">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.edit_form_title_4') EN</p>
                                        <input type="text" class="input-text w-100 my-2"
                                            placeholder="Enter title 4 menu" name="title_4_translation"
                                            value="{{ $history->title_4 }}">
                                        <textarea type="text" name="step_4_translation" class="input-text w-100" placeholder="Enter step 4 menu"
                                            rows="4">{{ $history->step_4 }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="row">
                                    <div class="col-3">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.edit_form_title_5')</p>
                                        <input type="text" class="input-text w-100 my-2"
                                            placeholder="Enter title 5 menu" name="title_5"
                                            value="{{ $history->title_5 }}">
                                        <textarea type="text" name="step_5" class="input-text w-100" placeholder="Enter step 5 menu" rows="4">{{ $history->step_5 }}</textarea>
                                    </div>
                                    <div class="col-3">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.edit_form_title_5') EN</p>
                                        <input type="text" class="input-text w-100 my-2"
                                            placeholder="Enter title 5 menu" name="title_5_translation"
                                            value="{{ $history->title_5 }}">
                                        <textarea type="text" name="step_5_translation" class="input-text w-100" placeholder="Enter step 5 menu"
                                            rows="4">{{ $history->step_5 }}</textarea>
                                    </div>
                                    <div class="col-3">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.edit_form_title_6')</p>
                                        <input type="text" class="input-text w-100 my-2"
                                            placeholder="Enter title 6 menu" name="title_6"
                                            value="{{ $history->title_6 }}">
                                        <textarea type="text" name="step_6" class="input-text w-100" placeholder="Enter step 6 menu" rows="4">{{ $history->step_6 }}</textarea>
                                    </div>
                                    <div class="col-3">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.edit_form_title_6') EN</p>
                                        <input type="text" class="input-text w-100 my-2"
                                            placeholder="Enter title 6 menu" name="title_6_translation"
                                            value="{{ $history->title_6 }}">
                                        <textarea type="text" name="step_6_translation" class="input-text w-100" placeholder="Enter step 6 menu"
                                            rows="4">{{ $history->step_6 }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.edit_form_history')</p>
                                        <textarea type="text" name="history" class="input-text w-100" placeholder="Enter history menu" rows="4">{{ $history->history }}</textarea>
                                    </div>
                                    <div class="col-6">
                                        <p class="text-black fs-14 fw-medium">@lang('messages.edit_form_history') EN</p>
                                        <textarea type="text" name="history__translation" class="input-text w-100" placeholder="Enter history menu"
                                            rows="4">{{ $history->history }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex flex-row gap-2">
                                    <a href="{{ route('index-history') }}" class="btn btn-dark">@lang('messages.edit_form_button1')</a>
                                    <button type="submit" class="btn btn-color">@lang('messages.edit_form_button2')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
@endsection
