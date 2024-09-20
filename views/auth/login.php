

<div class="contenedor">
    <h1>UpTask</h1>
    <p>Crea y Administra tus Proyectos</p>
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar sesion</p>
    <form class="formulario" method="POST" action="/">
        <div class="campo">
            <label for="email">Email</label>
            <input type="email" placeholder="Tu email" id="email" name="email">
        </div>
        <div class="campo">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Tu password">
        </div>
        <input type="submit" class="boton" value="Iniciar sesion">
    </form>
    <!-- </div> container mic -->
     <div class="acciones">
        <a href="/crear">No tienes una cuenta? Crea una</a>
        <a href="/olvide">Te has olivado la contrasena ? Recuperalaa</a>
     </div>
</div>