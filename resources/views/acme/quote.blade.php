<!DOCTYPE html>
<html data-wf-site="5370e7084c1b3c3d056e7c37">
<head>
  <meta charset="utf-8">
  <title>Acme Insurance Brokers - Quote</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/acme/normalize.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/acme/webflow.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/acme/acme-insurance-brokers.webflow.css') }}">
  <script src="{{ asset('js/acme/jquery-2.1.1.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","PT Sans:400,400italic,700,700italic"]
      }
    });
  </script>
  <script type="text/javascript" src="{{ asset('js/acme/modernizr.js') }}"></script>
  <link rel="shortcut icon" type="image/x-icon" href="https://daks2k3a4ib2z.cloudfront.net/5370e7084c1b3c3d056e7c37/5374f6f934abe5ed693c0cd6_favicon.jpg">
  <link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/5370e7084c1b3c3d056e7c37/5374f6f934abe5ed693c0cd6_favicon.jpg">
  <style>
      .display{display: {!! $display !!};}
  </style>
  <script>
    $('.myDiv').click(function(e) { //button click class name is myDiv
        $('#message').hide(); //hide the button
    });

    $(function(){
        $(document).click(function(){  
            $('#message').hide(); //hide the button
        });
    });
  </script>
</head>
<body>
    <div id="message" class="submit-progress display">
        <label>{!! $message !!}</label>
    </div>
    <form id="email-form" name="email-form" data-name="Email Form" action="/acme/quote" method="post">
        {!! Form::token() !!}
  <div class="section header">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-4 company-column">
         <a href="/acme"><div class="company-title">Acme Insurance Brokers Inc.</div></a>
        </div>
        <div class="w-col w-col-8 nav-bar"><a class="nav-link" href="/acme">Home</a><a class="nav-link" href="/acme/quote">Request a Quote</a><a class="phone" href="tel:16785554500">(678) 555-4500</a>
        </div>
      </div>
    </div>
  </div>
  <div class="section head">
    <div class="w-container">
      <h2>Quote Request Form</h2>
      <p class="quotehead">We work hard at finding the best solutions for your specific needs. We start by gathering information on you and your current insurance. After that, just place a check next to each type of insurance you are looking for and fill out the form.&nbsp;</p>
        <div class="w-row">
        <div class="w-col w-col-6 quotecol">
          <h4 class="quote">Owner Information</h4>
          <div class="w-row titlerow">
            <div class="w-col w-col-4">
              <img class="quoteimg" src="{{ asset('images/acme/home.png') }}" height="200" alt="537420d56f0176992c4aafce_home.png">
            </div>
            <div class="w-col w-col-4">
                <p class="inputLabel">Owner's Full Name:</p>
                <p class="inputLabel">Gender:</p>
                <p class="inputLabel">Date of Birth:</p>
                <p class="inputLabel">Email:</p>
                <p class="inputLabel">Co-Owner's Full Name:</p>
                <p class="inputLabel">Gender:</p>
                <p class="inputLabel">Date of Birth:</p>
                <p class="inputLabel">Relationship:</p>
            </div>
            <div class="w-col w-col-4">
                <input name="name1" type="text"/><br />
                <select name="gender1">
								<option>Select one...</option>
								<option>Male</option>
								<option>Female</option>
				</select><br />
                <input name="dob1" type="text"/><br />
                <input name="email" type="text"/><br />
                <input name="name2" type="text" /><br />
                <select name="gender2">
								<option>Select one...</option>
								<option>Male</option>
								<option>Female</option>
				</select><br />
                <input name="dob2" type="text"/><br />
                <select name="relationship">
								<option>Select one...</option>
								<option>Married</option>
								<option>Parent/Child</option>
								<option>Friend</option>
								<option>Domestic Partner</option>
								<option>Other</option>
				</select>
            </div>
          </div>
        </div>
        <div class="w-col w-col-6 quotecol">
          <h4 class="quote">Current Coverage</h4>
          <div class="w-row titlerow">
            <div class="w-col w-col-4">
              <img class="quoteimg" src="{{ asset('images/acme/form.png') }}" width="115" alt="5374243f6f0176992c4aafe3_form.png">
            </div>
            <div class="w-col w-col-4">
                <p class="inputLabel">Carrier:</p>
                <p class="inputLabel">Expiration Date:</p>
                <p class="inputLabel">Dwelling Coverage:</p>
                <p class="inputLabel">Liability Limits:</p>
            </div>
            <div class="w-col w-col-4">
                <input name="company" type="text" /><br />
                <input name="expiration" type="text" /><br />
                <input name="dwelling" type="text" /><br />
                <input name="vehicle" type="text"  />
            </div>
          </div>
        </div>
    </div>
  </div>
  </div>
  <div class="section">
    <div class="w-form">
        <div class="w-container">
          <div class="w-row">
            <div class="w-col w-col-3">
              <img src="{{ asset('images/acme/home.jpg') }}" height="70" alt="5373fccf8226ff1c2aca5215_home.jpg">
              <h5 class="label">Home Quote</h5>
                <input class="home_form_part_activator" type="checkbox" name="home" />
              <div class="home_quote_info quoteForm">
    			Street:
    			<input name="street" type="text" /><br />
				City: 
				<input name="city" type="text" /><br />
				State: 
				<input name="state" type="text" /><br />
				Zip: 
				<input name="zip" type="text" /><br />
				County: 
				<input name="county" type="text" /><br />
				Type of Home: 
				<select name="classification" >
					<option>Select one...</option>
					<option>Single Family</option>
					<option>Condo</option>
					<option>Townhome</option>
					<option>Duplex</option>
					<option>Cluster Home</option>
				</select><br />
				Exterior Construction: 
				<select name="exterior" >
					<option>Select one...</option>
					<option>Wood</option>
					<option>Vinyl/Aluminum</option>
					<option>Brick Veneer</option>
					<option>Stucco</option>
					<option>Log</option>
					<option>Hardi Plank</option>
					<option>Brick or Concrete</option>
				</select><br />
				Foundation: 
				<select name="foundation" >
					<option>Select one...</option>
					<option>Slab</option>
					<option>Crawl Space</option>
					<option>Basement</option>
				</select><br />
				Garage Type: 
				<select name="garage" >
					<option>Select one...</option>
					<option>Attached</option>
					<option>Detached</option>
					<option>Basement</option>
					<option>Carport</option>
					<option>Driveway</option>
				</select><br />		
				Garage/Carport Size: 
					<select name="size" >
						<option>Select one...</option>
						<option>1 Car</option>
						<option>2 Car</option>
						<option>3 Car</option>
						<option>4 Car or More</option>
					</select><br />
					Living Space Above Garage? 
					<select name="livingspace" >
						<option>No</option>
						<option>Yes</option>
					</select><br />
					Number of Stories: 
					<select name="stories" >
						<option>Select one...</option>
						<option>One</option>
						<option>Two</option>
						<option>Three</option>
						<option>Bi-level</option>
						<option>Tri-level</option>
						<option>Split Level</option>
					</select><br />
					Square Feet: 
					<input name="sqft" type="text" /><br />
					Year Built: 
					<input name="year" type="text" /><br />
					Fireplaces: 
					<select name="fireplaces" >
						<option>None</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4 or More</option>
					</select><br />
					Full Baths: 
					<select name="fullbath" >
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select> 
					Half Baths: 
					<select name="halfbath" >
						<option>0</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select><br /><br />
					Umbrella Liability Limit: 
					<select name="homeumbrella" >
						<option selected="selected">Select one...</option>
						<option>None</option>
						<option>1 Million</option>
						<option>2 Million</option>
						<option>3 Million</option>
						<option>4 Million</option>
						<option>5 Million</option>
					</select><br />
  				</div>
            </div>
            <div class="w-col w-col-3">
              <img src="{{ asset('images/acme/car.png') }}" height="70" alt="5373fce13a8dc91b2ac7d782_car.png">
              <h5>Auto Quote</h5>
                <input class="auto_form_part_activator" type="checkbox" name="auto" />
              <div class="auto_form_part quoteForm">
                  Driver's License Number:
						<input name="dlnumber1" type="text" /><br />
					2nd Driver's License Number:
						<input name="dlnumber2" type="text" /><br />
					State that Issued License:
						<input name="dlstate" type="text" /><br />
					Preferred Liability Limits: 
						<select name="liability" >
							<option>Select one...</option>
							<option>25/50 (State Min)</option>
							<option>50/100</option>
							<option>100/300</option>
							<option>250/500</option>
						</select><br /><br />
					<strong>Vehicle 1</strong><br />
					Year: 
						<input name="Year_v1" type="text" /><br />
					Make: 
						<input name="Make_v1" type="text" /><br />
					Model: 
						<input name="Model_v1" type="text" /><br />
					VIN: 
						<input name="VIN_v1" type="text" /><br />
					Comprehensive Deductible: 
						<select name="Comprehensive_v1" >
							<option>No Coverage</option>
							<option>$100.00</option>
							<option>$250.00</option>
							<option>$500.00</option>
							<option>$1,000.00</option>
							</select><br />
					Collision Deductible: 
						<select name="Collision_v1" >
							<option>No Coverage</option>
							<option>$250.00</option>
							<option>$500.00</option>
							<option>$1,000.00</option>
						</select><br />
					Medical Coverage: 
						<select name="Medical_v1" >
							<option>No Coverage</option>
							<option>$1,000</option>
							<option>$2,500</option>
							<option>$5,000</option>
							<option>$10,000</option>
						</select><br />
					Towing: 
						<select name="Towing_v1" >
							<option>No Coverage</option>
							<option>$50.00</option>
							<option>$75.00</option>
							<option>$100.00</option>
							<option>$200.00</option>
						</select><br />
					Rental Reimbursement: 
						<select name="Rental_v1" >
							<option>No Coverage</option>
							<option>$30/day</option>
							<option>$45/day</option>
						</select><br /><br />
					<strong>Vehicle 2</strong><br />
					Year: 
						<input name="Year_v2" type="text" /><br />
					Make: 
						<input name="Make_v2" type="text" /><br />
					Model: 
						<input name="Model_v2" type="text" /><br />
					VIN: 
						<input name="VIN_v2" type="text" /><br />
					Comprehensive Deductible: 
						<select name="Comprehensive_v2" >
							<option>No Coverage</option>
							<option>$100.00</option>
							<option>$250.00</option>
							<option>$500.00</option>
							<option>$1,000.00</option>
						</select><br />
					Collision Deductible: 
						<select name="Collision_v2" >
							<option>No Coverage</option>
							<option>$250.00</option>
							<option>$500.00</option>
							<option>$1,000.00</option>
						</select><br />
					Medical Coverage: 
						<select name="Medical_v2" >
							<option>No Coverage</option>
							<option>$1,000</option>
							<option>$2,500</option>
							<option>$5,000</option>
							<option>$10,000</option>
						</select><br />
					Towing: 
						<select name="Towing_v2" >
							<option>No Coverage</option>
							<option>$50.00</option>
							<option>$75.00</option>
							<option>$100.00</option>
							<option>$200.00</option>
						</select><br />
					Rental Reimbursement: 
						<select name="Rental_v2" >
							<option>No Coverage</option>
							<option>$30/day</option>
							<option>$45/day</option>
						</select><br /><br />
					Umbrella Liability Limit: 
						<select name="carumbrella" >
							<option selected="selected">Select one...</option>
							<option>None</option>
							<option>1 Million</option>
							<option>2 Million</option>
							<option>3 Million</option>
							<option>4 Million</option>
							<option>5 Million</option>
						</select>
              </div>
            </div>
            <div class="w-col w-col-3">
              <img src="{{ asset('images/acme/motorcycle.png') }}" width="70" height="70" alt="5373fcff3a8dc91b2ac7d784_motorcycle.png">
              <h5>Motorcycle Quote</h5>
                <input class="motorcycle_form_part_activator" type="checkbox" name="motorcycle" />
              <div class="motorcycle_form_part quoteForm">
                  Year, Make, Model: 
						<input name="YMM" type="text" /><br />
					cc: 
						<input name="cc" type="text" /><br />
					VIN: 
						<input name="VIN" type="text" /><br />
					Use: 
						<select name="Use" >
							<option selected="selected">Select one...</option>
							<option>Pleasure</option>
							<option>Business</option>
							<option>Work/School</option>
						</select><br /><br />
					Preferred Liability Limits: 
						<select name="mLiability" >
							<option>Select one...</option>
							<option>25/50</option>
							<option>50/100</option>
							<option>100/300</option>
							<option>250/500</option>
						</select><br />
					Comprehensive Deductible: 
						<select name="mComprehensive" >
							<option>No Coverage</option>
							<option>$100.00</option>
							<option>$250.00</option>
							<option>$500.00</option>
							<option>$1,000.00</option>
						</select><br />
					Collision Deductible: 
						<select name="mCollision" >
							<option>No Coverage</option>
							<option>$250.00</option>
							<option>$500.00</option>
							<option>$1,000.00</option>
						</select><br />
					Years Operating a Motorcycle:
						<input name="Operating" type="text" /><br />
					Motorcycle Endorsement:
						<select name="mEndorsement" >
							<option selected="selected">Select</option>
							<option>Yes</option>
							<option>No</option>
						</select><br />
					Taken a Safety Course:
						<select name="safety" >
							<option selected="selected">Select</option>
							<option>Yes</option>
							<option>No</option>
						</select><br />
					Any Tickets/Accidents in 3 yrs.:
						<select name="tickets" >
							<option selected="selected">Select</option>
							<option>Yes</option>
							<option>No</option>
						</select><br /><br />
					Umbrella Liability Limit: 
							<select name="motorcycleumbrella" >
								<option selected="selected">Select one...</option>
								<option>None</option>
								<option>1 Million</option>
								<option>2 Million</option>
								<option>3 Million</option>
								<option>4 Million</option>
								<option>5 Million</option>
							</select><br />
              </div>
            </div>
            <div class="w-col w-col-3">
              <img src="{{ asset('images/acme/boat.png') }}" height="70" alt="5373fd0e7da0055f67acb0a0_boat.png">
              <h5>Watercraft Quote</h5>
                <input class="boat_form_part_activator" type="checkbox" name="boat" />
              <div class="boat_form_part quoteForm">
                  Boat Type: 
					<select name="boattype" >
						<option selected="selected">Select one...</option>
						<option>Houseboat (Power)</option>
						<option>Houseboat (Sail)</option>
						<option>Jet Ski</option>
						<option>Powerboat - Inboard</option>
						<option>Powerboat - Outboard</option>
						<option>Powerboat - Inboard/Outboard</option>
						<option>Sail Boat</option>
						<option>Wave Runner</option>
					</select><br />
				Year, Make, Model: 
					<input name="boatYMM" type="text" /><br />
				Length (ft.): 
					<input name="Length" type="text" /><br />
				Replacement Value: 
					<input name="Value" type="text" /><br />
				Maximum Speed: 
					<input name="Speed" type="text" /><br />
				Waters Navigated: 
					<select name="Waters" >
						<option selected="selected">Select one...</option>
						<option>Atlantic Coastwise Waters (Northern)</option>
						<option>Atlantic Coastwise Waters (Southern)</option>
						<option>Chesapeake Bay</option>
						<option>Great Lakes</option>
						<option>Gulf Coastwise</option>
						<option>Inland Lakes and Rivers</option>
						<option>Pacific Coastwise</option>
						<option>Pacific Intercoastal</option>
					</select><br />
				Lay-Up Period (Months):
					<input name="Period" type="text" /><br />
				Serial Number: 
					<input name="Serial" type="text" /><br /><br />
				<strong>Motor</strong><br />
				Year, Make, Model: 
					<input name="engineYMM" type="text" /><br />
				Serial Number: 
					<input name="engineserial" type="text" /><br />
				Horse Power: 
					<input name="enginehp" type="text" /><br />
				Fuel: 
					<select name="Fuel" >
						<option selected="selected">Select</option>
						<option>Gas</option>
						<option>Diesel</option>
					</select><br />
				Cost New: 
					<input name="CostNew" type="text" /><br /><br />
						Umbrella Liability Limit: 
							<select name="boatumbrella" >
								<option selected="selected">Select one...</option>
								<option>None</option>
								<option>1 Million</option>
								<option>2 Million</option>
								<option>3 Million</option>
								<option>4 Million</option>
								<option>5 Million</option>
							</select>
              </div>
            </div>
          </div>
          <div class="buttonwrap"><button type="submit" class="button">Submit Quote Request</button>
          </div>
        </div>
    </div>
  </div>
  <div class="section footsec">
    <div class="w-container footer">
      <div><a class="footer-link" href="/acme">Home</a><a class="footer-link" href="/acme/quote">Request a Quote</a><a class="footer-link" href="/">Resume Home Page</a>
      </div>
      <p class="footer-text"><strong>Office Address:</strong>&nbsp;Medlock Bridge Rd Johns Creek, GA 30097
        <br><strong>Phone:</strong>&nbsp;678-555-1900&nbsp;<strong>Fax:</strong>&nbsp;678-555-1904
        <br><strong>Email:</strong>&nbsp;admin@kristin-rievley.me</p>
      <div>
        <a href="https://www.facebook.com/kristin.rievley" target="_blank"><img src="{{ asset('images/acme/facebook.png') }}" width="50" alt="5374c99434abe5ed693c097f_facebook.png"></a>
        <a href="https://twitter.com/LittleRievley" target="_blank"><img src="{{ asset('images/acme/twitter.png') }}" width="50" alt="5374ca603dec09982c22c645_twitter.png"></a>
        <a href="https://plus.google.com/107202035401949431669/posts" target="_blank"><img src="{{ asset('images/acme/google.png') }}" width="50" alt="5374cb533dec09982c22c650_google.png"></a>
      </div>
      <div class="footer-text">©Kristin Rievley All Rights Reserved.</div>
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/acme/webflow.js') }}"></script>
</form>
</body>
</html>