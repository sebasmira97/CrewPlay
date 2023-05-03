<?php

    class RegistrarUsuarioModel extends Model{
        
        public function __construct()
        {
            parent::__construct();
        }

        public function insert($datos){
            //Esta funcion sirve para insertar datos en la BD
            try{
                $query = $this->db->connect()->prepare('INSERT INTO usuarios (nombre, email, celular, password) VALUES (:nombre, :email, :celular, :password)');
                $query->execute(['nombre' => $datos['nombre'], 'email' => $datos['email'], 'celular' => $datos['celular'], 'password' => $datos['password']]);
                return true;
            }catch(PDOException $e){
                //echo "Ya existe ese correo electronico";
                return false;
            }
            

        }
    }

?>