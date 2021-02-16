<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mailer/src/Exception.php';
require 'mailer/src/PHPMailer.php';
require 'mailer/src/SMTP.php';

// Carregar o autoloader do composer
require 'vendor/autoload.php';
// Instância da classe
$mail = new PHPMailer(true);
try {

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'emailteste@gmail.com';
$mail->Password = 'envunmxyjhwrblpf';
$mail->Port = 587;

    // Define o remetente
    $mail->setFrom('ptkdev@outlook.com', 'Nome do Remetente');
    // Define o destinatário
    $mail->addAddress('emailteste@gmail.com', 'Destinatário');
      // Conteúdo da mensagem
    $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
    $mail->Subject = 'Assunto';
    $mail->Body    = 'Este é o corpo da mensagem <b>Olá em negrito!</b>';
    $mail->AltBody = 'Este é o cortpo da mensagem para clientes de e-mail que não reconhecem HTML';
    // Enviar
    $mail->send();
    echo 'A mensagem foi enviada!';
}
catch (Exception $e)
{
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}