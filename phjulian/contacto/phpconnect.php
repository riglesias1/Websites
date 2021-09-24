<?php
$servername = "localhost";
$username = "id17371637_juliandtph";
$password = "*****";
$database = "id17371637_contacto";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
    $mysqli = new mysqli($servername, $username, $password, $database);
    } catch(PDOException $e) {    
    echo "Conexion fallida: " . $e->getMessage();
    }
?>