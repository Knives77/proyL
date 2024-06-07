<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $modelo = $_POST["modelo"];
    $año = $_POST["año"];
    $gama = $_POST["gama"];
    $precio = $_POST["precio"];

    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "celulares";

    // Crear conexión
    $conexion = new mysqli($servername, $username, $password, $database);
    // Verificar conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Manejo de la imagen
    $imagen = $_FILES["imagen"];
    $imagenNombre = $imagen["name"];
    $imagenTmpNombre = $imagen["tmp_name"];
    $imagenFolder = "../img/upload/samsung/" . $imagenNombre;

    // Validar y mover la imagen subida
    if (move_uploaded_file($imagenTmpNombre, $imagenFolder)) {
        // Actualizar el registro en la base de datos
        $sql = "UPDATE samsung SET modelo=?, año_lanzamiento=?, gama=?, img=?, precio=? WHERE id=?";

        if ($stmt = $conexion->prepare($sql)) {
            $stmt->bind_param("sissdi", $modelo, $año, $gama, $imagenFolder, $precio, $id);

            // Ejecutar la declaración
            if ($stmt->execute()) {
                echo "<script>
                alert('Registro actualizado correctamente.');
                location.href = './editar.php';
                </script>";
            } else {
                echo "Error al actualizar el registro: " . $stmt->error;
            }

            // Cerrar la declaración
            $stmt->close();
        } else {
            echo "Error al preparar la declaración: " . $conexion->error;
        }
    } else {
        echo "Error al subir la imagen.";
    }

    // Cerrar la conexión
    $conexion->close();
} else {
    echo "<script>
    alert('Método de solicitud no válido.');
    location.href = './editar.php';
    </script>";
}
?>