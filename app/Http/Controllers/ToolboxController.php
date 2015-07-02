<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Badcow\LoremIpsum\Generator;
use Faker\Factory;
use Validator, Input, Redirect, Faker, LoremIpsum; 

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
    public function getLoremipsum() {
        return view('toolbox.loremipsum');
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
            $generator = new Generator();
            //Generate array of paragraphs.
            $paragraphs = $generator->getParagraphs($postData);
            //Format paragraphs for view.
            $paragraphData = implode('<p>', $paragraphs);
            //Return data to view.
            return $paragraphData;
        }
        //If input is not validated.
        // get the error messages from the validator
        else {
            $errors = $validator->messages();
            return response($errors = $errors, $status = '400');
        }
    }
    
    //Function to display the random user generator page.
    public function getUser() {
        return view('toolbox.user');
    }
    
    //Function to process the random user generator form.
    public function postUser() {
        //Array to hold validation rules.
        $rules = array('number' => 'numeric|max:99|min:1');
        $messages = array(
        'min' => 'Please enter a number greater than 0.',
        'max' => 'Please enter a number less than 100.',
        'numeric' => 'Please enter a number between 1 and 99.',  
        );
        
        // Create a new validator instance.
        $validator = Validator::make(Input::all(), $rules, $messages);
        //Validate the user's input.
        if($validator->passes()) {
            //Array to hold users
            $users = array();
            //Get user entered data
            $postData = Input::all();
        
            //For loop to create users
            for($row=0; $row<$postData['number']; $row++) {
                //Object of faker class.
		$faker = Faker\Factory::create();
		
                //Add generated names to array.
		$users[$row][0] = $faker->name;
                
                //Add generated birthday if user selected.
		if ($postData['birthday'] === 'true'){
                    array_push($users[$row], ($faker->date($format = 'Y-m-d', $max = '2000-12-30')));
		}
                //Add generated profile if user selected.
		if ($postData['profile'] === 'true') {
                    array_push($users[$row], $faker->text);
		}
            }
            //Return view with users.
            return $users;
        }
        //If input is not validated.
        // get the error messages from the validator
        else {
            $errors = $validator->messages();
            return response($errors = $errors, $status = '400');
        }
    }
    
    //Function to display password generator page.
    public function getPassword() {
        return view('toolbox.password');
    }
}