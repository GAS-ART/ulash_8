<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/send', 'App\Http\Controllers\sendController@submit')->name('send');
Route::get('/locale/{locale}',  'App\Http\Controllers\LanguagesController@changeLocale')->name('locale');

Route::get('/', function () {
  App::setLocale('es');
  return view('home');
})->name('index');
Route::get('/es', function () {
  App::setLocale('es');
  return  redirect('/');
});

Route::get('/{locale}', function ($locale) {
  if (!in_array($locale, ['es', 'ru'])) {

    abort(404);
  } else if ($locale == 'es') {

    App::setLocale('es');
    return view('home');
  } else if ($locale == 'ru') {

    App::setLocale('ru');
    return view('home');
  }
})->name('home');


Route::get('/{locale}/service', function ($locale) {

  if (!in_array($locale, ['ru', 'es'])) {

    abort(404);
  } else if ($locale == 'ru') {

    App::setLocale('ru');
    return view('service');
  } else if ($locale == 'es') {

    App::setLocale('es');
    return view('service');
  }
})->name('service');

Route::get('/{locale}/teaching', function ($locale) {

  if (!in_array($locale, ['ru', 'es'])) {

    abort(404);
  } else if ($locale == 'ru') {

    App::setLocale('ru');
    return view('teaching');
  } else if ($locale == 'es') {

    App::setLocale('es');
    return view('teaching');
  }
})->name('teaching');

Route::get('/{locale}/reviews', function ($locale) {

  if (!in_array($locale, ['ru', 'es'])) {

    abort(404);
  } else if ($locale == 'ru') {

    App::setLocale('ru');
    return view('reviews');
  } else if ($locale == 'es') {

    App::setLocale('es');
    return view('reviews');
  }
})->name('reviews');

Route::get('/{locale}/contants', function ($locale) {

  if (!in_array($locale, ['ru', 'es'])) {

    abort(404);
  } else if ($locale == 'ru') {

    App::setLocale('ru');
    return view('contants');
  } else if ($locale == 'es') {

    App::setLocale('es');
    return view('contants');
  }
})->name('contants');
