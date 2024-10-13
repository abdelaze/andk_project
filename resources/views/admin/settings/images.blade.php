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
                    <h4 class="card-title mb-4"> {{  __('translation.images') }} </h4>
                    <form method="POST" action="{{ route('settings.update_images') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">

                            <div class="col-md-6">
                                <label for="features_image_one" class="col-form-label">{{ __('translation.features_image_one') }}</label>
                                <input type="file" class="form-control" name="features_image_one" id="features_image_one"
                                placeholder="{{ __('translation.features_image_one') }}">
                                <img class="rounded mt-2" width="300" height="300"
                                    src="{{ url('public/uploads/settings/images') . '/' . @$features_image_one }}">
                            </div>

                            <div class="col-md-6">
                                <label for="features_image_two" class="col-form-label">{{ __('translation.features_image_two') }}</label>
                                <input type="file" class="form-control" name="features_image_two" id="features_image_two"
                                placeholder="{{ __('translation.features_image_two') }}">
                                <img class="rounded mt-2" width="300" height="300"
                                    src="{{ url('public/uploads/settings/images') . '/' . @$features_image_two }}">
                            </div>



                        </div>


                        <div class="row mb-2">

                            <div class="col-md-6">
                                <label for="investment_image" class="col-form-label">{{ __('translation.investment_image') }}</label>
                                <input type="file" class="form-control" name="investment_image" id="investment_image"
                                placeholder="{{ __('translation.investment_image') }}">
                                <img class="rounded mt-2" width="300" height="300"
                                    src="{{ url('public/uploads/settings/images') . '/' . @$investment_image }}">
                            </div>


                            <div class="col-md-6">
                                <label for="sectors_image" class="col-form-label">{{ __('translation.sectors_image') }}</label>
                                <input type="file" class="form-control" name="sectors_image" id="sectors_image"
                                placeholder="{{ __('translation.sectors_image') }}">
                                <img class="rounded mt-2" width="300" height="300"
                                    src="{{ url('public/uploads/settings/images') . '/' . @$sectors_image }}">
                            </div>

                        </div>

                        <div class="row mb-2">

                            <div class="col-md-6">
                                <label for="contact_us_image" class="col-form-label">{{ __('translation.contact_us_image') }}</label>
                                <input type="file" class="form-control" name="contact_us_image" id="contact_us_image"
                                placeholder="{{ __('translation.contact_us_image') }}">
                                <img class="rounded mt-2" width="300" height="300"
                                    src="{{ url('public/uploads/settings/images') . '/' . @$contact_us_image }}">
                            </div>

                            <div class="col-md-6">
                                <label for="contact_us_image" class="col-form-label">{{ __('translation.logo') }}</label>
                                <input type="file" class="form-control" name="logo" id="logo"
                                placeholder="{{ __('translation.logo') }}">
                                <img class="rounded mt-2" width="300" height="300"
                                    src="{{ url('public/uploads/settings/images') . '/' . @$logo }}">
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
  @push('scripts')


  <script src="{{asset(ASSET_PATH.'/assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>


  <script src="{{asset(ASSET_PATH.'/assets/js/pages/form-repeater.int.js')}}"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        var outerRepeater = document.querySelector('.outer-repeater');
        var repeaterList = outerRepeater.querySelector('[data-repeater-list]');
        var addButton = outerRepeater.querySelector('[data-repeater-create]');


        addButton.addEventListener('click', function () {
            setTimeout(function () {
                var newItems = repeaterList.querySelectorAll('[data-repeater-item]');
                var lastItem = newItems[newItems.length - 1];
                var input = lastItem.querySelector('input[type="color"]');
                var label = lastItem.querySelector('label');

                label.textContent = 'Package Color ' + (colorsCount + 1);
                input.setAttribute('name', 'outer-group[0][inner-group][' + colorsCount + '][color]');
                colorsCount++;
            }, 100); // Delay to ensure repeater creates the item
        });
    });

</script>

  @endpush
