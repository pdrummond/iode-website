<?php

session_start();



//ini_set('error_reporting', E_ALL);
ini_set('display_errors', 0);

$submitted = $_POST['submitted'];
	

	if ($submitted == 1)
	{
	
		foreach ($_POST as $key => $value)
		{
			$$key = trim($value);
			$_SESSION[$key] = stripslashes(htmlspecialchars(trim($value)));
		}
	
// name validation
		if (strlen($enquiryName) < 2 ){$errors['enquiryName'] = "<br /><span class='error'>Please specify</span>";}
			
		if (strlen($enquiryMessage) < 10 ){$errors['enquiryMessage'] = "<br /><span class='error'>Please provide more details</span>";}
		
		
// email validation
// define the function that checks the validity of the email


		function checkEmail($enquiryEmail)
		{
 			if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/" , $enquiryEmail))
			{
  				list($username,$domain)=split('@',$enquiryEmail);
  				//if(!checkdnsrr($domain,'MX'))
				//{
   				//	return false;
  				//}
  				return true;
 			}
 			return false;
		}
		
		if(!checkEmail($enquiryEmail))
		{
			$errors['enquiryEmail'] = "<br /><span class='error'>Please provide a valid email address</span>";
		}
			
		


// count the errors, if there are none, send details etc
		if (count($errors) == 0)
		{
			
			
			include("phpmailer/class.phpmailer.php");
			
			
			$mail = new phpmailer();
			//$mail->IsSMTP();   // send via SMTP
			//$mail->Host = 		"iode.co.uk";
			//$mail->SMTPDebug = 2;
			$mail->From = 'noreply@iode.co.uk';
			$mail->FromName = 'Iode Website Enquiry';
			$mail->Subject = 'Website contact form';
			$mail->AddAddress('enquiries@iode.co.uk','Iode Website');
			
			$txt = "
Contact form submission details...

Name: " . $enquiryName . "
Telephone: " . $enquiryPhone . "
Email: " . $enquiryEmail . "

Message: " . $enquiryMessage . "

				
Thank You";
				
				
				$mail->Body = $txt;
				if(!$mail->Send()) {
					console.log("Mailer error: " + $mail->ErrorInfo);
				} else {
					console.log("Mail sent sucessfully");	
				}
	
				
								
				unset($_SESSION['enquiryName']);
				unset($_SESSION['enquiryPhone']);
				unset($_SESSION['enquiryEmail']);
				unset($_SESSION['enquiryMessage']);
				
				unset($_SESSION['submitted']);
				
				header ('Location: contact-thanks.php');
				
				
		}
	
	} // end the if submitted
	
	
?>
