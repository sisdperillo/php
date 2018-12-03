<?php

$conn= new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM USUARIO WHERE IDUSUARIO = :ID");

$id=3;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados excluidos.";
