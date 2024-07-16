<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles_registro.css">
    <title>Registro</title>
</head>
<body>
<header>
    <h1>HOLA</h1>
    <p>Inicia el registro</p>

</header>
<nav>
    <ul>
        <li><a href="../Fac-inv/Fac_inven.php">Inicio</a></li>
    </ul>
</nav>

<main>
    <section>
        <form method="POST" action="../conexion/registro.php">

            <div class="input-wrapper">
                <input type="text" name="name" placeholder="Nombre">
            </div>
            <div class="input-wrapper">
                <input type="text" name="apellido" placeholder="Apellido">
            </div>

            <div class="input-wrapper">
                <input type="text" name="cedula" placeholder="Cedula">
            </div>

            <div class="input-wrapper">
                <input email="email" name="email" placeholder="Correo electronico">
            </div>

            <div class="input-wrapper">
                <input type="text" name="direccion" placeholder="Direccion">
            </div>

            <div class="input-wrapper">
                <input type="text" name="telefono" placeholder="Telefono">
            </div>
            <div>
                <input type="submit" value="Submit!" accesskey="s"/>
            </div>
        </form>
    </section>
</main>


<footer>
    <p>&copy; 2024 Tienda Leydy</p>
</footer>

</body>
</html>