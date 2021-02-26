<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        body {
            background: #264673;
            box-sizing: border-box;
            font-family: Arial;
        }
        form {
            background: white;
            padding: 10px;
             margin: 100px auto;
             width: 400px;
        }
        input[type=text], input[type=password] {
            padding: 10px;
            width: 380px;

        }
        input[type="submit"] {
            background: #ED8824;
            border: 0;
            padding: 10px 20px;
        }
        .error {
            background: #FF9185;
            padding: 10px;
            font-size: 12px;
        }
        .correcto {
            background: #A0DEA7;
            font-size: 12px;
            padding: 10px;
        }
    </style>
<body>
    <form action="formulario.php" method="POST">
        <?php
        /* validar que existe un valor, isset para esto */
            if(isset($_POST['nombre'])) {
                $nombre = $_POST['nombre'];
                $password = $_POST['password'];
                $email = $_POST['email'];

                $pais = $_POST['pais'];

                $lenguajes = array();


                if(isset($_POST['nivel'])) {
                    $nivel = $_POST['nivel'];
                } else {
                    $nivel = "";
                }

                if(isset($_POST['lenguajes'])) {
                    $lenguajes = $_POST['lenguajes'];
                } else {
                    $lenguajes = [];
                }

                $campos = array();
                if($nombre=="") {
                    /* asi es el push de un array */
                    array_push($campos, "El campo nombre no puede estar vacío");
                }
                if($password=="" || strlen($password) < 6 ) {
                    array_push($campos, "El campo password no puede estar vacio ni tener menos de 6 caracteres");
                }
                /* debe tener un @ */
                if($email=="" || strpos($email, "@") === false) {
                    array_push($campos, "Ingresa un correo electrónico válido");
                }

                if($pais=="") {
                    array_push($campos, "Selecciona un país de origen");
                }

                if($nivel == "") {
                    array_push($campos, "Selecciona un nivel de desarrollo");
                }

                if($lenguajes == "" || count($lenguajes) < 2) {
                    array_push($campos, "Seleeciona al menos dos lenguajes de proramación");
                }

                if(count($campos)>0) {
                    echo "<div class='error'>";
                    for($i=0; $i < count($campos); $i++) {
                        echo "<li>".$campos[$i];
                    }
                } else{
                    echo "<div class='correcto'>Datos correctos";
                }
                echo "</div>";
            }
        ?>
        <p>Nombre: <br/>
        <input type="text" name="nombre" placeholder="Escribe tu nombre"
            <?php
                if(isset($nombre)) {
            ?>  
                value="<?php echo $nombre ?>"
            <?php
                }
            ?>
        >
        </p>
        <p>Password:<br/>
        <input type="text" name="password" placeholder="Escribe tu password"
        <?php
                if(isset($password)) {
            ?>  
                value="<?php echo $password ?>"
            <?php
                }
            ?>
        >
        </p>
        <p>Correo: <br/>
        <input type="text" name="email" placeholder="Escribe tu email"
        <?php
                if(isset($email)) {
            ?>  
                value="<?php echo $email ?>"
            <?php
                }
            ?>
        >
        </p>
        <p>
        
        </p>
        <p>
            Pais de origen: </br>
            <select name="pais" id="">
                <option value="">Selecciona un país</option>
                <option value="mx"
                <?php 
                    if(isset($pais)) {
                        echo "selected";
                    }
                ?>
                >México</option>

                <option value="eu"
                    <?php 
                    if(isset($pais)) {
                        echo "selected";
                    }
                ?>
                >USA</option>
                <option value="es" 
                <?php 
                    if(isset($pais)) {
                        echo "selected";
                    }
                ?>
                >España</option>
                <option value="ar"
                <?php 
                    if(isset($pais)) {
                        echo "selected";
                    }
                ?>
                >Argentina</option>
            </select>
        </p>

        <p>
            Nivel de desarrollo </br>
            <input type="radio" name="nivel" value="Principiante"
            <?php
                if(isset($nivel) && $nivel == "Principiante") {
                    echo "checked";
                } else{
                    echo "checked";
                }
            ?>
            >Principiante
            <input type="radio" name="nivel" value="Intermedio"
            <?php
                if(isset($nivel) && $nivel == "Intermedio") {
                    echo "checked";
                }
            ?>
            >Intermedio
            <input type="radio" name="nivel" value="Avanzado"
            <?php
                if(isset($nivel) && $nivel == "Avanzado") {
                    echo "checked";
                }
            ?>
            >Avanzado
        </p>
        <p>
            Lenguajes de programación <br>
            <!-- validar si existe un campo dentro de un arrglego -->
            <input type="checkbox" name="lenguajes[]" value="php" 
            <?php
                if(isset($lenguajes)) {
                    if(in_array("php", $lenguajes))echo "checked";
                }
            ?>
            >
            Php <br>
            <input type="checkbox" name="lenguajes[]" value="js"
            <?php
                if(isset($lenguajes)) {
                    if(in_array("js", $lenguajes))echo "checked";
                }
            ?>
            >
            Javascript <br>
            <input type="checkbox" name="lenguajes[]" value="java"
            <?php
                if(isset($lenguajes)) {
                    if(in_array("java", $lenguajes))echo "checked";
                }
            ?>
            >
            Java<br>
            <input type="checkbox" name="lenguajes[]" value="swift"
            <?php
                if(isset($lenguajes)) {
                    if(in_array("swift", $lenguajes))echo "checked";
                }
            ?>
            >
            Swift<br>
            <input type="checkbox" name="lenguajes[]" value="python"
            <?php
                if(isset($lenguajes)) {
                    if(in_array("python", $lenguajes))echo "checked";
                }
            ?>
            >
            Python<br>
        </p>

        <input type="submit" value="enviar datos">
    </form>
</body>
</html>