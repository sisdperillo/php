<?php

$conn= new PDO("sqlsrv:Database=dbphp7;server=NOTE-DIEGO\SQLEXPRESS;ConnectionPooling=0", "sa", "123456");

$stmt = $conn->prepare("SELECT * FROM USUARIO");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>".$key."<strong>: ".$value."<br />";
    }

    echo "===============================================================<br />";
}
