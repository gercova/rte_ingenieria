<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Router de Alta Velocidad - RTE</title>
    <style>
        /* Variables de colores basadas en la imagen */
        :root {
            --primary-color: #1a3a5f;
            --secondary-color: #2c5aa0;
            --accent-color: #4a8cff;
            --light-color: #f0f5ff;
            --dark-color: #0d1a2d;
            --text-color: #333;
            --text-light: #fff;
        }

        /* Estilos generales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header y navegación */
        header {
            background-color: var(--primary-color);
            color: var(--text-light);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--text-light);
            text-decoration: none;
        }

        .logo span {
            color: var(--accent-color);
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-menu li {
            margin-left: 1.5rem;
        }

        .nav-menu a {
            color: var(--text-light);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: var(--accent-color);
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--text-light);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Breadcrumb */
        .breadcrumb {
            padding: 1rem 0;
            background-color: #e9eff7;
        }

        .breadcrumb-content {
            display: flex;
            list-style: none;
        }

        .breadcrumb-item {
            margin-right: 0.5rem;
        }

        .breadcrumb-item:not(:last-child)::after {
            content: ">";
            margin-left: 0.5rem;
            color: var(--secondary-color);
        }

        .breadcrumb-item a {
            color: var(--secondary-color);
            text-decoration: none;
        }

        .breadcrumb-item a:hover {
            text-decoration: underline;
        }

        .breadcrumb-item.active {
            color: var(--primary-color);
            font-weight: 500;
        }

        /* Detalles del Producto */
        .product-details {
            padding: 3rem 0;
        }

        .product-details-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: start;
        }

        .product-gallery {
            display: flex;
            flex-direction: column;
        }

        .product-main-image {
            height: 400px;
            background-color: #e0e0e0;
            border-radius: 8px;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #888;
            font-size: 1.2rem;
        }

        .product-thumbnails {
            display: flex;
            gap: 0.5rem;
        }

        .product-thumbnail {
            width: 80px;
            height: 80px;
            background-color: #e0e0e0;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #888;
            cursor: pointer;
            transition: border 0.3s;
        }

        .product-thumbnail.active {
            border: 2px solid var(--accent-color);
        }

        .product-info {
            padding: 1rem 0;
        }

        .product-title {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .product-price {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--secondary-color);
            margin-bottom: 1.5rem;
        }

        .product-description {
            margin-bottom: 1.5rem;
            line-height: 1.7;
        }

        .product-features {
            margin-bottom: 2rem;
        }

        .product-features h3 {
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .product-features ul {
            list-style-position: inside;
            margin-left: 1rem;
        }

        .product-features li {
            margin-bottom: 0.5rem;
        }

        .product-actions {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }

        .quantity-btn {
            background: none;
            border: none;
            padding: 0.5rem 1rem;
            cursor: pointer;
            font-size: 1.2rem;
            background-color: #f5f5f5;
        }

        .quantity-input {
            width: 50px;
            text-align: center;
            border: none;
            padding: 0.5rem;
            font-size: 1rem;
        }

        .btn {
            display: inline-block;
            background-color: var(--accent-color);
            color: var(--text-light);
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s, transform 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #3a7cff;
            transform: translateY(-3px);
        }

        .btn-secondary {
            background-color: var(--secondary-color);
        }

        .btn-secondary:hover {
            background-color: #255299;
        }

        .product-specs {
            margin-top: 3rem;
        }

        .specs-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        .specs-table th, .specs-table td {
            padding: 0.8rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .specs-table th {
            background-color: #f5f5f5;
            color: var(--primary-color);
            font-weight: 600;
        }

        .specs-table tr:hover {
            background-color: #f9f9f9;
        }

        /* Productos Relacionados */
        .related-products {
            padding: 3rem 0;
            background-color: #f8faff;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            color: var(--primary-color);
        }

        .section-title h2 {
            font-size: 2rem;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent-color);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .product-img {
            height: 200px;
            background-color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #888;
        }

        .product-info-card {
            padding: 1.5rem;
        }

        .product-info-card h3 {
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }

        .product-price-card {
            font-weight: bold;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: var(--text-light);
            padding: 3rem 0 1rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-column h3 {
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--accent-color);
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 0.8rem;
        }

        .footer-column a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-column a:hover {
            color: var(--accent-color);
        }

        .copyright {
            text-align: center;
            padding-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #aaa;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background-color: var(--primary-color);
                flex-direction: column;
                padding: 1rem 0;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            }

            .nav-menu.active {
                display: flex;
            }

            .nav-menu li {
                margin: 0;
                text-align: center;
                padding: 0.8rem 0;
            }

            .mobile-menu-btn {
                display: block;
            }

            .product-details-content {
                grid-template-columns: 1fr;
            }

            .product-actions {
                flex-direction: column;
            }

            .quantity-selector {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .product-title {
                font-size: 1.6rem;
            }

            .product-price {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <a href="index.html" class="logo">R<span>TE</span></a>
                <button class="mobile-menu-btn">☰</button>
                <ul class="nav-menu">
                    <li><a href="index.html#inicio">Inicio</a></li>
                    <li><a href="index.html#productos">Productos</a></li>
                    <li><a href="index.html#servicios">Servicios</a></li>
                    <li><a href="index.html#nosotros">Nosotros</a></li>
                    <li><a href="index.html#trabajos">Nuestros Trabajos</a></li>
                    <li><a href="index.html#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <ul class="breadcrumb-content">
                <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                <li class="breadcrumb-item"><a href="index.html#productos">Productos</a></li>
                <li class="breadcrumb-item active">Router de Alta Velocidad</li>
            </ul>
        </div>
    </div>

    <!-- Detalles del Producto -->
    <section class="product-details">
        <div class="container">
            <div class="product-details-content">
                <div class="product-gallery">
                    <div class="product-main-image">
                        Imagen Principal del Router
                    </div>
                    <div class="product-thumbnails">
                        <div class="product-thumbnail active">1</div>
                        <div class="product-thumbnail">2</div>
                        <div class="product-thumbnail">3</div>
                        <div class="product-thumbnail">4</div>
                    </div>
                </div>
                <div class="product-info">
                    <h1 class="product-title">Router WiFi 6 de Alta Velocidad</h1>
                    <div class="product-price">$149.99</div>
                    <p class="product-description">
                        Este router de última generación con tecnología WiFi 6 ofrece velocidades increíbles y cobertura extendida para hogares y oficinas. Diseñado para manejar múltiples dispositivos simultáneamente sin pérdida de rendimiento.
                    </p>
                    <div class="product-features">
                        <h3>Características principales:</h3>
                        <ul>
                            <li>Tecnología WiFi 6 (802.11ax) para mayor eficiencia</li>
                            <li>Velocidades de hasta 3 Gbps</li>
                            <li>Cobertura para hasta 200 m²</li>
                            <li>Hasta 50 dispositivos conectados simultáneamente</li>
                            <li>Puertos Gigabit Ethernet</li>
                            <li>Fácil configuración mediante aplicación móvil</li>
                            <li>Protección de seguridad avanzada</li>
                        </ul>
                    </div>
                    <div class="product-actions">
                        <div class="quantity-selector">
                            <button class="quantity-btn">-</button>
                            <input type="text" class="quantity-input" value="1">
                            <button class="quantity-btn">+</button>
                        </div>
                        <button class="btn">Añadir al Carrito</button>
                        <button class="btn btn-secondary">Comprar Ahora</button>
                    </div>
                </div>
            </div>

            <div class="product-specs">
                <h2>Especificaciones Técnicas</h2>
                <table class="specs-table">
                    <tr>
                        <th>Característica</th>
                        <th>Especificación</th>
                    </tr>
                    <tr>
                        <td>Estándar WiFi</td>
                        <td>WiFi 6 (802.11ax)</td>
                    </tr>
                    <tr>
                        <td>Velocidad máxima</td>
                        <td>3 Gbps (574 Mbps en 2.4 GHz + 2402 Mbps en 5 GHz)</td>
                    </tr>
                    <tr>
                        <td>Bandas</td>
                        <td>Dual-band (2.4 GHz y 5 GHz)</td>
                    </tr>
                    <tr>
                        <td>Puertos Ethernet</td>
                        <td>4 x Gigabit LAN, 1 x Gigabit WAN</td>
                    </tr>
                    <tr>
                        <td>USB</td>
                        <td>1 x USB 3.0</td>
                    </tr>
                    <tr>
                        <td>Antenas</td>
                        <td>4 antenas externas de alta ganancia</td>
                    </tr>
                    <tr>
                        <td>Cobertura</td>
                        <td>Hasta 200 m²</td>
                    </tr>
                    <tr>
                        <td>Dispositivos simultáneos</td>
                        <td>Hasta 50 dispositivos</td>
                    </tr>
                    <tr>
                        <td>Dimensiones</td>
                        <td>245 x 160 x 55 mm</td>
                    </tr>
                    <tr>
                        <td>Garantía</td>
                        <td>2 años</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <!-- Productos Relacionados -->
    <section class="related-products">
        <div class="container">
            <div class="section-title">
                <h2>Productos Relacionados</h2>
            </div>
            <div class="products-grid">
                <!-- Producto 1 -->
                <div class="product-card">
                    <div class="product-img">Imagen del Producto</div>
                    <div class="product-info-card">
                        <h3>Switch de Red 24 Puertos</h3>
                        <p>Switch gestionable para redes empresariales.</p>
                        <div class="product-price-card">$299.99</div>
                        <a href="#" class="btn">Ver Detalles</a>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="product-card">
                    <div class="product-img">Imagen del Producto</div>
                    <div class="product-info-card">
                        <h3>Access Point Profesional</h3>
                        <p>Solución WiFi empresarial con gestión centralizada.</p>
                        <div class="product-price-card">$199.99</div>
                        <a href="#" class="btn">Ver Detalles</a>
                    </div>
                </div>
                <!-- Producto 3 -->
                <div class="product-card">
                    <div class="product-img">Imagen del Producto</div>
                    <div class="product-info-card">
                        <h3>Cable de Fibra Óptica</h3>
                        <p>Cable de fibra óptica monomodo para conexiones de alta velocidad.</p>
                        <div class="product-price-card">$89.99</div>
                        <a href="#" class="btn">Ver Detalles</a>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="product-card">
                    <div class="product-img">Imagen del Producto</div>
                    <div class="product-info-card">
                        <h3>Extensor de Señal WiFi</h3>
                        <p>Amplía la cobertura de tu red WiFi existente.</p>
                        <div class="product-price-card">$59.99</div>
                        <a href="#" class="btn">Ver Detalles</a>
                    </div>
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
                        <li><a href="index.html#inicio">Inicio</a></li>
                        <li><a href="index.html#productos">Productos</a></li>
                        <li><a href="index.html#servicios">Servicios</a></li>
                        <li><a href="index.html#nosotros">Nosotros</a></li>
                        <li><a href="index.html#trabajos">Nuestros Trabajos</a></li>
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

        // Funcionalidad de las miniaturas
        const thumbnails = document.querySelectorAll('.product-thumbnail');
        const mainImage = document.querySelector('.product-main-image');

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', () => {
                // Remover clase active de todas las miniaturas
                thumbnails.forEach(t => t.classList.remove('active'));
                // Agregar clase active a la miniatura clickeada
                thumbnail.classList.add('active');
                // Cambiar imagen principal (en una implementación real)
                mainImage.textContent = `Imagen ${thumbnail.textContent} del Router`;
            });
        });

        // Selector de cantidad
        const quantityInput = document.querySelector('.quantity-input');
        const minusBtn = document.querySelector('.quantity-btn:first-child');
        const plusBtn = document.querySelector('.quantity-btn:last-child');

        minusBtn.addEventListener('click', () => {
            let value = parseInt(quantityInput.value);
            if (value > 1) {
                quantityInput.value = value - 1;
            }
        });

        plusBtn.addEventListener('click', () => {
            let value = parseInt(quantityInput.value);
            quantityInput.value = value + 1;
        });
    </script>
</body>
</html>