<?php
session_start();
require('header.php');

// if($_SESSION['aviso']){
//     echo $_SESSION['aviso'];
//     $_SESSION['aviso'] = '';
// }
?>

<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">

    <title>Validador de Formulario</title>
</head>
<body>
    <div class="screen">
        <div class="left-size">
            <img src="img/Financial.png" alt="">
        </div>
            
        <div class="right-size">
            <h1>Criar Conta</h1>

            <a href="apagador.php">Apagar Cookie</a>

            <form method="POST" action="recebedor.php" class="validator">
                <label>
                    Nome: <br>
                    <input type="text" name="name" data-rules="required|min=2">
                </label>
                <label>
                    E-mail: <br>
                    <input type="text" name="email" data-rules="required|email">
                </label>
                <label>
                    Senha: <br>
                    <input type="password" name="password" data-rules="min=4">
                </label>
                <label>
                    <input type="submit" value="Cadastrar">
                </label>
            </form>

            <div>
                ja tem uma conta? <a href="">Faça login</a>
            </div>
                
        </div>
    </div>

<script src="JS/script.js"></script>   
</body>
</html>