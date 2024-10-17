<?php
			//$to="bintang@bayubuanatravel.com";
			$to="bintangmahindra@gmail.com";
			$from="information@bayubuanatravel.com";
			$ceklink="http://197.0.0.17/ConfidentialFare/ViewPromoFare.php?promocd=$promocd";
			$imp3=str_ireplace(" ","",$ceklink);
			$subject = "Information $typepromo ( $subjectemail )";
			$hasilemail[0]="bintang@bayubuanatravel.com";
$message = 
"
Dear All, <br/>
For your information :
<br/><br/>
$description1$description2$description3
<br/><br/>
Please click on the link for more details :
$imp3
<br/><br/>
Regards
<br/><br/>
Contact Center Team
<br/><br/>

<hr/>
<font color='#FF0000'>*This is an auto generated email, please do not reply.</font>
";
			
			$headers .= "Bcc:" . "$hasilemail[0]$hasilemail2[0]$hasilemail3[0];$moreemail" . "\r\n";
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1;' . "\r\n";
			//$headers .= "Bcc:" . "$hasilemail[0]$hasilemail2[0]$hasilemail3[0];$moreemail" . "\r\n";
			$headers .= "From:" . $from;
			
if (mail($to,$subject,$message,$headers)) {
echo("<p>Message successfully sent!</p>");
} else {
echo("<p>Message delivery failed...</p> mail($to, $subject, $body, $header)");
}

?> 