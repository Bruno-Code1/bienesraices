<?php
    require '../includes/app.php';      
    estaAutenticado();

    use App\Propiedad;
    use App\Vendedor;

    // Implementar un metodo para obtener todas las propiedades
    $propiedades = Propiedad::all();
    $vendedores = Vendedor::all();

    
    // Muestra mensaje condicional
    $resultado = $_GET['resultado'] ?? null;
  

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if ($id) {

            $tipo = $_POST['tipo'];
            
            if (validarTipoContenido($tipo)) {
               // Compara lo que vamos a eliminar
               if ($tipo === 'vendedor') {
                $vendedor = Vendedor::find($id);
                $vendedor->eliminar();                
               } else if($tipo == 'propiedad') {
                $propiedad = Propiedad::find($id);
                $propiedad->eliminar();
               }
            }
        }
    }

    // Incluir template
    incluirTemplate('header');

?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raíces</h1>
    <?php if(intval($resultado) === 1): ?>
        <p class="alerta exito">Anuncio creado correctamente</p>
    <?php elseif(intval($resultado) === 2): ?>
        <p class="alerta exito">Anuncio Actualizado Correctamente</p>
    <?php elseif( intval($resultado) === 3 ): ?>
        <p class="alerta exito">Anuncio Eliminado Correctamente</p>
    <?php endif; ?>

        <a href="/bienesraices_inicio/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>
        <a href="/bienesraices_inicio/admin/vendedores/crear.php" class="boton boton-amarillo">Nuevo Vendedor</a>
        <h2>Propiedades</h2>

        <table class="propiedades">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody><!-- Mostrar los resultados -->
            <?php foreach($propiedades as $propiedad): ?>
                <tr>
                    <td><?php echo $propiedad->id; ?></td>
                    <td><?php echo $propiedad->titulo; ?></td>
                    <td><img src="../imagenes/<?php echo $propiedad->imagen; ?>" class="imagen-tabla"></td>
                    <td>$<?php echo $propiedad->precio; ?></td>
                    <td>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">
                            <input type="hidden" name="tipo" value="propiedad">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="/bienesraices_inicio/admin/propiedades/actualizar.php?id=<?php echo $propiedad->id; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h2>Vendedores</h2>
        <table class="propiedades">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody><!-- Mostrar los resultados -->
            <?php foreach($vendedores as $vendedor): ?>
                <tr>
                    <td><?php echo $vendedor->id; ?></td>
                    <td><?php echo $vendedor->nombre . " " . $vendedor->apellido; ?></td>
                    <td><?php echo $vendedor->telefono; ?></td>
                    <td>
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $vendedor->id; ?>">
                            <input type="hidden" name="tipo" value="vendedor">
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        <a href="/bienesraices_inicio/admin/vendedores/actualizar.php?id=<?php echo $vendedor->id; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

<?php
    // Cerrar la conexion
    mysqli_close($db);

    incluirTemplate('footer');
?>