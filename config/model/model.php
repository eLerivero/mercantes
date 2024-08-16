<?php
class Marino {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function guardar($data) {
        $stmt = $this->db->prepare("INSERT INTO marinos (email, nombre, tipo_cedula, sexo, cedula, telefono, titulo, empresa, pais) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([
            $data['email'],
            $data['nombre'],
            $data['tipo_cedula'],
            $data['sexo'],
            $data['cedula'],
            $data['telefono'],
            $data['titulo'],
            $data['empresa'],
            $data['pais']
        ]);
    }
}
?>
