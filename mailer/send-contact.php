<?php
require_once '../lib/class.phpmailer.php'; 
require_once '../includes/config.php';

$site_owner_email = EMAIL;
$nomail 		  = NOEMAIL;
$site_name 		  = SITENAME;
$bcc_email        = BCCMAIL;
$bcc_name         = BCCNAME;
$mail 			  = new PHPMailer();

//echo $bcc_email;

//Creating Body of the Email. From Template.
$body = file_get_contents('../email-templates/contact.html');
foreach($_POST as $key=>$value){
	$key = strtolower($key);
	$$key = $value;
	$body = preg_replace("/{".$key."}/",$value,$body);
}

$body = eregi_replace("\{([a-zA-Z0-9_]*)\}",'-',$body); //Replace any single words between {} with "-". Not removing Style elements.
if(!$email){$email = $nomail;}
if(!$name){$name = 'NO-NAME';}

  $mail->AddReplyTo($email, $name);
  $mail->AddAddress($site_owner_email, $site_name);
  $mail->AddBCC($bcc_email, $bcc_name);
  $mail->SetFrom($email, $name);
  $mail->Subject = 'Contact form submission';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';  //optional - MsgHTML will create an alternate automatically
  $mail->MsgHTML($body);
  	if(!$mail->Send()) {
		$msg = "Mailer Error: " . $mail->ErrorInfo;
	} else {
  		//$msg = "Message sent!";
		//header('location:contact-srilanka-vacation-tours.php?request=sent');
		echo "ok";
  		exit;
	}
?>