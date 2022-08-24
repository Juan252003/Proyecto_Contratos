<?php
    //Conexion a la BD
    include '../BD/conexionBD.php';

    //Variables asignadas para las columnas de la tabla de usuarios
    $nombre_usuario = $_POST['nombre_usuario'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    //Variable para encriptar la contraseña (sha512, md5)
    $contrasena = hash('sha512', $contrasena);

    //Insertar los datos a la BD
    $query = "INSERT INTO usuarios(nombre_usuario, usuario, email, contrasena)
    VALUES ('$nombre_usuario', '$usuario', '$email', '$contrasena')";

/******************************************************************************************************* */

    //Verificación de correo y usuario
    $verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' ");
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

    //Condición para que no se repita correo
    if(mysqli_num_rows($verificar_email) > 0){
        echo '
        <script>
            alert("El Email/Correo ya se encuentra registrado");
            window.location = "../../index.php";
        </script>
        ';
        exit();
    }

    //Condicion de para que no se repita el usuario
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
        <script>
            alert("El nombre de usuario ya se encuentra en uso, intenta con otro nombre de usuario");
            window.location = "../../index.php";
        </script>
        ';
        exit();
    }

/******************************************************************************************************* */

    //Ventana de retorno
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Registro exitoso");
                window.location = "../../index.php"
            </script>';
    }else{'
            <script>
                alert("Registro fallido, intente nuevamente");
                window.location = "../../index.php"
            </script>';
    };

    mysqli_close($conexion);
?>