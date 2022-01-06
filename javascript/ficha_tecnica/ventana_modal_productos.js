// variables
const ventana_edit = document.querySelector(".container_ventana_edit");
const boton_open_edit = document.querySelectorAll(".button__edit_date");

const confirmar_edit = document.querySelector(".button__confirm_edit");
const cancelar_edit = document.querySelector(".button__cancel_edit");

let window_edit_values = document.querySelectorAll(".container_edit_date .container_edit_date__value");
let id_date_value;
// eventos
for (let i = 0; i < boton_open_edit.length; i++) {
    boton_open_edit[i].addEventListener("click",function(){
        // row_product_info_17
        let id_producto_text = this.parentNode.parentNode.id.replace("row_product_info_","");
        openWindowEdit(id_producto_text);
    });
}
confirmar_edit.addEventListener("click",confirmWindowEdit);
cancelar_edit.addEventListener("click",closeWindowEdit);

// funciones
function openWindowEdit(numero){
    ventana_edit.classList.remove("ventana_desactivada");
    id_date_value = numero;
    const values_row_table = document.querySelectorAll(`#row_product_info_${id_date_value}`);
    console.log(values_row_table);
    /* 34567 values de texto */
    for (let i = 0; i < window_edit_values.length; i++) {
        switch(i){
            case 0:
                // container categoría
                window_edit_values[i].children[0].value = values_row_table[0].children[1].innerText;
                break;
            case 1:
                window_edit_values[i].children[0].value = values_row_table[0].children[2].innerText;
                break;
            case 2:
                window_edit_values[i].children[0].value = values_row_table[0].children[3].innerText;
                break;
            case 3:
                window_edit_values[i].children[0].value = values_row_table[0].children[4].innerText;
                break;
        }
    }
}
function closeWindowEdit(){
    ventana_edit.classList.add("ventana_desactivada");
    document.querySelector("#mensaje_modificacion_values_product").innerText="";
}
function confirmWindowEdit(){
    console.warn("Se confirmo la edición");
    // debemos enviar todos los datos
    let values_date__window = {
        "name_tabla": "ficha_tecnica",
        "id_producto": id_date_value,
        "ancho": window_edit_values[0].children[0].value,
        "alto": window_edit_values[1].children[0].value,
        "peso": window_edit_values[2].children[0].value,
        "color": window_edit_values[3].children[0].value
    }
    $.ajax({
        data: values_date__window,
        // nesitamos hacerlo dinámico para cualquier persona
        url: `${window.location.origin}/panel_control_tienda_online/modificaciones/modificaciones_values.php`,
        type: 'post',
        success: function(mensaje_mostrar){
            $('#mensaje_modificacion_values_product').html(mensaje_mostrar);
        }
    });
}