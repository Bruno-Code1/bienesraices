<?php 
    require '../../includes/app.php';

    use App\Propiedad;
    use Intervention\Image\ImageManagerStatic as Image;

   estaAutenticado();

    $db = conectarDB();

    // Consulta para obtener los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensajes de errores
    $errores = Propiedad::getErrores();


    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedores_id = '';
    $creado = date('Y/m/d');

    // Ejecutar el código una vez que el usuario envía el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Crear una nueva instancia
        $propiedad = new Propiedad($_POST);

        /* Subida de archivos */

        // Generar un nombre unico
        $nombreImagen = md5(uniqid( rand(), true )) . ".jpg";
        
        // Realiza un resize a la imagen con intervention
        if($_FILES['imagen']['tmp_name']) {
            $image = Image::make($_FILES['imagen']['tmp_name'])->fit(800,600);
            $propiedad->setImagen($nombreImagen);
        }
        
        // Validar
        $errores = $propiedad->validar();

        // Revisar que el arreglo de errores esté vacío
        if(empty($errores)) {
            // Crear la carpeta para subir imagenes
            if (!is_dir(CARPETA_IMAGENES)) {
                mkdir(CARPETA_IMAGENES);
            }

            // Guarda la imagen en el servidor
            $image->save(CARPETA_IMAGENES . $nombreImagen);

            // Guarda en la base de datos
            $resultado = $propiedad->guardar();

            // Mensaje de exito
            if ($resultado) {
                // Redireccionar al usuario.
            header('Location: /bienesraices_inicio/admin/index.php?resultado=1');
            }
        }
    }

  
    incluirTemplate('header', $inicio = false);

?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/bienesraices_inicio/admin/index.php" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
              <?php echo $error ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/bienesraices_inicio/admin/propiedades/crear.php" enctype="multipart/form-data">
           <fieldset>
            <legend>Información General</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" placeholder="Titulo propiedad" name="titulo" value="<?php echo $titulo;?>">

                <label for="precio">Precio:</label>
                <input type="text" id="precio" placeholder="Precio propiedad" name="precio" value="<?php echo $precio;?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" cols="30" rows="3" name="descripcion"><?php echo $descripcion; ?></textarea>
           </fieldset>
           <fieldset>
            <legend>Información Propiedad</legend>
                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" placeholder="Número de Habitaciones" min="1" max="9" name="habitaciones" value="<?php echo $habitaciones;?>">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" placeholder="Número de Baños" min="1" max="9" name="wc" value="<?php echo $wc;?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" placeholder="Número de Estacionamientos" min="1" max="9" name="estacionamiento" value="<?php echo $estacionamiento;?>">
           </fieldset>
           <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedores_id">
                <option value="" selected disabled>--Seleccionar--</option>
                <?php while($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                    <option <?php echo $vendedores_id === $vendedor['id'] ? 'selected' : '';?> value="<?php echo $vendedor['id']; ?>"><?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>
                <?php endwhile;?>
            </select>
           </fieldset>

           <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>