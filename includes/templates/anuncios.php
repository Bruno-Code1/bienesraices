<?php 

// Importar la conexión
require __DIR__ . '/../config/database.php';
$db = conectarDB();
// Consultar la base de datos
$query = "SELECT * FROM propiedades LIMIT {$limite}";
// Obtener el resultado
$resultado = mysqli_query($db, $query);

?>

    <div class="contenedor-anuncios">
        <?php while($propiedad = mysqli_fetch_assoc($resultado)):?>
        <div class="anuncio">
                    
                <img loading="lazy" src="/bienesraices_inicio/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen Anuncio">
                 
                <div class="contenido-anuncio">
                    <h3><?php echo $propiedad['titulo']; ?></h3>
                    <p><?php echo $propiedad['descripcion']; ?></p>
                    <p class="precio">$<?php echo $propiedad['precio'] ?></p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Imagen Icono wc">
                            <p><?php echo $propiedad['wc']; ?></p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Imagen Icono dormitorio">
                            <p><?php echo $propiedad['habitaciones']; ?></p>
                        </li>
                        <li>
                            <img class="icono"  loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Imagen Icono estacionamiento">
                            <p><?php echo $propiedad['estacionamiento']; ?></p>
                        </li>
                    </ul>

                    <a href="anuncio.php?id=<?php echo $propiedad['id']; ?>" class="boton-amarillo-block">
                        Ver Propiedad
                    </a>
                </div>
            </div>
            <?php endwhile; ?>
    </div>

<?php 
    // Cerrar la conexión
    mysqli_close($db);
?>
