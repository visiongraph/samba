<?php
	function getTemplate(){
		$ruta = 'mail/quote_template.php';
		if (is_file($ruta)) {
			ob_start();
			include $ruta;
			return ob_get_clean();
						
		}
	}		

	if(!empty($_POST)){
		
		print_r($_POST);
		exit(0);
		include('mail/class.phpmailer.php');
		$mail = new PHPMailer();
		$mail->IsMail();
		$mail->Host = '127.0.0.1';
		$mail->Host = 'localhost';
		$mail->SetFrom('info@sambanewyork.com', 'Contact from web page');				
		$mail->AddAddress('robert.ochoa@gmail.com');
		$mail->IsHTML(true);
		$mail->CharSet = 'UTF-8';
		$body = getTemplate();
		
	
		$mail->Subject = 'Get a Quote Form';
				
		$body = sprintf($body,$_POST['nombre'],$_POST['email'],$_POST['mensaje']);
		$mail->Body = $body;
		
		if(!$mail->Send()) {
			var_dump($mail->ErrorInfo);
		}	
	}
	
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="stylesheets/base.css" />
<link rel="stylesheet" href="stylesheets/layout.css" />
<link rel="stylesheet" href="stylesheets/shi_default.min.css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to Samba New York</title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<!--[if IE 9]>
<meta http-equiv="X-UA-Compatible" content="IE=9" />
<![endif]-->

<style type="text/css">
#logo2 img {
	width: auto;
	height: auto
}
img.wp-smiley, img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='rs-plugin-settings-css'  href='css/settings.css' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
.tp-caption a {
	color: #ff7302;
	text-shadow: none;
	-webkit-transition: all 0.2s ease-out;
	-moz-transition: all 0.2s ease-out;
	-o-transition: all 0.2s ease-out;
	-ms-transition: all 0.2s ease-out
}
.tp-caption a:hover {
	color: #ffa902
}
</style>
<link rel='stylesheet' id='contact-form-7-css'  href='css/contact.css' type='text/css' media='all' />
<link rel='stylesheet' id='foodeez-style-css'  href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='foodeez-animation-stylesheet-css'  href='css/skt-animation.css' type='text/css' media='all' />
<link rel='stylesheet' id='foodeez-flexslider-stylesheet-css'  href='css/flexslider.css' type='text/css' media='all' />
<link rel='stylesheet' id='sktawesome-theme-stylesheet-css'  href='css/font-awesome.css' type='text/css' media='all' />
<link rel='stylesheet' id='sktfoodeez-font-stylesheet-css'  href='css/foodeez-font.css' type='text/css' media='all' />
<link rel='stylesheet' id='ihover-theme-stylesheet-css'  href='css/ihover.css' type='text/css' media='all' />
<link rel='stylesheet' id='foodeez-prettyPhoto-style-css'  href='css/prettyPhoto.css' type='text/css' media='all' />
<link rel='stylesheet' id='timepicker-stylesheet-css'  href='css/jquery.timepicker.css?' type='text/css' media='all' />
<link rel='stylesheet' id='datepicker-stylesheet-css'  href='css/bootstrap-datepicker.css' type='text/css' media='all' />
<link rel='stylesheet' id='sktcarousel-theme-stylesheet-css'  href='css/owl.carousel.css' type='text/css' media='all' />
<link rel='stylesheet' id='sktowltheme-theme-stylesheet-css'  href='css/owl.theme.css' type='text/css' media='all' />
<link rel='stylesheet' id='sktowltransitions-theme-stylesheet-css'  href='css/owl.transitions.css' type='text/css' media='all' />
<link rel='stylesheet' id='sktddsmoothmenu-superfish-stylesheet-css'  href='css/superfish.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-responsive-theme-stylesheet-css'  href='css/bootstrap-responsive.css' type='text/css' media='all' />
<link rel='stylesheet' id='googleFontsOpensans-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A400%2C600%2C700%2C800%2C300&#038;subset=latin%2Ccyrillic-ext%2Cgreek-ext%2Cgreek%2Cvietnamese%2Clatin-ext%2Ccyrillic&#038;ver=1.0.6' type='text/css' media='all' />
<link rel='stylesheet' id='googleFontsDancing-css'  href='//fonts.googleapis.com/css?family=Dancing+Script%3A400%2C700&#038;ver=1.0.6' type='text/css' media='all' />
<link rel='stylesheet' id='googleFontsMuli-css'  href='//fonts.googleapis.com/css?family=Muli%3A400%2C400italic%2C300&#038;ver=1.0.6' type='text/css' media='all' />
<link rel='stylesheet' id='sketch-shortcodes-css-css'  href='css/sketch-shortcodes.css' type='text/css' media='all' />
<link rel='stylesheet' id='sketch-tolltip-css-css'  href='css/sketch-tipTip.css' type='text/css' media='all' />
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>
<script type='text/javascript' src='js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script>

<!-- Start analytics code 16/10/2014 3:51:02 PM -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-48146016-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End analytics code 16/10/2014 3:51:09 PM -->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<style type="text/css">
/***************** THEME *****************/

