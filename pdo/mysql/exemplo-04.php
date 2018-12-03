<?php

$conn= new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE USUARIO SET LOGIN = :LOGIN, SENHA = :PASSWORD WHERE IDUSUARIO = :ID");

$id=3;
$login = "usuario 3";
$password = "123";


$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados alterados.";
