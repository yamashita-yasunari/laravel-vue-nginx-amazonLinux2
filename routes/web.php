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

//$B$I$s$J(BURL$B$G%j%/%(%9%H$r<u$1$F$b(BLayouts$B$N(Bvue_app,.blade.php$B$rJV$9(B
Route::get('/{any}', function () {
    return view('layouts/vue_app');
})
->where('any', '.*');
