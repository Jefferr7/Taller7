<?php
class TipoDocumento {
    private $conn;
    private $table_name = "TipoDocumento";

    public $id;
    public $nombre;
    public $descripcion;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function read() {
        $query = "SELECT id, nombre, descripcion FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>
