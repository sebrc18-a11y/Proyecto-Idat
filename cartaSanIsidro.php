<?php
$tituloPagina = "Carta San Isidro | Granja Azul";
$estiloPagina = 'CSS/estiloCartaSanIsidro.css';
include 'encabezado.php';
?>

<main class="main-cartasSanIsidro">
    <section class="cuadro-cartas-SanIsidro">
        <div class="cartaSanIsidro">
            <a href="PDF/cartagranjaazulgrill.pdf" target="_blank">
                <img src="Imagenes/flor_peq.png" class="flor-carta-SanIsidro">CARTA SALON<img
                    src="Imagenes/flor_peq.png" class="flor-carta-SanIsidro">
            </a>
        </div>
        <div class="cartaSanIsidro">
            <a href="PDF/Restobar-Granja-Azul-Grill.pdf" target="_blank">
                <img src="Imagenes/flor_peq.png" class="flor-carta-SanIsidro">CARTA TERCER PISO<img
                    src="Imagenes/flor_peq.png" class="flor-carta-SanIsidro">
            </a>
        </div>
    </section>
</main>

<?php include('footer.php'); ?>