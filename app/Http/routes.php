<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/search', function () {
    return view('search');
});

Route::get('/mail', 'JobsController@update');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/sitemap', function () {
    return view('sitemap');
});



Route::get('/jobs/create', 'JobsController@create');

//Route::get('/test', 'ApplicantsController@create');
Route::post('/jobs/post', 'JobsController@store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', 'ContactController@store');

Route::get('company/about', function () {
    return view('company.about');
});

Route::get('company/careers', 'ApplicantsController@index');


Route::get('company/apply/{id}', 'ApplicantsController@create');


Route::post('company/apply/{id}', 'ApplicantsController@store');


Route::get('/technologies/sap', function () {
    return view('tech.sap');
});
Route::get('/technologies/microsoft', function () {
    return view('tech.microsoft');
});

Route::get('/technologies/java', function () {
    return view('tech.java');
});

Route::get('/technologies/sugarcrm', function () {
    return view('tech.sugarcrm');
});

Route::get('/technologies/suitecrm', function () {
    return view('tech.suitecrm');
});

Route::get('/technologies/odoo', function () {
    return view('tech.odoo');
});

Route::get('/industry/manufacture', function () {
    return view('industry.manufacture');
});

Route::get('/industry/retail', function () {
    return view('industry.retail');
});

Route::get('/industry/health', function () {
    return view('industry.healthcare');
});

Route::get('/industry/telecom', function () {
    return view('industry.telecom');
});

Route::get('/industry/finance', function () {
    return view('industry.finance');
});

Route::get('/industry/realestate', function () {
    return view('industry.realestate');
});

Route::get('/industry/agriculture', function () {
    return view('industry.agriculture');
});

Route::get('/industry/it', function () {
    return view('industry.it');
});

Route::get('/solutions/erp', function () {
    return view('solutions.erp');
});

Route::get('/solutions/crm', function () {
    return view('solutions.crm');
});

Route::get('/solutions/ecommerce', function () {
    return view('solutions.ecommerce');
});

Route::get('/solutions/bpm', function () {
    return view('solutions.bpm');
});

Route::get('/solutions/bi', function () {
    return view('solutions.bi');
});

Route::get('/solutions/infrastructure', function () {
    return view('solutions.infrastructure');
});

Route::get('/solutions/app-support', function () {
    return view('solutions.app-support');
});

Route::get('/solutions/db-support', function () {
    return view('solutions.db-support');
});

Route::get('/solutions/software', function () {
    return view('solutions.software');
});

Route::get('/solutions/testing', function () {
    return view('solutions.testing');
});

Route::get('/solutions/offshore', function () {
    return view('solutions.offshore');
});

Route::get('/solutions/staff-aug', function () {
    return view('solutions.staff-aug');
});


