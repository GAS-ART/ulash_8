@section('head')

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- FAVICON https://favicon.io/favicon-converter/ -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png')}} ">


  <title>@yield('title')</title>
  <meta name="description" content="@yield('description')">

  <meta property="og:url" content="@yield('ogUrl')" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="@yield('ogTitle')" />
  <meta property="og:description" content="@yield('ogDescription')" />
  <meta property="og:site_name" content="ruban-dentist.com.ua" />
  <!--  <meta property="og:image" content="{{ asset('img/avatar/3.jpg')}}"/> -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('css/style.css') . '?_v=2'}}">

</head>