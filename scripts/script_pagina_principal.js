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