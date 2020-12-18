<?php

	require_once "../vendor/autoload.php";

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use HPMailer\PHPMailer\Exception;

	$mail = new PHPMailer(true);
    $arquivo =  $_FILES["anexo"];
	try {
	    //Configuração
	    $mail->isSMTP();                                           	// Send using SMTP
	    $mail->Host       = 'smtp.gmail.com';                    	// Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'exemplo@exemplo.com';          // SMTP username
	    $mail->Password   = '';                             // SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	    $mail->Port       = 587;

	    //Recipients
	    $mail->setFrom('exemplo@exemplo.com',"CORREIRO ELETRONICO"); // email que vai ser usado para envio
	    $mail->addAddress('exemplo@exemplo.com'); // email que vai receber dados

        //anexos
        $mail->AddAttachment($arquivo['tmp_name'], "anexo.jpg"  );

	    // Conteudo
	    $mail->isHTML(true);
	    $mail->Subject = 'Formulario de contato';
	    $mail->Body    = "O cliente: ".$_POST['fname']." que possui o e-mail: ".$_POST['email']." residente do endereço: ".$_POST['endereco']." fez a seguinte observacao: ".$_POST['observacao'];
	    $mail->AltBody = "O cliente: ".$_POST['fname']." que possui o e-mail: ".$_POST['email']." residente do endereço: ".$_POST['endereco']." fez a seguinte observacao: ".$_POST['observacao'];

	    $mail->send();
	    echo 'Mensagem foi enviada';

	} catch (Exception $e) {
	    echo "Mensagem não foi enviada. Mailer Error: {$mail->ErrorInfo}";
	}
