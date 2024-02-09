<h1 class="nombre-pagina">Olvide mi password</h1>
<p class="descripcion-pagina">Reestablece tu password escribiendo tu email a continuación</p>

<?php
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form action="/olvide" class="formulario" method="POST">

    <div class="campo">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Ej: correo@correo.com">
    </div>

    <input type="submit" value="Enviar" class="boton">

</form>

<div class="acciones">
    <a href="/">¿Ya tienes cuenta? Inicia sesión</a>
    <a href="/crear-cuenta">Crear cuenta</a>
</div>