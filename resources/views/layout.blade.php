<!DOCTYPE html>
<html lang="@lang('lang.current')">
@include('inc.head')
<body id="body">
   <div class="wrapper">
      @include('inc.header')
         <main class="page">
            @yield('content')
         </main>
      @include('inc.footer')
   </div>
   @include('inc.popup')
   <script src="{{asset('js/app.js') . '?_v=1'}} "></script>
</body>

</html>