.res-button {
	color: #ffffff;
	background: #36b34a;
}
.res-button:hover {
	background: #ffffff;
	color: #36b34a;
}
#logo img {
	width: auto;
	height: auto
}
#logo2 img {
	width: auto;
	height: auto
}
.bread-title-holder, .teamsocial li a {
	background: #36b34a;
}
.skt-opening-hours-widget .opening-hours-list li:hover {
	border-top-color: #36b34a;
}
.service-icon:before {
	border-bottom-color: #36b34a;
}
h1, h2, h3, h4, h5, h6, .food_map_window .food_right_sec h3, .contact_form_title, #contact_page_temp .contact_top_block h3, blockquote.sketch-quote a, .quoteauthor a, blockquote {
	color: #36b34a;
}
.error404 #searchform input[type="text"]:focus, .search #searchform input[type="text"]:focus, #sidebar #searchform input[type="text"]:focus, #footer #searchform input[type="text"]:focus, #wp-calendar {
	border-color: #36b34a;
}
li.ui-timepicker-selected, .ui-timepicker-list li:hover, .ui-timepicker-list .ui-timepicker-selected:hover, #wp-calendar thead {
	background: #36b34a;
}
.sticky-post {
	color : #36b34a;
	border-color: rgba(127,191,0,.6)
}
#footer, .skt-opening-hours-widget .opening-hours-list li.active {
	border-color: #36b34a;
}
.social li a:hover, .skt-opening-hours-widget .opening-hours-list li:hover, .skt-opening-hours-widget .opening-hours-list li.active, #about_author_box .author_social li a, .sketch_price_table .price_table_inner ul li.table_title {
	background: #36b34a;
}
.social li a:hover:before {
	color: #fff;
}
a#backtop, #respond input[type="submit"], .skt-ctabox div.skt-ctabox-button a:hover, .widget_tag_cloud a:hover, .continue a, #foodeez-paginate .foodeez-current, #foodeez-paginate a:hover, .comments-template .reply a, #commentsbox .reply a, #content .contact-left form input[type="submit"]:hover, .skt-parallax-button:hover, .sktmenu-toggle, #footer .tagcloud a:hover, ._404_artbg img, .full-map-box .hsearch-close, form input[type="submit"] {
	background-color: #36b34a;
}
form.wpcf7-form input[type="submit"], #foodeez_reservation input[type="submit"], .postformat-gallerycontrol-nav a.postformat-galleryactive, .skt-rate-price {
	background-color: #36b34a;
}
.skt-ctabox div.skt-ctabox-button a, #portfolio-division-box .readmore, .teammember, .slider-link a, .ske_tab_v ul.ske_tabs li.active, .ske_tab_h ul.ske_tabs li.active, #content .contact-left form input[type="submit"], .filter a, .skt-parallax-button, #foodeez-paginate a:hover, #foodeez-paginate .foodeez-current, form.wpcf7-form input[type="text"]:focus, form.wpcf7-form input[type="email"]:focus,  form.wpcf7-form input[type="url"]:focus, form.wpcf7-form input[type="tel"]:focus,  form.wpcf7-form input[type="number"]:focus, form.wpcf7-form input[type="range"]:focus,  form.wpcf7-form input[type="date"]:focus, form.wpcf7-form input[type="file"]:focus, form.wpcf7-form textarea:focus,  #foodeez_reservation input[type="text"]:focus,  #foodeez_reservation input[type="email"]:focus, #sidebar select:focus, #footer select:focus,  #foodeez_reservation input[type="number"]:focus, #foodeez_reservation textarea:focus, #respond input:focus, #respond textarea:focus,  form input[type="text"]:focus, form input[type="email"]:focus,  form input[type="url"]:focus, form input[type="tel"]:focus,  form input[type="number"]:focus, form input[type="range"]:focus,  form input[type="date"]:focus, form input[type="file"]:focus, form textarea:focus,  .skt-opening-hours-widget .opening-hours-list {
	border-color: #36b34a;
}
.clients-items li a:hover {
	border-bottom-color: #36b34a;
}
a, .ske-footer-container ul li:hover:before, .ske-footer-container ul li:hover > a, .ske_widget ul ul li:hover:before, .ske_widget ul ul li:hover, .ske_widget ul ul li:hover a, .title a, .skepost-meta a:hover, .post-tags a:hover, .entry-title a:hover, .readmore a:hover, #Site-map .sitemap-rows ul li a:hover, .childpages li a, #Site-map .sitemap-rows .title, .ske_widget a, .ske_widget a:hover, #Site-map .sitemap-rows ul li:hover, #footer .third_wrapper a, .ske-title, #content .contact-left form input[type="submit"], .filter a, span.team_name, .reply a, a.comment-edit-link, .skt_price_table .price_in_table .value, .teammember strong .team_name, #content .skt-service-page .one_third:hover .service-box-text h3, .ad-service:hover .service-box-text h3, .mid-box-mid .mid-box:hover .iconbox-content h4, .error-txt, .skt-ctabox .skt-ctabox-content h2, .reply a:hover, a.comment-edit-link:hover, .skepost-meta i, .topbar_info i, .topbar_info .head-phone-txt {
	color: #333333;
	text-decoration: none;
}
.single #content .title, #content .post-heading, .childpages li, .fullwidth-heading, .comment-meta a:hover, #respond .required, #wp-calendar tbody a, .skt-opening-hours-widget .opening-hours-list li:before, .ske-title.ske-footer-title, h3#comments-title, h3#reply-title, .nav-previous, .nav-next, #comments, .full-map-box .hsearch-close:hover, #foodeez_review .foodeez_review_form_title, .cust-review-title, #reviewer_review_box i, .single-meta-content span, .iconbox-icon i, .customer-reviews .review-menuitem, .post.skt_menu_items .menu-item-price span, .sketch_price_table .price_in_table .value {
	color: #36b34a;
}
.specialities-icon .sketch-font-foodeez-hot-plate-icons, .review-icon .sketch-font-foodeez-hot-dish-icon, .about-icon.sketch-font-foodeez-hot-dish-icon, .about_page_content .about_icon1 .sketch-font-foodeez-house-icon, .about_page_content .about_icon2 .sketch-font-foodeez-martini-wine-glass-icon, .icon_image_cap .sketch-font-foodeez-chief-cap-icon, #about_logos_block .icon_image_fog .sketch-font-foodeez-fork-knife-icon, .iconbox-icon a.skt-featured-icons i {
	color: #FFB73D;
}
.sketch_price_table .active_best_price {
	background-color: #FFB73D;
}
.skepost-meta {
	border-bottom: 1px solid rgba(127,191,0,.2);
	border-top: 1px solid rgba(127,191,0,.2);
}
.single-menu-rating, .single-menu-item-price, .single-menu-item-vnveg, .single-menu-itemtype, #ske-like-dislike {
	border-bottom: 1px solid rgba(127,191,0,.2);
}
.fdz-map-overlay {
	background-image: url('http://sketchthemes.com/samples/foodeez-multi-cuisine-restaurant-demo/wp-content/themes/foodeez/images/map-cover.png');
}
 *::-moz-selection {
background: #36b34a;
color:#fff;
}
::selection {
	background: #36b34a;
	color: #fff;
}
#skenav ul li.current_page_item > a,  #skenav ul li.current-menu-ancestor > a,  #skenav ul li.current-menu-item > a,  #skenav ul li.current-menu-parent > a, #skenav ul li.current_page_ancestor > a {
	background-color: #36b34a;
	color: #fff;
}
#skenav ul ul li a:hover {
	background-color: #36b34a;
	color: #fff;
}
.sticky-post {
	border-color: #36b34a;
}
#searchform input[type="submit"] {
	background: none repeat scroll 0 0 #36b34a;
}
.col-one .box .title, .col-two .box .title, .col-three .box .title, .col-four .box .title {
	color: #36b34a !important;
}
.full-bg-breadimage-fixed {
}
#full-division-box {
	background-image: url("images/home/fondo-videos.jpg");
}
.footer-top-border {
	border: 2px solid #36b34a;
}
.front-page #wrapper {
	background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
}
/******************* HEADER & FOOTER BACKGROUND IMAGE ******************/
.header-top-wrap {
	background: url("http://www.visiongraphstudios.com/samba/images/home/fondodrsamba.jpg") no-repeat scroll top center transparent;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
#footer_strip {
	background: url("http://sketchthemes.com/samples/foodeez-multi-cuisine-restaurant-demo/wp-content/themes/foodeez/images/footer-strip-bg.jpg") no-repeat scroll top center transparent;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	display: block;
}
/************** CONTACT PAGE HEADER & FOOTER BACKGROUND IMAGE **********/
.page-template-template-contact-page-php .header-top-wrap {
	background: none;
}
.page-template-template-contact-page-php #footer_strip {
	background: url("http://sketchthemes.com/samples/foodeez-multi-cuisine-restaurant-demo/wp-content/themes/foodeez/images/footer-strip-bg.jpg") no-repeat scroll top center transparent;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	display: block;
}
/******************** ABOUT PAGE & CNTACT PAGE HEIGHT ******************/
		
		
	/************** ABOUT PAGE HEADER & FOOTER BACKGROUND IMAGE ************/
