<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estiloEncabezado.css">
    <link rel="stylesheet" href="CSS/estiloFooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php if (isset($estiloPagina)): ?>
        <link rel="stylesheet" href="<?php echo $estiloPagina; ?>">
    <?php endif; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>
        <?php echo isset($tituloPagina) ? $tituloPagina : "Granja Azul"; ?>
    </title>

</head>

<body>
    <div class="menu">
        <header>
            <div class="encabezado">
                <div class="botonDelivery">
                    <a href="https://pedidos.granja-azul.com/" target="_blank">DELIVERY 👉🏼 PIDELO AQUI</a>
                </div>
                <div class="logoPrincipal">
                    <a href="index.php"><img src="Imagenes/logo.png"></a>
                </div>
                <div class="botonReserva">
                    <div id="reserva1">
                        <a href="https://granjaazul.mesa247.pe/reservas/granja-azul-santa-clara" target="_blank">
                            Reservas <br> Santa Clara
                        </a>
                    </div>
                    <div id="reserva2">
                        <a href="https://granjaazul.mesa247.pe/reservas/granja-azul-san-isidro1" target="_blank">
                            Reservas <br> San Isidro
                        </a>
                    </div>
                    <div id="reserva3">
                        <a href="https://granjaazul.mesa247.pe/reservas/granja-azul-el-polo" target="_blank">
                            Reservas <br> El Polo
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <nav>
            <ul class="nav justify-content-evenly w-75 mx-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.php">NOSOTROS</a>
                </li>
                <li class="nav-item dropdown d-flex align-items-center">
                    <a class="nav-link pe-1" href="cartas.php">CARTAS</a>
                    <a class="nav-link dropdown-toggle dropdown-toggle-split ps-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-expanded="false">
                        <span class="visually-hidden"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="cartaSanIsidro.php">Carta San Isidro - El Polo</a></li>
                        <li><a class="dropdown-item" href="cartaSantaClara.php">Carta Santa Clara</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="delivery.php">DELIVERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="locales.php">LOCALES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">CONTACTO</a>
                </li>
            </ul>
        </nav>

    </div>