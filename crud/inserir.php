<?php
require_once '../config/conexao.php';

$nome = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'password');

//inserindo dados

$res = $pdo->prepare("INSERT INTO usuarios(nome, email, senha) VALUES(:nome, :email, :senha)");

$res->bindValue(":nome", $nome);
$res->bindValue(":email", $email);
$res->bindValue(":senha", $senha);

if($res->execute()) {

    echo "<script language='javascript'>alert('Registro concluido')</script>";
    echo "<script language='javascript'>window.location='listar.php'</script>";
} else {
    echo "<script language='javascript'>alert('Falha ao Registrar')</script>";
    echo "<script language='javascript'>window.location='../index.php'</script>";
}   

?>
