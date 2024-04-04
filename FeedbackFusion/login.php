<?php
include_once 'database.php';

session_start();

if(isset($_GET['cerrar_sesion'])){
    session_unset();
    session_destroy();
}

if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
        case 1:
            header('location: administrator.php');
        break;

        case 2:
            header('location: user.php');
        break;

        default:
    }
}

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) &&isset($_POST['registration_date'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $registration_date = $_POST['registration_date'];

    $db = new Database();
    $query = $db->connect()->prepare('SELECT*FROM user WHERE name = :name AND email = :email AND password = :password AND registration_date = :registration_date');
    $query->execute(['name' => $name, 'email' => $email, 'password' => $password, 'registration_date' => $registration_date]);

    $row = $query->fetch(PDO::FETCH_NUM);
    if($row == true){
        //validar el rol//
        $rol = $row[3];
        $_SESSION['rol'] = $rol;

        switch($_SESSION['rol']){
            case 1:
                header('location: administrator.php');
            break;
    
            case 2:
                header('location: user.php');
            break;
    
            default:
        }
    }else{
        //no existe el usuario//
        echo "El usuario o contraseña son incorrectas";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedbackFusion</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="contenedor">
        <form action="#" method="post">
            <div class="formulario">
                <div class="title-one"><h1>Iniciar sesión</h1></div>
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="input-text" placeholder="Ingrese su nombre">
                </div>
                <div class="campo">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="input-text" placeholder="Ingrese su email">
                </div>
                <div class="campo">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" class="input-text" placeholder="Ingrese su contraseña">
                </div>
                <div class="campo">
                    <label for="fecha_registro">Fecha de registro:</label>
                    <input type="date" id="fecha_registro" name="fecha_registro" class="input-text">
                </div>
                <button type="submit" class="boton">Ingresar</button>

                <div class="title-two"><p>No tienes una cuenta, <a href="sign-up.php" id="link">Sign up</a></p></div>
            </div>
        </form>
    </div>
</body>
</html>
