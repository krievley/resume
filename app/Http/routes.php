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

//Home route
Route::get('/', function () {
    return view('index');
});

//Resume Route
Route::get('/resume', function () {
    return view('resume');
});

//Email contact details.
Route::post('/contact', function () {
    //Get contact details submitted through form.
    $contact = Input::all();
    //Send email to administrator with contact details
    Mail::send('emails.contact', ['contact' => $contact], function($message)
    {
        $message->to('admin@kristin-rievley.me', 'Administrator')->subject('Contact Request');
    });
    //Redirect to home page.
    return Redirect::to('/');
});

//Route to controller which handles the developer toolbox website items.
Route::controller('toolbox', 'ToolboxController');

//Route to controller which handles the Acme website items.
Route::controller('acme', 'AcmeController');