<?php 
    // Base de datos
    require '../../includes/config/database.php';

    $db = conectarDB();

    // Consulta para obtener los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    // Arreglo con mensajes de errores
    $errores = [];

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
        
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedores_id = $_POST['vendedor'];

        if (!$titulo) {
            $errores[] = "Debes añadir un titulo";
        }

        if (!$precio) {
            $errores[] = "El precio es obligatorio";
        }

        if (strlen($descripcion) < 50) {
            $errores[] = "La descripción es obligatoria y debe tener al menos 50 caracteres";
        }

        if (!$habitaciones) {
            $errores[] = "El número de habitaciones es obligatorio";
        }

        if (!$wc) {
            $errores[] = "El número de baños es obligatorio";
        }

        if (!$estacionamiento) {
            $errores[] = "El número de estacionamientos es obligatorio";
        }

        if (!$vendedores_id) {
            $errores[] = "Elige un vendedor";
        }

        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        // Revisar que el arreglo de errores esté vacío
        if(empty($errores)) {
        // Insertar en la base de datos
        $query = " INSERT INTO propiedades(titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedores_id')";

        // echo $query;
        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            // Redireccionar al usuario.
           header('Location: /bienesraices_inicio/admin/index.php');
        }
        }


    }

    require '../../includes/funciones.php';
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

        <form class="formulario" method="POST" action="/bienesraices_inicio/admin/propiedades/crear.php">
           <fieldset>
            <legend>Información General</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" placeholder="Titulo propiedad" name="titulo" value="<?php echo $titulo;?>">

                <label for="precio">Precio:</label>
                <input type="text" id="precio" placeholder="Precio propiedad" name="precio" value="<?php echo $precio;?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

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

            <select name="vendedor">
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