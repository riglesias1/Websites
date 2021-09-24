<?php


require('phpconnect.php');


extract($_POST);


$sql = "INSERT into Contacto (Nombre,Email,Fecha,Mensaje) VALUES('" . $Nombre . "','" . $Email . "','" . date('Y-m-d') . "','" . $Mensaje . "')";


$success = $mysqli->query($sql);


if (!$success) {
    die("No se pudo enviar, intente nuevamente: ".$mysqli->error);
}


header("Gracias por contactarte!");
header("Location: http://phjulian.com.ar/#contact");

$conn->close();
exit;

?>