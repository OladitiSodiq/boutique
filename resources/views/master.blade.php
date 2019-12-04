<!DOCTYPE html>
<html lang="en">
@include('include.head')
<body>
   
  @include('include.header')

  @yield('content')

  @include('include.footer')

{{-- <script type="text/javascript" src="js/pnotify.custom.min.js"></script> --}}

<script src="https://unpkg.com/pnotify@4.0.0/dist/umd/PNotify.js"></script>
<link href="https://unpkg.com/pnotify@4.0.0/dist/PNotifyBrightTheme.css" rel="stylesheet">
<script src="js/front.js"></script>
<script src="js/main.js"></script>
<script src="js/cart.js"></script>


</body>

</html>

