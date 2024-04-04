<?php

include_once 'database.php';

class User extends Database{

    private $nombre;
    private $username;

    public function userExist($user, $email, $pass){
        $md5pass = $pass;
        $query = $this->connect()->prepare('SELECT * FROM user WHERE name = :user AND email = :email AND password = :pass');
        $query->execute(['user' => $user, 'email' => $email, 'pass' => md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM user WHERE name =:user');
        $query->execute(['user' =>$user]);

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