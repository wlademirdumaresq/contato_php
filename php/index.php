<?php

	require_once "../vendor/autoload.php";

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use HPMailer\PHPMailer\Exception;

	$mail = new PHPMailer(true);
    $arquivo =  $_FILES['anexo'];
	try {
	    //Configuração
	    $mail->isSMTP();
	    $mail->Host       = 'smtp.gmail.com';
	    $mail->SMTPAuth   = true;
	    $mail->Username   = 'exemplo@gmail.com';
	    $mail->Password   = '';
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	    $mail->Port       = 587;

	    //Recipients
	    $mail->setFrom('exemplo@gmail.com',"CORREIRO ELETRONICO"); // email que vai ser usado para envio
	    $mail->addAddress('exemplo@gmail.com'); // email que vai receber dados

        //anexos
        $mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']  );


        // Conteudo
	    $mail->isHTML(true);
	    $mail->Subject = 'Formulario de contato';
	    $mail->Body    = "O cliente: ".$_POST['fname']." que possui o e-mail: ".$_POST['email']." residente do endereço: ".$_POST['endereco']." fez a seguinte observacao: ".$_POST['observacao'];
	    $mail->AltBody = "O cliente: ".$_POST['fname']." que possui o e-mail: ".$_POST['email']." residente do endereço: ".$_POST['endereco']." fez a seguinte observacao: ".$_POST['observacao'];

        if($mail->Send()) {

            echo  "Email enviado com sucesso";


        } else {

            echo  "Email falhou";

        };

	} catch (Exception $e) {
	    echo "Mensagem não foi enviada. Mailer Error: {$mail->ErrorInfo}";
	}
