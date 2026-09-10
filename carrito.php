<?php
$tituloPagina = "Carta Delivery | Granja Azul";
$estiloPagina = 'CSS/estiloCarrito.css';
include 'encabezado.php';
?>
<main class="contenedor-principal">
    <script src="JS/carrito.js" defer></script>

    <section class="menu-seccion">
        <h1>Menu Delivery - Granja Azul</h1>

        <h2>Especialidad</h2>
        <div class="grid-productos">
            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="1 Pollo Granja Azul">
                <div class="card-body">
                    <h5 class="card-title">1 Pollo Granja Azul<br><span>S/ 98.00</span></h5>
                    <button onclick="agregar('1 Pollo Granja Azul', 98.00)">Agregar</button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="1/2 Pollo Granja Azul">
                <div class="card-body">
                    <h5 class="card-title">1/2 Pollo Granja Azul<br><span>S/ 54.00</span></h5>
                    <button onclick="agregar('1/2 Pollo Granja Azul', 54.00)">Agregar</button>
                </div>
            </div>
        </div>

        <br>

        <h2>Entradas</h2>
        <div class="grid-productos">
            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="Anticucho de corazón de res">
                <div class="card-body">
                    <h5 class="card-title">Anticucho de corazón de res<br><span>S/ 37.00</span></h5>
                    <button onclick="agregar('Anticucho de corazón de res', 37.00)">Agregar</button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="Anticucho de hígado de pollo">
                <div class="card-body">
                    <h5 class="card-title">Anticucho de hígado de pollo<br><span>S/ 25.00</span></h5>
                    <button onclick="agregar('Anticucho de hígado de pollo', 25.00)">Agregar</button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="Mollejitas a la parrilla">
                <div class="card-body">
                    <h5 class="card-title">Mollejitas a la parrilla<br><span>S/ 27.00</span></h5>
                    <button onclick="agregar('Mollejitas a la parrilla', 27.00)">Agregar</button>
                </div>
            </div>
        </div>

        <br>

        <h2>Sandwich</h2>
        <div class="grid-productos">
            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="Sándwich Granja Azul (6 uni)">
                <div class="card-body">
                    <h5 class="card-title">Sándwich Granja Azul (6 uni)<br><span>S/ 49.00</span></h5>
                    <button onclick="agregar('Sándwich Granja Azul (6 uni)', 49.00)">Agregar</button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="Sándwich Granja Azul (12 uni)">
                <div class="card-body">
                    <h5 class="card-title">Sándwich Granja Azul (12 uni)<br><span>S/ 85.00</span></h5>
                    <button onclick="agregar('Sándwich Granja Azul (12 uni)', 85.00)">Agregar</button>
                </div>
            </div>
        </div>

        <br>

        <h2>Guarniciones</h2>
        <div class="grid-productos">
            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="Papas fritas">
                <div class="card-body">
                    <h5 class="card-title">Papas fritas<br><span>S/ 18.00</span></h5>
                    <button onclick="agregar('Papas fritas', 18.00)">Agregar</button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="Bastones de camote frito">
                <div class="card-body">
                    <h5 class="card-title">Bastones de camote frito<br><span>S/ 20.00</span></h5>
                    <button onclick="agregar('Bastones de camote frito', 20.00)">Agregar</button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="Ensalada de la casa grande">
                <div class="card-body">
                    <h5 class="card-title">Ensalada de la casa grande<br><span>S/ 12.00</span></h5>
                    <button onclick="agregar('Ensalada de la casa grande', 12.00)">Agregar</button>
                </div>
            </div>
        </div>

        <br>

        <h2>Postres</h2>
        <div class="grid-productos">
            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="Crepe Suzette">
                <div class="card-body">
                    <h5 class="card-title">Crepe Suzette<br><span>S/ 34.00</span></h5>
                    <button onclick="agregar('Crepe Suzette', 34.00)">Agregar</button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="Crepe con manjar blanco">
                <div class="card-body">
                    <h5 class="card-title">Crepe con manjar blanco<br><span>S/ 22.00</span></h5>
                    <button onclick="agregar('Crepe con manjar blanco', 22.00)">Agregar</button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="Picarones">
                <div class="card-body">
                    <h5 class="card-title">Picarones<br><span>S/ 16.00</span></h5>
                    <button onclick="agregar('Picarones', 16.00)">Agregar</button>
                </div>
            </div>
        </div>

    </section>

    <aside id="carrito-aside">
        <div id="carrito-contenedor">
            <h2>Tu Pedido</h2>
            <ul id="lista"></ul>
            <h3>Total: S/ <span id="total">0.00</span></h3>
        </div>
    </aside>

</main>
<?php include('footer.php'); ?>