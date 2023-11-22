// Función para mostrar u ocultar campos relacionados con el tipo de roll
function showAdditionalFields() {
    var roll = document.getElementById("roll").value;
    var aprendizFields = document.getElementById("aprendiz-fields");

    if (roll === "aprendiz") {
        aprendizFields.style.display = "block";
    } else {
        aprendizFields.style.display = "none";
    }
}

// Función para mostrar u ocultar campos relacionados con si trae equipo
function showEquipmentFields() {
    var traeEquipo = document.getElementById("trae-equipo").value;
    var equipoFields = document.getElementById("equipo-fields");

    if (traeEquipo === "si") {
        equipoFields.style.display = "block";
    } else {
        equipoFields.style.display = "none";
    }
}

// Función para mostrar u ocultar campos relacionados con si trae vehículo
function showVehicleFields() {
    var traeVehiculo = document.getElementById("trae-vehiculo").value;
    var vehiculoFields = document.getElementById("vehiculo-fields");
    var bicycleFields = document.getElementById("bicycle-fields");

    if (traeVehiculo === "si") {
        vehiculoFields.style.display = "block";
        updateBicycleFields();
    } else {
        vehiculoFields.style.display = "none";
        bicycleFields.style.display = "none";
    }
}

// Función para mostrar u ocultar campos relacionados con el tipo de vehículo (solo cuando es bicicleta)
function updateBicycleFields() {
    var tipoVehiculo = document.getElementById("tipo-vehiculo").value;
    var bicycleFields = document.getElementById("bicycle-fields");

    if (tipoVehiculo === "bicicleta") {
        bicycleFields.style.display = "block";
    } else {
        bicycleFields.style.display = "none";
    }
}

// Llamar a las funciones de inicialización
showAdditionalFields();
showEquipmentFields();
showVehicleFields();