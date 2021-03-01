<?php

header("Access-Control-Allow-Origin: *");

//
// MAIL TO ADMINISTRATION
//
$name = "Undefined name";
$email = "Undefined email";
$company = "Undefined company";
$message_text = "Undefined message";
$ticket_id = "Undefined ticketID";

if(isset($_POST['name'])){
    $name = $_POST['name'];
}
if(isset($_POST['email'])){
  $email = $_POST['email'];
}
if(isset($_POST['company'])){
  $company = $_POST['company'];
}
if(isset($_POST['message'])){
  $message_text = trim($_POST['message']);
  $message_text = nl2br($message_text);
}
if(isset($_POST['ticketId'])){
  $ticket_id = $_POST['ticketId'];
}

$message = "<p>Użytkownik wysłał wiadomość za pomocą formularza na Twojej stronie.</p>
<table><tbody>
  <tr>
    <td width=\"120px\">Imię i Nazwisko:</td>
    <td><strong>$name</strong></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><strong>$email</strong></td>
  </tr>
  <tr>
    <td>Nazwa firmy:</td>
    <td><strong>$company</strong></td>
  </tr>
</tbody></table><br>
Wiadomość: <br><blockquote>$message_text</blockquote><br>
<p>Pozdrawiamy,<br>
zespół <em>AtomicCode.pl</em></p>";

$to_email = 'kontakt@atomiccode.pl';
$subject = "$ticket_id - Wiadomość ze strony AtomicCode.pl";
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=UTF-8';
$headers[] = 'From: Formularz AtomicCode <noreply@atomiccode.pl>';
$headers[] = "Reply-To: $email";

mail($to_email, $subject, $message, implode("\r\n", $headers));

//
// MAIL TO USER //
//
$user_message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta content="width=device-width" name="viewport"/>
<!--[if !mso]><!-->
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<!--<![endif]-->
<title></title>
<!--[if !mso]><!-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"/>
<!--<![endif]-->
<style type="text/css">
		body {
			margin: 0;
			padding: 0;
		}
		table,
		td,
		tr {
			vertical-align: top;
			border-collapse: collapse;
		}
		* {
			line-height: inherit;
		}
		a[x-apple-data-detectors=true] {
			color: inherit !important;
			text-decoration: none !important;
		}
	</style>
<style id="media-query" type="text/css">
		@media (max-width: 620px) {
			.block-grid,
			.col {
				min-width: 320px !important;
				max-width: 100% !important;
				display: block !important;
			}
			.block-grid {
				width: 100% !important;
			}
			.col {
				width: 100% !important;
			}
			.col>div {
				margin: 0 auto;
			}
			img.fullwidth,
			img.fullwidthOnMobile {
				max-width: 100% !important;
			}
			.no-stack .col {
				min-width: 0 !important;
				display: table-cell !important;
			}
			.no-stack.two-up .col {
				width: 50% !important;
			}
			.no-stack .col.num4 {
				width: 33% !important;
			}
			.no-stack .col.num8 {
				width: 66% !important;
			}
			.no-stack .col.num4 {
				width: 33% !important;
			}
			.no-stack .col.num3 {
				width: 25% !important;
			}
			.no-stack .col.num6 {
				width: 50% !important;
			}
			.no-stack .col.num9 {
				width: 75% !important;
			}
			.video-block {
				max-width: none !important;
			}
			.mobile_hide {
				min-height: 0px;
				max-height: 0px;
				max-width: 0px;
				display: none;
				overflow: hidden;
				font-size: 0px;
			}
			.desktop_hide {
				display: block !important;
				max-height: none !important;
			}
		}
	</style>
