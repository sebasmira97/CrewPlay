<?php

    class Error404 extends Controller{
        function __construct()
        {
            parent::__construct();
            $this->view->render('error');
            //echo "<p>Error 404: Pagina no encontrada</p>";
        }
    }

?>