.page-template-template-about-page-php .header-top-wrap {
	background: url("http://sketchthemes.com/samples/foodeez-multi-cuisine-restaurant-demo/wp-content/themes/foodeez/images/page-title-img.jpg") no-repeat scroll top center transparent;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
.page-template-template-about-page-php #footer_strip {
	background: url("http://sketchthemes.com/samples/foodeez-multi-cuisine-restaurant-demo/wp-content/themes/foodeez/images/footer-strip-bg.jpg") no-repeat scroll top center transparent;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	display: block;
}
blockquote.sketch-quote, blockquote {
	margin-bottom: 27px;
	border-left: 8px solid #36b34a;
	border-radius: 10px;
	border-right: 8px solid;
	border-style: solid;
	border-width: 1px 8px;
}
/************** DISH OF DAY ************/
.ih-item.square.effect6 .info {
	background-color: rgba(127,191,0,.6);
}
/************** NAVIGATION *************/
#skenav li a:hover, #skenav .sfHover {
	background-color: #2d2a6b;
	color: #FFFFFF;
}
#skenav .sfHover a {
	color: #FFFFFF;
}
#skenav ul ul li {
	background: none repeat scroll 0 0 #2d2a6b;
	color: #FFFFFF;
}
#skenav ul ul li {
	background: none repeat scroll 0 0 #2d2a6b;
	color: #FFFFFF;
}
#skenav .ske-menu #menu-secondary-menu li a:hover, #skenav .ske-menu #menu-secondary-menu .current-menu-item a {
	color: #71C1F2;
}
.footer-seperator {
	background-color: rgba(0,0,0,.2);
}
#skenav .ske-menu #menu-secondary-menu li .sub-menu li {
	margin: 0;
}
.skehead-headernav .logo {
	height: 40px;
	width: 156px;
}
.no-rate a {
	color: #FFF !important;
	font-size: 14px;
}
.no-rate a:hover {
	color: #fffc00 !important;
	text-decoration: underline;
}
</style>
<script type="text/javascript">
jQuery('document').ready(function(){
	jQuery('ul#menu-main').sktmobilemenu({'fwidth':'1025'});
});
</script>
<meta name="generator" content="Powered by Slider Revolution 5.0.4.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<!-- Foodeez Custom CSS Section Starts Here -->
<style type="text/css">
	body{background-color:#fff;}
	
</style>
<!-- Foodeez Custom CSS Section Ends Here -->

<script type="text/javascript">
	jQuery('document').ready(function(){
	  jQuery('#sktana_container1').sketchtab({itemno:'1',orient:'v',effect:1});
	});
</script> 
<script type="text/javascript">
	jQuery('document').ready(function(){
	  jQuery('#viewsource30').sketchtoggle({state:'close',effect:1});
	});
</script> 
<script type="text/javascript">
	jQuery('document').ready(function(){
	  jQuery('#ske_alicontainer').sketchtab({itemno:'1',orient:'h',effect:1});
	});
</script> 
<script type="text/javascript">
	jQuery('document').ready(function(){
	  jQuery('#viewsource31').sketchtoggle({state:'close',effect:1});
	});
</script>

<script type='text/javascript'>
$(document).ready(function () {
	  $('.autoUpdate').fadeOut('fast');
    	$('#checkbox1').change(function () {
     	 $('#autoUpdate').fadeToggle();
    });
	$('#check_happy_rhythms').change(function () {
     	 $('#options_happy_rhythms').fadeToggle();
    });
	$('#check_samba_sensation').change(function () {
     	 $('#options_samba_sensation').fadeToggle();
    });
	$('#check_super_samba_sensation').change(function () {
     	 $('#options_super_samba_sensation').fadeToggle();
    });
	$('#check_carnaval_extravaganza').change(function () {
     	 $('#options_carnaval_extravaganza').fadeToggle();
    });
	$('#check_rootsy_rhythms').change(function () {
     	 $('#options_rootsy_rhythms').fadeToggle();
    });
	$('#check_smooth_samba').change(function () {
     	 $('#options_smooth_samba').fadeToggle();
    });
	$('#check_school').change(function () {
     	 $('#options_school').fadeToggle();
    });
		$('#check_samba_team').change(function () {
     	 $('#options_samba_team').fadeToggle();
    });
		$('#check_other_show').change(function () {
     	 $('#options_other_show').fadeToggle();
    });
});
</script>
</head>

<body class="page page-id-29 page-template page-template-template-menu-items-fullwidth page-template-template-menu-items-fullwidth-php" style="background: url(images/home/fondo2.jpg); background-attachment:fixed; background-size:cover;">
<?php include 'topquote.php';?>
    <div class="container post-wrap" style="background:#FFF; padding:20px 20px 0px 20px;" >
      <div class="row-fluid fade_in_hide element_fade_in">
        <div id="container" class="span12">
          <div id="content">
            <div class="post clearfix post-146 skt_menu_items type-skt_menu_items status-publish has-post-thumbnail hentry menu_item_category-dessert" id="post-146" >
              <div class="featured-image-shadow-box blog-menu-items span12" style="text-align:justify; font-size:14px;">
                <div class="skepost-meta clearfix centrado">
                  <div class="menu-meta-left">
                    <div><br>
                      <h1 class="post-title"><i class="fa fa-file-text"></i> Get a Quote</h1>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="span12" >
                  <div class="page-content fullwidth-temp">
				  
                    <form method="post" action="quote.php" data-jkit="[form:validateonly=true]" id="formulario">
                  
					<div class="container post-wrap">
                      <div class="row-fluid">
                      <div id="content" class="span12">
                        <div class="post" id="post-164">
                          <div class="skepost"> 
                            
                            <div class="page-container clearfix">
                              <div id="sktana_container1">
                                <ul class="ske_tabs clearfix">
                                  <li><a href="javascript:void(0);">Step 1</a></li>
                                  <li><a href="javascript:void(0);">Step 2</a></li>
                                  <li><a href="javascript:void(0);">Step 3</a></li>
                                </ul>
                                <div class="ske_tab_container">
                                  <div class="ske_tab_content">
                                    <h1>Who are you and what are you planning? </h1>
                                    <div class="span4" style="margin:0px; border:#666 0px solid;">
                                      <label for="name_label" style="font-size:14px;">Your Name/Title:</label>
                                      <br />
                                      <input class="" maxlength="50" style="border-radius: 4px;" name="name" id="name" data-jkit="[validate:required=true;min=3;max=50;error=Por favor escriba su nombre]">
                                      <br />
                                    </div>
                                    <div class="span4" style="margin:0px; border:#666 0px solid;">
                                      <label for="company_name_label" style="font-size:14px;">Company Name (if applicable):</label>
                                      <br />
                                      <input class="" maxlength="50" style="border-radius: 4px;" name="company_name" id="company_name" data-jkit="[validate:required=false;">
                                      <br />
                                    </div>
                                    <div class="span4" style="margin:0px; border:#666 0px solid;">
                                      <label for="company_address_label" style="font-size:14px;">Your/Company Address:</label>
                                      <br />
                                      <input class="" maxlength="100" style="border-radius: 4px;" name="company_address" id="company_address" data-jkit="[validate:required=false;">
                                      <br />
                                    </div>
                                    <div class="span4" style="margin:0px; border:#666 0px solid;">
                                      <label for="email_label" style="font-size:14px;">Your Email Address:</label>
                                      <br />
                                      <input class="" maxlength="50" style="border-radius: 4px;" name="email" id="email" data-jkit="[validate:required=true;strength=50;error=Please write a valid e-mail]">
                                      <br />
                                    </div>
                                    <div class="span4" style="margin:0px; border:#666 0px solid;">
                                      <label for="phone_label" style="font-size:14px;">Your Phone Number:</label>
                                      <br />
                                      <input class="" maxlength="20" style="border-radius: 4px;" name="phone" id="phone" data-jkit="[validate:required=false;min=5;max=15;error=Please write your phone number]">
                                      <br />
                                    </div>
                                    <div class="span4" style="margin:0px; border:#666 0px solid;">
                                      <label for="date_event_label" style="font-size:14px;">Date of Event (mm/dd/aaaa):</label>
                                      <br />
                                      <input class="" maxlength="15" style="border-radius: 4px;" name="date_event" id="date_event" data-jkit="[validate:required=true;min=10;max=15;error=Please write the date of event]">
                                      <br />
                                    </div>
                                    <div class="span4" style="margin:0px; border:#666 0px solid;">
                                      <label for="type_event_label" style="font-size:14px;">Type of Event:</label>
                                      <br />
                                      <input class="" maxlength="25" style="border-radius: 4px;" name="type_event" id="type_event" data-jkit="[validate:required=true;min=5;max=50;error=Please write the type of event]">
                                      <br />
                                    </div>
                                    <div class="span4" style="margin:0px; border:#666 0px solid;">
                                      <label for="name_venue_label" style="font-size:14px;">Name of Venue:</label>
                                      <br />
                                      <input class="" maxlength="50" style="border-radius: 4px;" name="name_venue" id="name_venue" data-jkit="[validate:required=true;min=3;max=50;error=Please write de name of venue]">
                                      <br />
                                    </div>
                                    <div class="span4" style="margin:0px; border:#666 0px solid;">
                                      <label for="address_venue_label" style="font-size:14px;">Address of Venue:</label>
                                      <br />
                                      <input class="" maxlength="100" style="border-radius: 4px;" name="address_venue" id="address_venue" data-jkit="[validate:required=true;min=3;max=100;error=Please write the address of venue]">
                                      <br />
                                    </div>
                                    <div class="span4" style="margin:0px; border:#666 0px solid;">
                                      <label for="number_guests_label" style="font-size:14px;">Number of Guests:</label>
                                      <br />
                                      <input class="" maxlength="3" style="border-radius: 4px;" name="number_guests" id="number_guests" data-jkit="[validate:required=true;min=1;max=3;error=Please write the number of guests]">
                                      <br />
                                    </div>
                                  </div>
                                  <div class="ske_tab_content">
                                    <h1>Select a show </h1>

                                    <div class="row-fluid">
                                      <div class="span6 diviform" >
                                        <input id="check_happy_rhythms" name="check_happy_rhythms" type="checkbox" value="yes">
                                        <label for="happy_rhythms_label" style="font-size:14px;">Happy Rhythms</label>
                                        <div id="options_happy_rhythms" class="autoUpdate"> 
                                          <select name="happy_percussionists" size="1" style="width:70px; height:30px;">
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="more">More</option>
                                          </select>
                                          Percussionists<br>
                                          <select name="happy_capoeira" size="1" style="width:70px; height:30px;">
                                            <option value="0">0</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="more">More</option>
                                          </select>
                                          Capoeira Performers </div>
                                      </div>
                                      <div class="span6 diviform" >
                                        <input id="check_samba_sensation" name="check_samba_sensation" type="checkbox" value="yes">
                                        <label for="samba_sensation_label" style="font-size:14px;">Samba Sensation</label>
                                        <div id="options_samba_sensation" class="autoUpdate"> 
                                          <input name="samba_sensation" type="radio" value="2 Dancers and 3 Percussionists">
                                          2 Dancers and 3 Percussionists<br>
                                          <input name="samba_sensation" type="radio" value="2 Dancers with original recorded percussion track">
                                          2 Dancers with original recorded percussion track<br>
                                          (no live Percussionists) <br>
                                          <br>
                                          <select name="samba_sensation_capoeira" size="1" style="width:70px; height:30px;">
                                            <option value="0">0</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="more">More</option>
                                          </select>
                                          Capoeira Performers </div>
                                      </div>
                                    </div>
                                    <div class="row-fluid">
                                      <div class="span6 diviform" >
                                        <input id="check_super_samba_sensation" name="check_super_samba_sensation" type="checkbox" value="yes">
                                        <label for="super_samba_sensation_label" style="font-size:14px;">Super Samba Sensation</label>
                                        <div id="options_super_samba_sensation" class="autoUpdate"> 
                                          
                                          <select name="super_percussionists" size="1" style="width:70px; height:30px;">  <option value="" s>0</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="more">More</option>
                                          </select>
                                          Percussionists<br>
                                         
                                          <select name="super_dancers" size="1" style="width:70px; height:30px;">
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="more">More</option>
                                          </select>
                                          Dancers<br>

                                          <select name="super_capoeira" size="1" style="width:70px; height:30px;">
                                            <option value="0">0</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="more">More</option>
                                          </select>
                                          Capoeira Performers<br>
                                        </div>
                                      </div>
                                      <div class="span6 diviform" >
                                        <input id="check_carnaval_extravaganza" name="check_carnaval_extravaganza" type="checkbox" value="yes">
                                        <label for="carnaval_extravaganza_label" style="font-size:14px;"> Carnaval Extravaganza</label>
                                        <div id="options_carnaval_extravaganza" class="autoUpdate"> 
                                          1 Cavaquinho Player <br />
                                          1 Carnaval Singer <br />
                                          <select name="carnaval_percussionists" size="1" style="width:70px; height:30px;">
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="more">More</option>
                                          </select>
                                          Percussionists<br />
										  
                                          <select name="carnaval_dancers" size="1" style="width:70px; height:30px;">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="more">More</option>
                                          </select>
                                          Dancer(s)<br />
										  
                                          <select name="carnaval_capoeira" size="1" style="width:70px; height:30px;">
                                            <option value="0">0</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="more">More</option>
                                          </select>
                                          Capoeira Performers<br />
                                        </div>
                                      </div>
                                    </div>
									
                                    <div class="row-fluid">
                                      <div class="span6 diviform" >
                                        <input id="check_rootsy_rhythms" name="check_rootsy_rhythms" type="checkbox" value="yes">
                                        <label for="rootsy_rhythms" style="font-size:14px;">Rootsy Rhythms</label>
                                        <div id="options_rootsy_rhythms" class="autoUpdate"> 
                                          3 Pagode Percussionists <br />
                                          1 Pagode Singer/Cavaquinho Player <br />
                                          <select name="rootsy_additional_percussionists" size="1" style="width:70px; height:30px;">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="6">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="more">More</option>
                                          </select>
                                          Additional Pagode Percussionists<br>
                                          <select name="rootsy_dancers" size="1" style="width:70px; height:30px;">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="6">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="more">More</option>
                                          </select>
                                          Dancers<br>
                                        </div>
                                      </div>
									  
                                      <div class="span6 diviform" >
                                        <input id="check_smooth_samba" name="check_smooth_samba" type="checkbox" value="">
                                        <label for="smooth_samba_label" style="font-size:14px;"> Smooth Samba</label>
                                        <div id="options_smooth_samba" class="autoUpdate"> 
                                          1 Singer/Keyboardist <br />
                                          1 Electric Bassist <br />
                                          1 Percussionist<br />
                                        
                                          <select name="smooth_dancers" size="1" style="width:70px; height:30px;">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="more">More</option>
                                          </select>
                                          Dancer(s)<br />
                                        </div>
                                      </div>
                                      </div>
									  
                                      <div class="row-fluid">
                                        <div class="span6 diviform" >
                                          <input id="check_school" name="check_school" type="checkbox" value="yes">
                                          <label for="school_label" style="font-size:14px;">School of Samba (educational)</label>
                                          <div id="options_school" class="autoUpdate"> 
                                            1 Ethnomusicologist/Percussionist <br />
                                            2 Accompanying Percussionists <br />
                                            1 Dance Instructor<br />
                                            <select name="school_additional_dancers" size="1" style="width:70px; height:30px;">
                                              <option value="0">0</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                              <option value="6">6</option>
                                              <option value="7">7</option>
                                              <option value="8">8</option>
                                              <option value="more">More</option>
                                            </select>
                                            Additional Dancers<br>
                                            <select name="school_additional_percussionists" size="1" style="width:70px; height:30px;">
                                              <option value="0">0</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                              <option value="6">6</option>
                                              <option value="7">7</option>
                                              <option value="8">8</option>
                                              <option value="more">More</option>
                                            </select>
                                            Additional Percussionists<br>
                                            <select name="school_capoeira" size="1" style="width:70px; height:30px;">
                                              <option value="0">0</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                              <option value="6">6</option>
                                              <option value="7">7</option>
                                              <option value="8">8</option>
                                              <option value="more">More</option>
                                            </select>
                                            Capoeira Performers<br>
                                          </div>
                                        </div>
                                        <div class="span6 diviform" >
                                          <input id="check_samba_team" name="check_samba_team" type="checkbox" value="yes">
                                          <label for="samba_team_label" style="font-size:14px;"> Samba Team Building (corporate)</label>
                                          <div id="options_samba_team" class="autoUpdate"> 
                                            1 Ethnomusicologist/Percussionist <br />
                                            2 Accompanying Percussionists <br />
                                            1 Dance Instructor<br />
                                            <select name="team_additional_dancers" size="1" style="width:70px; height:30px;">
                                              <option value="0">0</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                              <option value="6">6</option>
                                              <option value="7">7</option>
                                              <option value="8">8</option>
                                              <option value="more">More</option>
                                            </select>
                                            Additional Dancers<br>
                                            <select name="team_additional_percussionists" size="1" style="width:70px; height:30px;">
                                              <option value="0">0</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                              <option value="6">6</option>
                                              <option value="7">7</option>
                                              <option value="8">8</option>
                                              <option value="more">More</option>
                                            </select>
                                            Additional Percussionists<br>
                                            <select name="team_capoeira" size="1" style="width:70px; height:30px;">
                                              <option value="0">0</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                              <option value="6">6</option>
                                              <option value="7">7</option>
                                              <option value="8">8</option>
                                              <option value="more">More</option>
                                            </select>
                                            Capoeira Performers<br>
                                          </div>
                                        </div>
                                        </div>
                                        <div class="row-fluid">
                                          <div class="span6 diviform" >
                                            <input id="check_other_show" name="check_other_show" type="checkbox" value="yes">
                                            <label for="other_show_label" style="font-size:14px;">Other</label>
                                            <div id="options_other_show" class="autoUpdate"> 
                                              <input name="other_show" type="radio" value="Gafieira">
                                              Samba Couple Dance (Gafieira) <br />
                                              <input name="other_show" type="radio" value="Capoeira">
                                              Capoeira Show <br />
                                              <input name="other_show" type="radio" value="Other">
                                              Other <br />
                                              please specify<br>
                                              <input size="50" maxlength="100" style="border-radius: 4px;" name="other_show_specify" id="other_show" data-jkit="[validate:required=false;">
                                            </div>
                                          </div>
                                          <div class="span6" > </div>
                                        </div>
                                      </div>
                                     
                                      <div class="ske_tab_content">
                                      
                                       <div class="row-fluid">
                                          <div class="span6 diviform" >
                                            
                                             <h1 >Want more?</h1>


                                           
                                              <input id="check_add_photographer" name="check_add_photographer" type="checkbox" value="yes">
                                              add photographer <br /><br>
                                            
											  <input id="check_add_videographer" name="check_add_videographer" type="checkbox" value="yes">
                                              add videographer <br /><br>

     									      Additional Requests:<br>
                                          <textarea name="additional_requests" cols="" rows="3" style="height: 50px;"></textarea><br>
											<br>
											<button type="submit" value="Submit">Submit</button>
											  <button type="reset" value="Reset">Reset</button><br>
											<br>                                        
                                            
                                         
                                          </div>
                                        </div>
                                     
                                      
                                      
                                      
                                      </div>
                                      <br>
                                      <br>
                                    </div>
                                  </div>
                                </div>
                                <!-- skepost --> 
                              </div>
                              <!-- post --> 
                              
                            </div>
                            <!-- content --> 
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- skepost --></div>
              </div>
              <span class="skepost clearfix"></span> </div>
            <!-- skepost-meta --> 
            
            <!-- skepost --></div>
          
          <!-- content --> 
        </div>
        <!-- container --> 
      </div>
      <!-- row-fluid --> 
    </div>
    <!-- container --> 
    
  </div>
</div>
<div class="clearfix"></div>
<?php include 'footer.php';?>

<!-- #wrapper --> 
<a href="JavaScript:void(0);" title="Back To Top" id="backtop"></a> 
<script type="text/javascript">jQuery(document).ready(function(){jQuery("#logo a, a#logo, #skenav a").each(function(){jQuery(this).attr("href",jQuery(this).attr("href")+"?no_redirect=true");});});</script><script type="text/javascript">

//FULL WIDTH SLIDER HEIGHT	

jQuery(document).ready(function() {

'use strict';

	jQuery(".flexslider ul.slides,.flexslider ol.flex-control-nav").css({'visibility':'hidden'});

	jQuery(window).resize(function(){

		var fullwidth = jQuery( window ).width();

		jQuery('.flexslider').width(fullwidth).height('auto');

	});

});


jQuery(window).load(function() {

	'use strict';

	jQuery(".flexslider .slides .flex-caption").each(function(){

		var flxSldrHt =	jQuery(".flexslider .slides > li img").height() - 8;

		var flxSlideHt  = jQuery(this).outerHeight(true);

		var flxSlideTop = (flxSldrHt/2) - (flxSlideHt/2);

		jQuery(this).css({'top':flxSlideTop});
	});

});

jQuery(window).resize(function(){

	'use strict';

	jQuery(".flexslider .slides .flex-caption").each(function(){

		var flxSldrHt =	jQuery(".flexslider .slides > li img").height() - 8;

		var flxSlideHt  = jQuery(this).outerHeight(true);

		var flxSlideTop = (flxSldrHt/2) - (flxSlideHt/2);

		jQuery(this).css({'top':flxSlideTop});
	});

});



jQuery(window).load(function(){ 

'use strict';

	jQuery(".flexslider ul.slides,.flexslider ol.flex-control-nav,.flexslider ul.flex-direction-nav").css({'visibility':'visible'});

	var fullwidth = jQuery( window ).width();

	jQuery('.flexslider').width(fullwidth).height('auto');

});



jQuery(document).ready(function(){

'use strict';



	jQuery('.flexslider').flexslider({

		namespace: "flex-",             //{NEW} String: Prefix string attached to the class of every element generated by the plugin

		selector: ".slides > li",       //{NEW} Selector: Must match a simple pattern. '{container} > {slide}' -- Ignore pattern at your own peril

		animation: "fade",              //String: Select your animation type, "fade" or "slide"

		easing: "swing",                //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!

		direction: "horizontal",        //String: Select the sliding direction, "horizontal" or "vertical"

		reverse: false,                 //{NEW} Boolean: Reverse the animation direction

		animationLoop: true,            //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end

		smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode

		startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)

		slideshow: true,                //Boolean: Animate slider automatically

		slideshowSpeed: 7000,          //Integer: Set the speed of the slideshow cycling, in milliseconds

		animationSpeed: 600,            //Integer: Set the speed of animations, in milliseconds

		initDelay: 0,                   //{NEW} Integer: Set an initialization delay, in milliseconds

		randomize: false,               //Boolean: Randomize slide order

		thumbCaptions: false,           //Boolean: Whether or not to put captions on thumbnails when using the "thumbnails" controlNav.



		// Usability features

		pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.

		pauseOnHover: false,          //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering

		pauseInvisible: true,   		//{NEW} Boolean: Pause the slideshow when tab is invisible, resume when visible. Provides better UX, lower CPU usage.

		useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available

		touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices

		video: false,                   //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches



		// Primary Controls

		controlNav: false ,              //Boolean: Create navigation for paging control of each slide? Note: Leave true for manualControls usage

		directionNav: false,            //Boolean: Create navigation for previous/next navigation? (true/false)

		prevText: "Previous",           //String: Set the text for the "previous" directionNav item

		nextText: "Next",               //String: Set the text for the "next" directionNav item



		// Secondary Navigation

		keyboard: true,                 //Boolean: Allow slider navigating via keyboard left/right keys

		multipleKeyboard: false,        //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.

		mousewheel: false,              //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel

		pausePlay: false,               //Boolean: Create pause/play dynamic element

		pauseText: "Pause",             //String: Set the text for the "pause" pausePlay item

		playText: "Play",               //String: Set the text for the "play" pausePlay item



		// Special properties

		controlsContainer: "",          //{UPDATED} jQuery Object/Selector: Declare which container the navigation elements should be appended too. Default container is the FlexSlider element. Example use would be $(".flexslider-container"). Property is ignored if given element is not found.

		manualControls: "",             //{UPDATED} jQuery Object/Selector: Declare custom control navigation. Examples would be $(".flex-control-nav li") or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.

		sync: "",                       //{NEW} Selector: Mirror the actions performed on this slider with another slider. Use with care.

		asNavFor: "",                   //{NEW} Selector: Internal property exposed for turning the slider into a thumbnail navigation for another slider



		// Carousel Options

		itemWidth: 0,                   //{NEW} Integer: Box-model width of individual carousel items, including horizontal borders and padding.

		itemMargin: 0,                  //{NEW} Integer: Margin between carousel items.

		minItems: 1,                    //{NEW} Integer: Minimum number of carousel items that should be visible. Items will resize fluidly when below this.

		maxItems: 0,                    //{NEW} Integer: Maxmimum number of carousel items that should be visible. Items will resize fluidly when above this limit.

		move: 0,                        //{NEW} Integer: Number of carousel items that should move on animation. If 0, slider will move all visible items.

		allowOneSlide: true,           //{NEW} Boolean: Whether or not to allow a slider comprised of a single slide



		// Callback API

		start: function(slider){ slider.removeClass('loading');

		jQuery('.flex-caption').stop().animate({left:0},700);}, //Callback: function(slider) - Fires when the slider loads the first slide

		before: function() { jQuery('.flex-caption').stop().animate({left:100,opacity:0},700); },

		// animate caption

		after: function() { jQuery('.flex-caption').stop().animate({left:0,opacity:1},700); },

		end: function(){},    //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)

		added: function(){},  //{NEW} Callback: function(slider) - Fires after a slide is added

		removed: function(){} //{NEW} Callback: function(slider) - Fires after a slide is removed

	});

});

