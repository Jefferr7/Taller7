<?php
require_once '../db.php';
require_once '../model/Persona.php';
require_once '../model/TipoDocumento.php';
require_once '../model/Ciudad.php';

class PersonaController {
    private $db;
    private $conn;

    public function __construct() {
        $this->db = new Database();
        $this->conn = $this->db->getConnection();
    }

    ppublic function create() {
        $persona = new Persona($this->conn);
    
        $persona->nombres = $_POST['nombres'];
        $persona->apellidos = $_POST['apellidos'];
        $persona->idTipoDocumento = $_POST['idTipoDocumento'];
        $persona->documento = $_POST['documento'];
        $persona->lugarNacimiento = $_POST['lugarNacimiento'];
        $persona->fechaNacimiento = $_POST['fechaNacimiento'];
        $persona->email = $_POST['email'];
        $persona->telefono = $_POST['telefono'];
        $persona->usuario = $_POST['usuario'];
        $persona->password = $_POST['password'];
        $persona->lugarResidencia = $_POST['lugarResidencia'];
    
        if ($persona->create()) {
            header("Location: ../view/registro.php?success=1");
        } else {
            header("Location: ../view/registro.php?error=1");
        }
    }

    public function readTipoDocumento() {
        $tipoDocumento = new TipoDocumento($this->conn);
        return $tipoDocumento->read();
    }

    public function readCiudad() {
        $ciudad = new Ciudad($this->conn);
        return $ciudad->read();
    }
}
?>
