<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Validator, Input, Redirect, Session; 

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
    
    //Quote page function.
    public function getQuote() {
        //Display the quote page.
        return view('acme.quote');
    }
    
    //Function to process quote form.
    public function postQuote() {
        //Message details.
	$message = "Quote request from AIB Website\n\n";
        $formData = Input::all();
	
	$message .= "Owner Information\n";
        //Owner form group data.
	$ownerArray = array($formData['name1']=>"Name: ",
					$formData['gender1']=>"Gender: ",
					$formData['dob1']=>"Date of Birth: ",
					$formData['email']=>"Email: ",
					$formData['name2']=>"2nd Owner's Name: ",
					$formData['gender2']=>"Gender: ",
					$formData['dob2']=>"Date of Birth: ",
					$formData['relationship']=>"Relationship: ");
					
	foreach ($ownerArray as $value=>$key) {
		$message .= "     " . $key . $value . "\n";
	}
        //Current coverage group data
	$message .= "\nCurrent Coverage\n";
	$coverageArray = array($formData['company']=>"Insurance Company: ",
					$formData['expiration']=>"Expiration Date: ",
					$formData['dwelling']=>"Dwelling Coverage: ",
					$formData['vehicle']=>"Vehicle Liability: ");

	foreach ($coverageArray as $value=>$key) {
		$message .= "     " . $key . $value . "\n";
	}
        //Pull home group data if the home checkbox is checked.
	if (isset($formData['home'])) {
		$message .= "\nHome Quote Information\n";
		$homeArray = array($formData['street']=>"Street: ",
					$formData['city']=>"City: ",
					$formData['state']=>"State: ",
					$formData['zip']=>"Zip: ",
					$formData['county']=>"County: ",
					$formData['classification']=>"Type of Home: ",
					$formData['exterior']=>"Exterior Contruction: ",
					$formData['foundation']=>"Foundation: ",
					$formData['garage']=>"Garage Type: ",
					$formData['size']=>"Garage Size: ",
					$formData['livingspace']=>"Living Space Above Garage: ",
					$formData['stories']=>"Stories: ",
					$formData['sqft']=>"Square Feet: ",
					$formData['year']=>"Year Built: ",
					$formData['fireplaces']=>"Fireplaces: ",
					$formData['fullbath']=>"Full Baths: ",
					$formData['halfbath']=>"Half Baths: ",
					$formData['stories']=>"Stories: ",
					$formData['homeumbrella']=>"Umbrella Limit: ");
					
		foreach ($homeArray as $value=>$key) {
			$message .= "     " . $key . $value . "\n";
		}
	}
	//Pull auto group data if the auto checkbox is checked.
	if (isset($formData['auto'])) {
		$message .= "\nAuto Quote Information\n";
		$autoArray = array($formData['dlnumber1']=>"Driver's License Number: ",
					$formData['dlnumber2']=>"2nd Driver's License Number: ",
					$formData['dlstate']=>"State License is Issued: ",
					$formData['liability']=>"Prefered Liability Limits: ",
					$formData['Year_v1']=>"Year: ",
					$formData['Make_v1']=>"Make: ",
					$formData['Model_v1']=>"Model: ",
					$formData['VIN_v1']=>"VIN: ",
					$formData['Comprehensive_v1']=>"Comprehensive: ",
					$formData['Collision_v1']=>"Collision: ",
					$formData['Medical_v1']=>"Medical Coverage: ",
					$formData['Towing_v1']=>"Towing: ",
					$formData['Rental_v1']=>"Rental: ",
					$formData['Year_v2']=>"Year: ",
					$formData['Make_v2']=>"Make: ",
					$formData['Model_v2']=>"Model: ",
					$formData['VIN_v2']=>"VIN: ",
					$formData['Comprehensive_v2']=>"Comprehensive: ",
					$formData['Collision_v2']=>"Collision: ",
					$formData['Medical_v2']=>"Medical Coverage: ",
					$formData['Towing_v2']=>"Towing: ",
					$formData['Rental_v2']=>"Rental: ",
					$formData['carumbrella']=>"Umbrella Limit: ");
					
		foreach ($autoArray as $value=>$key) {
			$message .= "     " . $key . $value . "\n";
		}
	}
	//Pull motorcycle group data if the motorcycle checkbox is checked.
	if (isset($formData['motorcycle'])) {
		$message .= "\nMotorcycle Quote Information\n";
		$motoArray = array($formData['YMM']=>"Year, Make, Model: ",
					$formData['cc']=>"cc: ",
					$formData['VIN']=>"VIN: ",
					$formData['mLiability']=>"Prefered Liability Limits: ",
					$formData['mComprehensive']=>"Comprehensive: ",
					$formData['mCollision']=>"Collision: ",
					$formData['Operating']=>"Years Operating a Motorcycle: ",
					$formData['mEndorsement']=>"Motorcycle Endorsement on License: ",
					$formData['safety']=>"Taken a Safety Course: ",
					$formData['tickets']=>"Tickets/Accidents in the last 3 Years: ",
					$formData['motorcycleumbrella']=>"Umbrella Limit: ");
					
		foreach ($motoArray as $value=>$key) {
			$message .= "     " . $key . $value . "\n";
		}
	}
	//Pull boat group data if the boat checkbox is checked.
	if (isset($formData['boat'])) {
		$message .= "\nBoat Quote Information\n";
		$boatArray = array($formData['boattype']=>"Boat Type: ",
					$formData['boatYMM']=>"Year, Make, Model: ",
					$formData['Length']=>"Length (ft): ",
					$formData['Value']=>"Replacement Value: ",
					$formData['Speed']=>"Maximum Speed: ",
					$formData['Waters']=>"Waters Navigated: ",
					$formData['Period']=>"Lay-Up Period: ",
					$formData['Serial']=>"Serial Number: ",
					$formData['engineYMM']=>"Engine Year, Make, Model: ",
					$formData['engineserial']=>"Engine Serial Number: ",
					$formData['enginehp']=>"Engine Horse Power: ",
					$formData['Fuel']=>"Fuel: ",
					$formData['CostNew']=>"Cost New: ",
					$formData['boatumbrella']=>"Umbrella Limit: ");
					
		foreach ($boatArray as $value=>$key) {
			$message .= "     " . $key . $value . "\n";
		}
	}	
        //Send email including all details from above.
        Mail::send('emails.contact', ['message' => $message], function($mail)
        {
            $mail->to('admin@kristin-rievley.me', 'Administrator')->subject("AIB Quote Request");
            $mail->from("AIB Website");
        });
        //Send flash message to session.
        Session::flash('message', 'Your quote request has been submitted');
	//Reload quote page.
        return Redirect::to('/acme/quote');
    }
}