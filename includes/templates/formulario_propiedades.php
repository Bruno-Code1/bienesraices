<fieldset>
            <legend>Información General</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" placeholder="Titulo propiedad" name="propiedad[titulo]" value="<?php echo s($propiedad->titulo); ?>">

                <label for="precio">Precio:</label>
                <input type="text" id="precio" placeholder="Precio propiedad" name="propiedad[precio]" value="<?php echo s($propiedad->precio); ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="propiedad[imagen]">

                <?php if ($propiedad->imagen) { ?>
                    <img src="/bienesraices_inicio/imagenes/<?php echo $propiedad->imagen ?>" class="imagen-small">
                <?php } ?>

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" cols="30" rows="3" name="propiedad[descripcion]"><?php echo s($propiedad->descripcion); ?></textarea>
           </fieldset>
           <fieldset>
            <legend>Información Propiedad</legend>
                <label for="habitaciones">Habitaciones:</label>
                <input type="number" id="habitaciones" placeholder="Número de Habitaciones" min="1" max="9" name="propiedad[habitaciones]" value="<?php echo s($propiedad->habitaciones);?>">

                <label for="wc">Baños:</label>
                <input type="number" id="wc" placeholder="Número de Baños" min="1" max="9" name="propiedad[wc]" value="<?php echo s($propiedad->wc);?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" placeholder="Número de Estacionamientos" min="1" max="9" name="propiedad[estacionamiento]" value="<?php echo s($propiedad->estacionamiento);?>">
           </fieldset>
           <fieldset>
            <legend>Vendedor</legend> 
           </fieldset>