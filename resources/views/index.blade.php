<!DOCTYPE html>
<html data-wf-site="536d217b6643a8f2722663a7">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/webflow.css">
  <link rel="stylesheet" type="text/css" href="css/rievleyresume.webflow.css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Montserrat:400,700","Oswald:300,400,700","Bitter:400,700,400italic"]
      }
    });
  </script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
  <link rel="apple-touch-icon" type="image/x-icon" href="images/favicon.ico" />
</head>
<body>
  <header class="navbar">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-4">
          <img class="logo" src="images/logo-header.png" width="25" alt="530e4fc7f4a216ca3c0000e1_logo-header.png">
          <div class="app-name">Kristin Rievley</div>
        </div>
        <div class="w-col w-col-8 nav-column"><a class="nav-link" href="/">Home</a><a class="nav-link" href="/resume">Resume</a>
        </div>
      </div>
    </div>
  </header>
  <div class="section hero">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6">
          <img class="hero-iphone" src="images/rachel2.jpg" alt="536d2190ae6e16d8360b399d_rachel2.jpg">
        </div>
        <div class="w-col w-col-6 call-to-action">
          <h1 class="hero-header">Web Developer</h1>
          <p class="hero-subtitle">I use HTML, CSS, Javascript, JQuery, AJAX, PHP&nbsp;and more to create web applications that work for you.&nbsp;<strong>Browse my web development projects below</strong> to see how you can start saving time&nbsp;&nbsp;with user friendly web applications.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="w-hidden-small w-hidden-tiny section grey"></div>
  <div class="w-clearfix section" id="features">
    <a href="default.html"><div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6">
          <h2>Smith &amp; Jones Website</h2>
          <p>This website uses an innovative calendar application that&nbsp;accepts appointment requests from clients and allows the admin complete control to view, add, edit, or delete appointments online.&nbsp;</p>
          <div class="w-row">
            <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4">
              <div class="icon-title">Schedule&nbsp;</div>
              <img src="images/cal.jpg" width="57" height="57" alt="536d6a91a306daae7522c6a1_cal.jpg">
            </div>
            <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4">
              <div class="icon-title">Confirm</div>
              <img src="images/env.png" width="75" height="57" alt="536d6abbf1ee86af75ef5c0a_env.png">
            </div>
            <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4">
              <div class="icon-title">Manage</div>
              <img src="images/boss.jpg" width="57" height="57" alt="536d6adea306daae7522c6a4_boss.jpg">
            </div>
          </div>
        </div>
        <div class="w-col w-col-6 center">
          <img class="snapshot" src="images/sjSnapshot.JPG" alt="536d6d377e303028395c4ded_sjSnapshot.JPG">
            <div class="img-title">Click to tour the website...</div>
        </div>
      </div>
    </div></a>
  </div>
  <div class="section grey">
    <a href="home.html"><div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-6 center">
          <img class="snapshot" src="images/acmeSnapshot.JPG" width="557" alt="5376b95988d157927066d035_acmeSnapshot.JPG">
            <div class="img-title">Click to tour the website...</div>
        </div>
        <div class="w-col w-col-6">
          <h2>AIB Website</h2>
          <p>This website uses a slideshow and dynamic layout to highlight the company's unique features. The interactive web form reduces call volume by allowing users to request quotes online at any time of day.</p>
          <div class="w-row">
            <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4">
              <div class="icon-title">Reduce Calls</div>
              <img src="images/phone.png" width="57" alt="5376c22b021f028c46227cf5_phone.png">
            </div>
            <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4">
              <div class="icon-title">24/7 Access</div>
              <img src="images/24-7.png" width="57" alt="5376c23626e44b5373386fe6_24-7.png">
            </div>
            <div class="w-col w-col-4 w-col-small-4 w-col-tiny-4">
              <div class="icon-title">Expand Client List</div>
              <img src="images/expand.png" width="57" alt="5376c24626d97d8e463a924f_expand.png">
            </div>
          </div>
        </div>
      </div>
    </div></a>
  </div>
    <div class="section contact">
    <div class="w-container contact input">
    <div class="input">
      <h2>Contact Me</h2>
      <div class="w-form contact">
        <form id="wf-form-contact-form input" name="wf-form-contact-form" data-name="Contact Form" action="/contact" method="post">
          {!! Form::token() !!}
          <input class="w-input input" id="name" type="text" placeholder="Enter your name" name="name" data-name="Name">
          <input class="w-input input" id="email" type="email" placeholder="Enter your email address" name="email" data-name="Email" required="required">
          <textarea class="w-input input" id="field" placeholder="Message" name="message"></textarea>
          <button type="submit" class="button input">Submit</button>
        </form>
      </div>
    </div>
    </div>
  </div>
  <div class="section purple">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-7">
          <h2 class="price-text">Download my resume in multiple formats.</h2>
        </div>
        <div class="w-col w-col-5"><a class="button" href="files/rievleyresume.docx">Download in Word</a><a class="button" href="files/rievleyresume.pdf">Download in PDF</a>
        </div>
      </div>
    </div>
  </div>
  <div class="section grey footer">
    <div class="w-container">
      <div class="button-block">
        <a class="w-inline-block social-button" href="mailto:kristin@rievley.com?subject=Hello!" target="_blank">
          <img src="images/email-icon.png" width="21px" alt="52af8da2aed63fb91400000f_email-icon.png">
        </a>
        <a class="w-inline-block social-button" href="https://www.facebook.com/kristin.rievley" target="_blank">
          <img src="images/facebook-icon.png" width="21px" alt="52af8da8aed63fb914000010_facebook-icon.png">
        </a>
        <a class="w-inline-block social-button" href="https://twitter.com/littlerievley" target="_blank">
          <img src="images/twitter-icon.png" width="21px" alt="52af8db1aed63fb914000011_twitter-icon.png">
        </a>
      </div>
      <img class="logo-in-footer" src="images/footer-logo.png" width="25px" alt="52af8db8aed63fb914000012_footer-logo.png">
    </div>
  </div>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/webflow.js"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>
</html>