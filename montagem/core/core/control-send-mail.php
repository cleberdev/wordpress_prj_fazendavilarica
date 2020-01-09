<?php
require 'classes/phpmailer/PHPMailerAutoload.php';
require 'classes/phpmailer/class.phpmailer.php';

$mailer = new PHPMailer;

//$mailer->SMTPDebug = 1; // Enable verbose debug output
$mailer->isSMTP(); // Set mailer to use SMTP
$mailer->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

if($_GET['acao'] == 'enviar'){
	
		$nome     = $_POST['nome'];
		$email    = $_POST['email'];
		$telefone = $_POST['telefone'];
		// $mensagem  = $_POST['mensagem'];

		$mailer->Host 	   = 'mail.colegiomultivisaope.com.br';
		$mailer->SMTPAuth  = true;
		$mailer->isSMTP();
		$mailer->isHTML(true);
		$mailer->Port 	   = 35587;
		$mailer->CharSet   = 'UTF-8';
		$mailer->Username  = 'mailer@colegiomultivisaope.com.br';
		$mailer->Password  = 'frontdez123!@#';

		// $mailer->AddAddress('email', "nome"); // e-mail do destinatario
        $mailer->AddAddress('colegiomultivisao@yahoo.com.br', "Colégio Multivisão"); // e-mail do destinatario 2

		$mailer->From = 'mailer@colegiomultivisaope.com.br'; // ou $email
		$mailer->FromName = $nome; // Nome da remetente
		$mailer->Sender = 'mailer@colegiomultivisaope.com.br';
		$mailer->Subject = "Contato enviado do site - colegiomultivisaope.com.br"; // assunto da mensagem
		
		//$mailer->SMTPDebug  = 1;
		$corpo = "
				<h4>Segue as informações enviadas pelo formulário do site:</h4><br />
				<p><b>Nome:</b> $nome </p>
				<p><b>E-mail:</b> $email</p>
				<p><b>Telefone:</b> $telefone</p>
				
				
				<br>
				<p></p>
		    ";
		
		$mailer->MsgHTML(getCabecalho() . $corpo . getRodape()); // corpo da mensagem
		$email->Body     = getCabecalho() . $corpo . getRodape();
		$mailer->AltBody = 'Olá, você recebeu um contato pelo XXXX';
		//$mailer->AddAttachment($arquivo['tmp_name'], $arquivo['name']  ); // anexar arquivo

		if(!$mailer->Send()) {
				echo 'Contato não pode ser enviado.';
				echo "Mailer Error: " . $mailer->ErrorInfo;
		} else {
			// echo 'Contato enviado com sucesso!';
			echo "<script>
				alert('Contato enviado com sucesso. Obrigado!');
				window.location.href = 'http://colegiomultivisaope.com.br/'; 
			</script>";
		}
		
		$mailer->ClearAllRecipients();
}

function getCabecalho(){
	$cabecalho = "
	<html>
		<head></head>
	<body>
		<table width='685' border='0'>
			<tr>
			<td height='467' valign='top' bgcolor='#c6c6ca'>
				<table width='685' border='0'>
				<tr>
					<td width='37' height='134'>&nbsp;</td>
					<td width='711'><h1><img src='http://colegiomultivisaope.com.br/img/logotipo.png' width='180'></h1></td>
					<td width='37'>&nbsp;</td>
				</tr>
				<tr>
					<td height='203'>&nbsp;</td>    
					<td valign='top' bgcolor='#FFFFFF' style='border:1px solid #dcdbdb; font-size:14px; line-height:1.3em;padding:27px;font-family:arial;'>
					";
					return $cabecalho;
} 

function getRodape(){
	$rodape = "
							</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td height='27' colspan='3'>&nbsp;</td>
							</tr>
						</table>
					</td>
				</tr>
				</table>
			</body>
		</html>
		";
	return $rodape;
}

?>