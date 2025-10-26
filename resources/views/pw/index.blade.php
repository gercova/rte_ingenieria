<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RTE - Innovando la Conectividad</title>
    <link rel="stylesheet" href="{{ asset('css/pw.css') }}">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <a href="#" class="logo">R<span>TE</span></a>
                <button class="mobile-menu-btn">☰</button>
                <ul class="nav-menu">
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#productos">Productos</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#trabajos">Nuestros Trabajos</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="inicio">
        <div class="container">
            <h1>Innovando la Conectividad</h1>
            <p>Descubre nuestra amplia gama de productos y servicios tecnológicos diseñados para potenciar tu negocio y mejorar tu vida digital.</p>
            <a href="#productos" class="btn">Explorar Catálogo</a>
        </div>
    </section>

    <!-- Catálogo de Productos -->
    <section id="productos">
        <div class="container">
            <div class="section-title">
                <h2>Nuestros Productos</h2>
            </div>
            <div class="products-grid">
                <!-- Producto 1 -->
                <div class="product-card">
                    <div class="product-img">Imagen del Producto</div>
                    <div class="product-info">
                        <h3>Router de Alta Velocidad</h3>
                        <p>Router WiFi 6 con cobertura extendida para hogares y oficinas.</p>
                        <div class="product-price">$149.99</div>
                        <a href="#" class="btn">Ver Detalles</a>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="product-card">
                    <div class="product-img">Imagen del Producto</div>
                    <div class="product-info">
                        <h3>Switch de Red 24 Puertos</h3>
                        <p>Switch gestionable para redes empresariales con alta capacidad.</p>
                        <div class="product-price">$299.99</div>
                        <a href="#" class="btn">Ver Detalles</a>
                    </div>
                </div>
                <!-- Producto 3 -->
                <div class="product-card">
                    <div class="product-img">Imagen del Producto</div>
                    <div class="product-info">
                        <h3>Access Point Profesional</h3>
                        <p>Solución WiFi empresarial con gestión centralizada.</p>
                        <div class="product-price">$199.99</div>
                        <a href="#" class="btn">Ver Detalles</a>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="product-card">
                    <div class="product-img">Imagen del Producto</div>
                    <div class="product-info">
                        <h3>Cable de Fibra Óptica</h3>
                        <p>Cable de fibra óptica monomodo para conexiones de alta velocidad.</p>
                        <div class="product-price">$89.99</div>
                        <a href="#" class="btn">Ver Detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Catálogo de Servicios -->
    <section id="servicios">
        <div class="container">
            <div class="section-title">
                <h2>Nuestros Servicios</h2>
            </div>
            <div class="services-grid">
                <!-- Servicio 1 -->
                <div class="service-card">
                    <div class="service-icon">🔧</div>
                    <h3>Instalación de Redes</h3>
                    <p>Diseño e implementación de infraestructuras de red para empresas y hogares.</p>
                    <a href="#" class="btn">Más Información</a>
                </div>
                <!-- Servicio 2 -->
                <div class="service-card">
                    <div class="service-icon">🛡️</div>
                    <h3>Seguridad de Red</h3>
                    <p>Protección integral de redes contra amenazas y vulnerabilidades.</p>
                    <a href="#" class="btn">Más Información</a>
                </div>
                <!-- Servicio 3 -->
                <div class="service-card">
                    <div class="service-icon">📡</div>
                    <h3>Consultoría Tecnológica</h3>
                    <p>Asesoramiento especializado para optimizar tu infraestructura tecnológica.</p>
                    <a href="#" class="btn">Más Información</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Página de Nosotros -->
    <section id="nosotros">
        <div class="container">
            <div class="section-title">
                <h2>Sobre Nosotros</h2>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Nuestra Historia</h3>
                    <p>RTE nació en 2010 con la misión de revolucionar la forma en que las personas y empresas se conectan. Desde entonces, hemos crecido para convertirnos en un referente en soluciones de conectividad innovadoras.</p>
                    <h3>Nuestra Misión</h3>
                    <p>Proporcionar soluciones de conectividad de vanguardia que impulsen el crecimiento y la transformación digital de nuestros clientes, ofreciendo productos de calidad y servicios personalizados.</p>
                    <h3>Nuestro Equipo</h3>
                    <p>Contamos con un equipo de profesionales altamente capacitados y apasionados por la tecnología, comprometidos con la excelencia y la satisfacción del cliente.</p>
                </div>
                <div class="about-image">
                    Imagen del Equipo
                </div>
            </div>
        </div>
    </section>

    <!-- Galería de Trabajos -->
    <section id="trabajos">
        <div class="container">
            <div class="section-title">
                <h2>Nuestros Trabajos</h2>
            </div>
            <div class="gallery-grid">
                <!-- Trabajo 1 -->
                <div class="gallery-item">
                    <div>Imagen de Proyecto</div>
                </div>
                <!-- Trabajo 2 -->
                <div class="gallery-item">
                    <div>Imagen de Proyecto</div>
                </div>
                <!-- Trabajo 3 -->
                <div class="gallery-item">
                    <div>Imagen de Proyecto</div>
                </div>
                <!-- Trabajo 4 -->
                <div class="gallery-item">
                    <div>Imagen de Proyecto</div>
                </div>
                <!-- Trabajo 5 -->
                <div class="gallery-item">
                    <div>Imagen de Proyecto</div>
                </div>
                <!-- Trabajo 6 -->
                <div class="gallery-item">
                    <div>Imagen de Proyecto</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contacto">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>RTE</h3>
                    <p>Innovando la conectividad para un futuro más conectado.</p>
                </div>
                <div class="footer-column">
                    <h3>Enlaces Rápidos</h3>
                    <ul>
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#productos">Productos</a></li>
                        <li><a href="#servicios">Servicios</a></li>
                        <li><a href="#nosotros">Nosotros</a></li>
                        <li><a href="#trabajos">Nuestros Trabajos</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contacto</h3>
                    <ul>
                        <li>📞 +1 234 567 890</li>
                        <li>✉️ info@rte.com</li>
                        <li>📍 Calle Principal 123, Ciudad</li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Síguenos</h3>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 RTE. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Menú móvil
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navMenu = document.querySelector('.nav-menu');

        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        // Cerrar menú al hacer clic en un enlace
        const navLinks = document.querySelectorAll('.nav-menu a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
        });
    </script>
</body>
</html>