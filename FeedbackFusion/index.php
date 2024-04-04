<?php

include_once 'user.php';
include_once 'user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    echo "Hay sesion";
}else if(isset($_POST['nombre'] && isset($_POST['email']) && isset($_POST['password']))){
    //echo "Validacion de login";

    $userForm = $_POST['nombre'];
    $passForm = $_POST['password'];

    if($user->userExists($userForm, $passForm)){
        echo "Usuario validado";
    }else{
        echo "Nombre de usuario, email y/o contraseña incorrecto";
    }

}else{
    //echo "Login";
    include_once 'login.php';
}

?>