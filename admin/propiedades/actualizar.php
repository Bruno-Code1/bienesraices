<?php

use App\Propiedad;
use Intervention\Image\ImageManagerStatic as Image;

    require '../../includes/app.php';
    estaAutenticado();

    // Validar que sea un id valido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /bienesraices_inicio/admin/index.php');
    }

    // Obtener los datos de la propiedad
    $propiedad = Propiedad::find($id);

    // Consulta para obtener los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    // Arreglo con mensajes de errores
    $errores = Propiedad::getErrores();

    // Ejecutar el código una vez que el usuario envía el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Asignar los atributos
        $args = $_POST['propiedad'];

        $propiedad->sincronizar($args);

        // Validación
        $errores = $propiedad->validar();
        
        // Generar un nombre unico
        $nombreImagen = md5(uniqid( rand(), true )) . ".jpg";
        
        // Subida de archivos
        if($_FILES['propiedad']['tmp_name']['imagen']) {
            $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600);
            $propiedad->setImagen($nombreImagen);
        }

         if(empty($errores)) {
            // Almacenar la imagen
            $image->save(CARPETA_IMAGENES . $nombreImagen);
           $propiedad->guardar();
        }
    }

    
    incluirTemplate('header', $inicio = false);

?>

    <main class="contenedor seccion">
        <h1>Actualizar Propiedad</h1>

        <a href="/bienesraices_inicio/admin/index.php" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
              <?php echo $error ?>
            </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" enctype="multipart/form-data">
           <?php include '../../includes/templates/formulario_propiedades.php'; ?>

           <input type="submit" value="Actualizar Propiedad" class="boton-amarillo-block">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>