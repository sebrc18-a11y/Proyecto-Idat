<?php
$tituloPagina = "Inicio | Granja Azul";
$estiloPagina = 'CSS/estiloIndex.css';
include 'encabezado.php'; 
?>
<main class="main-index">
    <!-- Carrusel -->
    <section id="slider">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Imagenes/banner1.png" class="d-block w-100 slider-img" alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="Imagenes/banner2.png" class="d-block w-100 slider-img" alt="Banner 2">
                </div>
                <div class="carousel-item">
                    <img src="Imagenes/banner3.png" class="d-block w-100 slider-img" alt="Banner 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <div class="main-primero">
        <!-- Secciones -->
        <section>
            <div id="infoElPolo">
                <div class="imgInformacion">
                    <img src="Imagenes/local1.png" alt="Local El Polo">
                </div>
                <div class="textoInformativo">
                    <h2>Granja Azul Grill</h2>
                    <h3>El Polo</h3>
                    <p>
                        Con el sabor y cariño de siempre, nuestro nuevo restaurante de El Polo te espera en un
                        acogedor
                        ambiente ubicado en el C.C. Urban Plaza El Polo, donde continúa nuestra deliciosa tradición
                        e
                        innovadoras alternativas.
                    </p>
                </div>
            </div>
        </section>

        <section>
            <div id="infoSantaClara">
                <div class="textoInformativo">
                    <h2>Granja Azul</h2>
                    <h3>Santa Clara</h3>
                    <p>
                        Desde hace más de 7 décadas, nuestra historia se sigue cocinando al calor de los buenos
                        momentos.
                        Disfruta de un delicioso almuerzo en un ambiente único y acogedor. Diversión en el parque
                        infantil
                        para lo más pequeños.
                    </p>
                </div>
                <div class="imgInformacion">
                    <img src="Imagenes/local2.png" alt="Local Santa Clara">
                </div>
            </div>
        </section>
        <section>
            <div id="infoSanIsidro">
                <div class="textoInformativo">
                    <div class="imgInformacion">
                        <img src="Imagenes/local3.png" alt="Local Santa Clara">
                    </div>
                </div>
                <div class="textoInformativo">
                    <h2>Granja Azul Grill</h2>
                    <h3>San Isidro</h3>
                    <p>
                        Un espacio donde también podrás disfrutar de la tradición de siempre acompañada de otras
                        novedades.
                        Si prefieres un plan de noche de cocteles y piqueos visita nuestro Grill Lounge ubicado en
                        el
                        tercer
                        piso te espera de jueves a sábado a partir de las 7 pm.
                    </p>
                </div>
            </div>
        </section>

        <div class="dobleLinea">
            <div class="linea"></div>
            <div class="linea"></div>
        </div>
        <br>
    </div>

    <br>

    <div class="main-segundo">
        <section class="redes">
            <p>Síguenos</p>
            <a href="https://www.instagram.com/granjaazul" target="_blank">@granjaazul</a>
            <a href="#" target="_blank">#GranjaAzul75Años</a>
        </section>

        <!-- Carrusel Infinito -->
        <section class="infinite-carousel-container d-flex overflow-hidden py-5">

            <!-- GRUPO 1 -->
            <div class="d-flex animate-scroll">

                <!-- Slide 1 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide1.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>No sabemos cuál vas a pedir primero. Lo que sí sabemos es que no va a ser el
                                    único.
                                    🍹🍸<br><br>De izquierda a derecha: Gallina Viuda, Cinco Pies, Chicha Milagrosa,
                                    The
                                    Madame, Long Time y Gentle Murderer.<br><br>Y sí, puedes llevarte el cerámico a
                                    casa. 😉</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide2.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>Mano arriba si dijiste: “Una más y (quizás) nos vamos”. 🙋‍♀️🍸En Granja Azul,
                                    las
                                    Madames tienen noche propia para bailar, brindar y gozar entre amigas.
                                    💃<br><br>#NochesDeMadame. Todos los jueves de 6 pm. a 11 pm., en el tercer piso
                                    de
                                    San Isidro y El Polo.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <video src="Imagenes/carousel-index/Slide3.mp4" autoplay loop muted playsinline
                            class="object-fit-cover"></video>
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>Tenemos muchas razones para sacar pecho (y pierna) por el Perú. 🇵🇪🍗 Y una de
                                    ellas
                                    es saber que, cuando nos sentamos a la mesa, nos une el sabor de lo
                                    nuestro.<br><br>¡Felices Fiestas Patrias! Los esperamos para celebrar juntos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide4.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>Cuando de celebrar al Perú se trata, aquí la mesa siempre está servida. 🇵🇪
                                    ❤️💙<br><br>Estas #FiestasPatrias reserva tu mesa en Granja
                                    Azul:<br><br>📲997575356<br>🔵www.granja-azul.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide5.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>¡Qué rico es ser peruano! Y qué orgullo ser parte de su sabor.
                                    🇵🇪🍗<br><br>📍Celebremos estas Fiestas Patrias juntos. Reserva tu mesa
                                    por:<br><br>📲997575356<br>🔵www.granja-azul.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide6.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>Cinco nuevos platos que llegaron para ganarse un lugar en la mesa (y tu
                                    corazón💙):<br><br>1️⃣ Arroz meloso del campo<br>2️⃣ Pappardelle al
                                    funghi<br>3️⃣
                                    Lomo saltado<br>4️⃣ Ensalada crocante<br>5️⃣ Carpaccio de salmón</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 7 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide7.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>🎒☀️🍗Estas vacaciones, el recreo es en Granja Azul Santa Clara:<br><br>El
                                    original
                                    pollo a la brasa, bungee, paseo en bote, inflables y mucha diversión en nuestro
                                    parque infantil.<br><br>📅 Todos los días, desde el miércoles 22 de julio al 2
                                    de
                                    agosto.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 8 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide8.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>Unidos por un plato que ya es parte del corazón de todos los peruanos.
                                    🇵🇪🍗<br><br>Feliz Día del Pollo a la Brasa desde la casa donde comenzó esta
                                    historia y donde lo celebramos todos los días.<br><br>#GranjaAzulElOriginal</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 9 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide9.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>1️⃣ El pollo ya calienta.<br>2️⃣ Las papas saltan a la cancha.<br>3️⃣ La mayonesa
                                    completa el equipo.<br><br>¡Que empiece el partido en Granja Azul!
                                    ⚽🍗<br><br>Este
                                    domingo 19 no hay pierde: se juega la final del mundo y celebramos.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 10 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide10.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>Nuestra historia es también la historia de uno de los platos más queridos del
                                    Perú:
                                    el pollo a la brasa. 🍗🇵🇪 Una historia que empezó en un horno de Santa Clara y
                                    que
                                    hoy volvemos a contar con orgullo.<br><br>¿La conocías?
                                    👀<br><br>#GranjaAzulElOriginal</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 11 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide11.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>Seguimos celebrando al plato que dimos vida hace 76 años: EL POLLO A LA BRASA. Y
                                    esta
                                    vez, lo hacemos con una dulce sorpresa. 💙<br><br>Los esperamos toda la semana
                                    para
                                    celebrar en Santa Clara, San Isidro y El Polo.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 12 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <video src="Imagenes/carousel-index/Slide12.mp4" autoplay loop muted playsinline
                            class="object-fit-cover"></video>
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>La mesa está servida. 🍽️🍗<br><br>Este domingo 12 empezamos a celebrar el Día
                                    del
                                    Pollo a la Brasa con 12 premios entre nuestros tres restaurantes.<br><br>¡Te
                                    esperamos!</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- GRUPO 2 (Duplicado) -->
            <div class="d-flex animate-scroll" aria-hidden="true">
                <!-- Slide 1 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide1.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>No sabemos cuál vas a pedir primero. Lo que sí sabemos es que no va a ser el
                                    único.
                                    🍹🍸<br><br>De izquierda a derecha: Gallina Viuda, Cinco Pies, Chicha Milagrosa,
                                    The
                                    Madame, Long Time y Gentle Murderer.<br><br>Y sí, puedes llevarte el cerámico a
                                    casa. 😉</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide2.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>Mano arriba si dijiste: “Una más y (quizás) nos vamos”. 🙋‍♀️🍸En Granja Azul,
                                    las
                                    Madames tienen noche propia para bailar, brindar y gozar entre amigas.
                                    💃<br><br>#NochesDeMadame. Todos los jueves de 6 pm. a 11 pm., en el tercer piso
                                    de
                                    San Isidro y El Polo.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <video src="Imagenes/carousel-index/Slide3.mp4" autoplay loop muted playsinline
                            class="object-fit-cover"></video>
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>Tenemos muchas razones para sacar pecho (y pierna) por el Perú. 🇵🇪🍗 Y una de
                                    ellas
                                    es saber que, cuando nos sentamos a la mesa, nos une el sabor de lo
                                    nuestro.<br><br>¡Felices Fiestas Patrias! Los esperamos para celebrar juntos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide4.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>Cuando de celebrar al Perú se trata, aquí la mesa siempre está servida. 🇵🇪
                                    ❤️💙<br><br>Estas #FiestasPatrias reserva tu mesa en Granja
                                    Azul:<br><br>📲997575356<br>🔵www.granja-azul.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide5.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>¡Qué rico es ser peruano! Y qué orgullo ser parte de su sabor.
                                    🇵🇪🍗<br><br>📍Celebremos estas Fiestas Patrias juntos. Reserva tu mesa
                                    por:<br><br>📲997575356<br>🔵www.granja-azul.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide6.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>Cinco nuevos platos que llegaron para ganarse un lugar en la mesa (y tu
                                    corazón💙):<br><br>1️⃣ Arroz meloso del campo<br>2️⃣ Pappardelle al
                                    funghi<br>3️⃣
                                    Lomo saltado<br>4️⃣ Ensalada crocante<br>5️⃣ Carpaccio de salmón</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 7 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide7.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>🎒☀️🍗Estas vacaciones, el recreo es en Granja Azul Santa Clara:<br><br>El
                                    original
                                    pollo a la brasa, bungee, paseo en bote, inflables y mucha diversión en nuestro
                                    parque infantil.<br><br>📅 Todos los días, desde el miércoles 22 de julio al 2
                                    de
                                    agosto.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 8 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide8.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>Unidos por un plato que ya es parte del corazón de todos los peruanos.
                                    🇵🇪🍗<br><br>Feliz Día del Pollo a la Brasa desde la casa donde comenzó esta
                                    historia y donde lo celebramos todos los días.<br><br>#GranjaAzulElOriginal</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 9 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide9.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>1️⃣ El pollo ya calienta.<br>2️⃣ Las papas saltan a la cancha.<br>3️⃣ La mayonesa
                                    completa el equipo.<br><br>¡Que empiece el partido en Granja Azul!
                                    ⚽🍗<br><br>Este
                                    domingo 19 no hay pierde: se juega la final del mundo y celebramos.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 10 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide10.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>Nuestra historia es también la historia de uno de los platos más queridos del
                                    Perú:
                                    el pollo a la brasa. 🍗🇵🇪 Una historia que empezó en un horno de Santa Clara y
                                    que
                                    hoy volvemos a contar con orgullo.<br><br>¿La conocías?
                                    👀<br><br>#GranjaAzulElOriginal</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 11 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <img src="Imagenes/carousel-index/slide11.png" class="object-fit-cover w-100 h-100">
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>Seguimos celebrando al plato que dimos vida hace 76 años: EL POLLO A LA BRASA. Y
                                    esta
                                    vez, lo hacemos con una dulce sorpresa. 💙<br><br>Los esperamos toda la semana
                                    para
                                    celebrar en Santa Clara, San Isidro y El Polo.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 12 -->
                <div class="card-wrapper">
                    <div class="ratio ratio-1x1 custom-card">
                        <video src="Imagenes/carousel-index/Slide12.mp4" autoplay loop muted playsinline
                            class="object-fit-cover"></video>
                        <div class="custom-overlay"></div>
                        <div class="custom-content">
                            <div class="custom-content-inner">
                                <p>La mesa está servida. 🍽️🍗<br><br>Este domingo 12 empezamos a celebrar el Día
                                    del
                                    Pollo a la Brasa con 12 premios entre nuestros tres restaurantes.<br><br>¡Te
                                    esperamos!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<br>
<?php include('footer.php'); ?>