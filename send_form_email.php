<?php
if(isset($_POST['Email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $Email_to = "you@yourdomain.com";
    $Email_subject = "Your Email subject line";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['First_Name']) ||
        !isset($_POST['Last_Name']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Phone_Faxz']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $First_Name = $_POST['First_Name']; // required
    $Last_Name = $_POST['Last_Name']; // required
    $Email_from = $_POST['Email']; // required
    $Phone_Fax = $_POST['Phone_Fax']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $Email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($Email_exp,$Email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$First_Name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$Last_Name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $Email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $Email_message .= "First Name: ".clean_string($First_Name)."\n";
    $Email_message .= "Last Name: ".clean_string($Last_Name)."\n";
    $Email_message .= "Email: ".clean_string($Email_from)."\n";
    $Email_message .= "Phone_Fax: ".clean_string($Phone_Fax)."\n";
    $Email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create Email headers
$headers = 'From: '.$Email_from."\r\n".
'Reply-To: '.$Email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($Email_to, $Email_subject, $Email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
}
?>