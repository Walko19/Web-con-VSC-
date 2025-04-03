<?php get_header(); ?>
<div class="content">
    <h1>Contacto</h1>
    <form>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <label for="email">Correo:</label>
        <input type="email" id="email" name="email">
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje"></textarea>
        <button type="submit">Enviar</button>
    </form>
</div>
<?php get_footer(); ?>
