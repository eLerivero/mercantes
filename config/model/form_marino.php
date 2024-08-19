<?php
class FormMarino {
    private $conn;

    public function __construct() {
        $this->conn = new PDO('pgsql:host=localhost;dbname=pruebas', 'postgres', 'admin');
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function guardarDatos($email, $nombre, $tipo_cedula, $sexo, $cedula, $pais_code, $telefono, $titulo, $empresa, $pais) {
        $sql = "INSERT INTO marinos (email, nombre, tipo_cedula, sexo, cedula, pais_code, telefono, titulo, empresa, pais) 
                VALUES (:email, :nombre, :tipo_cedula, :sexo, :cedula, :pais_code, :telefono, :titulo, :empresa, :pais)";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':tipo_cedula', $tipo_cedula);
        $stmt->bindParam(':sexo', $sexo);
        $stmt->bindParam(':cedula', $cedula);
        $stmt->bindParam(':pais_code', $pais_code);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':empresa', $empresa);
        $stmt->bindParam(':pais', $pais);
        
        return $stmt->execute();
    }
}
?>
