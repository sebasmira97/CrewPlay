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
        <h1 class="center">Detalle de <?php echo $this->usuarios->nombre; ?></h1>

        <div><?php echo $this->mensaje; ?></div>

        <form action="<?php echo constant('URL'); ?>consulta/actualizarUsuario" method="POST">
            <input type="hidden" value="<?php echo $this->usuarios->id; ?>" name="id">
            <p>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" value="<?php echo $this->usuarios->nombre; ?>" require>
            </p>
            <p>
                <label for="email">Email</label><br>
                <input type="text" name="email" value="<?php echo $this->usuarios->email; ?>" require>
            </p>
            <p>
                <label for="celular">Celular</label><br>
                <input type="text" name="celular" value="<?php echo $this->usuarios->celular; ?>" require>
            </p>
            <p>
                <label for="password">Contraseña</label><br>
                <input type="text" name="password" value="<?php echo $this->usuarios->password; ?>" require>
            </p>
            <p>
                <input type="submit" value="Actualizar usuario">
            </p>

        </form>
    </div>

    <?php require 'views/footer.php' ?>
</body>

</html>