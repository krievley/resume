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
    
    //Function to process the password generator form.
    public function postPassword() {
        //Array to hold validation rules.
        $rules = array('words' => 'numeric|max:9|min:1',
                        'symbols' => 'numeric|max:3|min:1');
        $messages = array(
        'min' => 'Please enter a number greater than 0.',
        'words.max' => 'Please enter a number less than 10.',
        'words.numeric' => 'Please enter a number between 1 and 9.',
        'words.integer' => 'Please enter a whole number between 1 and 9.',
        'symbols.max' => 'Please enter a number less than 4.',
        'symbols.numeric' => 'Please enter a number between 1 and 3.',  
        );
        
        // Create a new validator instance.
        $validator = Validator::make(Input::all(), $rules, $messages);
        //Validate the user's input.
        if($validator->passes()) {
        
            //declaration of variables pulled from form
            $words = Input::get('words');
            $num = Input::get('num');
            $symbol = Input::get('symbol');
            $symNum = Input::get('symbols');
            $separation = Input::get('separation');
            $letter = Input::get('letter');

            //Scrape word list from paulnoll.com
            $data = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-03-04-hundred.html');
            $regex = '/<li>([^`]*?)<\/li>/';
            preg_match_all($regex,$data,$matches);

            //array to hold selected words
            $wordList = array();

            //Loop for number of words entered.
            for($x=0; $x<$words; $x++) {
                    //Get a random number
                    $random = rand(0, 159);
                    //Check to see if array is empty
                    if(sizeof($wordList) == 0) {
                            $wordList[$x] = $matches[1][$random];
                    } else {
                            //check to see if the word has already been selected before adding it to the array.
                            foreach($wordList as $key){
                                    //if the word has been used
                                    if($matches[1][$random] == $key){
                                            //reduce the word count to try again
                                            $x--;
                                    } else {
                                            //add the word to the word list
                                            $wordList[$x] = $matches[1][$random];
                                    }
                            }
                    }
            }


            //Format if user selected "delimited by spaces"
            if($separation == "spaces"){
                    $wordString = implode(" ", $wordList);
            }
            //Format if user selected "delimited by camelCase"
            elseif($separation == "camelCase"){
                    $wordImplode = implode("", $wordList);
                    $wordCapital = ucwords($wordImplode);
                    $wordString = preg_replace('/\s+/', '', $wordCapital);
            }
            //Format if user selected "delimited by hyphens"
            elseif($separation == "hyphens"){
                    $wordString = implode("-", $wordList);
            }


            //Format if user selected "lowercase"
            if($letter == "lower") {
                    $wordString = strtolower($wordString);
            }
            //Format if user selected "uppercase"
            elseif($letter == "upper") {
                    $wordString = strtoupper($wordString);
            }
            //Format if user selected "capital"
            elseif($letter == "capital") {
                    $wordString = ucwords($wordString);
            }


            //Format if user selected a number
            if ($num === "true") {
                    $wordString = trim($wordString) . rand(0, 9);
            }
            //Format if user selected a symbol
            if ($symbol === "true") {
                    for($i=0; $i<$symNum; $i++) {
                            $symbolList = "!@#$%^&*";
                            $rand = rand(0, 7);
                            $randomSymb = $symbolList[$rand];
                            $wordString = trim($wordString) . $randomSymb;
                    }
            }

            return $wordString;
        }
        //If input is not validated.
        // get the error messages from the validator
        else {
            $errors = $validator->messages();
            return response($errors = $errors, $status = '400');
        }
    }
}