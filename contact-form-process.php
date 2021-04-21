<?php
if (isset($_POST['Email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "andarimarsa@gmail.com";
    $email_subject = "New form submissions";

    function problem($error)
    {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }

    // validation expected data exists
    if (
        !isset($_POST['Name']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Message'])
    ) {
        problem('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['Name']; // required
    $email = $_POST['Email']; // required
    $message = $_POST['Message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'The Email address you entered does not appear to be valid.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'The Name you entered does not appear to be valid.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'The Message you entered do not appear to be valid.<br>';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>
<! -- Start Header -->
<table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#008080">
   <tr>
      <td>
	<table border="0" width="100%" cellpadding="10" cellspacing="0" allign="center">
	  <tr>
	    <td>
	      <img src="harassment1.png" width="40" alt="logo">
	    </td>
	    <td width="50%">&nbsp</td>
	    <td>
	      <a href="index.html">
			<font face="arial" color="#F0FFF" size="4">
	      	Home
		</font>
	      </a>
	    </td>
	    <td>
	      <a href="about.html">
			<font face="arial" color="#F0FFF" size="4">
			About
	      </a>
	    </td>
	    <td>
	      <a href="hotlines.html">
			<font face="arial" color="#F0FFF" size="4">
			Hotlines
	      </a>
	    </td>
	    <td>
	      <a href="team.html">
			<font face="arial" color="#F0FFF" size="4">
			Team
	      </a>
	    </td>
		<td>
			<a href="faqs.html">
			  <font face="arial" color="#F0FFF" size="4">
			  FAQs
			</a>
		</td>
		<td>
			<a href="contactform.html">
			  <font face="arial" color="#F0FFF" size="4">
			  Contact Us
			</a>
		</td>
   </tr>
</table>
<!-- End Header -->

<!--Start Home -->
<table border="0" width="100%" cellspacing="0" cellpadding="15" background="bg.png" height="720" >
   <tr>
      <td>
		<table border="0" width="100%" cellpadding="0" cellspacing="0" allign="center" height="100%">
		  <tr>
			<td align="center" valign="middle" >
			 <h1>
				<font face="arial" color="white" size="7" >
				Thank you for your feedback, <?php echo $name ?>
				</font>
			 </h1>				
			</td>
		  </tr>
		</table>
	  </td>
	</tr>
</table>
<!--End Home -->

<!-- Start Footer -->
 <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#008080">
  <tr>
  	 <td>
  	 	<table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
  	 	
  	 	<tr>
  	 		<td width="33.33%" valign="top">
  	 		   <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center">
  	 		   	 <tr>
  	 		   	 	<td align="center" valign="top">
  	 		   	 		<font color="#f3971b" size="6">
  	 		   	 			<span class="fa fa-phone"></span>
  	 		   	 		</font>
  	 		   	 		<br/><br/>
  	 		   	 		<font color="#ffffff" size="5" face="arial">
  	 		   	 		Phone No
  	 		   	 	    </font>
  	 		   	 	    <p>
  	 		   	 	      <font color="#c2c0c3" size="3" face="arial">
  	 		   	 	    	+60 123456789
  	 		   	 	     </font>
  	 		   	 	    </p>
  	 		   	 	</td>
  	 		   	 </tr>
  	 		   </table>
  	 		</td>

  	 		<td width="33.33%" valign="top">
  	 		   <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center">
  	 		   	 <tr>
  	 		   	 	<td align="center" valign="top">
  	 		   	 		<font color="#f3971b" size="6">
  	 		   	 			<span class="fa fa-envelope"></span>
  	 		   	 		</font>
  	 		   	 		<br/><br/>
  	 		   	 		<font color="#ffffff" size="5" face="arial">
  	 		   	 		Email
  	 		   	 	    </font>
  	 		   	 	    <p>
  	 		   	 	      <font color="#c2c0c3" size="3" face="arial">
  	 		   	 	    	sexualharassment@gmail.com
  	 		   	 	     </font>
  	 		   	 	    </p>
  	 		   	 	</td>
  	 		   	 </tr>
  	 		   </table>
  	 		</td>

  	 		<td width="33.33%" valign="top">
  	 		   <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center">
  	 		   	 <tr>
  	 		   	 	<td align="center" valign="top">
  	 		   	 		<font color="#f3971b" size="6">
  	 		   	 			<span class="fa fa-map-marker"></span>
  	 		   	 		</font>
  	 		   	 		<br/><br/>
  	 		   	 		<font color="#ffffff" size="5" face="arial">
  	 		   	 		Location
  	 		   	 	    </font>
  	 		   	 	    <p>
  	 		   	 	      <font color="#c2c0c3" size="3" face="arial">
  	 		   	 	    	No. 85, Jalan 21/1, Taman Paramount, 46300 Petaling Jaya, Selangor Malaysia.
  	 		   	 	     </font>
  	 		   	 	    </p>
  	 		   	 	</td>
  	 		   	 </tr>
  	 		   </table>
  	 		</td>
  	 	</tr>
  	 	<tr>
  	 		<td colspan="3">
  	 			<hr noshade>
  	 		</td>
  	 	</tr>
  	 	<tr>
  	 		<td colspan="3" height="100" valign="top">
  	 			<table border="0" width="30%" cellpadding="0" cellspacing="0" align="center">
  	 				
  	 				<tr>
  	 					 <td width="25%" align="center">
  	 					 	<table border="0" width="50" cellpadding="0" cellspacing="0" align="center" height="50" bgcolor="#f3971b">
  	 					 		<tr>
  	 					 			<td align="center" valign="middle">
  	 					 				<a href="">
  	 					 				<font size="5" color="#ffffff">
  	 					 				<span class="fa fa-facebook"></span>
  	 					 			   </font>
  	 					 			    </a>
  	 					 			</td>
  	 					 		</tr>
  	 					 	
  	 					 	</table>
  	 					 </td>
  	 					 <td width="25%" align="center">
  	 					 	<table border="0" width="50" cellpadding="0" cellspacing="0" align="center" height="50" bgcolor="#f3971b">
  	 					 		<tr>
  	 					 			<td align="center" valign="middle">
  	 					 				<a href="">
  	 					 				<font size="5" color="#ffffff">
  	 					 				<span class="fa fa-skype"></span>
  	 					 			   </font>
  	 					 			</a>
  	 					 			</td>
  	 					 		</tr>
  	 					 	
  	 					 	</table>
  	 					 </td>
  	 					 <td width="25%" align="center">
  	 					 	<table border="0" width="50" cellpadding="0" cellspacing="0" align="center" height="50" bgcolor="#f3971b">
  	 					 		<tr>
  	 					 			<td align="center" valign="middle">
  	 					 				<a href="">
  	 					 				<font size="5" color="#ffffff">
  	 					 				<span class="fa fa-linkedin"></span>
  	 					 			   </font>
  	 					 			   </a>
  	 					 			</td>
  	 					 		</tr>
  	 					 	
  	 					 	</table>
  	 					 </td>
  	 					 <td width="25%" align="center">
  	 					 	<table border="0" width="50" cellpadding="0" cellspacing="0" align="center" height="50" bgcolor="#f3971b">
  	 					 		<tr>
  	 					 			<td align="center" valign="middle">
  	 					 				<a href="">
  	 					 				<font size="5" color="#ffffff">
  	 					 				<span class="fa fa-google-plus"></span>
  	 					 			   </font>
  	 					 			   </a>
  	 					 			</td>
  	 					 		</tr>
  	 					 	
  	 					 	</table>
  	 					 </td>
  	 				</tr>
  	 			</table>
  	 		</td>
  	 	</tr>
  	 	</table>
  	</td>
  </tr>
 </table>

<?php
}
?>