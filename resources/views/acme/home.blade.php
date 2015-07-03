<!DOCTYPE html>
<html data-wf-site="5370e7084c1b3c3d056e7c37">
<head>
  <meta charset="utf-8">
  <title>Acme Insurance Brokers</title>
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
    $(document).ready(function () {
        $('img').load();
        $("select").change(function () {
            $("select option:selected").each(function () {
                if ($(this).attr("value") == "0") {
                    $(".box").hide();
                }
                if ($(this).attr("value") == "1") {
                    $(".box").hide();
                    $(".amig").show();
                }
                if ($(this).attr("value") == "2") {
                    $(".box").hide();
                    $(".encompass").show();
                }
                if ($(this).attr("value") == "3") {
                    $(".box").hide();
                    $(".metlife").show();
                }
                if ($(this).attr("value") == "4") {
                    $(".box").hide();
                    $(".guide").show();
                }
                if ($(this).attr("value") == "5") {
                    $(".box").hide();
                    $(".hartford").show();
                }
                if ($(this).attr("value") == "6") {
                    $(".box").hide();
                    $(".safeco").show();
                }
                if ($(this).attr("value") == "7") {
                    $(".box").hide();
                    $(".state").show();
                }
                if ($(this).attr("value") == "8") {
                    $(".box").hide();
                    $(".travelers").show();
                }
            });
        }).change();
    });
  </script>
  <script type="text/javascript" src="{{ asset('js/acme/modernizr.js') }}"></script>
  <link rel="shortcut icon" type="{{ asset('image/acme/x-icon') }}" href="https://daks2k3a4ib2z.cloudfront.net/5370e7084c1b3c3d056e7c37/5374f6f934abe5ed693c0cd6_favicon.jpg">
  <link rel="apple-touch-icon" href="https://daks2k3a4ib2z.cloudfront.net/5370e7084c1b3c3d056e7c37/5374f6f934abe5ed693c0cd6_favicon.jpg">
