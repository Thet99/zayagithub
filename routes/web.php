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


// $s = 'social.';
// Route::get('/social/redirect/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\SocialController@getSocialRedirect']);
// Route::get('/social/handle/{provider}',     ['as' => $s . 'handle',     'uses' => 'Auth\SocialController@getSocialHandle']);

//Social Login routes
Route::get('login/social/{provider}', 'Auth\LoginController@redirectToProvider')->name('social.redirect');
Route::get('login/social/callback/{provider}', 'Auth\LoginController@handleProviderCallback')->name('social.callback');

//login | register routes
Auth::routes();

//home routes guard gest
route::group(['prefix'=>'/'],function(){

	Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/faqs','FrontendController@faqs')->name('frontend.faqs');

Route::get('/event','FrontendController@events')->name('frontend.events');
Route::get('/event/{id}','FrontendController@showEvent')->name('frontend.event.show');
//Route for plan
Route::get('/plans','FrontendController@plans')->name('frontend.plans');
Route::get('/plan_detail/{id}','FrontendController@planDetail')->name('frontend.planDetail');
Route::get('/resform/{id}','FrontendController@getReserveForm')->name('frontend.resform');
//Route for community
Route::get('/community','FrontendController@community')->name('frontend.community');
//Route for location
Route::get('/location','FrontendController@location')->name('frontend.location');
//Route for terms and conditions
Route::get('/terms','FrontendController@terms')->name('frontend.terms');
Route::get('/about','FrontendController@about')->name('frontend.about');
//Route::get('/test','FrontendController@testdF')->name('frontend.test');
Route::post("/sent_message","FrontendController@sent_message")->name('frontend.sent_message');
Route::get("/contact","ContactController@show")->name('frontend.contact');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

route::group(['middleware'=>'auth'],function(){

route::resource('user','UserController');

});

route::post('/mkres','FrontendController@makeReserve')->name('frontend.mkres');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/rg','FrontendController@rgForm')->name('rgform');
//test for ajax request
Route::get('/test','TestController@get')->name('test');
Route::get('upcoming/','FrontendController@test')->name('testapi');
Route::post('/rescreate','ReserveController@store')->name('reserve.store');


// //Contact Form
// Route::get('/contact','ContactController@contact')->name('frontend.contact');
Route::post('/send_message','ContactController@send_toadmin')->name('send_toadmin');

