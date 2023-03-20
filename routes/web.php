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

Route::get('/', function () {
    return view('welcome');
});



// ユーザー
Route::namespace('User')->prefix('user')->name('user.')->group(function () {

    // ログイン認証関連
    Auth::routes();

    // パスワードリセット
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

    // ログイン認証後
    Route::middleware('auth:user')->group(function () {

        // TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);

        // イベント用
        Route::get('events/index', 'EventController@index')->name('events.index');
        Route::get('events/{event}/show', 'EventController@show')->name('events.show');

        // お気に入り機能
        Route::get('/like/index', 'LikesController@index')->name('like.index');
        Route::post('/like', 'LikesController@like');

        // 予約用
        Route::resource('reserve', 'ReserveController');
    });
});

// 管理者
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    // ログイン認証関連
    Auth::routes();

    // パスワードリセット
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

    // ログイン認証後
    Route::middleware('auth:admin')->group(function () {

        // TOPページ
        Route::get('home', 'HomeController@index');
        Route::get('users/index', 'HomeController@getUsers')->name('users.index');
        Route::get('user/{id}/index', 'HomeController@getUser')->name('user.show');

        //イベント用
        Route::resource('events', 'EventController');

        //予約用
        Route::post('/reserve/search/period', 'ReserveController@searchPeriod')->name('search.period');
        Route::resource('reserve', 'ReserveController');

    });

});
