<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualización de Datos</title>
</head>
<body>
    <h2>Datos Registrados</h2>

    
    <table>
        <thead>
            <tr>
                <!-- <th>id</th> -->
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Tipo de documento</th>
                <th>Numero de documento</th>
                <th>Roll</th>
                <th>Nombre de titulada</th>
                <th>Ficha de titulada</th>
                <th>Jornada</th>
                <th>Trae equipo?</th>
                <th>Serial del equipo</th>
                <th>Marca del equipo</th>
                <th>Color del equipo</th>
                <th>Trae vehiculo?</th>
                <th>Tipo de vehiculo</th>
                <th>Marca del vehiculo</th>
                <th>Placa del vehiculo</th>
                <th>Color de la bicicleta</th>
                <th>Serial de la bicicleta</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Conexión a la base de datos
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "control_sena";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Consulta para obtener los registros
            $sql = "SELECT * FROM registros";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    // echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["nombres"] . "</td>";
                    echo "<td>" . $row["apellidos"] . "</td>";
                    echo "<td>" . $row["tipo_documento"] . "</td>";
                    echo "<td>" . $row["numero_documento"] . "</td>";
                    echo "<td>" . $row["roll"] . "</td>";
                    echo "<td>" . $row["nombre_titulada"] . "</td>";
                    echo "<td>" . $row["ficha_titulada"] . "</td>";
                    echo "<td>" . $row["jornada"] . "</td>";
                    echo "<td>" . $row["trae_equipo"] . "</td>";
                    echo "<td>" . $row["numero_serial"] . "</td>";
                    echo "<td>" . $row["marca_equipo"] . "</td>";
                    echo "<td>" . $row["color_equipo"] . "</td>";
                    echo "<td>" . $row["trae_vehiculo"] . "</td>";
                    echo "<td>" . $row["tipo_vehiculo"] . "</td>";
                    echo "<td>" . $row["marca_vehiculo"] . "</td>";
                    echo "<td>" . $row["placa_vehiculo"] . "</td>";
                    echo "<td>" . $row["color_bicicleta"] . "</td>";
                    echo "<td>" . $row["serial_bicicleta"] . "</td>";
                    echo "<td class='action-buttons'>
                            <button class='edit-button' onclick='editRecord(" . $row["id"] . ")'>Editar</button>
                            <button class='delete-button' onclick='deleteRecord(" . $row["id"] . ")'>Eliminar</button>
                          </td>";
                    echo "</tr>";
                
                }
            } else {
                echo "No hay registros";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>

<script>
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
    </script>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgba(0, 0, 0, 0.832);
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #fff;
            padding: 10px;
            margin: 0 auto; /* Centrar horizontalmente en la pantalla */
            width: 80%;
        }

        table {
            border-collapse: collapse;
            width: 80%; /* Menos ancho */
            background-color: #ffffffc8;;
            margin: 30px auto; /* Centrar la tabla en la página */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra ligera */
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 12px;
        }

        th {
            background-color: #ffffffc8;
            color: black;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .edit-button, .delete-button {
            background-color: #007BFF;
            color: #fff;
            padding: 8px 16px;
            border: none;
            cursor: pointer;
            margin: 4px;
        }

        .delete-button {
            background-color: #dc3545;
        }
    </style>
    <script>
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
    </script>
