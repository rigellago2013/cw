<?php

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


Route::get('/get-users',"HomeController@getUsers")->name('get-users');

Route::get('/','StaticSiteController@cryptoHome')->name('index');


Route::get('/crypto-youtube', 'StaticSiteController@crypto_feeds')->name('static.crypto_feeds');

Route::get('cryptonews', 'StaticSiteController@cryptoNews')->name('cryptonews');
Route::get('cryptoyoutube', 'StaticSiteController@cryptoYoutube')->name('cryptoyoutube');
Route::get('investor-zone', 'StaticSiteController@investorZone')->name('investor-zone');
Route::get('news-letter', 'StaticSiteController@newsLetterV2')->name('news-letter');
Route::get('funding-deals', 'StaticSiteController@fundingDeals')->name('funding-deals');

Route::get('/fetchYoutube20_ajax', 'StaticSiteController@fetchYoutube20_ajax')->name('static.fetchYoutube20_ajax'); 


Route::get('/crypto-youtube/{id}', 'StaticSiteController@single_crypto_feeds')->name('static.crypto_feeds_single');

Route::get('/fundingdeals', 'StaticSiteController@fundingdealspage')->name('static.funding.deals');
Route::get('/newsletter', 'StaticSiteController@newsletter')->name('static.newsletter');


Route::get('/100', 'StaticSiteController@crypto100')->name('static.crypto100');
Route::get('/crypto-female-50-awards', 'StaticSiteController@female50')->name('static.female50');
Route::get('/crypto-defi-50-awards', 'StaticSiteController@defi50')->name('static.defi50');

Route::get('/top-cryptocurrency-youtubers', 'StaticSiteController@fetchYoutube20')->name('static.fetchYoutube20');

Route::get('/top-crypto-altcoin-picks', 'StaticSiteController@toppicks')->name('static.toppicks');

Route::get('/domains', 'StaticSiteController@domains')->name('static.domains');
Route::get('/250', 'StaticSiteController@crypto_250')->name('static.crypto_250');
Route::post('/send_domain_email', 'StaticSiteController@send_domain_email')->name('static.send_domain_email');

Route::post("/saveblog","BlogController@saveblog")->name("blog1.saveblog");
Route::post("/updatesave","BlogController@updatesave")->name("blog.updatesave");
Route::post("/publish","BlogController@publish")->name("blog.publish");


Route::get('/mobile_view', 'StaticSiteController@mobile_view')->name('static.mobile_view');



Route::get('/list', function () {
    //createfundingdeals
   return view('investorzone');
})->name('static.investorzone');



Route::get('/createfundingdeals', function () {
    //createfundingdeals
   return view('createfundingdeals');
});



Route::get('/createnewsletter', function () {
    //createfundingdeals
   return view('createnewsletter');
});


Route::get('/createcrypto100', function () {
    //create100
   return view('createcrypto100');
});

Route::get('/createfemale50', function () {
    //createfundingdeals
   return view('createfemale_50');
});

Route::get('/createyoutube50', function () {
    //createfundingdeals
   return view('createyoutube_50');
});


Route::get('/createdefi50', function () {
    //createfundingdeals
   return view('createdefi_50');
});

Route::get('/createcrypto250', function () {
    //createfundingdeals
   return view('createcrypto_250');
});

Route::get('/createtoppicks', function () {
    //createfundingdeals
   return view('createtoppicks');
});


Route::get('/createdomains', function () {
    //createfundingdeals
   return view('createdomains');
});


Route::get('/bitcoin101', function () {
    //createfundingdeals
   return view('bitcoin101');
})->name('static.bitcoin101');







Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/top_pick_for_home_page', 'StaticSiteController@top_pick_for_home_page')->name('top_pick.top_pick_for_home_page');
Route::get('/get_home_page_funding_deals', 'StaticSiteController@get_home_page_funding_deals')->name('funding_list.get_home_page_funding_deals');
Route::get('/get_home_page_domains', 'StaticSiteController@get_home_page_domains')->name('domains.get_home_page_domains');
Route::get('/get_home_page_newsletter', 'StaticSiteController@get_home_page_newsletter')->name('newsletter.get_home_page_newsletter');



Route::post('/add_funding_deals', 'StaticSiteController@add_funding_deals')->name('funding_list.add_funding_deals');


Route::post('/add_newsletter', 'StaticSiteController@add_newsletter')->name('newsletter.add_newsletter');

Route::post('/add_crypto_100', 'StaticSiteController@add_crypto_100')->name('awards.add_crypto_100');

Route::post('/add_female_50', 'StaticSiteController@add_female_50')->name('awards.add_female_50');


Route::post('/add_defi_50', 'StaticSiteController@add_defi_50')->name('awards.add_defi_50');

Route::post('/add_youtube_50', 'StaticSiteController@add_youtube_50')->name('awards.add_youtube_50');

Route::post('/add_crypto_250', 'StaticSiteController@add_crypto_250')->name('awards.add_crypto_250');
Route::post('/add_toppicks', 'StaticSiteController@add_toppicks')->name('awards.add_toppicks');

Route::post('/add_domains', 'StaticSiteController@add_domains')->name('awards.add_domains');



//blogs
Route::get('/createblog', function () {
    //createfundingdeals
   return view('createblog');
})->name('blog.createblog');





Route::get("/crypto-blog","BlogView@multiple_blog_view")->name("blog.multiple_blog_view");


Route::get("crypto-blog/{id}","BlogView@single_blog_view")->name("blog.blog_view");


Route::get("/blog-edit/{id}","BlogController@updateview")->name("blog.updateview");



