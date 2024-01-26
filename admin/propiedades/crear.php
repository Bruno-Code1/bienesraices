<?php 
    require '../../includes/funciones.php';
    incluirTemplate('header', $inicio = false);

?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/bienesraices_inicio/admin/index.php" class="boton boton-verde">Volver</a>

        <form class="formulario">
           <fieldset>
            <legend>Información General</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" placeholder="Titulo propiedad">

                <label for="precio">Precio:</label>
                <input type="text" id="precio" placeholder="Precio propiedad">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" cols="30" rows="3"></textarea>
           </fieldset>
           <fieldset>
            <legend>Información Propiedad</legend>
                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" placeholder="Número de Habitaciones" min="1" max="9">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" placeholder="Número de Baños" min="1" max="9">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" placeholder="Número de Estacionamientos" min="1" max="9">
           </fieldset>
           <fieldset>
            <legend>Vendedor</legend>
            <select id="vendedor">
                <option value="" selected disabled>--Seleccionar--</option>
                <option value="1">Bruno</option>
                <option value="2">Karen</option>
            </select>
           </fieldset>

           <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>