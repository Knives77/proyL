<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "celulares";

    // Conectar a la base de datos
    $conexion = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Recibir los datos del formulario
    $modelo = mysqli_real_escape_string($conexion, $_POST["modelo"]);
    $año = mysqli_real_escape_string($conexion, $_POST["año"]);
    $gama = mysqli_real_escape_string($conexion, $_POST["gama"]);
    $precio = mysqli_real_escape_string($conexion, $_POST["precio"]);

    // Procesar la imagen
    $imagen = $_FILES["imagen"];
    $imagen_nombre = $imagen["name"];
    $imagen_temp = $imagen["tmp_name"];
    $imagen_tipo = $imagen["type"];
    $imagen_tamaño = $imagen["size"];
    $imagen_ruta = "../img/upload/poco/" . $imagen_nombre; // Cambiar la ruta según la ubicación de tus imágenes

    // Validar tipo de archivo
    $permitidos = array("image/jpeg", "image/png");
    if (!in_array($imagen_tipo, $permitidos)) {
        die("Error: Solo se permiten archivos JPEG y PNG.");
    }

    // Validar tamaño del archivo (por ejemplo, máximo 5 MB)
    $max_tamano = 5 * 1024 * 1024; // 5 MB
    if ($imagen_tamaño > $max_tamano) {
        die("Error: El archivo es demasiado grande. El tamaño máximo permitido es de 5 MB.");
    }

    // Mover la imagen a la carpeta de destino
    if (!move_uploaded_file($imagen_temp, $imagen_ruta)) {
        die("Error al mover el archivo.");
    }

    // Preparar la consulta SQL
    $sql = "INSERT INTO poco (modelo, año_lanzamiento, gama, img, precio) VALUES (?, ?, ?, ?, ?)";
    $declaracion = $conexion->prepare($sql);
    $declaracion->bind_param("sissd", $modelo, $año, $gama, $imagen_ruta, $precio);

    // Ejecutar la consulta
    if ($declaracion->execute()) {
        echo "El teléfono se ha agregado correctamente.";
    } else {
        echo "Error al agregar el teléfono: " . $declaracion->error;
    }

    // Cerrar la conexión
    $conexion->close();
    echo "  <script>
                alert('Agregado con exito');
                location.href = './consulta.php';
            </script>";
    exit;
} else {
    // Si se intenta acceder al script sin enviar datos por POST
    echo "Acceso no permitido.";
}
?>