@extends('layouts.backend.master')
@section('title') @lang('translation.Dashboard') @endsection
@section('content')
 <!-- start page title -->
 <div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">{{ trans('translation.Dashboard')}}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{trans('translation.Dashboard')}}</a></li>
                    <li class="breadcrumb-item active">{{ trans('translation.Dashboard')}}</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<!-- end row -->
</div>
<!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection

