<?php

require __DIR__ . '/../lib_ext/autoload.php';


use Notification\Email;

$novoEmail = new Email(2, "mail.domain.com",
    "email@example.com", "pass", "tls", '587',
    "youremail@domain.com", "Team of Aldey Freire");
$novoEmail->sendMail("Assunto de Teste", "<p>This is a <b>test email</b>!</p>",
    "reply@domain.com.br", "User Name",
    "fromemail@domain.com", "User Name");

var_dump($novoEmail);