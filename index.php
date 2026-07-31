<?php 
    $page_title = "Inicio"; 
    include 'includes/header.php'; 
?>

    <header class="hero">
        <div class="overlay"></div>
        <div class="hero-content fade-in-up">
            <h1>Hechas artesanalmente con tradición... <span class="text-gold">donde la calidad es el ingrediente principal!</span></h1>
            <div style="margin-top: 30px;">
                
                <a href="menu.php" class="btn btn-primary">VER MENÚ.</a>
            </div>
        </div>
    </header>

    <section class="gallery-section">
        <div class="gallery-title-wrapper fade-in-up">
            <h2 class="section-title-center">GALERÍA <span class="text-gold">VISUAL</span></h2>
            <p style="color:#888; margin-top:10px;">Desliza para ver más</p>
        </div>

        <div class="gallery-reel fade-in-right">
            <div class="reel-item">
                <img loading="lazy" src="imgmain/imgcarrusel/img1.jpeg" alt="Pizza Detalle">
                <div class="reel-overlay"><i class="fas fa-camera reel-icon"></i></div>
            </div>
            <div class="reel-item">
                <img loading="lazy" src="imgmain/imgcarrusel/img2.jpeg" alt="Horno Fuego">
                <div class="reel-overlay"><i class="fas fa-fire reel-icon"></i></div>
            </div>
            <div class="reel-item">
                <img loading="lazy" src="imgmain/imgcarrusel/img3.jpeg" alt="Pizza Mesa">
                <div class="reel-overlay"><i class="fas fa-utensils reel-icon"></i></div>
            </div>
            <div class="reel-item">
                <img loading="lazy" src="imgmain/imgcarrusel/img4.jpeg" alt="Bebidas">
                <div class="reel-overlay"><i class="fas fa-glass-cheers reel-icon"></i></div>
            </div>
            <div class="reel-item">
                <img loading="lazy" src="imgmain/imgcarrusel/img5.jpeg" alt="Ingredientes">
                <div class="reel-overlay"><i class="fas fa-leaf reel-icon"></i></div>
            </div>
            <div class="reel-item">
                <img loading="lazy" src="imgmain/imgcarrusel/img6.jpeg" alt="Ambiente">
                <div class="reel-overlay"><i class="fas fa-users reel-icon"></i></div>
            </div>
            <div class="reel-item">
                <img loading="lazy" src="imgmain/imgcarrusel/img7.jpeg" alt="Ambiente">
                <div class="reel-overlay"><i class="fas fa-users reel-icon"></i></div>
            </div>
            <div class="reel-item">
                <img loading="lazy" src="imgmain/imgcarrusel/img8.jpeg" alt="Ambiente">
                <div class="reel-overlay"><i class="fas fa-users reel-icon"></i></div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-dark-grey">
        <div class="container grid-2">
            
            <div class="image-column fade-in-left">
                <img loading="lazy" src="imgmain/cumple1.jpeg" alt="Promoción Boneless y Cerveza Stella Artois" class="promo-rect-img">
            </div>

            <div class="text-column fade-in-right">
                <span class="badge">SEMANA DE CUMPLEAÑERO</span>
                <h2 class="section-title">CELEBRA TÚ CUMPLEAÑOS <span class="text-gold">EN GABRIELOS</span></h2>
                <span class="promo-subtitle">VEN Y CELEBRA TU CUMPLEAÑOS Y DISFRUTA DE UN MOMENTO ESPECIAL CON TUS SERES QUERIDOS</span>
                

                <p><strong>Requisitos: </strong> Llevar documento oficial (INE, Acta de Nacimiento con CURP o Pasaporte)</p>



            </div>

        </div>
    </section>
    </section>
    <section class="section-padding bg-dark-grey">
        <div class="container grid-2">
            
            <div class="image-column fade-in-left">
                <img loading="lazy" src="imgmain/cerveza.jpeg" alt="Promoción Boneless y Cerveza Stella Artois" class="promo-rect-img">
            </div>

            <div class="text-column fade-in-right">
                <span class="badge">PROMOCIÓN DE CERVEZA LOS VIERNES Y SÁBADO</span>
                <h2 class="section-title">CERVEZA <span class="text-gold">2 X $80 </span></h2>
                <span class="promo-subtitle">APLICA PARA TODAS LAS CERVEZAS NACIONALES E IMPORTADAS</span>
                

                



            </div>

        </div>
    </section>

    <section class="section-padding bg-black" id="eventos">
        <div class="container grid-2">
            
            <div class="text-column fade-in-left">
                <h2 class="section-title">CELEBRA TUS <span class="text-gold">EVENTOS</span></h2>
                
                <p>Haz de tus fechas especiales un momento inolvidable. Nuestro espacio es el escenario ideal para reuniones, cumpleaños, posadas y reuniones corporativas. Ofrecemos un ambiente cálido, privacidad y la mejor pizza artesanal.</p>

                <div class="reservation-box-dark">
                    <strong><i class="fas fa-calendar-check"></i> Política de Reservas</strong>
                    <p style="margin:0; font-size: 0.95rem; color: #ccc;">
                        Las reservaciones se gestionan exclusivamente para <b>grupos de 30 a 50 personas</b>. Si tu grupo es menor, acude directamente y te asignaremos mesa por orden de llegada.
                    </p>
                </div>

                <a href="https://wa.me/528123878321" target="_blank" class="btn btn-outline">RESERVAR EVENTO</a>
            </div>

            <div class="image-column fade-in-right">
                <div class="event-img-wrapper">
                    <img loading="lazy" src="imgmain/reserva.jpeg" alt="Evento privado en Gabrielos Pizza" class="event-img-offset">
                </div>
            </div>

        </div>
    </section>

<?php 
    include 'includes/footer.php'; 
?>