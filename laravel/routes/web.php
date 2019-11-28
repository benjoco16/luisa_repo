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
    return view('static.dashboard.index');
});

Route::get('/dashboard-2', function () {
    return view('static.dashboard.dashboard-2');
});

Route::get('/assessment-process', function () {
    return view('static.assessment-process.index');
});

Route::get('/substances', function () {
    return view('static.substances.index');
});

Route::get('/incidents', function () {
    return view('static.incidents.index');
});


Route::get('/equipment', function () {
    return view('static.equipment.index');
});


Route::get('/actions', function () {
    return view('static.actions.index');
});

Route::get('/reports', function () {
    return view('static.reports.index');
});

Route::get('/about', function () {
    return view('static.about.index');
});


Route::get('/assessment-wizard', function () {
    return view('static.assessment-wizard.index');
});

Route::get('/risk-assessment', function () {
    return view('static.risk-assessment.index');
});
