<!DOCTYPE html>
<html>
<head>
  <title>Sign in - KickStart Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/login2.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/tostr.css') }}">  
@yield('css')

</head>
<body>
  <section>
    <div id="google_translate_element"></div>
  <div class="container-fluid">
    <div class="mainlogin col-xl-4 col-sm-12 login">
      <div class="loadingline hidden"></div>
      <div class="padding">
        <img src="{{ asset('images/logo.png') }}" class="image">
        @yield('content')
     </div>
  </div>
  <div align="center" class="bot">
    <span class="bottom">
      <a href="#" class="colour">New to KickStart?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    </span>
    <span class="bottom1">
      <a href="#"  class="colour">Help&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    </span>
    <span class="bottom2">
      <a href="#"  class="colour">About us</a>
    </span>
  </span>
</section>
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>

{{-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> --}}
<script type="text/javascript" src="{{ asset('js/tostr.js') }}"></script>
<script type="text/javascript">
  toastr.options = {
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}</script>
@yield('script')
</body>
</html>