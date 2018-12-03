<?php

$conn= new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM USUARIO WHERE IDUSUARIO = ?");

$id=2;

$stmt->execute(array($id));

$conn->rollBack();
//$conn->commit();

echo "Dados excluidos.";
