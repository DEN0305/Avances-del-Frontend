<?php

include_once('user.php');
include_once ('user_session.php');

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    echo "Hay sesion";
}else if(isset($_POST['email']) && isset($_POST['password'])){
    //echo "Validacion de login";
    $userForm = $_POST['email'];
    $passForm = $_POST['password'];

    if($user->userExist($userForm, $passForm)){
        echo "Usuario validado";
    }else{
        echo "Email y/o contraseña incorrectos";
    }

}else{
    //echo "Login";
    include_once('login.php');
}

?>