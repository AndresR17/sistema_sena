<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilos_formulario_vigilancia.css">
    <script src="../scripts/script_formulario_vigilacia.js"></script>
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
