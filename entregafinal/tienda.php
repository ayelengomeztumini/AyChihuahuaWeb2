<?php include ("header.php") ?>
<section>
        <div class="encabezado">
            <ul>
                <li><a href="tienda.php?menu=ro">Ropa</a></li>
                <li><a href="tienda.php?menu=ju">Juguetes</a></li>
                <li><a href="tienda.php?menu=ca">Camas</a></li>
                <li><a href="tienda.php?menu=im">Importados</a></li>
            </ul>
        </div>
<?php
$ropa = "";
$juguetes = "";
$cama = "";
$importados = "";
$img = "";
$ruta="";
if(isset($_GET["menu"])){
    switch(($_GET["menu"])){
        case "ro" :
            $ropa = "En esta sección encontraras todas las novedades en ropita para tu mascota. Desde ropa de verano, invierno, ocasiones especiales y mucho mas.
            Para ver todas tus opciones hace click en la imágen y elegí lo que mas te guste.";
            $img = "./img/vestido1.JPG";
            $ruta="ropa.php";
            break;
        case "ju" :
            $juguetes = "En esta sección encontraras todas las novedades en juguetes para tu mascota. Podrás encontrar juguetes blandos, duros, de tela, comestibles y mucho mas.
            Para ver todas tus opciones hace click en la imágen y elegí lo que mas te guste.";
            $img = "./img/soga1.JPG";
            $ruta="juguetes.php";
            break;
        case "ca" :
            $cama = "En esta sección encontraras todas las novedades en camitas y estaciones de relax para tu mascota. Podrás encontrar camas nido, camas con estructuras, colchones y mucho mas.
            Para ver todas tus opciones hace click en la imágen y elegí lo que mas te guste.";
            $img = "./img/cama1.JPG";
            $ruta="cama.php";
            break;
        case "im" :
            $importados = "En esta sección encontraras todas las novedades en importados. Podrás encontrar juguetes, ropa y accesorios en general.
            Para ver todas tus opciones hace click en la imágen y elegí lo que mas te guste.";
            $img = "./img/rascador1.JPG";
            $ruta="importados.php";
            break;
        }
}
?>
<div class="info_menu">
    <p><?php echo $ropa; ?></p>
    <p><?php echo $juguetes; ?></p>
    <p><?php echo $cama; ?></p>
    <p><?php echo $importados; ?></p>
<div class="contenedor_img">
    <a href= "<?php echo $ruta; ?>">
    <img src="<?php echo $img; ?>" alt= "<?php echo $ropa ?>">
    </a>
</div>
    </section>
    <br>
    <div class="texto">
        Los tiempos de envío varían según la provincia y localidad. Los mismos no dependen de la tienda sino del tipo de correo seleccionado y la zona de envío.
    </div>
    <br>
<?php include ("footer.php") ?>