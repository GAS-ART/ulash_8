@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))
@section('ogUrl', __('titles.home.ogUrl'))

@section('page', 'home')


@section('content')
<div class="__container">
      @lang('home.test')
      <br><br> 
      <a href="{{ route('service', ['locale' => __('lang.current')]) }}" style="color: darkblue; text-decoration: underline">@lang('home.link')</a> 
      <br><br>
      @if(App::isLocale('es'))
      <img src="{{asset('/img/home/es/manicura-francesa-con-esmalte-de-calidad.jpg')}}" alt="">
      @elseif(App::isLocale('ru'))
      <img src="{{asset('/img/home/ru/французский-маникюр-с-качественным-лаком.jpg')}}" alt="">
      @endif
      <br><br>
      <p>Change debploy second time</p>
</div>

@endsection