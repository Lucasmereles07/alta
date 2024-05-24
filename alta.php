<?php
require_once 'Persona.php';
$nombre = $_POST['nombre'] ?? "defecto";
$apellido = $_POST['apellido'] ?? "defecto";
$email = $_POST['email'] ?? "defecto";
$fechaNac = $_POST['fechaNac'] ?? "defecto";
$numero = $_POST['numero'] ?? "defecto";
$genero = $_POST['genero'] ?? "defecto";
$pais = $_POST['pais'] ?? "defecto";
$persona = new Persona($nombre, $apellido, $email, $fechaNac, $numero, $genero, $pais);
$persona->crear();
; ?>
<pre>
<?php

var_dump($persona); ?>
</pre>
