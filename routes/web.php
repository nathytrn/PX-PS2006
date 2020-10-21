<?php
use Illuminate\Http\Request;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;


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

Route::get('admin/events/{event}/edit','EventsController@edit')->middleware('admin.or.artist'); 

Route::resource('events','EventsController');
//Route::get('/events', 'EventsController@index' );

//Route::post('/events', 'EventsController@store' );

//Route::get('/events/create', 'EventsController@create' );

Route::get('/artists/music', 'ArtistsController@indexMusic' );

Route::get('/artists/crafts', 'ArtistsController@indexCrafts' );

Route::get('/artists/visualarts', 'ArtistsController@indexVisualArts' );

Route::get('/artists/performingarts', 'ArtistsController@indexPerformingArts' );

//Route::resource('artists','ArtistsController');

Route::get('/artists','ArtistsController@index');

Route::get('/artists/result','ArtistsController@search');



Route::get('/artists/create','ArtistsController@create')->middleware('admin');


//Route::get('/artists/create','ArtistsController@create')->middleware('admin','artist');

Route::post('/artists','ArtistsController@store')->middleware('admin.or.artist'); 

Route::get('/artists/{artist}','ArtistsController@show');

Route::get('admin/artists/{artist}/edit','ArtistsController@edit')->middleware('admin');

Route::get('artists/{artist}/edit','ArtistsController@editArtist')->middleware('artist');

Route::patch('/artists/{artist}','ArtistsController@update')->middleware('admin.or.artist'); 

Route::delete('/artists/{artist}','ArtistsController@delete')->middleware('admin');

Route::patch('/admin/users/{user}','HomeController@updateArtist')->middleware('admin');

Route::delete('/artists/{artist}','ArtistsController@destroy')->middleware('admin.or.artist'); 

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');

Route::get('artist/home', 'HomeController@handleArtist')->name('artist.route')->middleware('artist');

Route::get('orders/admin/{order}','HomeController@handleAdminOrder')->middleware('admin');

Route::get('orders/artist/{order}','HomeController@handleArtistOrder')->middleware('admin.or.artist');

Route::patch('/orders/{order}','ArtistOrdersController@update');

Route::post('/artists/{artist}/orders','ArtistOrdersController@store');
 
Route::get('artist/home/orders', 'ArtistOrdersController@show' );

Route::delete('/orders/{order}','ArtistOrdersController@delete')->middleware('admin');

//Route::get('admin/home/orders', 'ArtistOrdersController@showAdmin' );

// Create image upload form
//Route::get('/image-upload', 'FileUpload@createForm');

// Store image
//Route::get('/upload','FileUpload@uploadForm');

//Route::post('/upload','FileUpload@uploadFile')->name('uploadfile');


Route::get('/artist/gallery','ImageController@show')->middleware('admin.or.artist');
Route::get('/artist/upload', 'ImageController@index')->middleware('admin.or.artist');
Route::post('/artist/upload', 'ImageController@save')->middleware('admin.or.artist');
Route::post('/artist/uploadVideo', 'ImageController@saveVideo')->middleware('admin.or.artist');
Route::delete('/artist/gallery/{image}','ImageController@delete')->middleware('admin.or.artist');




