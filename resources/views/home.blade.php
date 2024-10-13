@extends('front.layouts.master')

@push('title')
    شركة عندك لخدمات الأعمال: الريادة في خدمات التوصيل
@endpush

@section('content')
    @include('front.sections.about_us')
    @include('front.sections.features')
    @include('front.sections.current_investments')
    @include('front.sections.sectors')
    @include('front.sections.contact_us')

    @push('script')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>

          const formElement = document.querySelector('.contact');
            // Check for success message
            @if (session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'نجاح!',
                    text: '{{ session('success') }}'
                });
            @endif

            // Check for validation errors
            @if ($errors->any())
                let errors = @json($errors->all());
                let errorMessage = errors.join('<br>');

                Swal.fire({
                    icon: 'error',
                    title: 'خطأ!',
                    html: errorMessage
                }).then(() => {
                    setTimeout(() => {
                        formElement.scrollIntoView({ behavior: 'smooth' });
                    }, 500); // Adjust the delay as needed
                });
            @endif
        </script>
    @endpush
    <!--/ News end -->
@endsection
