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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/actions', 'PagesController@actions');
Route::get('/assessment-process', 'PagesController@assessmentprocess');
Route::get('/assessment-wizard', 'PagesController@assessmentwizard');
Route::get('/dashboard2', 'PagesController@dashboard2');
Route::get('/equipment', 'PagesController@equipment');
Route::get('/incidents', 'PagesController@incidents');
Route::get('/maintenance', 'PagesController@maintenance');
Route::get('/reports', 'PagesController@reports');
Route::get('/risk-assessment', 'PagesController@riskassessment');
Route::get('/substances', 'PagesController@substances');

Route::get('/gauge', function () {
    return view('gauge-sample');
});


/*
Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/users/{id}/{wenks}', function($id, $wenks){
    return 'This is user '. $id . 'and test ' . $wenks;
});
*/