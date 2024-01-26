<?php 
    require '../includes/funciones.php';
    incluirTemplate('header', $inicio = false);

?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raíces</h1>

        <a href="/bienesraices_inicio/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>
    </main>

<?php 
    incluirTemplate('footer');
?>