<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");


if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM USUARIO");

$data = array();

while ($row = $result->fetch_object()) {
    array_push($data, $row);
}

echo json_encode($data);
