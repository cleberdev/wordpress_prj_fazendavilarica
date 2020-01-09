<?php
//Variáveis
 
$nome     = $_POST['nome'];
$telefone = $_POST['telefone'];
$data_envio = date('d/m/Y');
// $hora_envio = date('H:i:s');

$corpo = "
<h4>Segue as informações enviadas pelo formulário do site:</h4><br />
<p><b>Nome:</b> $nome </p>
<p><b>E-mail:</b> $telefone</p>
<br>
<small><b></b> $data_envio</small>
<p></p>
";

function getCabecalho(){
	$cabecalho = "
	<html>
		<head></head>
	<body>
		<table width='685' border='0'>
			<tr>
			<td height='467' valign='top' bgcolor='#E40569'>
				<table width='685' border='0'>
				<tr>
					<td width='37' height='134'>&nbsp;</td>
          <td width='711'>
          
          <h1><img src='http://hconta.com.br/assets/img/logotipo.png' width='180'></h1> 
          <h2 style='color: #fff; line-height: 0;'>E-mail disparado de <a href='http://hconta.com.br/' title='Acesse Hconta' style='color: #fff;'>http://hconta.com.br/</a> </h2> </td>
          
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


// emails para quem será enviado o formulário
$emailenviar = "contato@hconta.com.br";   
$destino = $emailenviar;
$assunto = "Contato pelo Site - http://hconta.com.br";
$arquivo = getCabecalho(). $corpo . getRodape();

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: Hconta <contato@hconta.com.br>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo "<script>
  alert('E-MAIL ENVIADO COM SUCESSO!.');
  window.location.href = 'http://hconta.com.br/'; 
</script>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "<script>
  alert('ERRO AO ENVIAR E-MAIL!!.');
  window.location.href = 'http://hconta.com.br/'; 
</script>";
  }
?>