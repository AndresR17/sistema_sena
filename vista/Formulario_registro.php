<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<!-- estilos css -->
<style>

  body {
  font-family: Arial, sans-serif;
  background-color: rgba(0, 0, 0, 0.832);
  background-repeat: no-repeat;
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

.container {
  background-color: #ffffffc8;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  max-width: 400px;
  width: 100%;
}

h2 {
  text-align: center;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input, select {
  width: 100%;
  padding: 8px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 10px;
}

button {
  background-color: #007BFF;
  color: #fff;
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  border-radius: 20px;
  cursor: pointer;
}

button[type="submit"] {
  background-color: #28a745;
  margin-left: 10px;
}

button[type="submit"]:hover {
  background-color: #218838;
}

button[type="button"] {
  background-color: #dc3545;
}

button[type="button"]:hover {
  background-color: #c82333;
}

#aprendiz-fields, #equipo-fields, #vehiculo-fields {
  display: none;
}

/* Media Queries para responsive */
@media screen and (max-width: 600px) {
  .container {
    max-width: 100%;
  }

  input, select, button {
    font-size: 14px;
  }
}

@media screen and (max-width: 400px) {
  input, select, button {
    font-size: 12px;
  }
}
    </style>

<!-- java script -->
<script>
    
  function showAdditionalFields() {
  const roll = document.getElementById('roll').value;
  const aprendizFields = document.getElementById('aprendiz-fields');
  const equipoFields = document.getElementById('equipo-fields');

  if (roll === 'aprendiz') {
      aprendizFields.style.display = 'block';
  } else {
      aprendizFields.style.display = 'none';
  }

  // Ocultar campos adicionales de equipo y vehículo
  equipoFields.style.display = 'none';
  document.getElementById('vehiculo-fields').style.display = 'none';
}

function showEquipmentFields() {
  const traeEquipo = document.getElementById('trae-equipo').value;
  const equipoFields = document.getElementById('equipo-fields');

  if (traeEquipo === 'si') {
      equipoFields.style.display = 'block';
  } else {
      equipoFields.style.display = 'none';
  }
}
function showVehicleFields() {
  const traeVehiculo = document.getElementById('trae-vehiculo').value;
  const vehiculoFields = document.getElementById('vehiculo-fields');

  if (traeVehiculo === 'si') {
      vehiculoFields.style.display = 'block';
  } else {
      vehiculoFields.style.display = 'none';
  }
}

function updateBicycleFields() {
  const tipoVehiculo = document.getElementById('tipo-vehiculo').value;
  const marcaVehiculoLabel = document.getElementById('marca-vehiculo-label');
  const placaVehiculoLabel = document.getElementById('placa-vehiculo-label');
  const colorBicicletaLabel = document.getElementById('color-bicicleta-label');
  const serialBicicletaLabel = document.getElementById('serial-bicicleta-label');
  const marcaVehiculoInput = document.getElementById('marca-vehiculo');
  const placaVehiculoInput = document.getElementById('placa-vehiculo');
  const colorBicicletaInput = document.getElementById('color-bicicleta');
  const serialBicicletaInput = document.getElementById('serial-bicicleta');

  if (tipoVehiculo === 'bicicleta') {
      marcaVehiculoLabel.style.display = 'none';
      placaVehiculoLabel.style.display = 'none';
      marcaVehiculoInput.style.display = 'none';
      placaVehiculoInput.style.display = 'none';
      colorBicicletaLabel.style.display = 'block';
      serialBicicletaLabel.style.display = 'block';
      colorBicicletaInput.style.display = 'block';
      serialBicicletaInput.style.display = 'block';
  } else {
      marcaVehiculoLabel.style.display = 'block';
      placaVehiculoLabel.style.display = 'block';
      marcaVehiculoInput.style.display = 'block';
      placaVehiculoInput.style.display = 'block';
      colorBicicletaLabel.style.display = 'none';
      serialBicicletaLabel.style.display = 'none';
      colorBicicletaInput.style.display = 'none';
      serialBicicletaInput.style.display = 'none';
  }
}

function clearForm() {
  document.getElementById('registration-form').reset();
  // Ocultar campos adicionales al limpiar el formulario
  document.getElementById('aprendiz-fields').style.display = 'none';
  document.getElementById('equipo-fields').style.display = 'none';
  document.getElementById('vehiculo-fields').style.display = 'none';
}

    // Mostrar campos adicionales al cargar la página
    showAdditionalFields();
    showEquipmentFields();
    showVehicleFields();
</script>
