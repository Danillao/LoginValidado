<?php

$conn = new PDO("mysql:dbname=test;host=localhost", "root", "");

$sql = $conn->query('SELECT * FROM usuario');

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($dados);
echo '</pre>';











?>