<?php
if ($_GET['suit'] == 'Wet') {
?>

<form method="post" action="send_form_email.php" onsubmit="return WetSuit_form_Validator(this)" language="JavaScript" name="WetSuit_form">
    <h2><span class="muted">Wet Suit Customer Information</span></h2>
    <p>
    <p>First Name: &nbsp;<input class="input-medium" type="text" name="First_Name" size="30" maxlength="30"><br>
    Last Name: &nbsp;<input class="input-medium" type="text" name="Last_Name" size="30" maxlength="30"><br>
    Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input-medium" type="text" name="Email" size="30" maxlength="30"><br>
    Phone/Fax*:&nbsp;<input class="input-medium" type="text" name="Phone_Fax" size="20"><br>
    <i>*(required for verification on custom suits)</i></p>
    <p>Measurement:&nbsp;
    <input type="radio" name="Measurement_Type" checked="checked" value="Imperial">Imperial&nbsp;&nbsp;
    <input type="radio" name="Measurement_Type" value="Metric">Metric<br>
    Gender:&nbsp;
      <input type="radio" name="Gender" id="Male" checked="checked"value="Male" onchange="show(this.value)"/>Male&nbsp;&nbsp;
      <input type="radio" name="Gender" id="female" value="Female" onchange="show2()"/>Female</p>
    Height:&nbsp;<input class="input-mini" type="text" name="Height" size="10" maxlength="10"><br>
    Weight:&nbsp;<input class="input-mini" type="text" name="Weight" size="10" maxlength="10"></p>
    
    <table class="table-bordered table-condensed" id="table1" width="700" align="center" style="background-color:#fff;">
      <tr>
        <td width="300" height="600">
          <p align="center"><b>Customer Measurements</b></p>
          <div class="span4">
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Ankle" size="10" maxlength="10">&nbsp;Ankle</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Calf" size="10" maxlength="10">&nbsp;Calf</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Below_Knee" size="10" maxlength="10">&nbsp;Below Knee</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Knee" size="10" maxlength="10">&nbsp;Knee</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Thigh_Crotch" size="10" maxlength="10">&nbsp;Thigh at Crotch</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Thigh_5_Below_Crotch" size="10" maxlength="10">&nbsp;Thigh 5 Inches Below Crotch</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Hips" size="10" maxlength="10">&nbsp;Hips at Widest Point</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Waist" size="10" maxlength="10">&nbsp;Waist at Navel</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Chest_at_Largest_Point" size="10" maxlength="10">&nbsp;Chest at Largest Point</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Neck" size="10" maxlength="10">&nbsp;Neck</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Wrist" size="10" maxlength="10">&nbsp;Wrist</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Forearm_at_Largest_Point" size="10" maxlength="10">&nbsp;Forearm at Largest Point</p>
          </div><!-- /.span4 -->
          <div class="span4">
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Elbow" size="10" maxlength="10">&nbsp;Elbow</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Bicep" size="10" maxlength="10">&nbsp;Bicep</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Upper_Bicep_at_Shoulder" size="10" maxlength="10">&nbsp;Upper Bicep at Shoulder</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Wrist_to_Elbow" size="10" maxlength="10">&nbsp;Wrist to Elbow</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Wrist_to_Underarm" size="10" maxlength="10">&nbsp;Wrist to Underarm</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Wrist_to_Center_of_Back" size="10" maxlength="10">&nbsp;Wrist to Center of Back</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Shoulder_Seam_to_Waist" size="10" maxlength="10">&nbsp;Shoulder Seam to Waist</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Shoulder_Seam_to_Crotch" size="10" maxlength="10">&nbsp;Shoulder Seam to Crotch</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Ankle_to_Knee" size="10" maxlength="10">&nbsp;Ankle to Knee</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Ankle_to_Crotch" size="10" maxlength="10">&nbsp;Ankle to Crotch</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Crotch_to_Knee" size="10" maxlength="10">&nbsp;Crotch to Knee</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Shoulder_Seam_to_Ankle" size="10" maxlength="10">&nbsp;Shoulder Seam to Ankle<br>&nbsp;</p>
          </div><!-- /.span4 -->
        </td>
      </tr>
      <tr>
        <td valign="top" width="300">
          <div class="span4">
            <p align="center"><b>Hood Measurements</b></p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Forehead_to_Back_of_Neck" size="10">&nbsp;Forehead to Back of Neck</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Head_Circumference" size="10">&nbsp;Head Circumference</p>
          </div><!-- /.span4 -->
          <div class="span4">
            <p align="center"><b>Boot &amp; Glove Measurements</b></p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Shoe" size="10">&nbsp;Shoe Size</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Glove" size="10">&nbsp;Glove Size</p>
          </div><!--/.span4-->
        </td>
      </tr>
      <tr>
        <td valign="top" width="300">
          <div id="sh2" style="display:none;">
            <p align="center"><b>Required Female Measurements</b></p>
            <div class="span4">
              <p align="left">&nbsp;<input class="input-mini" type="text" name="Shoulder_to_Bust" size="10">&nbsp;Shoulder Seam Bust Center</p>
              <p align="left">&nbsp;<input class="input-mini" type="text" name="Center_to_Bust" size="10">&nbsp;Center to Center of Bust</p>
              <p align="left">&nbsp;<input class="input-mini" type="text" name="Chest_Above_Bust" size="10">&nbsp;Chest above Bust</p>
            </div><!--/.span4-->
            <div class="span4">
              <p align="left">&nbsp;<input class="input-mini" type="text" name="Chest_Below_Bust" size="10">&nbsp;Chest Below Bust</p>
              <p align="left">&nbsp;<input class="input-mini" type="text" name="Bra" size="6">&nbsp;Bra Size</p>
              <p align="left">&nbsp;<input class="input-mini" type="text" name="Cup" size="6">&nbsp;Cup Size</p>
            </div><!-- /.span4-->
          </div><!-- /.sh2-->
        </td>
      </tr>
    </table><!--/.table-->
    <p>
    <input type="submit" value="Submit Measurements" name="Submission_Button">
    <input type="reset" value="Clear Form" name="Clear_Form"></p>
</form><!--/.form-->
<script Language="JavaScript" Type="text/javascript">
  function WetSuit_form_Validator(theForm)
  {

    if (theForm.First_Name.value == "")
    {
      alert("Please enter a value for the \"First Name\" field.");
      theForm.First_Name.focus();
      return (false);
    }

    if (theForm.First_Name.value.length > 30)
    {
      alert("Please enter at most 30 characters in the \"First Name\" field.");
      theForm.First_Name.focus();
      return (false);
    }

    var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzƒŠŒŽšœžŸÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ. \t\r\n\f";
    var checkStr = theForm.First_Name.value;
    var allValid = true;
    var validGroups = true;
    for (i = 0;  i < checkStr.length;  i++)
    {
      ch = checkStr.charAt(i);
      for (j = 0;  j < checkOK.length;  j++)
        if (ch == checkOK.charAt(j))
          break;
      if (j == checkOK.length)
      {
        allValid = false;
        break;
      }
    }
    if (!allValid)
    {
      alert("Please enter only letter, whitespace and \".\" characters in the \"First Name\" field.");
      theForm.First_Name.focus();
      return (false);
    }

    if (theForm.Last_Name.value == "")
    {
      alert("Please enter a value for the \"Last Name\" field.");
      theForm.Last_Name.focus();
      return (false);
    }

    if (theForm.Last_Name.value.length > 30)
    {
      alert("Please enter at most 30 characters in the \"Last Name\" field.");
      theForm.Last_Name.focus();
      return (false);
    }

    var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzƒŠŒŽšœžŸÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ0123456789-,. \t\r\n\f";
    var checkStr = theForm.Last_Name.value;
    var allValid = true;
    var validGroups = true;
    for (i = 0;  i < checkStr.length;  i++)
    {
      ch = checkStr.charAt(i);
      for (j = 0;  j < checkOK.length;  j++)
        if (ch == checkOK.charAt(j))
          break;
      if (j == checkOK.length)
      {
        allValid = false;
        break;
      }
    }
    if (!allValid)
    {
      alert("Please enter only letter, digit, whitespace and \",.\" characters in the \"Last Name\" field.");
      theForm.Last_Name.focus();
      return (false);
    }

    if (theForm.Email.value == "")
    {
      alert("Please enter a value for the \"Email\" field.");
      theForm.Email.focus();
      return (false);
    }

    if (theForm.Email.value.length > 30)
    {
      alert("Please enter at most 30 characters in the \"Email\" field.");
      theForm.Email.focus();
      return (false);
    }

    email = theForm.Email;
    filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (filter.test(email.value)) {
    }
    else {
      alert("Please enter a proper email in the \"Email\" field.");
      theForm.Email.focus();
      return (false);
    }

    if (theForm.Phone_Fax.value == "")
    {
      alert("Please enter a value for the \"Phone or Fax Number\" field.");
      theForm.Phone_Fax.focus();
      return (false);
    }

    var checkOK = "0123456789-()- \t\r\n\f";
    var checkStr = theForm.Phone_Fax.value;
    var allValid = true;
    var validGroups = true;
    for (i = 0;  i < checkStr.length;  i++)
    {
      ch = checkStr.charAt(i);
      for (j = 0;  j < checkOK.length;  j++)
        if (ch == checkOK.charAt(j))
          break;
      if (j == checkOK.length)
      {
        allValid = false;
        break;
      }
    }
    if (!allValid)
    {
      alert("Please enter only digit, whitespace and \"()-\" characters in the \"Phone or Fax Number\" field.");
      theForm.Phone_Fax.focus();
      return (false);
    }

    if (theForm.Height.value == "")
    {
      alert("Please enter a value for the \"Height\" field.");
      theForm.Height.focus();
      return (false);
    }

    if (theForm.Height.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Height\" field.");
      theForm.Height.focus();
      return (false);
    }

    if (theForm.Weight.value == "")
    {
      alert("Please enter a value for the \"Weight\" field.");
      theForm.Weight.focus();
      return (false);
    }

    if (theForm.Weight.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Weight\" field.");
      theForm.Weight.focus();
      return (false);
    }

    if (theForm.Ankle.value == "")
    {
      alert("Please enter a value for the \"Ankle\" field.");
      theForm.Ankle.focus();
      return (false);
    }

    if (theForm.Ankle.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Ankle\" field.");
      theForm.Ankle.focus();
      return (false);
    }

    if (theForm.Calf.value == "")
    {
      alert("Please enter a value for the \"Calf\" field.");
      theForm.Calf.focus();
      return (false);
    }

    if (theForm.Calf.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Calf\" field.");
      theForm.Calf.focus();
      return (false);
    }

    if (theForm.Below_Knee.value == "")
    {
      alert("Please enter a value for the \"Below Knee\" field.");
      theForm.Below_Knee.focus();
      return (false);
    }

    if (theForm.Below_Knee.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Below Knee\" field.");
      theForm.Below_Knee.focus();
      return (false);
    }

    if (theForm.Knee.value == "")
    {
      alert("Please enter a value for the \"Knee\" field.");
      theForm.Knee.focus();
      return (false);
    }

    if (theForm.Knee.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Knee\" field.");
      theForm.Knee.focus();
      return (false);
    }

    if (theForm.Thigh_Crotch.value == "")
    {
      alert("Please enter a value for the \"Thigh at Crotch\" field.");
      theForm.Thigh_Crotch.focus();
      return (false);
    }

    if (theForm.Thigh_Crotch.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Thigh at Crotch\" field.");
      theForm.Thigh_Crotch.focus();
      return (false);
    }

    if (theForm.Thigh_5_Below_Crotch.value == "")
    {
      alert("Please enter a value for the \"Thigh 5 Inches Below Crotch\" field.");
      theForm.Thigh_5_Below_Crotch.focus();
      return (false);
    }

    if (theForm.Thigh_5_Below_Crotch.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Thigh 5 Inches Below Crotch\" field.");
      theForm.Thigh_5_Below_Crotch.focus();
      return (false);
    }

    if (theForm.Hips.value == "")
    {
      alert("Please enter a value for the \"Hips\" field.");
      theForm.Hips.focus();
      return (false);
    }

    if (theForm.Hips.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Hips\" field.");
      theForm.Hips.focus();
      return (false);
    }

    if (theForm.Waist.value == "")
    {
      alert("Please enter a value for the \"Waist\" field.");
      theForm.Waist.focus();
      return (false);
    }

    if (theForm.Waist.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Waist\" field.");
      theForm.Waist.focus();
      return (false);
    }

    if (theForm.Chest_at_Largest_Point.value == "")
    {
      alert("Please enter a value for the \"Chest at Largest Point\" field.");
      theForm.Chest_at_Largest_Point.focus();
      return (false);
    }

    if (theForm.Chest_at_Largest_Point.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Chest at Largest Point\" field.");
      theForm.Chest_at_Largest_Point.focus();
      return (false);
    }

    if (theForm.Neck.value == "")
    {
      alert("Please enter a value for the \"Neck\" field.");
      theForm.Neck.focus();
      return (false);
    }

    if (theForm.Neck.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Neck\" field.");
      theForm.Neck.focus();
      return (false);
    }

    if (theForm.Wrist.value == "")
    {
      alert("Please enter a value for the \"Wrist\" field.");
      theForm.Wrist.focus();
      return (false);
    }

    if (theForm.Wrist.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Wrist\" field.");
      theForm.Wrist.focus();
      return (false);
    }

    if (theForm.Forearm_at_Largest_Point.value == "")
    {
      alert("Please enter a value for the \"Forearm at Largest Point\" field.");
      theForm.Forearm_at_Largest_Point.focus();
      return (false);
    }

    if (theForm.Forearm_at_Largest_Point.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Forearm at Largest Point\" field.");
      theForm.Forearm_at_Largest_Point.focus();
      return (false);
    }

    if (theForm.Elbow.value == "")
    {
      alert("Please enter a value for the \"Elbow\" field.");
      theForm.Elbow.focus();
      return (false);
    }

    if (theForm.Elbow.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Elbow\" field.");
      theForm.Elbow.focus();
      return (false);
    }

    if (theForm.Bicep.value == "")
    {
      alert("Please enter a value for the \"Bicep\" field.");
      theForm.Bicep.focus();
      return (false);
    }

    if (theForm.Bicep.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Bicep\" field.");
      theForm.Bicep.focus();
      return (false);
    }

    if (theForm.Upper_Bicep_at_Shoulder.value == "")
    {
      alert("Please enter a value for the \"Upper Bicep at Shoulder\" field.");
      theForm.Upper_Bicep_at_Shoulder.focus();
      return (false);
    }

    if (theForm.Upper_Bicep_at_Shoulder.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Upper Bicep at Shoulder\" field.");
      theForm.Upper_Bicep_at_Shoulder.focus();
      return (false);
    }

    if (theForm.Wrist_to_Elbow.value == "")
    {
      alert("Please enter a value for the \"Wrist to Elbow\" field.");
      theForm.Wrist_to_Elbow.focus();
      return (false);
    }

    if (theForm.Wrist_to_Elbow.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Wrist to Elbow\" field.");
      theForm.Wrist_to_Elbow.focus();
      return (false);
    }

    if (theForm.Wrist_to_Underarm.value == "")
    {
      alert("Please enter a value for the \"Wrist to Underarm\" field.");
      theForm.Wrist_to_Underarm.focus();
      return (false);
    }

    if (theForm.Wrist_to_Underarm.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Wrist to Underarm\" field.");
      theForm.Wrist_to_Underarm.focus();
      return (false);
    }

    if (theForm.Wrist_to_Center_of_Back.value == "")
    {
      alert("Please enter a value for the \"Wrist to Center of Back\" field.");
      theForm.Wrist_to_Center_of_Back.focus();
      return (false);
    }

    if (theForm.Wrist_to_Center_of_Back.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Wrist to Center of Back\" field.");
      theForm.Wrist_to_Center_of_Back.focus();
      return (false);
    }

    if (theForm.Shoulder_Seam_to_Waist.value == "")
    {
      alert("Please enter a value for the \"Shoulder Seam to Waist\" field.");
      theForm.Shoulder_Seam_to_Waist.focus();
      return (false);
    }

    if (theForm.Shoulder_Seam_to_Waist.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Shoulder Seam to Waist\" field.");
      theForm.Shoulder_Seam_to_Waist.focus();
      return (false);
    }

    if (theForm.Shoulder_Seam_to_Crotch.value == "")
    {
      alert("Please enter a value for the \"Shoulder Seam to Crotch\" field.");
      theForm.Shoulder_Seam_to_Crotch.focus();
      return (false);
    }

    if (theForm.Shoulder_Seam_to_Crotch.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Shoulder Seam to Crotch\" field.");
      theForm.Shoulder_Seam_to_Crotch.focus();
      return (false);
    }

    if (theForm.Ankle_to_Knee.value == "")
    {
      alert("Please enter a value for the \"Ankle to Knee\" field.");
      theForm.Ankle_to_Knee.focus();
      return (false);
    }

    if (theForm.Ankle_to_Knee.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Ankle to Knee\" field.");
      theForm.Ankle_to_Knee.focus();
      return (false);
    }

    if (theForm.Ankle_to_Crotch.value == "")
    {
      alert("Please enter a value for the \"Ankle to Crotch\" field.");
      theForm.Ankle_to_Crotch.focus();
      return (false);
    }

    if (theForm.Ankle_to_Crotch.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Ankle to Crotch\" field.");
      theForm.Ankle_to_Crotch.focus();
      return (false);
    }

    if (theForm.Crotch_to_Knee.value == "")
    {
      alert("Please enter a value for the \"Crotch to Knee\" field.");
      theForm.Crotch_to_Knee.focus();
      return (false);
    }

    if (theForm.Crotch_to_Knee.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Crotch to Knee\" field.");
      theForm.Crotch_to_Knee.focus();
      return (false);
    }

    if (theForm.Shoulder_Seam_to_Ankle.value == "")
    {
      alert("Please enter a value for the \"Shoulder Seam to Ankle\" field.");
      theForm.Shoulder_Seam_to_Ankle.focus();
      return (false);
    }

    if (theForm.Shoulder_Seam_to_Ankle.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Shoulder Seam to Ankle\" field.");
      theForm.Shoulder_Seam_to_Ankle.focus();
      return (false);
    }
    return (true);
  }
