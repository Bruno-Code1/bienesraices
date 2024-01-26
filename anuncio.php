<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raíces</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="build/img/logo.svg" alt="Logotipo de Bienes Raíces">
                </a>
                <div class="derecha">
                    <img class="dark-mode-boton" src="build/img/dark-mode.svg" alt="dark-mode-btn">

                    <nav class="navegacion">
                        <a href="nosotros.html">Nosotros</a>
                        <a href="anuncios.html">Anuncios</a>
                        <a href="blog.html">Blog</a>
                        <a href="contacto.html">Contacto</a>
                    </nav>
                </div>

            </div><!--.barra -->
        </div>
    </header>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen destacada">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>4</p>
                </li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi unde reiciendis delectus sunt enim rerum consequatur voluptates qui! Debitis a labore laborum facilis et repudiandae autem temporibus quo tempore provident!
                Suscipit expedita ducimus iure veritatis dolores ullam nemo quos, minus velit debitis, sed quod commodi nulla iusto ratione quia maxime rerum est odit repudiandae numquam perspiciatis excepturi ipsam molestiae. Animi.
                Error nihil animi quos quo esse ratione! Officiis nemo soluta quo eum aliquid, ipsum quis suscipit delectus porro temporibus, modi sint quidem vero hic obcaecati nobis dolor exercitationem deleniti dolores.
                Quae molestias molestiae dignissimos provident placeat aperiam cum aut ad. Delectus dignissimos vitae magnam optio dicta, similique perferendis quo tempora ullam temporibus fuga voluptas quos. Unde distinctio omnis accusantium nam.
                Dolor libero sint laborum. Ratione dolor, fugit dolorem aut minus nobis accusamus exercitationem voluptas voluptates iste. Incidunt reiciendis atque ad quia placeat! Eveniet eaque quis repellendus odio optio sapiente! Voluptate.
                Labore dignissimos harum dolorum, dolor vel laudantium dolores voluptas odio fuga laborum veniam numquam architecto sit minus provident eligendi culpa molestiae soluta doloribus voluptate? Culpa reprehenderit aspernatur ratione enim magni.
               
            </p>
        </div>
    </main>

    <footer class="footer seccion">
        <div class="contenedor contenido-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>

        <p class="copyright">Todos los derechos reservados 2021 &copy;</p>
    </footer>
    
    <script src="build/js/bundle.min.js"></script>
</body>
</html>