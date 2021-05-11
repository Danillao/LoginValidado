<?php
require '../config.php';

$name = filter_input(INPUT_POST, "name");
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

if ($name && $email) {

    $res = $pdo->prepare("INSERT INTO usuario(nome, email), VALUES(:nome, :email)");
    $res->bindValue(":nome", $name);
    $res->bindValue(":email", $email);

    if ($res->execute()) {
        echo "<script language='javascript'>alert('Registro concluido')</script>";
    } else {
        echo "<script language='javascript'>alert('Falha no registro')</script>";
    }
} else {
    header("Location: ../adicionar.php");
    exit;
}