</head>
<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #E9E9E9;">
<!--[if IE]><div class="ie-browser"><![endif]-->
<table bgcolor="#E9E9E9" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; Margin: 0 auto; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #E9E9E9; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:#E9E9E9"><![endif]-->
<div style="background-color:#E9E9E9;">
<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #E9E9E9;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:#E9E9E9;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#E9E9E9;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:#E9E9E9"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:#E9E9E9;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<div align="center" class="img-container center fixedwidth" style="padding-right: 20px;padding-left: 20px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 20px;padding-left: 20px;" align="center"><![endif]-->
<div style="font-size:1px;line-height:20px"> </div><a href="https://www.atomiccode.pl" style="outline:none" tabindex="-1" target="_blank"> <img align="center" alt="Image" border="0" class="center fixedwidth" src="https://atomiccode.pl/img/mail-images/Logo-white_1.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; width: 100%; max-width: 120px; display: block;" title="Image" width="120" height="120"/></a>
<div style="font-size:1px;line-height:20px"> </div>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<div align="center" class="img-container center autowidth fullwidth" style="padding-right: 0px;padding-left: 0px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><img align="center" alt="Image" border="0" class="center autowidth fullwidth" src="https://atomiccode.pl/img/mail-images/mail-image_3.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 600px; display: block;" title="Image" width="600"/>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:#E9E9E9;">
<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffaa00;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffaa00;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#E9E9E9;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:#ffaa00"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:#ffaa00;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 20px; padding-left: 20px; padding-top: 20px; padding-bottom: 10px; font-family: Tahoma, Verdana, sans-serif"><![endif]-->
<div style="color:#FFFFFF;font-family:\'Roboto\', Tahoma, Verdana, Segoe, sans-serif;line-height:1.5;padding-top:20px;padding-right:20px;padding-bottom:10px;padding-left:20px;">
<div style="line-height: 1.5; font-size: 12px; font-family: \'Roboto\', Tahoma, Verdana, Segoe, sans-serif; color: #FFFFFF; mso-line-height-alt: 18px;">
<p style="font-size: 24px; line-height: 1.5; text-align: center; word-break: break-word; font-family: inherit; mso-line-height-alt: 36px; margin: 0;"><span style="font-size: 24px;"><span style="font-size: 24px;">Otrzymaliśmy Twoją wiadomość!</span></span></p>
<p style="font-size: 24px; line-height: 1.5; text-align: center; word-break: break-word; font-family: inherit; mso-line-height-alt: 36px; margin: 0;"><span style="font-size: 24px;"><span style="font-size: 18px;">Twój specjalny numer identyfikacyjny znajduje się poniżej</span> </span></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<div align="center" class="button-container" style="padding-top:10px;padding-right:20px;padding-bottom:25px;padding-left:20px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"><tr><td style="padding-top: 10px; padding-right: 20px; padding-bottom: 25px; padding-left: 20px" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="" style="height:45pt; width:144pt; v-text-anchor:middle;" arcsize="7%" stroke="false" fillcolor="#FFFFFF"><w:anchorlock/><v:textbox inset="0,0,0,0"><center style="color:#27294A; font-family:Tahoma, Verdana, sans-serif; font-size:20px"><![endif]-->
<div style="text-decoration:none;display:inline-block;color:#27294A;background-color:#FFFFFF;border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;width:auto; width:auto;border-top:1px solid #FFFFFF;border-right:1px solid #FFFFFF;border-bottom:1px solid #FFFFFF;border-left:1px solid #FFFFFF;padding-top:10px;padding-bottom:10px;font-family:\'Roboto\', Tahoma, Verdana, Segoe, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:25px;padding-right:25px;font-size:20px;display:inline-block;"><span style="font-size: 16px; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;"><strong><span data-mce-style="font-size: 20px; line-height: 40px;" style="font-size: 20px; line-height: 40px;">';
$user_message .= "#$ticket_id";
$user_message .= '</span></strong></span></span></div>
<!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->
</div>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:#E9E9E9;">
<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #FFFFFF;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:#FFFFFF;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#E9E9E9;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:#FFFFFF"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:#FFFFFF;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<div align="center" class="img-container center autowidth" style="padding-right: 25px;padding-left: 25px;">
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 25px;padding-left: 25px;" align="center"><![endif]-->
<div style="font-size:1px;line-height:25px"> </div><img align="center" alt="Image" border="0" class="center autowidth" src="https://atomiccode.pl/img/mail-images/team-help.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; border: 0; height: auto; width: 100%; max-width: 268px; display: block;" title="Image" width="268"/>
<div style="font-size:1px;line-height:25px"> </div>
<!--[if mso]></td></tr></table><![endif]-->
</div>
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 10px; padding-left: 10px; padding-top: 20px; padding-bottom: 25px; font-family: Tahoma, Verdana, sans-serif"><![endif]-->
<div style="color:#27294A;font-family:\'Roboto\', Tahoma, Verdana, Segoe, sans-serif;line-height:1.5;padding-top:20px;padding-right:10px;padding-bottom:25px;padding-left:10px;">
<div style="line-height: 1.5; font-family: \'Roboto\', Tahoma, Verdana, Segoe, sans-serif; font-size: 12px; color: #27294A; mso-line-height-alt: 18px;">
<p style="font-size: 24px; line-height: 1.5; text-align: center; word-break: break-word; font-family: inherit; mso-line-height-alt: 36px; margin: 0;"><span style="font-size: 24px; color: #ffaa00;">Nasz zespół już zajmuje się Twoją sprawą.<br/><span style="font-size: 16px;">W razie pytań prosimy przy kontakcie podać przypisany nr identyfikacyjny</span></span></p>
</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:#E9E9E9;">
<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #ffaa00;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffaa00;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#E9E9E9;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:#ffaa00"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:#ffaa00;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 15px; padding-left: 15px; padding-top:15px; padding-bottom:15px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:15px; padding-bottom:15px; padding-right: 15px; padding-left: 15px;">
<!--<![endif]-->
<table cellpadding="0" cellspacing="0" class="social_icons" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" valign="top">
<table align="center" cellpadding="0" cellspacing="0" class="social_table" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-tspace: 0; mso-table-rspace: 0; mso-table-bspace: 0; mso-table-lspace: 0;" valign="top">
<tbody>
<tr align="center" style="vertical-align: top; display: inline-block; text-align: center;" valign="top">
<td style="word-break: break-word; vertical-align: top; padding-bottom: 0px; padding-right: 10px; padding-left: 10px;" valign="top"><a href="https://www.facebook.com/AtomicCodePL/" target="_blank"><img alt="Facebook" height="32" src="https://atomiccode.pl/img/mail-images/facebook.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; display: block;" title="Facebook" width="32"/></a></td>
<td style="word-break: break-word; vertical-align: top; padding-bottom: 0px; padding-right: 10px; padding-left: 10px;" valign="top"><a href="https://www.linkedin.com/company/atomiccode/" target="_blank"><img alt="LinkedIn" height="32" src="https://atomiccode.pl/img/mail-images/linkedin2x.png" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: none; display: block;" title="LinkedIn" width="32"/></a></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:transparent;">
<div class="block-grid" style="Margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: #E9E9E9;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:#E9E9E9;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:#E9E9E9"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:#E9E9E9;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
<div style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 15px; padding-right: 15px; padding-bottom: 15px; padding-left: 15px;" valign="top">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
</td>
</tr>
</tbody>
</table>
<!--[if (IE)]></div><![endif]-->
</body>
</html>';

$user_email = $email;
$user_subject = "$ticket_id - Wiadomość ze strony AtomicCode.pl";
$user_headers[] = 'MIME-Version: 1.0';
$user_headers[] = 'Content-type: text/html; charset=UTF-8';
$user_headers[] = 'From: Formularz AtomicCode <noreply@atomiccode.pl>';

mail($user_email, $user_subject, $user_message, implode("\r\n", $user_headers));

?>