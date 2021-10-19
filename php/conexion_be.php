<?php

    $conexion = mysqli_connect("localhost", "root", "", "registro_facial");
    
    if ($conexion) {
        echo('Conexión establecida con exito');
    }else {
        echo('No estamos conectados');
    }
    
?>