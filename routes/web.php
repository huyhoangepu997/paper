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
    return view('pages.home');
});

Route::get('/san-pham', function () {
    return view('pages.san-pham');
});

Route::get('/tin-tuc', function () {
    return view('pages.tin-tuc');
});

Route::get('/co-dong', function () {
    return view('pages.co-dong');
});

Route::get('/gioi-thieu', function () {
    return view('pages.gioi-thieu');
});

Route::get('tuyen-dung', function () {
    return view('pages.tuyen-dung');
});

Route::get('lien-he', function () {
    return view('pages.lien-he');
});
