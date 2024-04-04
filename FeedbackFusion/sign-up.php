<?php

include_once("database.php");
include_once("controlador/controlador_registrar_usuario.php");
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedBackFusion</title>
    <link rel="stylesheet" href="sign-up.css">
</head>
<body>
    <div class="contenedor">
        <form action="" method="POST">
            <div class="formulario">
                <div class="title-one"><h1>Sign Up</h1></div>
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
                <input type="submit" class="boton" value="Registrarse" name="registro">

                <div class="title-two"><p>Ya tienes una cuenta, <a href="login.php" id="link">Login</a></p></div>
            </div>
        </form>
    </div>
</body>
</html>
