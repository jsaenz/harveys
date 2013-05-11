<?php
if(isset($_POST['email'])) {
     
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
     
    // validation expected data exists
    if(!isset($_POST['First_Name']) ||
        !isset($_POST['Last_Name']) ||
        !isset($_POST['Phone_Fax']) ||
        !isset($_POST['Measurement_Type']) ||
        !isset($_POST['Height'])  ||
        !isset($_POST['Weight']) || 
        !isset($_POST['Ankle']) ||
        !isset($_POST['Calf']) ||
        !isset($_POST['Below_Knee']) ||
        !isset($_POST['Knee']) ||
        !isset($_POST['Thigh_Crotch']) ||
        !isset($_POST['Thigh_5_Below_Crotch']) ||
        !isset($_POST['Hips']) ||
        !isset($_POST['Waist']) ||
        !isset($_POST['Chest_at_Largest_Point']) ||
        !isset($_POST['Elbow']) ||
        !isset($_POST['Bicep']) ||
        !isset($_POST['Upper_Bicep_at_Shoulder']) ||
        !isset($_POST['Wrist_to_Elbow']) ||
        !isset($_POST['Wrist_to_Underarm']) ||
        !isset($_POST['Wrist_to_Center_of_Back']) ||
        !isset($_POST['Shoulder_Seam_to_Waist']) ||
        !isset($_POST['Shoulder_Seam_to_Crotch']) ||
        !isset($_POST['Ankle_to_Knee']) ||
        !isset($_POST['Ankle_to_Crotch']) ||
        !isset($_POST['Crotch_to_Knee']) ||
        !isset($_POST['Shoulder_Seam_to_Ankle']) ||
        !isset($_POST['Shoulder_Seam_Bust_Center']) ||
        !isset($_POST['Center_to_Center_of_Bust']) ||
        !isset($_POST['Chest_Above_Bust']) ||
        !isset($_POST['Chest_Below_Bust']) ||
        !isset($_POST['Bra_Size']) ||
        !isset($_POST['Cup_Size']) ||
        !isset($_POST['Forehead_to_Back_of_Neck']) ||
        !isset($_POST['Head_Circumference']) ||
        !isset($_POST['Shoe_Size']) ||
        !isset($_POST['Glove_Size']))
       {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $First_Name = $_POST['First_Name']; // required
    $Last_Name = $_POST['Last_Name']; // required
    $email_from = $_POST['Email']; // required
    $Phone_Fax = $_POST['Phone_Fax']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
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
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($First_Name)."\n";
    $email_message .= "Last Name: ".clean_string($Last_Name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Phone_Fax: ".clean_string($Phone_Fax)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
}
?>