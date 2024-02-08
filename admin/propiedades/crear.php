<?php 
    require '../../includes/app.php';

    use App\Propiedad;
    use Intervention\Image\ImageManagerStatic as Image;

   estaAutenticado();

    $db = conectarDB();

    $propiedad = new Propiedad;

    // Consulta para obtener los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensajes de errores
    $errores = Propiedad::getErrores();

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
            <?php include '../../includes/templates/formulario_propiedades.php'; ?>
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>