<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["user_name"];
    $email = $_POST["user_email"];
    $tel = $_POST["user_tel"];

    // E-mail de destino
    $to = 'isabella@drisabellaalbergoni.com.br';

    // Assunto do e-mail
    $subject = 'Novo formulário de contato do site';

    // Construir a mensagem
    $message = "Nome: $name\n";
    $message .= "E-mail: $email\n";
    $message .= "WhatsApp: $tel\n";

    // Cabeçalhos do e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";

    // Configurações do servidor SMTP
    ini_set('SMTP', 'smtp.hostinger.com');
    ini_set('smtp_port', 465);
    ini_set('sendmail_from', 'isabella@drisabellaalbergoni.com.br');

    // Enviar e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo 'A mensagem foi enviada!';
    }    echo '<script>alert("Mensagem enviada com sucesso!"); window.location.href = "index.html";</script>';
} else {
    echo '<script>alert("Erro ao enviar mensagem. Por favor, tente novamente mais tarde."); window.location.href = "index.html";</script>';
}
