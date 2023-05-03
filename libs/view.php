<?php

    class View{
        public $usuarios;
        public $mensaje;

        function __construct()
        {

        }

        function render($nombre){
            require 'views/' . $nombre . '.php';
        }
    }

?>