<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Teléfonos</title>
  <link rel="stylesheet" href="../../css/style.css" />
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid white;
    }

    th {
      background-color: #19005f;
      color: white;
    }

    img {
      max-width: 100px;
      height: auto;
    }
  </style>
</head>

<body>
  <header>
    <div class="title">
      <h1 class="tit">Celulares</h1>
    </div>
    <nav>
      <!-- 1 -->
      <div class="nv">
        <select class="bt" id="loby">
          <option selected value="inicio">
            <h3 class="op">Inicio</h3>
          </option>
          <option value="galeria">
            <h3 class="op">Galeria</h3>
          </option>
        </select>
      </div>
      <!-- 2 -->
      <div class="nv">
        <select class="bt" id="xiaomi">
          <option selected disabled>
            <h3 class="op">Xiaomi</h3>
          </option>
          <option value="consulta1">
            <h3 class="op">Consulta</h3>
          </option>
          <option value="altas1">
            <h3 class="op">Altas</h3>
          </option>
          <option value="bajas1">
            <h3 class="op">Bajas</h3>
          </option>
          <option value="editar1">
            <h3 class="op">Editar</h3>
          </option>
        </select>
      </div>
      <!-- 3 -->
      <div class="nv">
        <select class="bt" id="iphone">
          <option selected disabled>
            <h3 class="op">iPhone</h3>
          </option>
          <option value="consulta2">
            <h3 class="op">Consulta</h3>
          </option>
          <option value="altas2">
            <h3 class="op">Altas</h3>
          </option>
          <option value="bajas2">
            <h3 class="op">Bajas</h3>
          </option>
          <option value="editar2">
            <h3 class="op">Editar</h3>
          </option>
        </select>
      </div>
      <!-- 4 -->
      <div class="nv">
        <select class="bt" id="samsung">
          <option selected disabled>
            <h3 class="op">Samsung</h3>
          </option>
          <option selected value="consulta3">
            <h3 class="op">Consulta</h3>
          </option>
          <option value="altas3">
            <h3 class="op">Altas</h3>
          </option>
          <option value="bajas3">
            <h3 class="op">Bajas</h3>
          </option>
          <option value="editar3">
            <h3 class="op">Editar</h3>
          </option>
        </select>
      </div>
      <!-- 5 -->
      <div class="nv">
        <select class="bt" id="poco">
          <option selected disabled>
            <h3 class="op">POCO</h3>
          </option>
          <option value="consulta4">
            <h3 class="op">Consulta</h3>
          </option>
          <option value="altas4">
            <h3 class="op">Altas</h3>
          </option>
          <option value="bajas4">
            <h3 class="op">Bajas</h3>
          </option>
          <option value="editar4">
            <h3 class="op">Editar</h3>
          </option>
        </select>
      </div>
      <div style="width: 3%; height: 100%; float: left">
        <button class="cerrar" id="cerrar">
          <i class="fi fi-br-cross" style="color: white"></i>
        </button>
      </div>
    </nav>
  </header>
  <main style="background-image: url('../../img/8.jpeg');">
    <div class="content" id="content">
      <h2 style="padding-top: 1%; padding-bottom: 2%">Consulta - Samsung</h2>
      <?php
      $servername = "localhost";
      $username = "root"; // Cambia esto por tu nombre de usuario de MySQL
      $password = "";
      $database = "celulares"; // Cambia esto por el nombre de tu base de datos
      
      // Crear conexión
      $conexion = new mysqli($servername, $username, $password, $database);

      // Verificar la conexión
      if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
      }
      // Realizar la consulta
      $sql = "SELECT * FROM samsung";
      $resultado = $conexion->query($sql);
      // Verificar si hay resultados
      if ($resultado->num_rows > 0) {
        // Comenzar a imprimir la tabla HTML
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Modelo</th><th>Año de Lanzamiento</th><th>Gama</th><th>Imagen</th><th>Precio</th></tr>";

        // Iterar sobre los resultados y mostrar cada fila
        while ($fila = $resultado->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $fila["id"] . "</td>";
          echo "<td>" . $fila["modelo"] . "</td>";
          echo "<td>" . $fila["año_lanzamiento"] . "</td>";
          echo "<td>" . $fila["gama"] . "</td>";
          echo "<td><img src='" . $fila["img"] . "' alt='imagen del teléfono'></td>";
          echo "<td>" . $fila["precio"] . "</td>";
          echo "</tr>";
        }
        // Cerrar la tabla
        echo "</table>";
      } else {
        echo "No se encontraron resultados.";
      }

      // Cerrar la conexión a la base de datos
      $conexion->close();
      ?>
    </div>
  </main>
  <footer>
    <div class="content-footer">
      <p class="pp">&copy; 2024 Celulares. Todos los derechos reservados.</p>
    </div>
  </footer>
</body>
<script src="../../js/script2.js"></script>

</html>