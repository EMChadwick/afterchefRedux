<?php

// Set Locale

use App\Http\Controllers\SiteController;

Route::get('/set-locale/{locale}', function ($locale) {
    App::setLocale($locale);
    session(['locale' => $locale]);

    return redirect()->back();
})->name('set-locale');

// Pages

Route::view('/', 'pages.site.home')->name('site.home');