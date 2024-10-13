@extends('layouts.backend.master')
@section('title')
    @lang('translation.messages')
@endsection

@push('css')
    <!-- DataTables -->
    <link href="{{ asset(ASSET_PATH . 'assets/backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset(ASSET_PATH . 'assets/backend/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <!--  Responsive datatable examples -->
    <link
        href="{{ asset(ASSET_PATH . 'assets/backend/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
@endpush

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <div class="search-box me-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                    <h4 class="card-title">{{ trans('translation.messages') }}</h4>

                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="table-responsive">
                        <table id="about_datatable" class="table align-middle table-nowrap table-check">
                            <thead class="table-light">
                                <tr>
                                    <th>{{ trans('translation.no') }}</th>
                                    <th>{{ trans('translation.full_name') }}</th>
                                    <th>{{ trans('translation.phone_number') }}</th>
                                    <th>{{ trans('translation.city') }}</th>
                                    <th>{{ trans('translation.stocks') }}</th>
                                    <th>{{ trans('translation.confirm') }}</th>
                                    <th>{{ trans('translation.notes') }}</th>
                                </tr>
                            </thead>
                            <tbody id="bodycontent"style="cursor:pointer">
                                @if (!empty($datas) && count($datas) > 0)
                                    @foreach ($datas as $key => $data)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $data->full_name }}</td>
                                            <td>{{ $data->mobile_number }}</td>
                                            <td>{{ $data->city }}</td>
                                            <td>{{ $data->stocks }}</td>
                                            <td>
                                                <div class="form-check-size">
                                                    <div class="form-check form-switch form-check-inline">
                                                        <input class="form-check-input check-size seen" id="{{ $data->id }}" type="checkbox" role="switch"    {{ ($data->seen == 1) ? 'checked' : '' }}>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $data->notes }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
@push('script')
    <!-- Required datatable js -->
    <script src="{{ asset(ASSET_PATH . 'assets/backend/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset(ASSET_PATH . 'assets/backend/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}">
    </script>
    <!-- Buttons examples -->
    <script src="{{ asset(ASSET_PATH . 'assets/backend/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}">
    </script>
    <script src="{{ asset(ASSET_PATH . 'assets/backend/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset(ASSET_PATH . 'assets/backend/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset(ASSET_PATH . 'assets/backend/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset(ASSET_PATH . 'assets/backend/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset(ASSET_PATH . 'assets/backend/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset(ASSET_PATH . 'assets/backend/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset(ASSET_PATH . 'assets/backend/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset(ASSET_PATH . 'assets/backend/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
    </script>
    <script
        src="{{ asset(ASSET_PATH . 'assets/backend/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
    </script>

    <!-- Datatable init js -->
    <script src="{{ asset(ASSET_PATH . 'assets/backend/js/pages/datatables.init.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        $(document).ready(function() {
            let User_Lang = "{{ app()->getLocale() }}";
            let localeUrl = User_Lang === 'ar' ? '//cdn.datatables.net/plug-ins/1.10.24/i18n/Arabic.json' :
                '//cdn.datatables.net/plug-ins/1.10.24/i18n/English.json';
            var table = $("#about_datatable").DataTable({
                language: {
                    url: localeUrl
                },

            });


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                }
            });
        });

        $(document).on('change', '.seen', function () {
                let url = "{{route('messages.toggleSeen',':id')}}";
                url = url.replace(':id', this.id);
                $.ajax({
                    url: url,
                    method: 'GET',
                    data: {},
                    success: function (response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'نجاح!',
                            text: '{{ session('success') }}'
                        });
                    },
                    error: function (response) {
                        Swal.fire({
                            icon: 'error',
                            title: 'خطأ!',
                            html: errorMessage
                        });
                    }
                });
           });
    </script>


@endpush
