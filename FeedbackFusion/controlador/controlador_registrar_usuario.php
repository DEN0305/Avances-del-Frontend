<?php

include_once("database.php");

$database = new Database();

$conn = $database->connect();

if(!empty($_POST["sign-up"])){
    if(empty($_POST["nombre"]) or empty($_POST["email"])or empty($_POST["password"]) or empty($_POST["fecha_registro"])){
        echo "<script>alert('Uno de los campos esta vacio');</script>";
    }else{
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $fecha_registro = $_POST["fecha_registro"];
        
        $sql = $conn->query("INSERT INTO user (id_rol, name, email, password, registration_date) VALUES (2, '$nombre', '$email', '$password', '$fecha_registro')");
        echo "<script>alert('Usuario registrado con exito');</script>";
        }
}
?>