@extends('layouts.backend.master')
@section('title')
    @lang('translation.settings')
@endsection
@push('css')
    <!-- select2 css -->
    <link href="{{ asset(ASSET_PATH . 'assets/backend/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- dropzone css -->
    <link href="{{ asset(ASSET_PATH . 'assets/backend/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet"
        type="text/css" />
@endpush
@section('content')
    @include('admin.settings.custom_header')
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4"> {{  __('translation.about_us') }} </h4>
                    <form method="POST" action="{{ route('settings.update_about_us') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="translation" class="col-form-label">{{ __('translation.abouts_us_text') }}</label>

                                <textarea class="form-control"   id="translation" name="abouts_us_text" rows="20">
                                    {{ @$abouts_us_text }}
                                </textarea>

                            </div>

                            <div class="col-md-6">
                                <label for="abouts_us_image" class="col-form-label">{{ __('translation.abouts_us_image') }}</label>
                                <input type="file" class="form-control" name="abouts_us_image" id="abouts_us_image"
                                placeholder="{{ __('translation.abouts_us_image') }}">
                                <img class="rounded mt-2" width="300" height="300"
                                    src="{{ url('public/uploads/settings/about_us') . '/' . @$abouts_us_image }}">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6 mt-5">
                                <button type="submit" class="btn btn-primary w-md">Update</button>
                            </div>
                        </div>
                    </form>


                </div>
                <!-- end card body -->
            </div>
        </div>

    @endsection

@push('script')


<script src="{{asset(ASSET_PATH.'/assets/backend/libs/tinymce/tinymce.min.js')}}"></script>

<script src="{{asset(ASSET_PATH.'/assets/backend/js/pages/task-create.init.js')}}"></script>


@endpush
