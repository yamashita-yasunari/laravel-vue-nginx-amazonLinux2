<?php

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

//どんなURLでリクエストを受けてもLayoutsのvue_app,.blade.phpを返す
Route::get('/{any}', function () {
    return view('layouts/vue_app');
})
->where('any', '.*');