</script> <script type="text/javascript">
	// <![CDATA[ 
	var isProcessing = false; 
	function alter_ul_post_values(obj,post_id,ul_type)
	{
		if (isProcessing)    
		return;           

		isProcessing = true;   
		var strt  = jQuery(obj).find("span.ldc_counts").html();
		var count = strt.replace(/^\s+|\s+$/g, '');
		
		jQuery(obj).find("span.ldc_counts").html("..");
		jQuery.ajax({
		type: "POST",
		url: 'https://sketchthemes.com/samples/foodeez-multi-cuisine-restaurant-demo/wp-content/themes/foodeez/SketchBoard/functions/modules/sketch-ldc/ajax_counter.php',
		data: "post_id="+post_id+"&up_type="+ul_type,
		success: function(msg){
			if(count ==  msg.replace(/^\s+|\s+$/g, '')){
				jQuery(obj).find(".alert-msg").empty().html("Already voted!").stop(true,true).fadeIn(400).delay(1000).fadeOut(400);
			}
			else{
				jQuery(obj).find(".alert-msg").empty().html("Thanks for your vote!").stop(true,true).fadeIn(400).delay(1000).fadeOut(400);
			}
			jQuery(obj).find("span.ldc_counts").html(msg);
			isProcessing = false;
			}
		});
	}
	// ]]> 
	</script> 
<script type='text/javascript' src='js/jquery.flexslider-min.js'></script> 
<script type='text/javascript' src='js/comment-reply.min.js'></script> 
<script type='text/javascript' src='js/jquery.form.min.js'></script> 
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"tlp\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
</script> 
<script type='text/javascript' src='js/scripts.js'></script> 
<script type='text/javascript' src='js/hoverIntent.min.js'></script> 
<script type='text/javascript' src='js/superfish.js'></script> 
<script type='text/javascript' src='js/cbpAnimatedHeader.js'></script> 
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='js/waypoints.min.js'></script> 
<script type='text/javascript' src='js/owl.carousel.js'></script> 
<script type='text/javascript' src='js/jquery.timepicker.min.js'></script> 
<script type='text/javascript' src='js/bootstrap-datepicker.js'></script> 
<script type='text/javascript' src='js/jquery.validate.min.js'></script> 
<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script> 
<script type='text/javascript' src='js/sketch-shortcodes.js'></script> 
<script type='text/javascript' src='js/jquery.tipTip.js'></script>
</body>
</html>
