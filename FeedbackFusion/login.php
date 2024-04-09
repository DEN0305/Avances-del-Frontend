
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
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="input-text" placeholder="Ingrese su email">
                </div>
                <div class="campo">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" class="input-text" placeholder="Ingrese su contraseña">
                </div>
                <input type="submit" class="boton" value="Sign in" name="sign-in">

                <div class="title-two"><p>No tienes una cuenta, <a href="sign-up.php" id="link">Sign up</a></p></div>
            </div>
        </form>
    </div>
</body>
</html>
