<?php

class registrarUsuario extends Controller
{
    //public $model;

    function __construct()
    {
        
        parent::__construct();
        $this->view->mensaje = "";
        //echo "<p>Nuevo controlador Main</p>";
    }

    function render()
    {
        $this->view->render('nuevo');
    }

    function registrar()
    {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $password = $_POST['password'];

        $mensaje = "";

        if ($this->model->insert(['nombre' => $nombre, 'email' => $email, 'celular' => $celular, 'password' => $password])) {
            $mensaje = "Nuevo usuario creado";
        } else {
            $mensaje = "El usuario ya existe";
        }

        $this->view->mensaje = $mensaje;
        $this->render();
    }
}
