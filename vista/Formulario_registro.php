<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilos_formulario_registro.css">
    <script src="../scripts/script_formulario_registro.js"></script>
    <title>Registro</title>
</head>
<body>
  <div class="container">
    <!-- Formulario de Registro -->
    
    <form id="registration-form" action="../controlador/procesar_registro.php" method="post">
        <h2>Formulario de Registro</h2>
        <div class="form-group">
            <label for="nombres">Nombres:</label>
            <input type="text" id="nombres" name="nombres" required>
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>
        </div>
        <div class="form-group">
            <label for="tipo-documento">Tipo de Documento:</label>
            <select id="tipo-documento" name="tipo_documento">
                <option value="">-- Seleccione --</option>
                <option value="cc">Cédula de Ciudadanía</option>
                <option value="ce">Cédula Extranjera</option>
                <option value="ti">Tarjeta de Identidad</option>
            </select>
        </div>
        <div class="form-group">
            <label for="numero-documento">Número de Documento:</label>
            <input type="text" id="numero-documento" name="numero_documento" required>
        </div>
        <div class="form-group">
            <label for="roll">Roll:</label>
            <select id="roll" name="roll" onchange="showAdditionalFields()">
                <option value="">-- Seleccione --</option>
                <option value="aprendiz">Aprendiz</option>
                <option value="instructor">Instructor</option>
                <option value="administrativo">Administrativo</option>
                <option value="visitante">Visitante</option>
            </select>
        </div>
        <div class="form-group" id="aprendiz-fields">
            <label for="nombre-titulada">Nombre de Titulada:</label>
            <input type="text" id="nombre-titulada" name="nombre_titulada">
            <label for="ficha-titulada">Ficha de Titulada:</label>
            <input type="text" id="ficha-titulada" name="ficha_titulada">
            <label for="jornada">Jornada:</label>
            <select id="jornada" name="jornada">
                <option value="">-- Seleccione --</option>
                <option value="manana">Mañana</option>
                <option value="tarde">Tarde</option>
                <option value="noche">Noche</option>
            </select>
        </div>
        <div class="form-group">
            <label for="trae-equipo">¿Trae equipo?:</label>
            <select id="trae-equipo" name="trae_equipo" onchange="showEquipmentFields()">
                <option value="">-- Seleccione --</option>
                <option value="no">No</option>
                <option value="si">Sí</option>
            </select>
        </div>
        <div class="form-group" id="equipo-fields">
            <label for="numero-serial">Número Serial:</label>
            <input type="text" id="numero-serial" name="numero_serial">
            <label for="marca-equipo">Marca del Equipo:</label>
            <input type="text" id="marca-equipo" name="marca_equipo">
            <label for="color-equipo">Color del Equipo:</label>
            <input type="text" id="color-equipo" name="color_equipo">
        </div>
        <div class="form-group">
            <label for="trae-vehiculo">¿Trae vehículo?:</label>
            <select id="trae-vehiculo" name="trae_vehiculo" onchange="showVehicleFields()">
                <option value="">-- Seleccione --</option>
                <option value="no">No</option>
                <option value="si">Sí</option>
            </select>
        </div>
        <div class="form-group" id="vehiculo-fields">
            <label for="tipo-vehiculo">Tipo de Vehículo:</label>
            <select id="tipo-vehiculo" name="tipo_vehiculo" onchange="updateBicycleFields()">
                <option value="">-- Seleccione --</option>
                <option value="carro">Carro</option>
                <option value="moto">Moto</option>
                <option value="bicicleta">Bicicleta</option>
            </select>
            <label for="marca-vehiculo" id="marca-vehiculo-label">Marca del Vehículo:</label>
            <input type="text" id="marca-vehiculo" name="marca_vehiculo">
            <label for="placa-vehiculo" id="placa-vehiculo-label">Placa del Vehículo:</label>
            <input type="text" id="placa-vehiculo" name="placa_vehiculo">
            <label for="color-bicicleta" id="color-bicicleta-label">Color de la Bicicleta:</label>
            <input type="text" id="color-bicicleta" name="color_bicicleta">
            <label for="serial-bicicleta" id="serial-bicicleta-label">Serial de la Bicicleta:</label>
            <input type="text" id="serial-bicicleta" name="serial_bicicleta">
        </div>
        <div class="form-group">
            <button type="button" onclick="clearForm()">Limpiar</button>
            <button type="submit">Registrar</button>
        </div>
    </form>
  </div>
</body>
</html>
