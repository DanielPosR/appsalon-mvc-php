<h1 class="nombre-pagina">Reestablece tu password</h1>
<p class="descripcion-pagina">Define un nuevo password a continuación</p>

<?php
include_once __DIR__ . "/../templates/alertas.php";
?>

<?php if ($error) return; ?>
<form method="POST" class="formulario">

    <div class="campo">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Tu nuevo password">
    </div>

    <input type="submit" value="Guardar Password" class="boton">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes cuenta? Iniciar Sesión</a>
    <a href="/crear-cuenta">¿Aún no te registras? Crear Cuenta</a>
</div>