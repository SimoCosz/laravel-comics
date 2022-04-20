<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/characters', function () {
    return view('characters');
})->name('characters.index');

Route::get('/comics', function () {
    $comics = config('comics');
    $links = [
        [
          'image' => '/img/buy-comics-digital-comics.png',
          'text' => 'Digital comics',
          'href' => '#'
        ],
        [
          'image' => '/img/buy-comics-merchandise.png',
          'text' => 'Dc merchendise',
          'href' => '#'
        ],
        [
          'image' => '/img/buy-comics-shop-locator.png',
          'text' => 'Subscription',
          'href' => '#'
        ],
        [
          'image' => '/img/buy-comics-subscriptions.png',
          'text' => 'Comic shop locator',
          'href' => '#'
        ],
        [
          'image' => '/img/buy-dc-power-visa.svg',
          'text' => 'Dc power visa',
          'href' => '#'
        ],
    ];
    return view('comics')->with('comics', $comics)->with('links', $links);
})->name('comics.index');

Route::get('/movies', function () {
    return view('movies');
})->name('movies.index');

Route::get('/tv', function () {
    return view('tv');
})->name('tv.index');

Route::get('/games', function () {
    return view('games');
})->name('games.index');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles.index');

Route::get('/videos', function () {
    return view('videos');
})->name('videos.index');

Route::get('/fans', function () {
    return view('fans');
})->name('fans.index');

Route::get('/news', function () {
    return view('news');
})->name('news.index');

Route::get('/shop', function () {
    return view('shop');
})->name('shop.index');

Route::get('/comics/{id}', function ($id) {

    $comics = config('comics');

    abort_if(!isset($comics[$id]), 404);
    $detail = $comics[$id];
        return view('details')->with('comic', $detail);
})->where('id', '[0-9]+')->name('comic.show');