<?php
     
  // Create our email body
  $email_to = "jsaenz@cs.nmsu.edu";
  $email_subject = "Custom WetSuit Order";
  $email_from = $_POST['Email'];
  $measurement = $_POST['Measurement_Type'];
  $email_message = '<html><body>';
  $email_message .= '<h1>Custom order below.</h1>';
   
  $email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
  $email_message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>".strip_tags($_POST['First_Name'])." ".strip_tags($_POST['Last_Name']) . "</td></tr>";
  $email_message .= '<tr><td>Email: </td><td>'.strip_tags($email_from).'</td></tr><tr><td>Phone:</td><td>'.strip_tags($_POST['Phone_Fax']).'</td></tr>';
  $email_message .= '<tr><td>Gender:</td><td>'.strip_tags($_POST['Gender']).'</td></tr>';
  $email_message .= "<tr style='background: #eee;'><td>Measurement Type: </td><td>".strip_tags($_POST['Measurement_Type']). "</td></tr>";
  $email_message .= '<tr><td>Height: </td><td>'.strip_tags($_POST['Height']). "</td></tr>";
  $email_message .= "<tr style='background: #eee;'><td>Weight: </td><td>".strip_tags($_POST['Weight']). "</td></tr>";
  $email_message .= '<tr><td>Ankle: </td><td>'.strip_tags($_POST['Ankle']). "</td></tr>";
  $email_message .= "<tr style='background: #eee;'><td>Calf: </td><td>".strip_tags($_POST['Calf']). "</td></tr>";
  $email_message .= '<tr><td>Below Knee: </td><td>'.strip_tags($_POST['Below_Knee']). "</td></tr>";
  $email_message .= "<tr><tr style='background: #eee;'><td>Knee: </td><td>".strip_tags($_POST['Knee']). "</td></tr>";
  $email_message .= '<tr><td>Thigh at Crotch: </td><td>'.strip_tags($_POST['Thigh_Crotch']). "</td></tr>";
  $email_message .= "<tr style='background: #eee;'><td>Thigh 5 Below Crotch: </td><td>".strip_tags($_POST['Thigh_5_Below_Crotch']). "</td></tr>";
  $email_message .= '<tr><td>Hips: </td><td>'.strip_tags($_POST['Hips']). "</td></tr>";
  $email_message .= "<tr><tr style='background: #eee;'><td>Waist: </td><td>".strip_tags($_POST['Waist']). "</td></tr>";
  $email_message .= '<td>Chest at Largest Point: </td><td>'.strip_tags($_POST['Chest_at_Largest_Point']). "</td></tr>";
  $email_message .= "<tr><tr style='background: #eee;'><td>Elbow: </td><td>".strip_tags($_POST['Elbow']). "</td></tr>";
  $email_message .= '<td>Bicep: </td><td>'.strip_tags($_POST['Bicep']). "</td></tr>";
  $email_message .= "<tr><tr style='background: #eee;'><td>Upper Bicep at Shoulder: </td><td>".strip_tags($_POST['Upper_Bicep_at_Shoulder']). "</td></tr>";
  $email_message .= '<tr><td>Wrist to Elbow: </td><td>'.strip_tags($_POST['Wrist_to_Elbow']). "</td></tr>";
  $email_message .= "<tr style='background: #eee;'><td>Wrist to Underarm: </td><td>".strip_tags($_POST['Wrist_to_Underarm']). "</td></tr>";
  $email_message .= '<tr><td>Wrist to Center of Back: </td><td>'.strip_tags($_POST['Wrist_to_Center_of_Back']). "</td></tr>";
  $email_message .= "<tr style='background: #eee;'><td>Shoulder Seam to Waist: </td><td>".strip_tags($_POST['Shoulder_Seam_to_Waist']). "</td></tr>";
  $email_message .= '<tr><td>Shoulder Seam to Crotch: </td><td>'.strip_tags($_POST['Shoulder_Seam_to_Crotch']). "</td></tr>";
  $email_message .= "<tr style='background: #eee;'><td>Ankle to Knee: </td><td>".strip_tags($_POST['Ankle_to_Knee']). "</td></tr>";
  $email_message .= '<tr><td>Ankle to Crotch: </td><td>'.strip_tags($_POST['Ankle_to_Crotch']). "</td></tr>";
  $email_message .= "<tr style='background: #eee;'><td>Crotch to Knee</td><td>".strip_tags($_POST['Crotch_to_Knee']). "</td></tr>";
  $email_message .= '<tr><td>Forehead to Back of Neck: </td><td>'.strip_tags($_POST['Forehead_to_Back_of_Neck']). "</td></tr>";
  $email_message .= "<tr style='background: #eee;'><td>Head Circumference </td><td>".strip_tags($_POST['Head_Circumference']). "</td></tr>";
  $email_message .= '<tr><td>Shoe Size: </td><td>'.strip_tags($_POST['Shoe']). "</td></tr>";
  $email_message .= "<tr style='background: #eee;'><td>Glove Size: </td><td>".strip_tags($_POST['Glove']). "</td></tr>";
  if ($_POST['Gender'] == 'Female') {
    $email_message .= '<tr><td>Shoulder to Center of Bust: </td><td>'.strip_tags($_POST['Shoulder_to_Bust']). "</td></tr>";
    $email_message .= "<tr style='background: #eee;'><td>Center to Center of Bust: </td><td>".strip_tags($_POST['Center_to_Bust']). "</td></tr>";
    $email_message .= '<tr><td>Chest Above Bust: </td><td>'.strip_tags($_POST['Chest_Above_Bust']). "</td></tr>";
    $email_message .= "<tr style='background: #eee;'><td>Chest Below Bust: </td><td>".strip_tags($_POST['Chest_Below_Bust']). "</td></tr>";
    $email_message .= '<tr><td>Bra Size: </td><td>'.strip_tags($_POST['Bra']). "</td></tr>";
    $email_message .= "<tr style='background: #eee;'><td>Cup Size: </td><td>".strip_tags($_POST['Cup']). "</td></tr>";   
  }
  $email_message .= '</table>'; 
  $email_message .= '</body></html>';


  // create email headers
  $headers = "From: ".$email_from."\n";
  $headers .="Reply-to: ".$email_from."\n";
  $headers .= "Return-path: ".$email_from.".\n";
  $headers .= "Content-Type: text/html; charset=windows-1252\n";
  $headers .= "Content-Transfer-Encoding: 7bit\n";
  $headers .= "X-Priority: 3\n";
  $headers .= "MIME-Version: 1.0\n";
  $headers .= "Organization: Harvey's Divesuits\r\n"; 
  $headers .= 'X-Mailer: PHP/' . phpversion();
  $headers .= "\n\n";
?>
 
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
      padding: 5px 5px 5px;
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

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 40px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
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

      <div class="featurette">
        <?php if (mail($email_to, $email_subject, $email_message, $headers)) { ?>
          <h2 class="featurette-heading">Thank you for submitting a custom order!</h2><br> 
          <p>We will be in touch with you very soon.</p>
          <p><a href="index.php">Return to Homepage</a></p>
        <?php } else { ?>
          <h2 class="featurette-heading">There was an error submitting your order!</h2><br> 
          <p>Please give us a call to complete your order.</p>
        <?php } ?>
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