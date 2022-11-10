<? include("../include/connect.php"); 


//Sending Of Email (For Admin)
if (isset($_POST['send'])) {


$name = mysqli_real_escape_string($db,$_POST["name"]);
$to = mysqli_real_escape_string($db, $_POST["email"]);
$subject = mysqli_real_escape_string($db,$_POST["subject"]);
$header1 = mysqli_real_escape_string($db, $_POST["header1"]);
$header2 = mysqli_real_escape_string($db, $_POST["header2"]);
$messagee = mysqli_real_escape_string($db, $_POST["message"]);


// $subject = 'Free Crytpo & Cash Give Away Season';
$from = $site_email;
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
$message = '


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <title></title>
  <!--[if mso]>
  <style>
    table {border-collapse:collapse;border-spacing:0;border:none;margin:0;}
    div, td {padding:0;}
    div {margin:0 !important;}
  </style>
  <noscript>
    <xml>
      <o:OfficeDocumentSettings>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
  </noscript>
  <![endif]-->
  <style>
    table, td, div, h1, p {
      font-family: Arial, sans-serif;
    }
    @media screen and (max-width: 530px) {
      .unsub {
        display: block;
        padding: 8px;
        margin-top: 14px;
        border-radius: 6px;
        background-color: #555555;
        text-decoration: none !important;
        font-weight: bold;
      }
      .col-lge {
        max-width: 100% !important;
      }
    }
    @media screen and (min-width: 531px) {
      .col-sml {
        max-width: 27% !important;
      }
      .col-lge {
        max-width: 73% !important;
      }
    }
  </style>
</head>

<body style="margin:0;padding:0;word-spacing:normal;background-color:#939297;">
  <div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#939297;">
    <table role="presentation" style="width:100%;border:none;border-spacing:0;">
      <tr>
        <td align="center" style="padding:0;">
          <!--[if mso]>
          <table role="presentation" align="center" style="width:600px;">
          <tr>
          <td>
          <![endif]-->
          <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
            <tr>
              <td style="padding:40px 30px 30px 30px;text-align:center;font-size:24px;font-weight:bold;">
                <a href="http://www.example.com/" style="text-decoration:none;"> <img src="'.$site_logo.'" width="10" alt="Logo" style="width:10%">&nbsp;<span style="color:black;">'.$site_name.'</a>
              </td>

            <tr>
              <td style="padding:30px;background-color:#ffffff;">
                <h2 style="margin-top:0;margin-bottom:16px;font-size:26px;line-height:32px;font-weight:bold;letter-spacing:-0.02em;">'.$header1.'</h2>
                <h4>Dear <b>'.$name.'</b></h4>
                <br>
                <p style="margin:0;"><b style="color:blue">'.$header2.'</b>
                    <br><br>
                   '.$messagee.'</p>
                 
                 '.$site_name.' Team.
</p>
              </td>
            </tr>
            <tr>
              <td style="padding:0;font-size:24px;line-height:28px;font-weight:bold;">
                <a href="#" style="text-decoration:none;"><img src="'.$site_logo1.'" width="600" alt="" style="width:100%;height:auto;display:block;border:none;text-decoration:none;color:#363636;"></a>
              </td>
            </tr>
            <tr>
              <td style="padding:35px 30px 11px 30px;font-size:0;background-color:#ffffff;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35);">
                <!--[if mso]>
                <table role="presentation" width="100%">
                <tr>
                <td style="width:145px;" align="left" valign="top">
                <![endif]-->
                <div class="col-sml" style="display:inline-block;width:100%;max-width:145px;vertical-align:top;text-align:left;font-family:Arial,sans-serif;font-size:14px;color:#363636;">
                  <img src="https://assets.codepen.io/210284/icon.png" width="115" alt="" style="width:80%;max-width:115px;margin-bottom:20px;">
                </div>
                <!--[if mso]>
                </td>
                <td style="width:395px;padding-bottom:20px;" valign="top">
                <![endif]-->
                <div class="col-lge" style="display:inline-block;width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                  <p style="margin-top:0;margin-bottom:12px;">You have received this email owing to your request on '.$site_url3.'. If you did not initiate such action, please Disregard this email.</p>
                  
                  <p style="margin:0;"><a href="'.$site_url.'" style="background: #ff3884; text-decoration: none; padding: 10px 25px; color: #ffffff; border-radius: 4px; display:inline-block; mso-padding-alt:0;text-underline-color:#ff3884"><!--[if mso]><i style="letter-spacing: 25px;mso-font-width:-100%;mso-text-raise:20pt">&nbsp;</i><![endif]--><span style="mso-text-raise:10pt;font-weight:bold;">See Home Page</span><!--[if mso]><i style="letter-spacing: 25px;mso-font-width:-100%">&nbsp;</i><![endif]--></a></p>
                  <br><br>
                  
                  <p>Best of luck!</p>
                  
            <h4>'.$site_name.'. Team</h4>
            </div>
                </div>
                
                
                <!--[if mso]>
                </td>
                </tr>
                </table>
                <![endif]-->
              </td>
            </tr>
            
        <br>
        
        <tr>
              <td style="padding:30px;text-align:center;font-size:12px;background-color:#404040;color:#cccccc;">
                <p style="margin:0 0 8px 0;"><a href="http://www.facebook.com/" style="text-decoration:none;"><img src="https://assets.codepen.io/210284/facebook_1.png" width="40" height="40" alt="f" style="display:inline-block;color:#cccccc;"></a> <a href="http://www.twitter.com/" style="text-decoration:none;"><img src="https://assets.codepen.io/210284/twitter_1.png" width="40" height="40" alt="t" style="display:inline-block;color:#cccccc;"></a></p>
                <p style="margin:0;font-size:14px;line-height:20px;"><b>Legal:</b> This email message is confidential and for use by the addressee only. If the message is received by anyone other than the addressee, please delete it from your computer. '.$site_name.', does not accept responsibility for changes made to this message after it was sent. Whilst all reasonable care has been taken to avoid the transmission of viruses, it is the responsibility of the recipient to ensure that onward transmission, opening or use of this message and any attachments will not adversely affect its systems or data. No responsibility is acepted by '.$site_name.' in this regard and the recipient should carry out such virus and other checks as it considers appropriate. <br><br><a class="unsub" href="#" style="color:#cccccc;text-decoration:underline;"><b>&copy; '.$site_name.' 2022</b></a></p>
              </td>
            </tr>
          </table>
          <!--[if mso]>
          </td>
          </tr>
          </table>
          <![endif]-->
        </td>
      </tr>
    </table>
  </div>
</body>
</html>


';
 
$query = "INSERT INTO messages (name, email, subject, message)
					  VALUES('$name', '$to', '$subject', '$messagee')";
      $show =	mysqli_query($db, $query); 
 
// Sending email
if(mail($to, $subject, $message, $headers)){
  	    
	$msg =  "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Your Email Has Been Successfully Sent To $to;

</div>";

header('refresh:1;url= messages.php');

} else{
    
    	$msg =  "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Unable to send email. Please try again.

</div>";
}

}
