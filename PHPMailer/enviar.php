<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Variáveis do formulário

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$assunto = $_POST['assunto'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
$arquivo = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:Verdane;
  font-size:12px;
  color: #666666;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  </style>
    <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
        <td>
  <tr>
                 <td width='500'>Nome: $nome</td>
                </tr>
                <tr>
                  <td width='320'>Mensagem: $mensagem</td>
                </tr>
            </td>
          </tr>
          <tr>
            <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
          </tr>
        </table>
    </html>
  ";

$mail = new PHPMailer; // Instância da Classe

// Configurações do servidor

$mail->isSMTP(); //Devine o uso de SMTP no envio
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; // Criptografia do envio SSL também é aceito
$mail->Username = ''; // Autenticação do Email
$mail->Password = '';

// Informações específicadas pelo Google

$mail->Port = 587;
$mail->Host = 'smtp.gmail.com';

$mail->setFrom('', ''); //Define o Remetente

$mail->addAddress($email, $nome); // Define o destinatário

$mail->isHTML(true); // Seta o formato do e-mail para aceitar conteúdo HTML

$mail->Subject = $assunto; // Assunto do Email
$mail->Body = $arquivo;

if (!$mail->send()) {
  echo 'Mensagem não foi enviada: ' . $mail->ErrorInfo;
} else {
  echo 'Mensagem enviada com sucesso.';
  echo "<meta http-equiv='refresh' content='5;URL=index.html'>";
}
