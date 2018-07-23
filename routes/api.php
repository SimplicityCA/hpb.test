<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('homepictures', 'HomePictureController@index');
Route::get('aboutus', 'SiteTextController@aboutus');
Route::get('certification', 'SiteTextController@certification');
Route::get('certificationsList', 'CertificationController@index');
Route::get('products', 'ProductController@index');
Route::post('contact', 'ContactController@store');
Route::get('product/{link}', 'ProductController@show');
Route::get('clientbanner', 'ClientController@banner');
Route::get('clientdescription', 'ClientController@description');
Route::post('client', 'ClientController@store');
Route::post('localize/center', 'ClientController@getNearlocations');
Route::get('tips', 'SiteTextController@tips');