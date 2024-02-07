<?php
// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "control_sena";

$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión a la base de datos
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Comprobar si se ha enviado el ID del registro a editar
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Consulta para obtener los datos del registro con el ID proporcionado
    $sql = "SELECT * FROM registros WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Obtener los datos del registro
        $row = $result->fetch_assoc();

        // Procesar el formulario de edición
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los datos actualizados del formulario
            $nuevosNombres = $_POST["nombres"];
            $nuevosApellidos = $_POST["apellidos"];
            $nuevoTipoDocumento = $_POST["tipo_documento"];
            $nuevoNumeroDocumento = $_POST["numero_documento"];
            $nuevoRoll = $_POST["roll"];
            $nuevoNombreTitulada = $_POST["nombre_titulada"];
            $nuevaFichaTitulada = $_POST["ficha_titulada"];
            $nuevaJornada = $_POST["jornada"];
            $nuevoTraeEquipo = $_POST["trae_equipo"];
            $nuevoNumeroSerial = $_POST["numero_serial"];
            $nuevaMarcaEquipo = $_POST["marca_equipo"];
            $nuevoColorEquipo = $_POST["color_equipo"];
            $nuevoTraeVehiculo = $_POST["trae_vehiculo"];
            $nuevoTipoVehiculo = $_POST["tipo_vehiculo"];
            $nuevaMarcaVehiculo = $_POST["marca_vehiculo"];
            $nuevaPlacaVehiculo = $_POST["placa_vehiculo"];
            $nuevoColorBicicleta = $_POST["color_bicicleta"];
            $nuevoSerialBicicleta = $_POST["serial_bicicleta"];

            // Actualizar los datos en la base de datos
            $sqlUpdate = "UPDATE registros SET
                nombres = '$nuevosNombres',
                apellidos = '$nuevosApellidos',
                tipo_documento = '$nuevoTipoDocumento',
                numero_documento = '$nuevoNumeroDocumento',
                roll = '$nuevoRoll',
                nombre_titulada = '$nuevoNombreTitulada',
                ficha_titulada = '$nuevaFichaTitulada',
                jornada = '$nuevaJornada',
                trae_equipo = '$nuevoTraeEquipo',
                numero_serial = '$nuevoNumeroSerial',
                marca_equipo = '$nuevaMarcaEquipo',
                color_equipo = '$nuevoColorEquipo',
                trae_vehiculo = '$nuevoTraeVehiculo',
                tipo_vehiculo = '$nuevoTipoVehiculo',
                marca_vehiculo = '$nuevaMarcaVehiculo',
                placa_vehiculo = '$nuevaPlacaVehiculo',
                color_bicicleta = '$nuevoColorBicicleta',
                serial_bicicleta = '$nuevoSerialBicicleta'
                WHERE id = $id";

            if ($conn->query($sqlUpdate) === TRUE) {
                echo "Registro actualizado con éxito.";
            } else {
                echo "Error al actualizar el registro: " . $conn->error;
            }
        }
    } else {
        echo "No se encontró el registro con ID: $id";
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilos_editar_registro.css">
    <script src="../scripts/script_editar_registro.js"></script>
    <title>Editar Registro</title>

</head>
<body>
<h2>Editar Registro</h2>
    <form id="edit-form" action="editar_registro.php?id=<?php echo $id; ?>" method="post">
        <div class="form-group">
            <label for="nombres">Nombres:</label>
            <input type="text" id="nombres" name="nombres" value="<?php echo $row["nombres"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" value="<?php echo $row["apellidos"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="tipo-documento">Tipo de Documento:</label>
            <select id="tipo-documento" name="tipo_documento" required>
                <option value="cc" <?php echo ($row["tipo_documento"] === "cc") ? "selected" : ""; ?>>Cédula de Ciudadanía</option>
                <option value="ce" <?php echo ($row["tipo_documento"] === "ce") ? "selected" : ""; ?>>Cédula Extranjera</option>
                <option value="ti" <?php echo ($row["tipo_documento"] === "ti") ? "selected" : ""; ?>>Tarjeta de Identidad</option>
            </select>
        </div>
        <div class="form-group">
            <label for="numero-documento">Número de Documento:</label>
            <input type="text" id="numero-documento" name="numero_documento" value="<?php echo $row["numero_documento"]; ?>" required>
        </div>
        <div class="form-group">
            <label for="roll">Roll:</label>
            <select id="roll" name="roll" onchange="showAdditionalFields()" required>
                <option value="aprendiz" <?php echo ($row["roll"] === "aprendiz") ? "selected" : ""; ?>>Aprendiz</option>
                <option value="instructor" <?php echo ($row["roll"] === "instructor") ? "selected" : ""; ?>>Instructor</option>
                <option value="administrativo" <?php echo ($row["roll"] === "administrativo") ? "selected" : ""; ?>>Administrativo</option>
                <option value="visitante" <?php echo ($row["roll"] === "visitante") ? "selected" : ""; ?>>Visitante</option>
            </select>
        </div>
        <div class="form-group" id="aprendiz-fields">
            <label for="nombre-titulada">Nombre de Titulada:</label>
            <input type="text" id="nombre-titulada" name="nombre_titulada" value="<?php echo $row["nombre_titulada"]; ?>">
            <label for="ficha-titulada">Ficha de Titulada:</label>
            <input type="text" id="ficha-titulada" name="ficha_titulada" value="<?php echo $row["ficha_titulada"]; ?>">
            <label for="jornada">Jornada:</label>
            <select id="jornada" name="jornada">
                <option value="manana" <?php echo ($row["jornada"] === "mañana") ? "selected" : ""; ?>>Mañana</option>
                <option value="tarde" <?php echo ($row["jornada"] === "tarde") ? "selected" : ""; ?>>Tarde</option>
                <option value="noche" <?php echo ($row["jornada"] === "noche") ? "selected" : ""; ?>>Noche</option>
            </select>
        </div>
        <div class="form-group">
            <label for="trae-equipo">¿Trae equipo?:</label>
            <select id="trae-equipo" name="trae_equipo" onchange="showEquipmentFields()" required>
                <option value="no" <?php echo ($row["trae_equipo"] === "no") ? "selected" : ""; ?>>No</option>
                <option value="si" <?php echo ($row["trae_equipo"] === "si") ? "selected" : ""; ?>>Sí</option>
            </select>
        </div>
        <div class="form-group" id="equipo-fields">
            <label for="numero-serial">Número Serial:</label>
            <input type="text" id="numero-serial" name="numero_serial" value="<?php echo $row["numero_serial"]; ?>">
            <label for="marca-equipo">Marca del Equipo:</label>
            <input type="text" id="marca-equipo" name="marca_equipo" value="<?php echo $row["marca_equipo"]; ?>">
            <label for="color-equipo">Color del Equipo:</label>
            <input type="text" id="color-equipo" name="color_equipo" value="<?php echo $row["color_equipo"]; ?>">
        </div>
        <div class="form-group">
            <label for="trae-vehiculo">¿Trae vehículo?:</label>
            <select id="trae-vehiculo" name="trae_vehiculo" onchange="showVehicleFields()" required>
                <option value="no" <?php echo ($row["trae_vehiculo"] === "no") ? "selected" : ""; ?>>No</option>
                <option value="si" <?php echo ($row["trae_vehiculo"] === "si") ? "selected" : ""; ?>>Sí</option>
            </select>
        </div>
        <div class="form-group" id="vehiculo-fields">
            <label for="tipo-vehiculo">Tipo de Vehículo:</label>
            <select id="tipo-vehiculo" name="tipo_vehiculo" onchange="updateBicycleFields()" required>
                <option value="carro" <?php echo ($row["tipo_vehiculo"] === "carro") ? "selected" : ""; ?>>Carro</option>
                <option value="moto" <?php echo ($row["tipo_vehiculo"] === "moto") ? "selected" : ""; ?>>Moto</option>
                <option value="bicicleta" <?php echo ($row["tipo_vehiculo"] === "bicicleta") ? "selected" : ""; ?>>Bicicleta</option>
            </select>
            <label for="marca-vehiculo">Marca del Vehículo:</label>
            <input type="text" id="marca-vehiculo" name="marca_vehiculo" value="<?php echo $row["marca_vehiculo"]; ?>">
            <label for="placa-vehiculo">Placa del Vehículo:</label>
            <input type="text" id="placa-vehiculo" name="placa_vehiculo" value="<?php echo $row["placa_vehiculo"]; ?>">
            <div id="bicycle-fields">
                <label for="color-bicicleta">Color de la Bicicleta:</label>
                <input type="text" id="color-bicicleta" name="color_bicicleta" value="<?php echo $row["color_bicicleta"]; ?>">
                <label for="serial-bicicleta">Serial de la Bicicleta:</label>
                <input type="text" id="serial-bicicleta" name="serial_bicicleta" value="<?php echo $row["serial_bicicleta"]; ?>">
            </div>
        </div>
        <div class="form-group">
            <button type="submit">Guardar Cambios</button>
        </div>
    </form>
    
</body>
</html>
