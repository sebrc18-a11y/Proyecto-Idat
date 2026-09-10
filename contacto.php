<?php
$tituloPagina = "Contacto | Granja Azul";
$estiloPagina = 'CSS/estiloContacto.css';
include 'encabezado.php';
?>
<main class="main-contacto">
    <section class="contacto-redes">
        <img src="Imagenes/contactanos.png">
        <ul>
            <li>Informes y reservas: 997 575 356 | <a href="mailto:serviciocliente2@granja-azul.com"
                    target="_blank">serviciocliente2@granja-azul.com</a></li>
            <li>Eventos y corporativo: 984 366 311 | <a href="mailto:eventos@granja-azul.com"
                    target="_blank">eventos@granja-azul.com</a></li>
        </ul>
    </section>
    <section class="formulario-contacto">
        <img src="Imagenes/flor-mensaje.png">
        <p>
            GRANJA AZUL S.A., con RUC 20112378864 y domicilio en Car. Central Km. 11.5 Santa Clara (Alt. Cdra8 Av. Jorge
            Chávez C/calle G.Azul), te informa que, para atender tu requerimiento o consulta, es necesario tratar tus
            datos personales. Serán incorporados en el banco de datos denominado “Usuarios de página web”. Conoce mayor
            detalle en nuestra “Política de Privacidad” <a href="PDF/política-de-privacidad.pdf"
                target="_blank">https://www.invertur.com.pe/granjaazul/política-de-privacidad.pdf</a>
        </p>
        <div class="formulario">
            <form>
                <input type="text" name="CajaNombre" placeholder="Ingresa tu nombre completo">
                <input type="email" name="CajaCorreo" placeholder="Ingresa tu email">
                <input type="tel" name="CajaTelefono" placeholder="Ingresa tu telefono">
                <textarea name="CajaTexto" placeholder="Ingresa tu mensaje"></textarea>
                <button type="submit"><img src="Imagenes/Enviar-form.png"></button>
            </form>
        </div>

    </section>
</main>
<?php include('footer.php'); ?>