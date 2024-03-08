<?php

$Name = $_GET['name'];
$Phone = $_GET['phoneno'];
$Email = $_GET['emailid'];
$Message = $_GET['message'];

$email_body = '<html><body>';
$email_body .= '<b>Knee Replacement Enquiry</b><br><br>';
$email_body .= '<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="36%"><strong>Name:</strong></td>
                <td width="64%">'. $Name .'</td>
              </tr>
              <tr>
                <td width="36%"><strong>Phone No.:</strong></td>
                <td width="64%">'. $Phone .'</td>
              </tr>
              <tr>
                <td width="36%"><strong>Email:</strong></td>
                <td width="64%">'. $Email .'</td>
              </tr>
              <tr>
                <td width="36%"><strong>Message :</strong></td>
                <td width="64%">'. $Message .'</td>
              </tr>
            </table>';
$email_body .= '</body></html>';

// $email_body = "Dear Sir/Madam, \n\n".
// "You have received new prospect details :\n".
// "Group Name: $GroupName \n".
// "Name: $Name \n".
// "Phone: $Phone \n".
// "Email ID: $Email \n".
// "Date: $date \n".
// "Pick Up Address: $pickadd \n".
// "Destination Address: $destadd \n".
// "Trip Itinerary: $trip \n\n\n\n\n".
// "www.buscharterexpress.com"
// ;

$to = "mah@parihar.net";
$subject = "Health Inquiry Online Request";
$from = "info@mangalanandhospital.com";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:" . $from . "\r\n" .
"Reply-To:" . $Email . "\r\n" .
"BCC: adamjones2cool@gmail.com";
// if ($honeyPot == '') {
  mail($to,$subject,$email_body,$headers);
// }

$email_body = "Dear $Name, \n\n".

"Thank you for submitting a request. We will get back to you soon. \n\n\n\n\n".

//"<br /><br /><br /><h2 style='color:#234682;'>Visual Frames®</h2>\n".
//"<p>Contact Us</p>\n".
//"<a href='tel:1-855-734-5700'>1-855-734-5700</a><br />\n".
//"<a href='mailto:info@visualframes.com'>info@visualframes.com</a><br />\n".
//"<a href='www.visualframes.in'>www.visualframes.in</a><br />\n".
//"<p>Follow us on Social Media</p>.<br />".
//"<a href='https://www.facebook.com/bus.charter.33' target='_blank'><img src='http://www.buscharterexpress.com/images/email/facebook.webp' /></a><a href='https://twitter.com/ExpressCharter'><img src='http://www.buscharterexpress.com/images/email/twitter.webp' /></a><a href='https://www.youtube.com/channel/UCIb7tHEC2SWLeZ4BEtQyokQ'><img src='http://www.buscharterexpress.com/images/email/youtube.webp' /></a><a href='https://www.linkedin.com/authwall?trk=gf&trkInfo=AQFsgFft7bWtWQAAAWJoc98YWS0LxUp_hZfIMo_pYNL4FSKhwsEER_jYgOMkziQ2S8tHAfY0r3pQ3OH3mvHZFi9xmMjLSmPA_mB4lu0MG2I7mjfiDFWvPFtDRGqOr5eBGMbmJoI=&originalReferer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fbus-charter-express-6b244915b%2F'><img src='http://www.buscharterexpress.com/images/email/linkedin.webp' /></a>";
//"Email on this :- reservations@buscharterexpress.com \n\n\n\n\n".

//"Thank You, \n".
//"www.buscharterexpress.com\n";

$to = $Email;
$subject = "Thanks for contacting www.mangalanandhospital.com";
$from = "info@appliancesrepairdmv.com";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: " . $from;

// if ($honeyPot == '') {
  mail($to,$subject,$email_body,$headers);
// }

echo "Mail Sent";
?>