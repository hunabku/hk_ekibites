<?php

if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
	$protocol = $_SERVER['SERVER_PROTOCOL'];
	if ( ! in_array( $protocol, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0' ) ) ) {
		$protocol = 'HTTP/1.0';
	}
	
	header('Allow: POST');
	header("$protocol 405 Method Not Allowed");
	header('Content-Type: text/plain');
	exit;
}
// cleaning the post variables
	function clean_var($variable) {$variable = strip_tags(stripslashes(trim(rtrim($variable))));return $variable;}

//
$subject = '[Ekibites/Landing] Contacto de ';

$MAIL_ADRESSCC = $_ENV['MAIL_ADRESSCC']!='' ? ",".$_ENV['MAIL_ADRESSCC'] : '';
$recipients = "'".$_ENV['MAIL_ADRESS'].$MAIL_ADRESSCC."'";

try {
    require APP.'bat/phpmailer/PHPMailerAutoload.php';

    preg_match_all("/([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)/", $recipients, $addresses, PREG_OFFSET_CAPTURE);

    if (!count($addresses[0])) {
        die('MF001');
    }

    // if (preg_match('/^(127\.|192\.168\.)/', $_SERVER['REMOTE_ADDR'])) {
    //     die('MF002');
    // }

    $template = file_get_contents(APP.'bat/rd-contactform.tpl');
	
		if (isset($_POST['name'])&&$_POST['name']!='') {
			$template = str_replace(
				["<!-- #{LabelName} -->", "<!-- #{ValueName} -->"],
				["Nombre:", $_POST['name']],
				$template);
		}else{
			die('MV001');
		}

		if (isset($_POST['email'])&&$_POST['email']!='') {
			$template = str_replace(
				["<!-- #{LabelEmail} -->", "<!-- #{ValueEmail} -->"],
				["Email:", $_POST['email']],
				$template);
		}else{
			die('MV002');
		}

		if (isset($_POST['phone'])&&$_POST['phone']!='') {
			$template = str_replace(
				["<!-- #{LabelPhone} -->", "<!-- #{ValuePhone} -->"],
				["Teléfono:", $_POST['phone']],
				$template);
		}else{
			die('MV003');
		}

		if (isset($_POST['message'])&&$_POST['message']!='') {
			$template = str_replace(
				["<!-- #{LabelMessage} -->", "<!-- #{ValueMessage} -->"],
				["Mensaje:", $_POST['message']],
				$template);
		}else{
			die('MV004');
		}
	
		if (isset($subject)&&$subject!='') {
			$template = str_replace(
				["<!-- #{LabelFromTo} -->", "<!-- #{ValueFromTo} -->"],
				[ "Contacto desde Ekibites/Landing", $_POST['name']],
				$template);
		}else{
			die('MV004');
		}
		
	$subject = "=?utf-8?B?".base64_encode($subject." \"".clean_var($_POST['name'])."\" " )."?=";
	
    $template = str_replace(
        ["<!-- #{Subject} -->", "<!-- #{SiteName} -->"],
        [$subject, $_SERVER['SERVER_NAME'] ],
        $template);

    $mail = new PHPMailer();
    $mail->Port = $_ENV['MAIL_PORT'];
	$mail->isSMTP();
	$mail->From = $_ENV['MAIL_FROM'];
    $mail->FromName = $_ENV['MAIL_FROMNAME'];

    foreach ($addresses[0] as $key => $value) {
        $mail->addAddress($value[0]);
    }

    $mail->CharSet = 'utf-8';
    $mail->Subject = $subject;
    $mail->MsgHTML($template);
    $mail->send();

    die('MF000');
} catch (phpmailerException $e) {
    die('MF254');
} catch (Exception $e) {
    die('MF255');
}

?>