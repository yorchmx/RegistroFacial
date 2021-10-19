<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Facial</title>
    <link rel="stylesheet" href="css/estilos.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <main>
        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar a la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
            
            <div class="caja__trasera-register">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Regístrate para que puedas iniciar sesión</p>
                <button id="btn__registrarse">Regístrarse</button>
            </div>
            </div>
            <!-- Formulario de Login y Registro -->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="" class="formulario__login">
                <h2>Iniciar Sesión</h2>
                <input type="text" placeholder="Correo Electronico">
                <input type="password" placeholder="Contraseña">
                <button>Entrar</button>
                </form>
                <!--Registro-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register" enctype="multipart/form-data">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electrónico" name="correo">
                    <input type="text" placeholder="Celular" name="celular">
                    <div class="container-input">
                    <input type="file" id="file-1" class="inputfile inputfile-1" accept="image/*" capture="camera" name="foto" />
                    <label for="file-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                    <span class="iborrainputfile">Tómate una Selfie</span>
                </label>
                    </div>
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Regístrate</button>
                </form>
            </div>
          </div>
    </main>

    <script src="js/script.js"></script>
</body>
</html>