</head>
<body>
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
  <div>
    <div class="w-slider slider" data-animation="cross" data-duration="500" data-infinite="1" data-delay="2000" data-autoplay="1">
      <div class="w-slider-mask">
        <div class="w-slide slide home">
          <div class="w-row">
            <div class="w-col w-col-3 colleft boat"></div>
            <div class="w-col w-col-6 colmain home"></div>
            <div class="w-col w-col-3 colright"></div>
          </div>
        </div>
        <div class="w-slide slide">
          <div class="w-row">
            <div class="w-col w-col-3 colleft house"></div>
            <div class="w-col w-col-6 colmain car"></div>
            <div class="w-col w-col-3 colright moto"></div>
          </div>
        </div>
        <div class="w-slide">
          <div class="w-row">
            <div class="w-col w-col-3 colleft car"></div>
            <div class="w-col w-col-6 colmain moto"></div>
            <div class="w-col w-col-3 colright boat"></div>
          </div>
        </div>
        <div class="w-slide">
          <div class="w-row">
            <div class="w-col w-col-3 colleft moto"></div>
            <div class="w-col w-col-6 colmain boat"></div>
            <div class="w-col w-col-3 colright house"></div>
          </div>
        </div>
      </div>
      <div class="w-slider-arrow-left">
        <div class="w-icon-slider-left"></div>
      </div>
      <div class="w-slider-arrow-right">
        <div class="w-icon-slider-right"></div>
      </div>
      <div class="w-slider-nav w-shadow w-round slidenav"></div>
    </div>
  </div>
  <div class="section">
    <div class="w-container">
      <h3>Looking for insurance? &nbsp;Overwhelmed by quotes? &nbsp;Not sure 
		which insurance fits your needs?</h3>
      <div class="w-row">
        <div class="w-col w-col-4">
          <div class="w-row">
            <div class="w-col w-col-6 w-col-small-6 colpic">
              <img class="img-example" src="{{ asset('images/acme/home.jpg') }}" alt="5373fccf8226ff1c2aca5215_home.jpg">
            </div>
            <div class="w-col w-col-6 w-col-small-6 colpic">
              <img class="img-example car" src="{{ asset('images/acme/car.png') }}" alt="5373fce13a8dc91b2ac7d782_car.png">
            </div>
          </div>
        </div>
        <div class="w-col w-col-8 colpara">
          <h4>What do we do that is so different?</h4>
          <ol>
            <li class="li">We get quotes from several carriers to save you time.</li>
            <li class="li">We listen to your needs and find the insurance that is right for you.</li>
            <li class="li">We work for you, not an insurance company.</li>
          </ol>
        </div>
      </div>
      <div class="w-row secondary-row">
        <div class="w-col w-col-4 w-col-small-6">
          <div class="w-row">
            <div class="w-col w-col-6 colpic">
              <img class="img-example moto" src="{{ asset('images/acme/motorcycle.png') }}" alt="5373fcff3a8dc91b2ac7d784_motorcycle.png">
            </div>
            <div class="w-col w-col-6 colpic">
              <img class="img-example" src="{{ asset('images/acme/boat.png') }}" alt="5373fd0e7da0055f67acb0a0_boat.png">
            </div>
          </div>
        </div>
        <div class="w-col w-col-8 w-col-small-6 button-column">
          <h4>Tips for Lower Pricing</h4>
          <p>Don’t compromise coverage to get a lower rate. Start shopping for new insurance one week before your renewal, provide all the information for your home and auto together, ask for $1,000 deductibles, and ask if a pay in full discount is offered.&nbsp;</p>
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="w-container">
      <div class="w-row new-class">
        <div class="w-col w-col-6">
          <h4>Policy Discounts</h4>
          <div class="section-description">Make sure you’re getting the discounts you deserve.</div>
        </div>
        <div class="w-col w-col-6 right-col"></div>
      </div>
      <div class="w-row snippet-row">
        <div class="w-col w-col-3 w-col-small-6 ">
            <img class="example-image" src="{{ asset('images/acme/forms.jpg') }}" alt="5371592445737c7a0de6cfe3_forms.jpg">
            <div class="snippet-text-section w-clearfix w-inline-block snippet">
              <div class="snippet-title">Multiple Policy Discount</div>
              <div class="snippet-text">You can save up to 15% when you have more than one policy with our company.</div>
            </div>
        </div>
        <div class="w-col w-col-3 w-col-small-6">
            <img class="example-image" src="{{ asset('images/acme/lock.png') }}" alt="5371592cc2bf7d780d2c908f_lock.png">
            <div class="snippet-text-section w-clearfix w-inline-block snippet">
              <div class="snippet-title">Protective Device Discount</div>
              <div class="snippet-text">Multiple discounts are available for devices such as a monitored security system.</div>
            </div>
        </div>
        <div class="w-col w-col-3 w-col-small-6">
            <img class="example-image" src="{{ asset('images/acme/greenhouse.png') }}" alt="537159341f28a14545fa9f79_greenhouse.png">
            <div class="snippet-text-section w-clearfix w-inline-block snippet">
              <div class="snippet-title">Green Home Discount</div>
              <div class="snippet-text">Save up to 5% if your home has been certified green by the LEED organization.</div>
            </div>
        </div>
        <div class="w-col w-col-3 w-col-small-6">
            <img class="example-image" src="{{ asset('images/acme/dollar.png') }}" alt="5371593c45737c7a0de6cfe6_dollar.png">
            <div class="snippet-text-section w-clearfix w-inline-block snippet">
              <div class="snippet-title">EFT&nbsp;Payments Discount</div>
              <div class="snippet-text">Save money by setting your policy up on automatic payments.</div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section grey">
    <div class="w-container">
      <div class="w-row secondary-row">
        <div class="w-col w-col-7 w-col-small-6">
          <h4>Take Charge of Your Policy</h4>
          <p>Did you know that many of our insurance companies give you access to your policy information online?&nbsp;Sign up today to access all the benefits of an online policy, including:</p>
          <ul>
            <li class="li">24/7 Access to Policy Information</li>
            <li class="li">Retrieve policy documents online.</li>
            <li class="li">Bills are delivered electronically.</li>
            <li class="li">Pay your bills online.</li>
            <li class="li">Update contact information.</li>
            <li class="li">File a claim.</li>
          </ul>
        </div>
        <div class="w-col w-col-5 w-col-small-6">
          <h5>&nbsp;Discover 
				ALL of your payment options below.</h5>
          <div class="w-form">
            <form id="email-form" name="email-form" data-name="Email Form">
              <select class="w-select" id="node-3">
                <option value="0">Select one...</option>
                <option value="1">American Modern Insurance Group</option>
                <option value="2">Encompass Insurance Company</option>
                <option value="3">Metlife</option>
                <option value="4">Guide One</option>
                <option value="5">The Hartford</option>
                <option value="6">Safeco Insurance</option>
                <option value="7">State Auto Insurance</option>
                <option value="8">Travelers Insurance</option>
              </select>
            </form>
            <div class="amig box">
                <strong>Access your policy online:</strong>
			    <a href="https://my.doculivery.com/External/AMIG/Login.aspx" target="_blank">Login</a>
			    <a href="https://my.doculivery.com/External/AMIG/PayPortalOptIn.aspx" target="_blank">Register</a><br /><br />
			    <strong>Other Payment Options</strong><br />
				Phone: 800-543-2644<br />
				Credit Card:
				    <a href="https://modernlink.amig.com/selfPay/ePayment?action=start&amp;remitType=CC" target="_blank">
				    Credit Card Form</a><br />
				Electronic Check:
				    <a href="https://modernlink.amig.com/selfPay/ePayment?action=start&amp;remitType=MEF" target="_blank">
				    Check Form</a><br />
				Mail: P.O. Box 5323 Cincinnati, OH 45201<br />
				Automatic EFT Payments:
				<a href="http://www.amig.com/pdf/EZPayEnrollmentandAuthorization8-12[1].pdf" target="_blank">
				EZ Pay Form</a>
            </div>
            <div class="encompass box"><strong>Access your policy online:</strong>
				<a href="https://www.encompassinsurance.com/billpay/login.aspx" target="_blank">
				Login</a> |
				<a href="https://www.encompassinsurance.com/billpay/login.aspx" target="_blank">
				Register</a><br /><br />
				<strong>Other Payment Options</strong><br />
				Phone: 866-430-2916<br />
				Check or Credit Card:
				<a href="https://www.encompassinsurance.com/billpay/login.aspx" target="_blank">
				Online Payment Form</a><br />
				Mail: P.O. Box 4310 Carol Stream, IL 60197<br />
				Automatic EFT Payments:
				<a href="https://www.encompassinsurance.com/resources/attachments/easy_pay_form_07_05_11.pdf" target="_blank">
				Easy Pay Form</a>
            </div>
            <div class="metlife box"><strong>Access your policy online:</strong>
				<a href="https://online.metlife.com/edge/web/public/login?target=%3A%2F%2Fsisc.eservice.metlife.com%2F&amp;frb=&amp;rl=&amp;lg=" target="_blank">
				Login</a> |
				<a href="https://online.metlife.com/edge/web/public/login?target=%3A%2F%2Frisc.eservice.metlife.com%2F&amp;frb=&amp;rl=&amp;lg=" target="_blank">
				Register</a><br /><br />
				<strong>Other Payment Options</strong><br />
				Phone: 800-422-4272<br />
				Mail: P.O. Box 41753 Philadelphia, PA 19101
            </div>
            <div class="guide box"><strong>Access your policy online:</strong>
				<a href="https://www.guideone.com/logon.htm" target="_blank">Login</a> |
				<a href="https://agentportal.guideone.com/logon/PortalSecurity?action=accountInfo" target="_blank">
				Register</a><br /><br />
				<strong>Other Payment Options</strong><br />
				Mail: P.O. Box 14599 Des Moines, IA 50306
            </div>
            <div class="hartford box"><strong>Access your policy online:</strong>
				<a href="https://service.thehartford.com/ServiceWeb/appmanager/service/guest" target="_blank">
				Login</a> |
				<a href="https://service.thehartford.com/ServiceWeb/appmanager/service/guest" target="_blank">
				Register</a><br /><br />
				<strong>Other Payment Options</strong><br />
				Phone: 860-547-5000<br />
				Mail:&nbsp; One Hartford Plaza Hartford, CT 06155
            </div>
            <div class="safeco box"><strong>Access your policy online:</strong>
				<a href="https://customer.safeco.com/accountservices/login.aspx?hdnOriginalURL=none&amp;hdnCookieDetectionComplete=TRUE" target="_blank">
				Login</a> |
				<a href="https://customer.safeco.com/accountservices/register1.aspx" target="_blank">
				Register</a><br />
				<br />
				<strong>Other Payment Options</strong><br />
				Phone: 888-723-3260<br />
				Mail: P.O. Box 6476 Carol Stream, IL 60197
            </div>
            <div class="state box"><strong>Access your policy online:</strong>
				<a href="http://www.stateauto.com/mypolicy/overview.aspx?id=164&amp;ekmensel=15074e5e_24_0_164_1" target="_blank">
				Login</a><br /><br />
				<strong>Other Payment Options</strong><br />
				Phone: 800-444-9950<br />
				Online:
				<a href="https://secure4.billerweb.com/sai/JustPayIt/jpt.do" target="_blank">
				Payment Form</a><br />
				Mail: P.O. Box 182738 Columbus, OH 43218<br />
				Automatic EFT Payments:
				<a href="http://www.stateauto.com/uploadedfiles/my_policy/Pay_My_Bill/MK547_0810.pdf" target="_blank">
				E-Pay Form</a>
            </div>
            <div class="travelers box"><strong>Access your policy online:</strong>
				<a href="https://my.travelers.com/Eserv/MyTravSplash.aspx?AppCN=PLCUS" target="_blank">
				Login</a> |
				<a href="https://registration.travelers.com/?AppCN=PLCUS" target="_blank">
				Register</a><br /><br />
				<strong>Other Payment Options</strong><br />
				Phone: 800-842-5075<br />
				Mail: P.O. Box 660307 Dallas, TX 75266
            </div>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section footsec">
    <div class="w-container footer">
      <div><a class="footer-link" href="/acme">Home</a><a class="footer-link" href="/acme/quote">Request a Quote</a><a class="footer-link" href="index.html">Resume Home Page</a>
      </div>
      <p class="footer-text"><strong>Office Address:</strong>&nbsp;Medlock Bridge Rd Johns Creek, GA 30097
        <br><strong>Phone:</strong>&nbsp;678-555-1900&nbsp;<strong>Fax:</strong>&nbsp;678-555-1904
        <br><strong>Email:</strong>&nbsp;kristin@rievley.com</p>
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
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>