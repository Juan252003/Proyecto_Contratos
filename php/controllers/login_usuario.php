<?php

    session_start();

    include '../BD/conexionBD.php';

    $emai = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    $validacion = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$emai' and contrasena='$contrasena' ");

    if(mysqli_num_rows($validacion) > 0){
        header("location: ../views/home.php");
        exit();
    }else{
        echo '
        <script>
            alert("El Email o contraseña no coinciden, Verfique los datos ingresados");
            window.location = "../../index.php"
        </script>
        ';
        exit();
    }
?>