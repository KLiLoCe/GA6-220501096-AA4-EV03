<?php
include("../conexion/conexion.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

    if (!empty($name) &&
        !empty($apellido) &&
        !empty($cedula) &&
        !empty($email) &&
        !empty($direccion) &&
        !empty($telefono)) {

        $consulta = "INSERT INTO `cliente` (`id`, `cedula`, `nombre`, `direccion`, `correo_electronico`, `telefono`) VALUES (NULL, '$cedula', '$name.$apellido', '$direccion', '$email', '$telefono');";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            echo "<script>
                alert('Registro exitoso');
                window.location.href='../facturacion/facturacion.php';</script>";
        } else {
            echo "<script>
                alert('Ocurrio un error');
                history.back();</script>";
        }
    }
}
?>