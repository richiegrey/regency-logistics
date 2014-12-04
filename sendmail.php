<?php	

include_once "swift/lib/swift_required.php";

$subject = 'Website Enquiry';
	
$from = array('regencysw1@btconnect.com' =>'Regency Logistics');

$to = array(
 'regencysw1@btconnect.com'  => 'Regency Logistics',
 'richardevangrey@gmail.com'  => 'Richard Grey'
);


$your_name = "Regency Logistics";
$your_web_site_name = "Regency Logistics";

$msgName = trim($_POST['name']);
$msgCompany = trim($_POST['company']);
$msgEmail = trim($_POST['email']);
$msgTelphone = trim($_POST['telephone']);
$msgMessage = trim($_POST['message']);

$body  = "Website Enquiry" . "<br />";
$body .= "==============="  . "<br />";	
$body .= $msgName  . "<br />";	
$body .= $msgCompany  . "<br />";	
$body .= $msgEmail  . "<br />";	
$body .= $msgTelphone  . "<br />";
$body .= $msgMessage  . "<br />";			

$transport = Swift_SmtpTransport::newInstance('smtp.mandrillapp.com', 587);
$transport->setUsername('richard.grey@efectus.co.uk');
$transport->setPassword('zFCcJFIqlOVKtlWCVgKxxQ');
$swift = Swift_Mailer::newInstance($transport);

$message = new Swift_Message($subject);
$message->setFrom($from);
$message->setBody($body, 'text/html');
$message->setTo($to);

if ($recipients = $swift->send($message, $failures))
{
	header( 'Location: http://www.regencylogistics.co.uk/emailsent.html' );
} else {
 echo "There was an error:\n";
 print_r($failures);
 header( 'Location: http://www.regencylogistics.co.uk/emailerror.html' );
}


?>