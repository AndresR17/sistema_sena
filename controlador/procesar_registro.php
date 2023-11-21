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

// Comprobar si se ha enviado un formulario con el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $tipo_documento = $_POST["tipo_documento"];
    $numero_documento = $_POST["numero_documento"];
    $roll = $_POST["roll"];
    $nombre_titulada = $_POST["nombre_titulada"];
    $ficha_titulada = $_POST["ficha_titulada"];
    $jornada = $_POST["jornada"];
    $trae_equipo = $_POST["trae_equipo"];
    $numero_serial = $_POST["numero_serial"];
    $marca_equipo = $_POST["marca_equipo"];
    $color_equipo = $_POST["color_equipo"];
    $trae_vehiculo = $_POST["trae_vehiculo"];
    $tipo_vehiculo = $_POST["tipo_vehiculo"];
    $marca_vehiculo = $_POST["marca_vehiculo"];
    $placa_vehiculo = $_POST["placa_vehiculo"];
    $color_bicicleta = $_POST["color_bicicleta"];
    $serial_bicicleta = $_POST["serial_bicicleta"];

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO registros (nombres, apellidos, tipo_documento, numero_documento, roll, nombre_titulada, ficha_titulada, jornada, trae_equipo, numero_serial, marca_equipo, color_equipo, trae_vehiculo, tipo_vehiculo, marca_vehiculo, placa_vehiculo, color_bicicleta, serial_bicicleta)
    VALUES ('$nombres', '$apellidos', '$tipo_documento', '$numero_documento', '$roll', '$nombre_titulada', '$ficha_titulada', '$jornada', '$trae_equipo', '$numero_serial', '$marca_equipo', '$color_equipo', '$trae_vehiculo', '$tipo_vehiculo', '$marca_vehiculo', '$placa_vehiculo', '$color_bicicleta', '$serial_bicicleta')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

