<?php

    class Consulta extends Controller{

        function __construct()
        {
            parent::__construct();
            $this->view->usuarios = [];
        }

        function render(){
            $usuarios = $this->model->get();
            $this->view->usuarios = $usuarios;
            $this->view->render('consulta');
        }

        function verUsuario($param = null){
            $idUsuario = $param[0];
            $usuario = $this->model->getById($idUsuario);

            $this->view->usuarios = $usuario;
            $this->view->mensaje = "";
            $this->view->render('detalleUsuario');
        }

        function actualizarUsuario(){

            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $celular = $_POST['celular'];
            $password = $_POST['password'];

            

            if($this->model->update(['nombre' => $nombre, 'celular' => $celular, 'password' => $password, 'id' => $id])){
                $usuario = new Usuario();
                $usuario->id = $id;
                $usuario->nombre = $nombre;
                $usuario->email = $email;
                $usuario->celular = $celular;
                $usuario->password = $password;

                $this->view->usuarios = $usuario;
                $this->view->mensaje = "Actualizado con exito";
            }else{
                $this->view->mensaje = "No fue posible actualizar el usuario";
            }
            
            $this->view->render('detalleUsuario');

        }

        function eliminarUsuario(){

        }

    }

?>