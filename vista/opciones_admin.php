<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
</head>
<body>
    <div class="container">
        <h1>¿Qué quieres hacer?</h1>
        <div class="button-container">
            <a href="../vista/Formulario_registro.php" class="button">Registrar</a>
            <a href="../vista/Formulario_vigilancia.php" class="button">Consultar</a>
        </div>
    </div>
</body>
</html>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgba(0, 0, 0, 0.832);
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 350px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 24px;
        }

        .button-container {
            margin-top: 20px;
        }

        .button {
            display: block;
            width: 100%;
            padding: 10px 0;
            margin-bottom: 10px;
            background-color: #007BFF;
            color: black;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            text-decoration: none;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
