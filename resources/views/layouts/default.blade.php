<!doctype html>
<html class="no-js" lang="">
<head>
   @include('includes.head')
</head>
<body>
       @include('includes.header')
       @include('includes.menu')
           @yield('content')

       @include('includes.footer')
       @include('includes.script')
</body>
</html>