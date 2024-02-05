<?php 

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
        header('Location: /bienesraices_inicio/index.php');
    }

    require 'includes/app.php';
       
    $db = conectarDB();

    // Consultar la base de datos
    $query = "SELECT * FROM propiedades WHERE id = {$id}";
    
    // Obtener el resultado
    $resultado = mysqli_query($db, $query);

    if (!$resultado->num_rows) {
        header('Location: /bienesraices_inicio/index.php');
    }

    $propiedad = mysqli_fetch_assoc($resultado);

    
    incluirTemplate('header', $inicio = false);

?>

    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $propiedad['titulo']; ?></h1>
        
        <img loading="lazy" src="/bienesraices_inicio/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen destacada">

        <div class="resumen-propiedad">
            <p class="precio">$<?php echo $propiedad['precio'];?></p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="icono wc">
                    <p><?php echo $propiedad['wc']; ?></p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p><?php echo $propiedad['habitaciones']; ?></p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p><?php echo $propiedad['estacionamiento']; ?></p>
                </li>
            </ul>
            <?php echo $propiedad['descripcion']; ?>
        </div>
    </main>

<?php 
    mysqli_close($db);
    incluirTemplate('footer');
?>