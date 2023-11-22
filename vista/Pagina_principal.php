<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilos_pagina_principal.css">
    <script src="../scripts/script_pagina_principal.js"></script>
    <title>SACI</title>
</head>
<body>
    <header>
        <div class="contenedor-logo">
            <img src="../imagenes/logo-sena-negro-png-2022.png" alt="">
        </div>
        <div class="contenedor-menu">
       <ul>
            <a href="../vista/Pagina_principal.php">Inicio</a>
            <a href="../vista/Login.php">Iniciar Seción</a>
            <a href="">SACI</a>
       </ul>
        </div>
    </header>

    <section>
    <div class="caja-login">
        <form id="login-form" action="../vista/opciones_admin.php" method="POST">
            <h2>LOGIN</h2>
            <div class="caja-input">
                <span class="icono"><ion-icon name="mail"></ion-icon></span>
                <input id="usuario" name="usuario" type="text" required value="" autocomplete="off">
                <label>Ingrese Usuario</label>
            </div>
            <div class="caja-input">
                <span class="icono"><ion-icon name="lock-closed"></ion-icon></span>
                <input id="contraseña" name="contraseña" type="password" required value="">
                <label>Ingrese Contraseña</label>
            </div>
            <div class="recuerdame">
                <label><input type="checkbox">Recuerdame</label>
                <a href="#">Olvidé mi contraseña</a>
            </div>
            <button id="button" type="button" onclick="validarcredenciales()">Ingresar</button>
            <div class="link-registro">
                <p>¿No tienes cuenta? <a href="#">Registrarse</a></p>
            </div>
        </form>
    </div>
</section>
</body>
</html>  

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
