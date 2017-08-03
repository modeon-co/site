<?php

Route::any('contact/receipt', 'ContactController@receipt');

Route::get('/', function () {
    return view('main');
});
