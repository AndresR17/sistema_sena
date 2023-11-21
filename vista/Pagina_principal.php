<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SACI</title>
    <style>
        * {
            margin: 0;
            padding:0;
            box-sizing: border-box;
        }
        header{
            width: 100%;
            height: 150px;
            padding:0%;
            margin: 0% auto;
            position: static;
            background-color: white;
            align-items: center;
            display: flex;
            border-bottom: solid 2px black;
        }
        .contenedor-logo img{
            width:100px;
            height: 100px;
        }
        .contenedor-logo{
            padding-left:9rem;
    
        }
        .contenedor-menu{
            margin-left: auto;
            padding:0%;
            margin:0%;
            width: 100%;
            height:min-content;
    
        }
        ul{
            display:flex;
            padding-left: 75%;            

            
        }
        ul a{
            list-style: none;
            padding-right: 2rem;
            text-decoration: none;
            color: black;
            font-size: 25px;
            
        }
        /* estilos login */
    
        section{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            background-size:contain;
            background-position: center;
            margin-top: 0 ;
            /* animation: animatebg 5s linear infinite; */
        }
        /* @keyframes animatebg{ 
            100%{
                filter:hue-rotate(360deg);
            }
        }*/
        .caja-login{
            position: relative;
            width: 400px;
            height: 450px;
            background: transparent;
            border: 2px solid black;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            /* backdrop-filter: blur(15px);    */
        }
        h2{
            font-size: 2em;
            color: black;
            text-align: center;
        }
        .caja-input{
            position: relative;
            width: 310px;
            margin: 40px 0;
            border-bottom: 2px solid gray;
        }
        .caja-input label{
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            font-size: 1rem;
            color: gray;
            pointer-events:none;
            transition: .3s;
        }
        .caja-input input:focus~label,
        .caja-input input:valid~label{
            top: -5px;
        }

        .caja-input input{
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            color: black;
            padding: 0 35px 0 5px;
        }
        .caja-input .icono{
            position: absolute;
            right: 8px;
            color: gray;
            font-size: 1.2em;
            line-height: 57px;
        }
        .recuerdame {
            margin: -15px 0 15px;
            font-size: .9em;
            color: gray;
            display: flex;
            justify-content: space-between;
        }
        .recuerdame label input{
            margin-right: 3px;
        }
        .recuerdame a{
            color: gray;
            text-decoration: none;
        }
        .recuerdame a:hover{
            text-decoration: underline;
        }
        button{
            width: 100%;
            height: 40px;
            background: white;
            border: none;
            outline: none;
            border-radius: 40px;
            cursor: pointer;
            font-size: 1em;
            color: black;
            font-weight: 500;
        }
        button:hover{
            background: gray;
        }
        .link-registro{
            font-size: .9em;
            color: gray;
            text-align: center;
            margin: 25px 0 10px;
        }
        .link-registro p a{
            color: gray;
            text-decoration: none;
            font-weight: 600;
        }
        .link-registro p a:hover{
            text-decoration: underline;
        }
        @media (max-width: 360px) {
            .caja-login{
                width: 100%;
                height: 100vh;
                border: none;
                border-radius: 0;
            }
            .caja-input{
                width: 290px;
            }
        }
    </style>
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

<script>
    function validarcredenciales() {
        var username = document.getElementById("usuario").value;
        var password = document.getElementById("contraseña").value;
        // Verificar si las credenciales son válidas.
        if (username === "jonathan" && password === "12345") {
            // Redirigir a la otra página.
            window.location.href = "opciones_admin.php";
        } else {
            alert("El usuario o contraseña ingresados son incorrectos.");
        }
    }
</script>

  
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
