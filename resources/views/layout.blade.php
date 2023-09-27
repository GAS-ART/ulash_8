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
  <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxkxUV5WWDX7oBj5U84uz0OczhiVwUTIs"></script> -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="{{asset('js/app.js') . '?_v=5'}} "></script>
</body>

</html>