<?php 
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = false);

?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen destacada">
        </picture>

        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por : <span>Admin</span></p>

        <div class="resumen-propiedad">
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