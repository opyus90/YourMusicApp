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

Route::get('/artists', 'Artists\ArtistsController@getArtists')->name('artists');

Route::get('/artist_{name}', 'Artists\ArtistController@getArtist')->name('artist');

Route::get('/artists_search_{str}', 'Artists\ArtistsController@searchArtists')->name('search artists');

Route::get('/albums', 'Albums\AlbumsController@getAlbums')->name('albums');

Route::get('/album_{name}', 'Albums\AlbumController@getAlbum')->name('album');

Route::get('/albums_search_{str}', 'Albums\AlbumsController@searchAlbums')->name('search albums');

Route::get('/news', function () {
    return view('news.blog');
})->name('news');

Route::get('/signup', function () {
    return view('authentication.register');
})->name('signup');

Route::post('/register', 'Auth\RegisterController@register')->name('register');

Route::get('/login', function () {
    return view('authentication.login');
})->name('login');

Route::post('/loguser', 'Auth\LoginController@login')->name('loguser');

Route::get('/signout', 'Auth\LoginController@destroy')->name('logout');

Route::get('/contact', function () {
    return view('contact.contact');
});

Route::post('/contactus', 'Contact\ContactController@contactus')->name('contactus');

Route::get('user/{id}', 'UserController@show');

Route::get('/lucky', 'LuckyController@show');

Route::get('/db', 'Artists\ArtistsController@getArtists');
