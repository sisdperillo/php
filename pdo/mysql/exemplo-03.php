<?php

$conn= new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO USUARIO (LOGIN, SENHA) VALUES (:LOGIN, :PASSWORD)");

$login = "JOSE";
$password = "123456";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Dados inseridos.";
