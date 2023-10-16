<!DOCTYPE html>
<html>
<head>
    <title>cargar Compañía</title>
</head>
<body>
    <h2>Agregar Compañía</h2>
    <form action="procesar_formulario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="genero">genero:</label>
        <input type="text" id="genero" name="genero">


        <input type="submit" value="Agregar Compañía">
    </form>
</body>
</html>
