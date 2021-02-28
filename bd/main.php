<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar datos</title>
</head>
<body>
    <form action="main.php" method="POST">
        <input type="text" name="texto" id="texto">
        <button type="submit">Añadir pendiente</button>
    </form>
    <div id="todolist">
        <?php
        /* conexion de la bd */
        $servidor = "localhost";
        $nombreUsuario = "root";
        $password = "";
        $db = "todoListDB";
        /* crear la conexion */
        $conexion = new mysqli($servidor, $nombreUsuario, $password, $db);

            if(isset($_POST['texto'])) {
                $texto = $_POST['texto'];
                
                $sql = "INSERT INTO todotable(texto, completado) VALUES('$texto', false)";
                if($conexion->query($sql) === true) {
                    // echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
                } else{
                    die("Error al insertar datos: " . $conexion->error);
                }
                
            }
            
            $sql = "SELECT * FROM todotable";
            $resultado = $conexion->query($sql);
            /* numero de columnas */
            if($resultado->num_rows > 0) {
                /* obtener todos los resultados de elementos que estén almacenados  */
                while($row = $resultado->fetch_assoc()) {
                    /* se puede ver el resultado completo */
                    /* var_dump($row); */

                    echo '<div><form action=""><input type="checkbox">'.$row['texto'].'</form></div>';
                }
            }
            $conexion->close();
        ?>
    </div>
</body>
</html>