<?php 
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = false);

?>

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

<?php 
    incluirTemplate('footer');
?>