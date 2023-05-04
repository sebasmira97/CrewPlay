<?php

    class LoginModel extends Model{

        private $nombre;
        private $email;

        public function __construct()
        {
            parent::__construct();
        }

        public function usuarioExiste($email, $password){
            $query = $this->db->connect()->prepare("SELECT * FROM usuarios WHERE email = :email AND password = :password");
            $query->execute(['email' => $email, 'password' => $password]);

            if($query->rowCount()){
                return true;
            }else{
                return false;
            }
        }

        public function setUsuario($email){
            $query = $this->db->connect()->prepare("SELECT * FROM usuarios WHERE email = :email");
            $query->execute(['email' => $email]);

            foreach($query as $currentUsuario){
                $this->nombre = $currentUsuario['nombre'];
                $this->email = $currentUsuario['email'];
            }
        }

        public function getNombre(){
            return $this->nombre;
        }

    }

?>