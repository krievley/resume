<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ToolboxController extends Controller {
    
    /**
     * Show the applications developed for the toolbox.
     *
     */
    
    //Home page function
    public function getIndex() {
        return view('toolbox.home');
    }
    
    //Lorem Ipsum Page function
    public function getLoremipsum($paragraphData = '') {
        return view('toolbox.loremipsum')->with('paragraphData', $paragraphData);
    }
    
    //Process the lorem ipsum form.
    public function postLoremipsum() {
        //Array to hold validation rules.
        $rules = array('number' => 'numeric|max:99|min:1');
        //Array of error messages
        $messages = array(
        'min' => 'Please enter a number greater than 0.',
        'max' => 'Please enter a number less than 100.',
        'numeric' => 'Please enter a number between 1 and 99.',   
        );
        
        // Create a new validator instance.
        $validator = Validator::make(Input::all(), $rules, $messages);
        //Validate the user's input.
        if($validator->passes()) {
            $postData = Input::get('number');
            //Create new lorem ipsum object.
            $generator = new LoremIpsum();
            //Generate array of paragraphs.
            $paragraphs = $generator->getParagraphs($postData);
            //Format paragraphs for view.
            $paragraphData = implode('<p>', $paragraphs);
            //Return data to view.
            return View::make('loremipsum')->with('paragraphData', $paragraphData);
        }
        //If input is not validated.
        // get the error messages from the validator
        $messages = $validator->messages();
        return Redirect::to('/toolbox/loremipsum')->withErrors($validator);
    }
}