<?php
require_once '../model/form_marino.php'; 

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $tipo_cedula = $_POST['tipo_cedula'];
    $sexo = $_POST['sexo'];
    $cedula = $_POST['cedula'];
    $pais_code = $_POST['pais_code'];
    $telefono = $_POST['telefono'];
    $titulo = $_POST['titulo'];
    $empresa = $_POST['empresa'];
    $pais = $_POST['pais'];

    $formMarino = new FormMarino();
    $result = $formMarino->guardarDatos($email, $nombre, $tipo_cedula, $sexo, $cedula, $pais_code, $telefono, $titulo, $empresa, $pais);

    if ($result == true) {
        $_SESSION['message'] = [
            'text' => 'Datos guardados satisfactoriamente.',
            'type' => 'success'
        ];
      //  print_r($_SESSION);
    } else {
        $_SESSION['message'] = [
            'text' => 'Error al guardar los datos.',
            'type' => 'error'
        ];
    }
    
   header('Location: /mercantes/views/index.php');
    exit();
}
