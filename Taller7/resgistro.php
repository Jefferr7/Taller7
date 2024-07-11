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
        <h1>Registro de Usuario</h1>
        <?php
        if (isset($_GET['success'])) {
            echo "<p class='success'>Registro exitoso!</p>";
        }
        if (isset($_GET['error'])) {
            echo "<p class='error'>Hubo un problema al registrar el usuario.</p>";
        }
        ?>
        <form id="registroForm" action="../index.php" method="POST">
            <label for="nombres">Nombres</label>
            <input type="text" id="nombres" name="nombres" required>

            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" required>

            <label for="idTipoDocumento">Tipo de Documento</label>
            <select id="idTipoDocumento" name="idTipoDocumento" required>
                <?php
                while ($row = $tipoDocumentos->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
                }
                ?>
            </select>

            <label for="documento">Documento</label>
            <input type="text" id="documento" name="documento" required>

            <label for="lugarNacimiento">Lugar de Nacimiento</label>
            <input type="text" id="lugarNacimiento" name="lugarNacimiento">

            <label for="fechaNacimiento">Fecha de Nacimiento</label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>

            <label for="edad">Edad</label>
            <input type="text" id="edad" name="edad" readonly>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono">

            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmarContrasena">Confirmar Contraseña</label>
            <input type="password" id="confirmarContrasena" name="confirmarContrasena" required>

            <label for="lugarResidencia">Lugar de Residencia</label>
            <select id="lugarResidencia" name="lugarResidencia" required>
                <?php
                while ($row = $ciudades->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
                }
                ?>
            </select>

            <label for="enfermedades">¿Ha sufrido de enfermedades?</label>
            <select id="enfermedades" name="enfermedades">
                <option value="no">No</option>
                <option value="si">Sí</option>
            </select>

            <div id="detalleEnfermedades" style="display: none;">
                <label for="tipoEnfermedad">Enfermedades Contagiosas</label>
                <input type="text" id="tipoEnfermedad" name="tipoEnfermedad">
            </div>

            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>
