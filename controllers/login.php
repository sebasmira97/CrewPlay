<?php

    class login extends Controller{

        function __construct(){
            parent::__construct();
            session_start();
        }

        function ingresar(){
            $email = $_POST['email'];
            $password = $_POST['password'];

            if($this->model->usuarioExiste($email, $password)){
                
            }
        }

        function setCurrentUsuario($usuario){
            $_SESSION['usuario'] = $usuario;
        }

        function getCurrentUsuario(){
            return $_SESSION['usuario'];
        }

        function cerrarSession(){
            session_unset();
            session_destroy();
        }

        function render(){
            $this->view->render('login');
        }

        function usuarioExiste($email, $password){
            $password = $password;
        }
    }

    


?>