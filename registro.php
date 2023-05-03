<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuarios</title>
</head>
<body>
    <form action="registro.php" method="post">
        <input type="text" name="texto" id="texto">
        <input type="submit" value="Registrar Usuario">
    </form>

    <div id="Propi3dad">
        <?php
            $servidor = "localhost";
            $nombreusuario = "root";
            $password = "";
            $database = "Propi3dad";
        
            $conexion = new mysqli($servidor, $nombreusuario, $password, $database);

            if($conexion -> connect_error){
                die("Conexion fallida: " . $conexion -> connect_error);
            }

            if(isset($_POST['texto'])){
                $texto = $_POST['texto'];
                
                $sql = "INSERT INTO usuarios(nombre) VALUES ('$texto')";

                if($conexion->query($sql) === true){
                } else {
                    echo "Error al insertar datos";
                }
                //$conexion->close();
            }

            $sql = "SELECT * FROM usuarios";
            $resultado = $conexion->query($sql);

            if($resultado->num_rows > 0){
                while ($row = $resultado->fetch_assoc()) {
                    //var_dump($row);
                    echo '<div><form action=""><input type="checkbox">'.$row['nombre'].'</form></div>';
                }
            }

            $conexion->close();

        ?>
    </div>
</body>
</html>