// Función para editar un registro
function editRecord(id) {
    // Aquí puedes redirigir a la página de edición del registro con el ID proporcionado.
    window.location.href = "editar_registro.php?id=" + id;
}

// Función para eliminar un registro
function deleteRecord(id) {
    if (confirm("¿Estás seguro de que deseas eliminar este registro?")) {
        // Realizar una petición AJAX para eliminar el registro de la base de datos
        fetch("eliminar_registro.php?id=" + id, {
            method: "DELETE"
        })
            .then(response => {
                if (response.ok) {
                    alert("Registro eliminado con éxito.");
                    location.reload(); // Recargar la página para reflejar los cambios
                } else {
                    alert("Error al eliminar el registro.");
                }
            })
            .catch(error => {
                console.error("Error:", error);
            });
    }
}