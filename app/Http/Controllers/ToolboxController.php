<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ToolboxController extends Controller {
    
    /**
     * Show the applications developed for the toolbox.
     *
     */
    
    public function getIndex() {
        return view('toolbox.home');
    }
}