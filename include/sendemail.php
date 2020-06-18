<?php

require_once('../config/settings.php');
require_once('phpmailer/PHPMailerAutoload.php');

$toemails = array();

$toemails[] = array(
				'email' => $email, // Your Email Address
				'name' => $site_name // Your Name
			);

// Form Processing Messages
$message_success = 'Recebemos sua mensagem com sucesso e entraremos em contato com você o mais breve possível.';

// Add this only if you use reCaptcha with your Contact Forms
$recaptcha_secret = 'your-recaptcha-secret-key'; // Your reCaptcha Secret

$dateatual = date('d-m-Y H:i');

$mail = new PHPMailer();

// If you intend you use SMTP, add your SMTP Code after this Line


if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	if( $_POST['template-contactform-email'] != '' ) {

		$name = isset( $_POST['template-contactform-name'] ) ? $_POST['template-contactform-name'] : '';
		$email = isset( $_POST['template-contactform-email'] ) ? $_POST['template-contactform-email'] : '';
		$phone = isset( $_POST['template-contactform-phone'] ) ? $_POST['template-contactform-phone'] : '';
		$services = isset( $_POST['template-contactform-services'] ) ? $_POST['template-contactform-services'] : '';
		$reference = isset( $_POST['template-contactform-reference'] ) ? $_POST['template-contactform-reference'] : '';
		$subject = isset( $_POST['template-contactform-subject'] ) ? $_POST['template-contactform-subject'] : '';
		$message = isset( $_POST['template-contactform-message'] ) ? $_POST['template-contactform-message'] : '';

		$subject = isset($subject) ? $subject : 'Nova mensagem do formulário de contato - '.$site_name;

		$botcheck = $_POST['template-contactform-botcheck'];

		if( $botcheck == '' ) {

			$mail->SetFrom( $email , $name );
			$mail->AddReplyTo( $email , $name );
			foreach( $toemails as $toemail ) {
				$mail->AddAddress( $toemail['email'] , $toemail['name'] );
			}
			$mail->Subject = $subject;

			$name = isset($name) ? "Nome: $name<br><br>" : '';
			$email = isset($email) ? "E-mail: $email<br><br>" : '';
			$phone = isset($phone) ? "Telefone: $phone<br><br>" : '';
			$services = isset($services) ? "Telefone: $services<br><br>" : '';
			$reference = isset($reference) ? "Telefone: $reference<br><br>" : '';
			$message = isset($message) ? "Mensagem: $message<br><br>Data: $dateatual<br><br>" : '';

			$referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>Este formulário foi enviado de: ' . $_SERVER['HTTP_REFERER'] : '';

			$body = "$name $email $phone $services $reference $message $referrer";

			// Runs only when File Field is present in the Contact Form
			if ( isset( $_FILES['template-contactform-file'] ) && $_FILES['template-contactform-file']['error'] == UPLOAD_ERR_OK ) {
				$mail->IsHTML(true);
				$mail->AddAttachment( $_FILES['template-contactform-file']['tmp_name'], $_FILES['template-contactform-file']['name'] );
			}

			// Runs only when reCaptcha is present in the Contact Form
			if( isset( $_POST['g-recaptcha-response'] ) ) {
				$recaptcha_response = $_POST['g-recaptcha-response'];
				$response = file_get_contents( "https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . "&response=" . $recaptcha_response );

				$g_response = json_decode( $response );

				if ( $g_response->success !== true ) {
					echo '{ "alert": "error", "message": "Captcha não validado! Por favor, tente novamente." }';
					die;
				}
			}

			$mail->MsgHTML( $body );
			$sendEmail = $mail->Send();

			if( $sendEmail == true ):
				echo '{ "alert": "success", "message": "' . $message_success . '" }';
			else:
				echo '{ "alert": "error", "message": "Não foi possível enviar o <strong>e-mail</strong> devido a algum erro inesperado. Tente novamente mais tarde. <br /> <br /> <strong> Razão: </strong><br />' . $mail->ErrorInfo . '" }';
			endif;
		} else {
			echo '{ "alert": "error", "message": "Bot <strong>Detectado</strong>.! Limpe-se Botster!" }';
		}
	} else {
		echo '{ "alert": "error", "message": "<strong>Preencha</strong> todos os campos e tente novamente." }';
	}
} else {
	echo '{ "alert": "error", "message": "Ocorreu um <strong>erro inesperado</strong>. Por favor, tente novamente mais tarde." }';
}

?>