<div class="container_bloque_informacion">
    <div class="container_bloque_informacion_titulo">
        <h3>Buscar Comentarios</h3>
    </div>
    <div class="input_add_product">
        <select name="" id="input_comentarios_seleccionar" class="input_object_add_product">
        <option value="selected">Seleccionar producto</option>
        <?php
            // mostramos las categorías disponibles para no confudirse
            $consulta_productos = "SELECT p.id_producto,p.marca,c.nombre_categoria FROM productos p INNER JOIN categoria c ON p.categoria_id_categoria=c.id_categoria";
            $resultado_productos = $conn->query($consulta_productos);
            while($row = $resultado_productos->fetch_assoc()){?>
            <option value="<?php echo $row["id_producto"]?>"><?php echo $row["id_producto"]." - ".$row["marca"]." - ".$row["nombre_categoria"]?></option>
        <?php
            }
        ?>
        </select>
    </div>
</div>
<div class="container_preloader">
    <svg version="1.1" id="L5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
        <circle fill="#0284fe" stroke="none" cx="6" cy="50" r="6">
          <animateTransform
             attributeName="transform"
             dur="1s"
             type="translate"
             values="0 15 ; 0 -15; 0 15"
             repeatCount="indefinite"
             begin="0.1"/>
        </circle>
        <circle fill="#0284fe" stroke="none" cx="30" cy="50" r="6">
          <animateTransform 
             attributeName="transform" 
             dur="1s" 
             type="translate" 
             values="0 10 ; 0 -10; 0 10" 
             repeatCount="indefinite" 
             begin="0.2"/>
        </circle>
        <circle fill="#0284fe" stroke="none" cx="54" cy="50" r="6">
          <animateTransform 
             attributeName="transform" 
             dur="1s" 
             type="translate" 
             values="0 5 ; 0 -5; 0 5" 
             repeatCount="indefinite" 
             begin="0.3"/>
        </circle>
    </svg>
    </div>
<div class="container_bloque_informacion" id="container_comentarios">

</div>
<?php
    require_once "windows_modal/window_delete.php";
?>
<script src="<?php echo $link_base_root?>/javascript/comentarios/recibir_comentarios.js"></script>
<script src="<?php echo $link_base_root?>/javascript/comentarios/delete_comentario.js"></script>
