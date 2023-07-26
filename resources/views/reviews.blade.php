@extends('layout')
@section('title', __('titles.home.title'))
@section('description', __('titles.home.description'))
@section('ogTitle', __('titles.home.ogTitle'))
@section('ogDescription', __('titles.home.ogDescription'))

@section('page', 'home')


@section('content')
<h1>@lang('service.title')3</h1>
<p>@lang('service.text')</p>
<a href="{{ route('home', ['locale' => __('lang.current')]) }}"
  style="color: darkblue; text-decoration: underline">@lang('service.link')</a>
@endsection