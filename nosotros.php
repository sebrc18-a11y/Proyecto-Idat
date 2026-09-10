<?php
$tituloPagina = "Nosotros | Granja Azul";
$estiloPagina = 'CSS/estiloNosotros.css';
include 'encabezado.php';
?>
<main class="main-nosotros">
    <section class="info-nosotros">
        <img class="flor-pequeña" src="Imagenes/flor_peq.png">
        <h2>DESDE HACE 76 AÑOS</h2>
        <h3>somos pioneros</h3>
        <p>y creadores del pollo a la brasa. Un sabor inigualable y reconocido convertido en una tradición que se
            comparte de generación en generación.</p>
    </section>

    <div class="img-nost1">
        <img src="Imagenes/nosotros1.png">
    </div>

    <section class="nosotros-cuadro">
        <div id="info-espacio">
            <div class="text-nosotros">
                <h2>NUESTRO ESPACIO</h2>
                <h3>es el lugar preferido</h3>
                <p>
                    para disfrutar momentos inolvidables en familia y con amigos, quienes sentados alrededor de una mesa
                    comparten anécdotas e historias en una atmósfera acogedora y única.
                </p>
                <img src="Imagenes/linea-flores.png">
            </div>
            <div class="img-nosotros">
                <img src="Imagenes/nosotros2.png">
            </div>
        </div>
    </section>

    <section class="nosotros-cuadro">
        <div id="info-familia">
            <div class="img-nosotros">
                <img src="Imagenes/nosotros3.png">
            </div>
            <div class="text-nosotros">
                <h2>NUESTRO FAMILIA</h2>
                <h3>crece y se fortalece</h3>
                <p>
                    porque siempre estaremos listos para reencontrarnos, descubriendo nuevas maneras para seguir
                    disfrutando del sabor de la tradición.
                </p>
                <img src="Imagenes/linea-flores.png">
            </div>
        </div>
    </section>

</main>
<?php include('footer.php'); ?>