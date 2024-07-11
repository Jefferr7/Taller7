
<?php
require_once 'controller/PersonaController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new PersonaController();
    $controller->create();
} else {
    header("Location: view/registro.php");
}
?>
