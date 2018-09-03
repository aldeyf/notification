<?php

require __DIR__ . '/../lib_ext/autoload.php';


use Notification\Email;

$novoEmail = new Email(2, "mail.marioaugustolibras.com.br",
    "cursos@marioaugustolibras.com.br", "TT@$8.((^iE?", "tls", '587',
    "cursos@marioaugustolibras.com.br", "Equipe Mario Augusto Libras");
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>teste</b>!</p>",
    "cursos@marioaugustolibras.com.br", "Mario Augusto",
    "aldeyfreire2@gmail.com", "Aldey");

var_dump($novoEmail);