<?php
if(isset($_POST['Email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "saenzrugby@gmail.com";
    $email_subject = "test email";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $email_from = $_POST['Email'];
    $Phone_Fax = $_POST['Phone_Fax'];
    $comments = $_POST['comments']; 
     
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message = 'The Email Address you entered does not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($First_Name)."\n";
    $email_message .= "Last Name: ".clean_string($Last_Name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone_Fax: ".clean_string($Phone_Fax)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include success html here -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Harvey's Skin Diving Supply, Inc.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Home Page">
    <meta name="author" content="Jonathan Saenz">
    <meta name="keywords" content="Dry Suit, Wet Suit, SCUBA, Diving, Surfing, Kayaking, Kite Surfing, Water Skiing, Water, Puget Sound, Orca">


    <!-- styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /*  lighter body text footer background to match navbar and fixed height*/

    body {
      color: #d0d0d0;
      background: #0066cc;
    }

    footer {
      background: #213458;
      height: 60px;
      text-align: center;
    }

    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      background: #213458;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
      
      height: 50px;
      width: 150px;
}
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
      max-width: 1650px;
      margin-left: auto;
      margin-right: auto;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      right: 0;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #d0d0d0;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
      color: #d0d0d0;

    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }

 /* Featurettes
    ------------------------- */

    .container-featurettes {
      margin-top: 100px;
      width: 70%;
      margin-left: auto;
      margin-right: auto;
    }

    .featurette-divider {
      margin: 60px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 60px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
      background: #213458;
      text-align: center;
    }
    .featurette-image {
      margin-top: 20px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 40px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }

    /*resize lead font*/
    .lead {
      font-size:14px;
    }


    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1;
      }
      .marketing .span4 + .span4 {
        margin-top: 40px;
      }
    }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="index.html"><img src="img/logo_name.png"></a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <!--<img src="img/harveys-logo-name.jpg"title="Harveys logo" alt="Harveys logo">-->            
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="index.html">Home</a></li>
                <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="dry_suits.html">Dry Suits</a></li>
                    <li><a href="warm_water_suits.html">Warm Water Suits</a></li>
                    <li><a href="cold_water_suits.html">Cold Water Suits</a></li>
                    <li><a href="accessories.html">Accessories</a></li>
                    <li class="divider"></li>
                    <li><a href="sizes.html">Sizes</a></li>
                    <li class="active"><a href="custom.html">Custom Department</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="dealer_locator.html">Dealer Locator</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="about.html">The Company</a></li>
                    <li><a href="thermal_protection.html">Thermal Protection</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->
      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

    <!-- START THE FEATURETTES -->
    <div class="container-featurettes">

      <hr class="featurette-divider">

      <div class="featurette" >
        Thank you for contacting us. We will be in touch with you very soon.
    </div>

    <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->

      <!-- FOOTER -->
      <footer>
        <p>Call Toll-Free 1-800-347-0054 &middot; &copy; 2013 Harvey's Divesuits, All Rights Reserved.</p>
        <p class="pull-right"><a href="#">Back to top</a></p>
      </footer>
    </div><!-- /.container -->

    <!--javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>
    </body>
</html>
 
<?php
}
?>