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
                    <h4 class="card-title mb-4"> {{  __('translation.Social Links') }} </h4>
                    <form method="POST" action="{{ route('settings.update_social_links') }}">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="link-one-input" class="col-form-label">{{ __('translation.whats_number') }}</label>
                                <input class="form-control" type="text" value="{{ @$whats_number }}" id="whats_number" name="whats_number">
                            </div>

                            <div class="col-md-6">
                                <label for="link-one-input" class="col-form-label">{{ __('translation.tiktok_url') }}</label>
                                <input class="form-control" type="text" value="{{ @$tiktok_url }}" id="tiktok_url" name="tiktok_url">
                            </div>

                            <div class="col-md-6">
                                <label for="link-one-input" class="col-form-label">{{ __('translation.instagram_url') }}</label>
                                <input class="form-control" type="text" value="{{ @$instagram_url }}" id="instagram_url" name="instagram_url">
                            </div>

                            <div class="col-md-6">
                                <label for="link-one-input" class="col-form-label">{{ __('translation.x_url') }}</label>
                                <input class="form-control" type="text" value="{{ @$x_url }}" id="x_url" name="x_url">
                            </div>

                            <div class="col-md-6">
                                <label for="link-one-input" class="col-form-label">{{ __('translation.facebook_url') }}</label>
                                <input class="form-control" type="text" value="{{ @$facebook_url }}" id="facebook_url" name="facebook_url">
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
