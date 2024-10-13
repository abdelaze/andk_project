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
                    <form method="POST" action="{{ route('settings.update_texts') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="translation" class="col-form-label">{{ __('translation.goal_text') }}</label>

                                <textarea class="form-control"   id="translation" name="goal_text" rows="20">
                                    {{ @$goal_text }}
                                </textarea>

                            </div>

                            <div class="col-md-6">
                                <label for="value_text" class="col-form-label">{{ __('translation.value_text') }}</label>

                                <textarea class="form-control"   id="value_text" name="value_text" rows="20">
                                    {{ @$value_text }}
                                </textarea>

                            </div>


                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="vision_text" class="col-form-label">{{ __('translation.vision_text') }}</label>

                                <textarea class="form-control"   id="vision_text" name="vision_text" rows="20">
                                    {{ @$vision_text }}
                                </textarea>

                            </div>

                            <div class="col-md-6">
                                <label for="competitive_advantages_text" class="col-form-label">{{ __('translation.competitive_advantages_text') }}</label>

                                <textarea class="form-control"   id="competitive_advantages_text" name="competitive_advantages_text" rows="20">
                                    {{ @$competitive_advantages_text }}
                                </textarea>

                            </div>


                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="current_investment_opportunity_text" class="col-form-label">{{ __('translation.current_investment_opportunity_text') }}</label>

                                <textarea class="form-control"   id="current_investment_opportunity_text" name="current_investment_opportunity_text" rows="20">
                                    {{ @$current_investment_opportunity_text }}
                                </textarea>

                            </div>

                            <div class="col-md-6">
                                <label for="benefits_for_investors_text" class="col-form-label">{{ __('translation.benefits_for_investors_text') }}</label>

                                <textarea class="form-control"   id="benefits_for_investors_text" name="benefits_for_investors_text" rows="20">
                                    {{ @$benefits_for_investors_text }}
                                </textarea>

                            </div>

                        </div>


                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="sector_one_title" class="col-form-label">{{ __('translation.sector_one_title') }}</label>

                                <input class="form-control"   id="sector_one_title" name="sector_one_title" value="{{ @$sector_one_title }}">

                            </div>

                            <div class="col-md-6">
                                <label for="sector_two_title" class="col-form-label">{{ __('translation.sector_two_title') }}</label>

                                <input class="form-control"   id="sector_two_title" name="sector_two_title" value="{{ @$sector_two_title }}">
                            </div>


                        </div>

                        <div class="row mb-2">

                            <div class="col-md-6">
                                <label for="sector_three_title" class="col-form-label">{{ __('translation.sector_three_title') }}</label>

                                <input class="form-control"   id="sector_three_title" name="sector_three_title" value="{{ @$sector_three_title }}">

                            </div>

                        </div>



                        <div class="row mb-2">
                            <div class="col-md-6">
                                <label for="sector_one_text" class="col-form-label">{{ __('translation.sector_one_text') }}</label>

                                <textarea class="form-control"   id="sector_one_text" name="sector_one_text" rows="20">
                                    {{ @$sector_one_text }}
                                </textarea>

                            </div>

                            <div class="col-md-6">
                                <label for="sector_two_text" class="col-form-label">{{ __('translation.sector_two_text') }}</label>

                                <textarea class="form-control"   id="sector_two_text" name="sector_two_text" rows="20">
                                    {{ @$sector_two_text }}
                                </textarea>

                            </div>


                        </div>

                        <div class="row mb-2">

                            <div class="col-md-6">
                                <label for="sector_three_text" class="col-form-label">{{ __('translation.sector_three_text') }}</label>

                                <textarea class="form-control"   id="sector_three_text" name="sector_three_text" rows="20">
                                    {{ @$sector_three_text }}
                                </textarea>

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
