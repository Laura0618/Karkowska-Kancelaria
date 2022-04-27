<?php
	if (isset($_POST['fname'])){
		$nombres=htmlentities($_POST['fname']);
		$email_cliente=htmlentities($_POST['email']);
		$telefono=htmlentities($_POST['phone']);
		$subject=utf8_decode($_POST['subject']);
		$mensaje=htmlentities($_POST['message']);

		
	/*SIGUE RECOLECTANDO DATOS PARA FUNCION MAIL*/
	$message = '';
	$message .= '<p>Witam, została zarejestrowana nowa wiadomość z formularza kontaktowego serwisu, zgodnie z poniższym szczegółem:</p> ';
	$message .= '<p>Klient: '.$nombres.'</p> ';
	$message .= '<p>Email: '.$email_cliente.'</p> ';
	$message .= '<p>Telefon: '.$telefono.'</p> ';
	$message .= '<p>Wiadomość: '.$mensaje.'</p> ';
	
	

	
	$header = "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html; charset=UTF-8\r\n";
	$header .= "From: ". $nombres . " <" . $email_cliente . ">\r\n";
	$email='dk@kancelariakarkowska.pl';//Ingresa tu dirección de correo
	
			
	if (mail($email,$subject,$message,$header)){
		echo 'success';
	}	 else {
		echo 'Nie udało się wysłać wiadomości.';
	}
	/*FINALIZA RECOLECTANDO DATOS PARA FUNCION MAIL*/
	
	
	}
?>