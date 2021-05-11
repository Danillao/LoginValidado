<?php
include 'config.php';

date_default_timezone_set('America/Sao_Paulo');

try {
    $pdo = new PDO("mysql:dbname=$banco;host=$host;charset=utf8", "$usuario", "$senha");
} catch(Exception $e) {
    echo "ERRO de BD".$e;
}