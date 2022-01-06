const ventana_delete = document.querySelector(".container_ventana_delete");
const open_ventana_delete = document.querySelectorAll(".button__delete_date");
let id_value;
// botones de la ventana delete
const confirmar_delete = document.querySelector(".button__confirm_delete");
const cancelar_delete = document.querySelector(".button__cancel_delete");

// EVENTOS
for (let i = 0; i < open_ventana_delete.length; i++) {
    open_ventana_delete[i].addEventListener("click",function(){
        let id_producto_text = this.parentNode.parentNode.id.replace("row_product_info_","");
        // le pasamos el id
        openWindowDelete(id_producto_text);
    });
}

confirmar_delete.addEventListener("click",confirmDelete);
cancelar_delete.addEventListener("click",closeWindowDelete);

// FUNCIONES
function openWindowDelete(numero){
    // selecionamos a los botones de confirmar y cancelar
    ventana_delete.classList.remove("ventana_desactivada");
    id_value = numero;
}
function closeWindowDelete(){
    ventana_delete.classList.add("ventana_desactivada");
    document.querySelector("#mensaje_delete_value").innerText="";
}
function confirmDelete(){
    // a la hora de eliminar el producto o lo que sea necesitamos el id del producto
    console.warn(`Producto eliminado ${id_value}`);

    // envío a la base de datos con ajax
    let values = {
        "name_tabla":"productos",
        "id_date": id_value
    };
    $.ajax({
        data: values,
        // nesitamos hacerlo dinámico para cualquier persona
        url: `${window.location.origin}/panel_control_tienda_online/modificaciones/delete_values.php`,
        type: 'post',
        success: function(mensaje_mostrar){
            $('#mensaje_delete_value').html(mensaje_mostrar);
        }
    });
}
