<?php
// ver si esta cargado el archivo
if (isset($_FILES['imagen'])) {
    $imagen = $_FILES['imagen'];

    // hago la subida de imagen
    $ruta = 'ruta/donde/guardar/imagen/' . $imagen['nombre'];

    // S imagen al servidor
    if (move_uploaded_file($imagen['tmp_name'], $ruta)) {
        // hagp conexion con  a la base de datos
        $conexion = mysqli_connect("localhost", "usuario", "contrasena", "nombre");
        //si esta mal
        if (!$conexion) {
            die("fallas en la conexión a la base de datos " . mysqli_connect_error());
        }

        // ruta de imagen a la base de datos
        $consulta = "INSERT INTO tabla_de_imagen (ruta_imagen) VALUES ('$ruta')";
        //por las dudas que falle
        if (mysqli_query($conexion, $consulta)) {
            echo "La imagen esta en la base de datos";
        } else {
            echo "Error de la imagen en la base de datos" . mysqli_error($conexion);
        }

        // Cierro la conexión
        mysqli_close($conexion);
    } else {
        echo "la imagen no se puede subir";
    }
}
?>
