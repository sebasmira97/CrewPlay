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
        <h1 class="center">Seccion de nuevo</h1>

        <form action="<?php echo constant('URL'); ?>registrarUsuario/registrar" method="POST">

            <p>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" require>
            </p>
            <p>
                <label for="email">Email</label><br>
                <input type="text" name="email" require>
            </p>
            <p>
                <label for="celular">Celular</label><br>
                <input type="text" name="celular" require>
            </p>
            <p>
                <label for="password">Contraseña</label><br>
                <input type="password" name="password" require>
            </p>
            <p>
                <input type="submit" value="Registrar nuevo usuario">
            </p>

        </form>
    </div>

    <?php require 'views/footer.php' ?>
</body>

</html>