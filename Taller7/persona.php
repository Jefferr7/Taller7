<?php
class Persona {
    private $conn;
    private $table_name = "Persona";

    public $id;
    public $nombres;
    public $apellidos;
    public $idTipoDocumento;
    public $documento;
    public $lugarNacimiento;
    public $fechaNacimiento;
    public $email;
    public $telefono;
    public $usuario;
    public $password;
    public $lugarResidencia;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET
            nombres=:nombres, apellidos=:apellidos, idTipoDocumento=:idTipoDocumento, documento=:documento,
            lugarNacimiento=:lugarNacimiento, fechaNacimiento=:fechaNacimiento, email=:email, telefono=:telefono,
            usuario=:usuario, password=:password, lugarResidencia=:lugarResidencia";

        $stmt = $this->conn->prepare($query);

        $this->nombres = htmlspecialchars(strip_tags($this->nombres));
        $this->apellidos = htmlspecialchars(strip_tags($this->apellidos));
        $this->idTipoDocumento = htmlspecialchars(strip_tags($this->idTipoDocumento));
        $this->documento = htmlspecialchars(strip_tags($this->documento));
        $this->lugarNacimiento = htmlspecialchars(strip_tags($this->lugarNacimiento));
        $this->fechaNacimiento = htmlspecialchars(strip_tags($this->fechaNacimiento));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->telefono = htmlspecialchars(strip_tags($this->telefono));
        $this->usuario = htmlspecialchars(strip_tags($this->usuario));
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
        $this->lugarResidencia = htmlspecialchars(strip_tags($this->lugarResidencia));

        $stmt->bindParam(":nombres", $this->nombres);
        $stmt->bindParam(":apellidos", $this->apellidos);
        $stmt->bindParam(":idTipoDocumento", $this->idTipoDocumento);
        $stmt->bindParam(":documento", $this->documento);
        $stmt->bindParam(":lugarNacimiento", $this->lugarNacimiento);
        $stmt->bindParam(":fechaNacimiento", $this->fechaNacimiento);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":telefono", $this->telefono);
        $stmt->bindParam(":usuario", $this->usuario);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":lugarResidencia", $this->lugarResidencia);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
