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

<?php
    include 'includes/footer.php';
?>