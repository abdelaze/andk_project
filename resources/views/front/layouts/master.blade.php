<!doctype html>
<html lang="en" dir="rtl">
<head>
  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="HandheldFriendly" content="true" />
  <title> @stack('title') </title>
  @include('front.includes.head_css')

</head>
<body id="CQ8BP6tF7zUHXlCwEDfHtgyQuf3Tu4xG">

        @include('front.includes.top_bar')
        @include('front.includes.header')
        @yield('content')
        @include('front.includes.footer')
        @include('front.includes.vendor-scripts')

</body>
</html>


