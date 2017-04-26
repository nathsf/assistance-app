<?php
	$emailto = 'nathalysalgado.f@gmail.com';
	$toname = 'Capacitación Destino, Asistencia alumnos';
	$dnifrom = $_POST["dni"];
	$fromname = 'RIMA Sigo s Cristo';
	$subject = 'Capacitación Destino, Asistencia alumnos';
	$messagebody = 'Hola mi DNI es: '. $dnifrom .' , he asistido a capacitación Destino.';
	$headers = 
		'Return-Path: ' . $emailfrom . "\r\n" . 
		'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
		'X-Priority: 3' . "\r\n" . 
		'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
		'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
		'MIME-Version: 1.0' . "\r\n" . 
		'Content-Transfer-Encoding: 8bit' . "\r\n" . 
		'Content-Type: text/plain; charset=UTF-8' . "\r\n";
	$params = '-f ' . $emailto;
	$test = mail($emailto, $subject, $messagebody, $headers, $params);
	// $test should be TRUE if the mail function is called correctly
	header("Location: welcome.html");
?>