<?php
$tituloPagina = "Cartas | Granja Azul";
$estiloPagina = 'CSS/estiloCartas.css';
include 'encabezado.php';
?>

<main class="main-cartas">
    <section class="cuadro-cartas">
        <img src="Imagenes/flor_peq.png" class="flor-carta">
        <div class="carta">
            <a href="cartaSanIsidro.php">CARTA SAN ISIDRO - EL POLO</a>
        </div>
        <div class="carta">
            <a href="PDF/cartagranjaazulsantaclara.pdf" target="_blank">CARTA SANTA CLARA</a>
        </div>
    </section>
</main>

<?php include('footer.php'); ?>