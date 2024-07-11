<?php
require_once '../controller/PersonaController.php';

$controller = new PersonaController();
$tipoDocumentos = $controller->readTipoDocumento();
$ciudades = $controller->readCiudad();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/validations.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Registro
