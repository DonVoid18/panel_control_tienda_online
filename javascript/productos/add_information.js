const inputs_info = document.querySelectorAll(".container_inputs_new_products .input_add_product");

// eventos
    inputs_info[inputs_info.length-1].children[0].addEventListener("click",add_information);
    inputs_info[inputs_info.length-1].children[1].addEventListener("click",clean_inputs);
// funciones
function add_information(){
    let info_enviar = true;
    // para saber si un campo se encuentra vacío
    for (let i = 0; i < inputs_info.length-1; i++) {
        if(inputs_info[i].children[0].tagName === "INPUT"){
            if(inputs_info[i].children[0].value === ""){
                // inputs_info[i].children[0].style.border = "1px solid red";
                // box-shadow: 0px 0px 10px 0px rgba(0,0,0,1);
                inputs_info[i].children[0].setAttribute("style","box-shadow: 0px 0px 3px 0px rgba(255, 0, 0, 0.486)");
                info_enviar = false;
            }else{
                inputs_info[i].children[0].removeAttribute("style");
            }
        }
    }
    if(info_enviar){
        let datos = [];
        // envío a la base de datos con ajax
        for (let i = 0; i < inputs_info.length-1; i++) {
            if(inputs_info[i].children[0].tagName === "INPUT"){
                datos[i] = inputs_info[i].children[0].value;
            }if(inputs_info[i].children[0].tagName === "SELECT"){
                datos[i] = inputs_info[i].children[0].value;
            }
        }
        // agregamos a que tabla vamos a ingresar la información
        datos[datos.length] = "productos";
        $.ajax({
            data: {'array': JSON.stringify(datos)},
            // nesitamos hacerlo dinámico para cualquier persona
            url: `${window.location.origin}/panel_control_tienda_online/modificaciones/add_information.php`,
            type: 'post',
            success: function(mensaje_mostrar){
                $('#mensaje_confirmacion_add').html(mensaje_mostrar);
            }
        });
    }
}
function clean_inputs(){
    for (let i = 0; i < inputs_info.length-1; i++) {
        if(inputs_info[i].children[0].tagName === "INPUT"){
            inputs_info[i].children[0].value = "";
            inputs_info[i].children[0].removeAttribute("style");
        }
    }
}