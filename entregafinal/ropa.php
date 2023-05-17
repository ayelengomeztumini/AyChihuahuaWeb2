<?php include ("header.php") ?>
<div class="contenido_ropa">
    <section class="contenido">
        <h3><a href="ropa.php?ropa=rv">Verano</a></h3>
        <h3><a href="ropa.php?ropa=ri">Invierno</a></h3>
        <h3><a href="ropa.php?ropa=rf">Fiestas y ocasiones especiales</a></h3>
    </section> 

    <?php
$img1 = "";
$nombre1 = "";
$precio1 = "";
$img2 = "";
$nombre2 = "";
$precio2="";
$img3 = "";
$nombre3 = "";
$precio3="";
if(isset($_GET["ropa"])){
    switch(($_GET["ropa"])){
        case "rv" :
            $img1 = "./img/vestido1.JPG";
            $nombre1 = "solero floral";
            $precio1 = "2.500 ARS";
            $img2 = "./img/vestido2.JPG";
            $nombre2 = "Vestido Corazones Violeta";
            $precio2="1.500 ARS";
            $img3 = "./img/vestido3.JPG";
            $nombre3 = "Musculosa Corazón Azul";
            $precio3="2.000 ARS";
            break;
        case "ri" :
            $img1 = "./img/campera.JPG";
            $nombre1 = "Campera Minnie";
            $precio1 = "5.500 ARS";
            $img2 = "./img/buzito.JPG";
            $nombre2 = "Buzito Francia";
            $precio2="2.500 ARS";
            $img3 = "./img/campera2.JPG";
            $nombre3 = "Campera Tricolor";
            $precio3="3.500 ARS";
            break;
        case "rf" :
            $img1 = "./img/navidad1.JPG";
            $nombre1 = "Enteritos Navidad";
            $precio1 = "2.500 ARS";
            $img2 = "./img/navidad2.JPG";
            $nombre2 = "Vestido Navidad Verde";
            $precio2="3.500 ARS";
            $img3 = "./img/navidad3.JPG";
            $nombre3 = "Vestido Navidad";
            $precio3="3.500 ARS";
            break;
        }
}
?>
<div class="info_ropa">
    <a href="<?php echo $img1; ?>" data-lightbox="image-1" data-title="Ay Chihuahua Ropa">
        <img src="<?php echo $img1; ?>">
    </a>
    <p><?php echo $nombre1; ?></p>
    <p><?php echo $precio1; ?></p>
    <br>
    <a href="<?php echo $img2; ?>" data-lightbox="image-1" data-title="Ay Chihuahua Ropa">
        <img src="<?php echo $img2; ?>">
    </a>
    <p><?php echo $nombre2; ?></p>
    <p><?php echo $precio2; ?></p>
    <br>
    <a href="<?php echo $img3; ?>" data-lightbox="image-1" data-title="Ay Chihuahua Ropa">
        <img src="<?php echo $img3; ?>">
    </a>
    <p><?php echo $nombre3; ?></p>
    <p><?php echo $precio3; ?></p>
</div>
<br>
<div class="texto">
        Los tiempos de envío varían según la provincia y localidad. Los mismos no dependen de la tienda sino del tipo de correo seleccionado y la zona de envío.
    </div>
    <br>
<?php include ("footer.php") ?>