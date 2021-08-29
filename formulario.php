<?php
$destino = "kevin14ds@gmail.com";
$nombre = $_POST["nombre"];
$empresa = $_POST["empresa"];
$email = $_POST["email"];
$consulta = $_POST["consulta"];

$contenido = "Nombre: " . $nombre . "\nEmpresa: " . $empresa .  "\nEmail: " . $email . "\nConsulta: " . $consulta ;

mail($destino, "Contacto", $contenido);
header("Location:index.html");

?>