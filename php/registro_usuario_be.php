<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];
    $foto = $_POST['foto'];
    $contrasena = $_POST['contrasena'];


    $query = "INSERT INTO usuarios(nombre_completo, correo, celular, foto, contrasena) 
    VALUES('$nombre_completo', '$correo', '$celular', '$foto', '$contrasena')";

    $ejecutar = mysqli_query($conexion, $query);


    //Verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
    if ($ejecutar) {
        echo '
            <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../index.php";
            </script>
        ';
    }else {
        echo '
            <script>
            alert("Usuario NO 
            00
            ..almacenado exitosamente");
            window.location = "../index.php";
            </script>
            ';
    }

    mysqli_close($conexion);

?>