</script>
<script Language="Javascript" Type="text/javascript">
  function show(str){
      document.getElementById('sh2').style.display = 'none';
  }
  function show2(sign){
      document.getElementById('sh2').style.display = 'block';
  }
</script>

<?php
}
if ($_GET['suit'] == 'Dry') {
?>

<form method="post" action="send_dry_form_email.php" onsubmit="return DrySuit_form_Validator(this)" language="JavaScript" name="DrySuit_form">
    <h2><span class="muted">Dry Suit Customer Information</span></h2>
    <p>
    <p>First Name: &nbsp;<input class="input-medium" type="text" name="First_Name" size="30" maxlength="30"><br>
    Last Name: &nbsp;<input class="input-medium" type="text" name="Last_Name" size="30" maxlength="30"><br>
    Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input-medium" type="text" name="Email" size="30" maxlength="30"><br>
    Phone/Fax*:&nbsp;<input class="input-medium" type="text" name="Phone_Fax" size="20"><br>
    <i>*(required for verification on custom suits)</i></p>
    <p>Measurement:&nbsp;
    <input type="radio" name="Measurement_Type" checked="checked" value="Imperial">Imperial&nbsp;&nbsp;
    <input type="radio" name="Measurement_Type" value="Metric">Metric<br>
    Gender:&nbsp;
      <input type="radio" name="Gender" id="Male" checked="checked"value="Male" onchange="show(this.value)"/>Male&nbsp;&nbsp;
      <input type="radio" name="Gender" id="female" value="Female" onchange="show2()"/>Female</p>
    Height:&nbsp;<input class="input-mini" type="text" name="Height" size="10" maxlength="10"><br>
    Weight:&nbsp;<input class="input-mini" type="text" name="Weight" size="10" maxlength="10"></p>
    
    <table class="table-bordered table-condensed" id="table1" width="700" align="center" style="background-color:#fff;">
      <tr>
        <td width="300" height="600">
          <p align="center"><b>Customer Measurements</b></p>
          <div class="span4">
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Ankle" size="10" maxlength="10">&nbsp;Ankle</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Calf" size="10" maxlength="10">&nbsp;Calf</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Below_Knee" size="10" maxlength="10">&nbsp;Below Knee</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Knee" size="10" maxlength="10">&nbsp;Knee</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Thigh_Crotch" size="10" maxlength="10">&nbsp;Thigh at Crotch</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Thigh_5_Below_Crotch" size="10" maxlength="10">&nbsp;Thigh 5 Inches Below Crotch</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Hips" size="10" maxlength="10">&nbsp;Hips at Widest Point</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Waist" size="10" maxlength="10">&nbsp;Waist at Navel</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Chest_at_Largest_Point" size="10" maxlength="10">&nbsp;Chest at Largest Point</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Neck" size="10" maxlength="10">&nbsp;Neck</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Wrist" size="10" maxlength="10">&nbsp;Wrist</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Forearm_at_Largest_Point" size="10" maxlength="10">&nbsp;Forearm at Largest Point</p>
          </div><!-- /.span4 -->
          <div class="span4">
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Elbow" size="10" maxlength="10">&nbsp;Elbow</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Bicep" size="10" maxlength="10">&nbsp;Bicep</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Upper_Bicep_at_Shoulder" size="10" maxlength="10">&nbsp;Upper Bicep at Shoulder</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Wrist_to_Elbow" size="10" maxlength="10">&nbsp;Wrist to Elbow</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Wrist_to_Underarm" size="10" maxlength="10">&nbsp;Wrist to Underarm</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Wrist_to_Center_of_Back" size="10" maxlength="10">&nbsp;Wrist to Center of Back</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Shoulder_Seam_to_Waist" size="10" maxlength="10">&nbsp;Shoulder Seam to Waist</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Shoulder_Seam_to_Crotch" size="10" maxlength="10">&nbsp;Shoulder Seam to Crotch</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Ankle_to_Knee" size="10" maxlength="10">&nbsp;Ankle to Knee</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Ankle_to_Crotch" size="10" maxlength="10">&nbsp;Ankle to Crotch</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Crotch_to_Knee" size="10" maxlength="10">&nbsp;Crotch to Knee</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Shoulder_Seam_to_Ankle" size="10" maxlength="10">&nbsp;Shoulder Seam to Ankle<br>&nbsp;</p>
          </div><!-- /.span4 -->
        </td>
      </tr>
      <tr>
        <td valign="top" width="300">
          <div class="span4">
            <p align="center"><b>Hood Measurements</b></p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Forehead_to_Back_of_Neck" size="10">&nbsp;Forehead to Back of Neck</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Head_Circumference" size="10">&nbsp;Head Circumference</p>
          </div><!-- /.span4 -->
          <div class="span4">
            <p align="center"><b>Boot &amp; Glove Measurements</b></p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Shoe" size="10">&nbsp;Shoe Size</p>
            <p align="left">&nbsp;<input class="input-mini" type="text" name="Glove" size="10">&nbsp;Glove Size</p>
          </div><!--/.span4-->
        </td>
      </tr>
      <tr>
        <td valign="top" width="300">
          <div id="sh2" style="display:none;">
            <p align="center"><b>Required Female Measurements</b></p>
            <div class="span4">
              <p align="left">&nbsp;<input class="input-mini" type="text" name="Shoulder_to_Bust" size="10">&nbsp;Shoulder Seam Bust Center</p>
              <p align="left">&nbsp;<input class="input-mini" type="text" name="Center_to_Bust" size="10">&nbsp;Center to Center of Bust</p>
              <p align="left">&nbsp;<input class="input-mini" type="text" name="Chest_Above_Bust" size="10">&nbsp;Chest above Bust</p>
            </div><!--/.span4-->
            <div class="span4">
              <p align="left">&nbsp;<input class="input-mini" type="text" name="Chest_Below_Bust" size="10">&nbsp;Chest Below Bust</p>
              <p align="left">&nbsp;<input class="input-mini" type="text" name="Bra" size="6">&nbsp;Bra Size</p>
              <p align="left">&nbsp;<input class="input-mini" type="text" name="Cup" size="6">&nbsp;Cup Size</p>
            </div><!-- /.span4-->
          </div><!-- /.sh2-->
        </td>
      </tr>
	</table>
	<p>
    <input type="submit" value="Submit Measurements" name="Submission_Button">
    <input type="reset" value="Clear Form" name="Clear_Form"></p>
</form><!--/.form-->
<script Language="JavaScript" Type="text/javascript">
  function DrySuit_form_Validator(theForm)
  {

    if (theForm.First_Name.value == "")
    {
      alert("Please enter a value for the \"First Name\" field.");
      theForm.First_Name.focus();
      return (false);
    }

    if (theForm.First_Name.value.length > 30)
    {
      alert("Please enter at most 30 characters in the \"First Name\" field.");
      theForm.First_Name.focus();
      return (false);
    }

    var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzƒŠŒŽšœžŸÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ. \t\r\n\f";
    var checkStr = theForm.First_Name.value;
    var allValid = true;
    var validGroups = true;
    for (i = 0;  i < checkStr.length;  i++)
    {
      ch = checkStr.charAt(i);
      for (j = 0;  j < checkOK.length;  j++)
        if (ch == checkOK.charAt(j))
          break;
      if (j == checkOK.length)
      {
        allValid = false;
        break;
      }
    }
    if (!allValid)
    {
      alert("Please enter only letter, whitespace and \".\" characters in the \"First Name\" field.");
      theForm.First_Name.focus();
      return (false);
    }

    if (theForm.Last_Name.value == "")
    {
      alert("Please enter a value for the \"Last Name\" field.");
      theForm.Last_Name.focus();
      return (false);
    }

    if (theForm.Last_Name.value.length > 30)
    {
      alert("Please enter at most 30 characters in the \"Last Name\" field.");
      theForm.Last_Name.focus();
      return (false);
    }

    var checkOK = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzƒŠŒŽšœžŸÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ0123456789-,. \t\r\n\f";
    var checkStr = theForm.Last_Name.value;
    var allValid = true;
    var validGroups = true;
    for (i = 0;  i < checkStr.length;  i++)
    {
      ch = checkStr.charAt(i);
      for (j = 0;  j < checkOK.length;  j++)
        if (ch == checkOK.charAt(j))
          break;
      if (j == checkOK.length)
      {
        allValid = false;
        break;
      }
    }
    if (!allValid)
    {
      alert("Please enter only letter, digit, whitespace and \",.\" characters in the \"Last Name\" field.");
      theForm.Last_Name.focus();
      return (false);
    }

    if (theForm.Email.value == "")
    {
      alert("Please enter a value for the \"Email\" field.");
      theForm.Email.focus();
      return (false);
    }

    if (theForm.Email.value.length > 30)
    {
      alert("Please enter at most 30 characters in the \"Email\" field.");
      theForm.Email.focus();
      return (false);
    }

    email = theForm.Email;
    filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (filter.test(email.value)) {
    }
    else {
      alert("Please enter a proper email in the \"Email\" field.");
      theForm.Email.focus();
      return (false);
    }

    if (theForm.Phone_Fax.value == "")
    {
      alert("Please enter a value for the \"Phone or Fax Number\" field.");
      theForm.Phone_Fax.focus();
      return (false);
    }

    var checkOK = "0123456789-()- \t\r\n\f";
    var checkStr = theForm.Phone_Fax.value;
    var allValid = true;
    var validGroups = true;
    for (i = 0;  i < checkStr.length;  i++)
    {
      ch = checkStr.charAt(i);
      for (j = 0;  j < checkOK.length;  j++)
        if (ch == checkOK.charAt(j))
          break;
      if (j == checkOK.length)
      {
        allValid = false;
        break;
      }
    }
    if (!allValid)
    {
      alert("Please enter only digit, whitespace and \"()-\" characters in the \"Phone or Fax Number\" field.");
      theForm.Phone_Fax.focus();
      return (false);
    }

    if (theForm.Height.value == "")
    {
      alert("Please enter a value for the \"Height\" field.");
      theForm.Height.focus();
      return (false);
    }

    if (theForm.Height.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Height\" field.");
      theForm.Height.focus();
      return (false);
    }

    if (theForm.Weight.value == "")
    {
      alert("Please enter a value for the \"Weight\" field.");
      theForm.Weight.focus();
      return (false);
    }

    if (theForm.Weight.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Weight\" field.");
      theForm.Weight.focus();
      return (false);
    }

    if (theForm.Ankle.value == "")
    {
      alert("Please enter a value for the \"Ankle\" field.");
      theForm.Ankle.focus();
      return (false);
    }

    if (theForm.Ankle.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Ankle\" field.");
      theForm.Ankle.focus();
      return (false);
    }

    if (theForm.Calf.value == "")
    {
      alert("Please enter a value for the \"Calf\" field.");
      theForm.Calf.focus();
      return (false);
    }

    if (theForm.Calf.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Calf\" field.");
      theForm.Calf.focus();
      return (false);
    }

    if (theForm.Below_Knee.value == "")
    {
      alert("Please enter a value for the \"Below Knee\" field.");
      theForm.Below_Knee.focus();
      return (false);
    }

    if (theForm.Below_Knee.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Below Knee\" field.");
      theForm.Below_Knee.focus();
      return (false);
    }

    if (theForm.Knee.value == "")
    {
      alert("Please enter a value for the \"Knee\" field.");
      theForm.Knee.focus();
      return (false);
    }

    if (theForm.Knee.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Knee\" field.");
      theForm.Knee.focus();
      return (false);
    }

    if (theForm.Thigh_Crotch.value == "")
    {
      alert("Please enter a value for the \"Thigh at Crotch\" field.");
      theForm.Thigh_Crotch.focus();
      return (false);
    }

    if (theForm.Thigh_Crotch.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Thigh at Crotch\" field.");
      theForm.Thigh_Crotch.focus();
      return (false);
    }

    if (theForm.Thigh_5_Below_Crotch.value == "")
    {
      alert("Please enter a value for the \"Thigh 5 Inches Below Crotch\" field.");
      theForm.Thigh_5_Below_Crotch.focus();
      return (false);
    }

    if (theForm.Thigh_5_Below_Crotch.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Thigh 5 Inches Below Crotch\" field.");
      theForm.Thigh_5_Below_Crotch.focus();
      return (false);
    }

    if (theForm.Hips.value == "")
    {
      alert("Please enter a value for the \"Hips\" field.");
      theForm.Hips.focus();
      return (false);
    }

    if (theForm.Hips.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Hips\" field.");
      theForm.Hips.focus();
      return (false);
    }

    if (theForm.Waist.value == "")
    {
      alert("Please enter a value for the \"Waist\" field.");
      theForm.Waist.focus();
      return (false);
    }

    if (theForm.Waist.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Waist\" field.");
      theForm.Waist.focus();
      return (false);
    }

    if (theForm.Chest_at_Largest_Point.value == "")
    {
      alert("Please enter a value for the \"Chest at Largest Point\" field.");
      theForm.Chest_at_Largest_Point.focus();
      return (false);
    }

    if (theForm.Chest_at_Largest_Point.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Chest at Largest Point\" field.");
      theForm.Chest_at_Largest_Point.focus();
      return (false);
    }

    if (theForm.Neck.value == "")
    {
      alert("Please enter a value for the \"Neck\" field.");
      theForm.Neck.focus();
      return (false);
    }

    if (theForm.Neck.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Neck\" field.");
      theForm.Neck.focus();
      return (false);
    }

    if (theForm.Wrist.value == "")
    {
      alert("Please enter a value for the \"Wrist\" field.");
      theForm.Wrist.focus();
      return (false);
    }

    if (theForm.Wrist.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Wrist\" field.");
      theForm.Wrist.focus();
      return (false);
    }

    if (theForm.Forearm_at_Largest_Point.value == "")
    {
      alert("Please enter a value for the \"Forearm at Largest Point\" field.");
      theForm.Forearm_at_Largest_Point.focus();
      return (false);
    }

    if (theForm.Forearm_at_Largest_Point.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Forearm at Largest Point\" field.");
      theForm.Forearm_at_Largest_Point.focus();
      return (false);
    }

    if (theForm.Elbow.value == "")
    {
      alert("Please enter a value for the \"Elbow\" field.");
      theForm.Elbow.focus();
      return (false);
    }

    if (theForm.Elbow.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Elbow\" field.");
      theForm.Elbow.focus();
      return (false);
    }

    if (theForm.Bicep.value == "")
    {
      alert("Please enter a value for the \"Bicep\" field.");
      theForm.Bicep.focus();
      return (false);
    }

    if (theForm.Bicep.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Bicep\" field.");
      theForm.Bicep.focus();
      return (false);
    }

    if (theForm.Upper_Bicep_at_Shoulder.value == "")
    {
      alert("Please enter a value for the \"Upper Bicep at Shoulder\" field.");
      theForm.Upper_Bicep_at_Shoulder.focus();
      return (false);
    }

    if (theForm.Upper_Bicep_at_Shoulder.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Upper Bicep at Shoulder\" field.");
      theForm.Upper_Bicep_at_Shoulder.focus();
      return (false);
    }

    if (theForm.Wrist_to_Elbow.value == "")
    {
      alert("Please enter a value for the \"Wrist to Elbow\" field.");
      theForm.Wrist_to_Elbow.focus();
      return (false);
    }

    if (theForm.Wrist_to_Elbow.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Wrist to Elbow\" field.");
      theForm.Wrist_to_Elbow.focus();
      return (false);
    }

    if (theForm.Wrist_to_Underarm.value == "")
    {
      alert("Please enter a value for the \"Wrist to Underarm\" field.");
      theForm.Wrist_to_Underarm.focus();
      return (false);
    }

    if (theForm.Wrist_to_Underarm.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Wrist to Underarm\" field.");
      theForm.Wrist_to_Underarm.focus();
      return (false);
    }

    if (theForm.Wrist_to_Center_of_Back.value == "")
    {
      alert("Please enter a value for the \"Wrist to Center of Back\" field.");
      theForm.Wrist_to_Center_of_Back.focus();
      return (false);
    }

    if (theForm.Wrist_to_Center_of_Back.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Wrist to Center of Back\" field.");
      theForm.Wrist_to_Center_of_Back.focus();
      return (false);
    }

    if (theForm.Shoulder_Seam_to_Waist.value == "")
    {
      alert("Please enter a value for the \"Shoulder Seam to Waist\" field.");
      theForm.Shoulder_Seam_to_Waist.focus();
      return (false);
    }

    if (theForm.Shoulder_Seam_to_Waist.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Shoulder Seam to Waist\" field.");
      theForm.Shoulder_Seam_to_Waist.focus();
      return (false);
    }

    if (theForm.Shoulder_Seam_to_Crotch.value == "")
    {
      alert("Please enter a value for the \"Shoulder Seam to Crotch\" field.");
      theForm.Shoulder_Seam_to_Crotch.focus();
      return (false);
    }

    if (theForm.Shoulder_Seam_to_Crotch.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Shoulder Seam to Crotch\" field.");
      theForm.Shoulder_Seam_to_Crotch.focus();
      return (false);
    }

    if (theForm.Ankle_to_Knee.value == "")
    {
      alert("Please enter a value for the \"Ankle to Knee\" field.");
      theForm.Ankle_to_Knee.focus();
      return (false);
    }

    if (theForm.Ankle_to_Knee.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Ankle to Knee\" field.");
      theForm.Ankle_to_Knee.focus();
      return (false);
    }

    if (theForm.Ankle_to_Crotch.value == "")
    {
      alert("Please enter a value for the \"Ankle to Crotch\" field.");
      theForm.Ankle_to_Crotch.focus();
      return (false);
    }

    if (theForm.Ankle_to_Crotch.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Ankle to Crotch\" field.");
      theForm.Ankle_to_Crotch.focus();
      return (false);
    }

    if (theForm.Crotch_to_Knee.value == "")
    {
      alert("Please enter a value for the \"Crotch to Knee\" field.");
      theForm.Crotch_to_Knee.focus();
      return (false);
    }

    if (theForm.Crotch_to_Knee.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Crotch to Knee\" field.");
      theForm.Crotch_to_Knee.focus();
      return (false);
    }

    if (theForm.Shoulder_Seam_to_Ankle.value == "")
    {
      alert("Please enter a value for the \"Shoulder Seam to Ankle\" field.");
      theForm.Shoulder_Seam_to_Ankle.focus();
      return (false);
    }

    if (theForm.Shoulder_Seam_to_Ankle.value.length > 10)
    {
      alert("Please enter at most 10 characters in the \"Shoulder Seam to Ankle\" field.");
      theForm.Shoulder_Seam_to_Ankle.focus();
      return (false);
    }
    return (true);
  }
</script>
<script Language="Javascript" Type="text/javascript">
  function show(str){
      document.getElementById('sh2').style.display = 'none';
  }
  function show2(sign){
      document.getElementById('sh2').style.display = 'block';
  }
</script>

<?php
}
?>