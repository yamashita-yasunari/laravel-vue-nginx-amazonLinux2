<?php

use Illuminate\Http\Request;
use App\Article;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//group$B;XDj$7$F%_%I%k%&%'%"E,MQ(B
Route::group(['middleware' => 'api'], function() {
    Route::get('articles',  function() {
        $articles = Article::all();
        return $articles;
    });
});
