<?php include ("header.php") ?>
<div class="contenedor_flex">
    <section class="contenido">
        <br>
       <h1>Contactanos</h1>
       <br>
       <div class="contacto_telefonos">
       <ul>
            <li>Teléfono: 3524-7892</li>
            <li>E-mail: aychihuahua@gmail.com</li>
            <li>Siguenos en Instagram</li>
        </ul>
        </div>
        <br>
       <h1>Nuestros Horarios</h1>
       <br>
       <div class="contacto_horarios">
       <ul>
            <li>L. a V. 9.00 a 14.00 hs</li>
            <li>L. a V. 16.00 a 19.00 hs</li>
            <li>S. 9.00 a 14.00 hs</li>
        </ul>
    </section>
</div>
<br>
<section class="contacto__formulario">
    <h1>Escribinos</h1>
    <div>
        <form action="enviar_consulta.php" method="post">
            <input type="text" name= "nombre" class="contacto_input" placeholder="Nombre">
            <input type="text" name= "apellido" class="contacto_input" placeholder="Apellido">
            <input type="text" name= "mail" class="contacto_input" placeholder="Email">
            <textarea name="mensaje" id="" cols="30" rows="10" class="contacto_input" placeholder="Escribí tu mensaje aquí"></textarea>
            <input type="submit" value= "Enviar Fórmulario" class="contacto__btn">

        <?php 
        if (isset ($_GET ['ok']))
            echo "<h3> Su mensaje ha sido enviado con exito <h3>";
        ?>
        </form>
    </div>
</section>
<br>
<div class="texto">
        Los tiempos de envío varían según la provincia y localidad. Los mismos no dependen de la tienda sino del tipo de correo seleccionado y la zona de envío.
</div>
    <br>
<?php include ("footer.php") ?>