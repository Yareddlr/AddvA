<?php
include("conexion.php");



if (isset($_POST['register'])) {
    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['lastname']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['message']) >= 1
    ) {
        $name = trim($_POST['name']);
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $message = trim($_POST['message']);
        $fecha = date("d/m/y");

        // Utilizar una consulta preparada para evitar la inyección SQL
        $consulta = "INSERT INTO datos(nombre, apellido, email, telefono, mensaje, fecha)
                     VALUES(?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conex, $consulta);

        // Vincular parámetros
        mysqli_stmt_bind_param($stmt, "ssssss", $name, $lastname, $email, $phone, $message, $fecha);

        // Ejecutar la consulta
        $resultado = mysqli_stmt_execute($stmt);

        // Verificar el resultado
        if ($resultado) {
            ?>
            <h3 class="success">Tu registro se ha completado</h3>
            <?php
        } else {
            ?>
            <h3 class="error">Ocurrió un error: <?php echo mysqli_error($conex); ?></h3>
            <?php
        }

        // Cerrar la declaración preparada
        mysqli_stmt_close($stmt);
    } else {
        ?>
        <h3 class="errorr">Llena todos los campos</h3>
        <?php
    }
}
?>
