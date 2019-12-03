<!DOCTYPE html>
<html lang="en">
    {!! Notify::render() !!}
@include('include.head')
<body>
   
  @include('include.header')

  @yield('content')

  @include('include.footer')
 
</body>

</html>

