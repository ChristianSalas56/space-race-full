<?php

class email extends con_db{
    
    private $email:
    private $email;

    public function emailExists($email, $contrasena){
        $mdSContrasena = mdS($contrasena);

        $query = $this->connect()->prepare('SELECT * FROM datos WHERE email = ')
    }
}
    



?>