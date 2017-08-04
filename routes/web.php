<?php

Route::any('contact/receipt', 'ContactController@receipt');

Route::get('portfolio/{name?}', function ($name = null) {
    $pages = ['klicia', 'sublimefts', 'comodoro', 'barbizan', 'vivaleve', 'feiradenoivas'];
    if (in_array($name, $pages)) {
        return view('portfolio.' . $name);
    } else {
        return redirect('/');
    }
});

Route::get('/', function () {
    return view('main');
});
