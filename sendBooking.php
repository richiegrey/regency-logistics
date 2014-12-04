<?php	

include_once "swift/lib/swift_required.php";

$subject = 'Website Parcel Booking';
	
$from = array('regencysw1@btconnect.com' =>'Regency Logistics Parcel Bookings');

$to = array(
 'regencysw1@btconnect.com'  => 'Regency Logistics',
 'richardevangrey@gmail.com'  => 'Richard Grey'
);


$your_name = "Regency Logistics";
$your_web_site_name = "Regency Logistics";

$body  = "Parcel Booking Information" . "<br />";
$body .= "==========================="  . "<br />";			
foreach($_POST as $name => $value) {
	 $body .= $name . "	" . $value . "<br />";
}

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