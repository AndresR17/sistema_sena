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

