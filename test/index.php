<?php

require __DIR__ . '/../lib_ext/autoload.php';


use Notification\Email;

$novoEmail = new Email(2, "mail.domain.com",
    "email@example.com", "", "tls", '587',
    "youremail@domain.com", "Equipe Mario Augusto Libras");
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>teste</b>!</p>",
    "reply@domain.com.br", "User Name",
    "fromemail@domain.com", "User Name");

var_dump($novoEmail);