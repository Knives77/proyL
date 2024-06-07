<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teléfonos</title>
    <link rel="stylesheet" href="../../css/style.css" />
    <style>
        form {
            background-color: #19005f;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
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
                    <option disabled>
                        <h3 class="op">Xiaomi</h3>
                    </option>
                    <option value="consulta1">
                        <h3 class="op">Consulta</h3>
                    </option>
                    <option selected value="altas1">
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
                    <option value="consulta3">
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
    <main>
        <script>
            function confirmarEliminacion(event) {
                var id = document.getElementById('subir').value;
                var confirmar = confirm("¿Estás seguro de que deseas subir el registro?");
                if (!confirmar) {
                    event.preventDefault(); // Evita el envío del formulario
                }
            }
        </script>
        <div class="content" id="content">
            <h2 style="padding-top: 1%; padding-bottom: 2%">Alta - Xiaomi</h2>
            <form action="subir.php" method="POST" enctype="multipart/form-data" onsubmit="confirmarEliminacion(event)">
                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" id="modelo" required><br>
                <label for="año">Año de Lanzamiento:</label>
                <input type="number" name="año" id="año" min="2000" max="2100" required><br>
                <label for="gama">Gama:</label>
                <input type="text" name="gama" id="gama" required><br>
                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" id="imagen" required accept="image/png, image/jpeg"><br>
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" min="0" step="0.01" required><br>
                <input type="submit" value="Subir" id="subir">
                <input type="reset" value="Reset">
            </form>

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