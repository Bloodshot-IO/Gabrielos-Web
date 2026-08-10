/**
 * analytics-events.js
 * Gabrielos Pizza — GA4 Event Tracking (ID: G-SPGY3Y3110)
 *
 * Eventos implementados:
 *  1. click_whatsapp          param: ubicacion ("boton_evento" | "footer")
 *  2. click_facebook
 *  3. click_instagram
 *  4. click_google_reviews
 *  5. filter_menu_categoria   param: categoria (valor de data-filter)
 *  6. click_like_review
 *  7. view_countdown_promo    (IntersectionObserver, dispara solo una vez)
 */

document.addEventListener('DOMContentLoaded', () => {

    // ─── Helper ──────────────────────────────────────────────────────────────
    // Envía el evento a GA4 solo si gtag está disponible (guard contra fallos
    // de red o bloqueadores que impidan cargar el script de Google Analytics).
    function sendGA4Event(eventName, params) {
        if (typeof gtag === 'function') {
            gtag('event', eventName, params || {});
        }
    }


    // ─── 1. click_whatsapp ───────────────────────────────────────────────────
    // Aplica a: botón "RESERVAR EVENTO" en index.php y al ícono en footer.php.
    // Diferencia la ubicación comprobando si el link está dentro de <footer>.
    const waLinks = document.querySelectorAll('a[href="https://wa.me/528123878321"]');
    waLinks.forEach(link => {
        link.addEventListener('click', function () {
            const ubicacion = this.closest('footer') ? 'footer' : 'boton_evento';
            sendGA4Event('click_whatsapp', { ubicacion: ubicacion });
        });
    });


    // ─── 2. click_facebook ───────────────────────────────────────────────────
    // Aplica al ícono de Facebook en footer.php (presente en todas las páginas).
    const fbLinks = document.querySelectorAll('a[href*="facebook.com/gabrielospizzaartesanal"]');
    fbLinks.forEach(link => {
        link.addEventListener('click', function () {
            sendGA4Event('click_facebook');
        });
    });


    // ─── 3. click_instagram ──────────────────────────────────────────────────
    // Aplica al ícono de Instagram en footer.php (presente en todas las páginas).
    const igLinks = document.querySelectorAll('a[href*="instagram.com/gabrielospizzamx"]');
    igLinks.forEach(link => {
        link.addEventListener('click', function () {
            sendGA4Event('click_instagram');
        });
    });


    // ─── 4. click_google_reviews ─────────────────────────────────────────────
    // Aplica al ícono de Google en footer.php (L7) y al botón en contacto.php (L72).
    // Ambos links comparten el parámetro q=opiniones+de+gabrielo como identificador.
    const reviewLinks = document.querySelectorAll('a[href*="q=opiniones+de+gabrielo"]');
    reviewLinks.forEach(link => {
        link.addEventListener('click', function () {
            sendGA4Event('click_google_reviews');
        });
    });


    // ─── 5. filter_menu_categoria ────────────────────────────────────────────
    // Aplica a los 11 botones .filter-btn en menu.php (líneas 537–549).
    // Es el evento más importante: captura el valor exacto de data-filter.
    const filterBtns = document.querySelectorAll('.filter-btn');
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            const categoria = this.getAttribute('data-filter');
            sendGA4Event('filter_menu_categoria', { categoria: categoria });
        });
    });


    // ─── 6. click_like_review ────────────────────────────────────────────────
    // Aplica a los .like-btn en experiencias.php.
    // Usa event delegation en document.body porque las tarjetas de reseña son
    // inyectadas dinámicamente por main.js (no existen en el HTML inicial).
    // Se registra UNA SOLA VEZ aquí; main.js también usa delegation para su
    // propia lógica visual, pero en un listener separado — no hay conflicto.
    document.body.addEventListener('click', function (e) {
        if (e.target.closest('.like-btn')) {
            sendGA4Event('click_like_review');
        }
    });


    // ─── 7. view_countdown_promo ─────────────────────────────────────────────
    // Aplica al elemento #countdown en promociones.php.
    // Usa IntersectionObserver (mismo patrón que main.js líneas 14–30).
    // observer.unobserve() garantiza que el evento se dispare UNA SOLA VEZ,
    // independientemente de cuántas veces el usuario haga scroll.
    const countdown = document.getElementById('countdown');
    if (countdown) {
        const countdownObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    sendGA4Event('view_countdown_promo');
                    observer.unobserve(entry.target); // Dispara solo una vez
                }
            });
        }, {
            threshold: 0.5 // El 50% del elemento debe ser visible para contar
        });
        countdownObserver.observe(countdown);
    }

});
