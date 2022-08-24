<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn y Registro - AguasyAguas</title>
    <link rel="stylesheet" href="assets\css\estilos.css">
</head>
<body>
    
    <main>
        <!--Contenedor principal del body-->
        <div class="contenedor__todo">
            <!--Cartas para los formularios-->
            <div class="caja__trasera">
                <!--Carta para el LogIn-->
                <div class="caja__trasera-login">
                    <h3>¿Ya Tienes cuenta?</h3>
                    <p>Inicia sesión para ingresar al sistema</p>
                    <button id="btn__iniciar-sesion">Iniciar sesión</button>
                </div>
                <!--Carta para el Registro-->
                <div class="caja__trasera-register">
                    <h3>¡Crea tu cuenta!</h3>
                    <p>Registrate para ingresar al sistema</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>

            </div>
            <!--Formularios de Login y Registro-->
            <div class="contenedor__login-register">
                <!--Formulario para el Login-->
                <form action="php/controllers/login_usuario.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Email" name="email">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
                <!--Formulario para el registro-->
                <form action="php/controllers/registro_usuario.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre" name="nombre_usuario">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="text" placeholder="Email" name="email">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>

            </div>

        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>