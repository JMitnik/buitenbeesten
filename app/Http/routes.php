<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('beleidsplan','DownloadFileController@beleidsplan');
Route::get('begroting','DownloadFileController@begroting');

