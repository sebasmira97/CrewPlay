<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php' ?>

    <div id="home">
        <h1>Lista de Usuarios</h1><br>

        <table width="100%" style="display: block;">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Contraseña</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                include_once 'models/usuario.php';
                foreach($this->usuarios as $row){
                    $usuarios = new Usuario();
                    $usuarios = $row;

            ?>
                <tr>
                    <td><?php echo $usuarios->nombre; ?></td>
                    <td><?php echo $usuarios->email; ?></td>
                    <td><?php echo $usuarios->celular; ?></td>
                    <td><?php echo $usuarios->email; ?></td>
                    <td><a href="<?php echo constant('URL') . 'consulta/verUsuario/' . $usuarios->id; ?>">Editar</a></td>
                    <td><a href="<?php echo constant('URL') . 'consulta/eliminarUsuario/' . $usuarios->id; ?>">Eliminar</a></td>
                </tr>

            <?php
                }
            ?>
            </tbody>
        </table>
    </div>

    <?php require 'views/footer.php' ?>
    
</body>
</html>