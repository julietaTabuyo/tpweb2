<?php
// Conecta a la base de datos
$conexion = mysqli_connect("localhost", "usuario, "contrasena", "nombre");

if (!$conexion) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

// datos del formulario
$nombre = $_POST['nombre'];
$genero = $_POST['genero'];


//colocar los datos en la base de datos
$query = "INSERT INTO tabla_companias (nombre, $genero) VALUES ('$nombre', 'genero')";
if (mysqli_query($conexion, $query)) {
    echo "Compañía agregada";
} else {
    echo "Error: " . mysqli_error($conexion);
}

// Cierra la conexión
mysqli_close($conexion);
?>
