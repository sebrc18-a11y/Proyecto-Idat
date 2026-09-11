<?php
$tituloPagina = "Delivery | Granja Azul";
$estiloPagina = 'CSS/estiloDelivery.css';
include 'encabezado.php';
?>
<main class="main-delivery">
    <a href="carrito.php" class="carta-delivery">CARTA DELIVERY</a>
    <img src="Imagenes/flor-delivery.png" class="flor-delivery">

    <section class="paginas-delivery">
        <div class="enlaces-delivery">
            <p>Por web</p>
            <a href="https://pedidos.granja-azul.com/" target="_blank">PEDIR</a>
        </div>
        <div class="enlaces-delivery">
            <p>Por Rappi</p>
            <a href="https://rappi.com/" target="_blank">PEDIR</a>
        </div>
        <div class="enlaces-delivery">
            <p>Por PedidosYa</p>
            <a href="https://www.pedidosya.com/" target="_blank">PEDIR</a>
        </div>
    </section>

    <section class="horarios-delivery">
        <div class="horarios">
            <h2>Horarios de recepción de pedidos</h2>
            <br>
            <p>De Lunes a Sabado de 12 pm. a 10 pm.</p>
            <p>y Domingos de 11:30 am. a 8 pm.</p>
            <br>
            <p class="cursiva-delivery"><strong>*Verificar en cada app la zona de cobertura</strong></p>
        </div>
    </section>

</main>
<div class="imagen-delivery">
    <img src="Imagenes/fondo-delivery.png">
</div>

<?php include('footer.php'); ?>