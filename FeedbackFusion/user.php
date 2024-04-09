<?php

include_once("database.php");

class User extends Database{

    private $nombre;
    private $username;

    public function userExist($email, $password){
        $query = $this->connect()->prepare('SELECT * FROM user WHERE email = :email AND password = :password');
        $query->execute(['email' => $email, 'password' => $password]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($email){
        $query = $this->connect()->prepare('SELECT * FROM user WHERE email =:email');
        $query->execute(['email' =>$email]);

        foreach ($query as $currentUser){
            $this->nombre = $currentUser['nombre'];
            $this->username = $currentUser['username'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}
?>