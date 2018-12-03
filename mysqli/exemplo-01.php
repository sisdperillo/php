<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");


if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("insert into usuario (Login, Senha) values (?, ?)");

$usuario = "usuario 1";
$senha = "123";

//Espera o tipo de parametro
$stmt->bind_param("ss", $usuario, $senha);

$stmt->execute();

$usuario = "usuario 2";
$senha = "123";

$stmt->execute();
