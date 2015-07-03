<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Validator, Input, Redirect; 

class AcmeController extends Controller {
    
    /**
     * Show the applications developed for the acme website.
     *
     */
    
    //Home page function.
    public function getIndex() {
        //Display the home page.
        return view('acme.home');
    }
}