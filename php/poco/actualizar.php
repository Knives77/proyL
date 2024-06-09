<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imgC = isset($_POST["imgC"]) ? $_POST["imgC"] : null;

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

    if ($imgC) {
        $id = $_POST["id"];
        $modelo = $_POST["modelo"];
        $año = $_POST["año"];
        $gama = $_POST["gama"];
        $precio = $_POST["precio"];

        // Manejo de la imagen
        $imagen = $_FILES["imagen"];
        $imagenNombre = $imagen["name"];
        $imagenTmpNombre = $imagen["tmp_name"];
        $imagenFolder = "../img/upload/poco/" . $imagenNombre;

        // Validar y mover la imagen subida
        if (move_uploaded_file($imagenTmpNombre, $imagenFolder)) {
            // Actualizar el registro en la base de datos
            $sql = "UPDATE poco SET modelo=?, año_lanzamiento=?, gama=?, img=?, precio=? WHERE id=?";

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
    } else {
        $id = $_POST["id"];
        $modelo = $_POST["modelo"];
        $año = $_POST["año"];
        $gama = $_POST["gama"];
        $precio = $_POST["precio"];

        // Validar y mover la imagen subida
        // Actualizar el registro en la base de datos
        $sql = "UPDATE poco SET modelo=?, año_lanzamiento=?, gama=?, precio=? WHERE id=?";

        if ($stmt = $conexion->prepare($sql)) {
            $stmt->bind_param("sissi", $modelo, $año, $gama, $precio, $id);

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

    }
    // Cerrar la conexión
    // $conexion->close();
} else {
    echo "<script>
    alert('Método de solicitud no válido.');
    location.href = './editar.php';
    </script>";
}
?>