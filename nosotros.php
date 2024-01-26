<?php 
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = false);

?>
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source src="build/img/nosotros.webp" type="image/webp">
                    <source src="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Imagen Nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident, aliquam. Odit dolor iste magnam aliquam dolores ipsam enim alias, quam vel culpa sed cum provident eveniet ipsa earum aut maiores.
                    Ratione impedit veritatis, minima dolor eum iusto suscipit eos dolorum hic? Ad voluptatem sapiente ut aspernatur quaerat, laboriosam blanditiis rerum alias tenetur voluptatum illum commodi inventore qui, expedita vel temporibus?am?
                </p>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat quo beatae autem maiores aliquid, corporis voluptate id et quis ratione? Doloremque veritatis distinctio sed nesciunt ab cupiditate velit et culpa.
                </p>
            </div>
        </div>
    </main>
    <section class="contenedor seccion">
        <h1>Más sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo quae iusto, illum quidem exercitationem aperiam mollitia quas excepturi nobis, deserunt aliquid rerum, non dolorem dolorum quos debitis expedita. Magni, pariatur!
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo quae iusto, illum quidem exercitationem aperiam mollitia quas excepturi nobis, deserunt aliquid rerum, non dolorem dolorum quos debitis expedita. Magni, pariatur!
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A tiempo</h3>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo quae iusto, illum quidem exercitationem aperiam mollitia quas excepturi nobis, deserunt aliquid rerum, non dolorem dolorum quos debitis expedita. Magni, pariatur!
                </p>
            </div>
        </div>
    </section>

<?php 
    incluirTemplate('footer');
?>