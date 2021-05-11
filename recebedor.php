<?php
session_start();

$nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$senha = filter_input(INPUT_POST, 'password');


if ($nome && $senha && $email) {
    $expira = time() + (86400 * 30);
    setcookie('nome', $nome, $expira);

    echo "NOME: ".$nome."<br>";
    echo "E-MAIL: ".$email."<br>";
    echo "SENHA: ".$senha."<br>";
} else {
    $_SESSION['aviso'] = 'preencha os itens corretamente';

    header("Location: index.php");  
    exit;
}











?>