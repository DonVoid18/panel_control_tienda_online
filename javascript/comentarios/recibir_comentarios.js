const select_comentario = document.querySelector("#input_comentarios_seleccionar");
let container_comentarios = document.getElementById("container_comentarios");

const ventana_delete = document.querySelector(".container_ventana_delete");
const open_ventana_delete = document.querySelectorAll(".button__delete_date");
// botones de la ventana delete
const confirmar_delete = document.querySelector(".button__confirm_delete");
const cancelar_delete = document.querySelector(".button__cancel_delete");
select_comentario.addEventListener("change",enviarOption);

function enviarOption(){
    let values_date = {
        "peticion": "solicitar",
        "id_producto": select_comentario.value
    };
    // $.ajax({
    //     data: values_date,
    //     // nesitamos hacerlo dinámico para cualquier persona
    //     url: `${window.location.origin}/panel_control_tienda_online/modificaciones/mostrar_comentarios.php`,
    //     type: 'post',
    //     success: function(comentarios){
    //         $('#container_comentarios_usuarios').html(comentarios);
    //     }
    // });
    $.ajax({
        type:'POST',
        url:`${window.location.origin}/panel_control_tienda_online/modificaciones/mostrar_comentarios.php`,
        data: values_date,
        dataType: "json",
        beforeSend: function(){
            document.querySelector(".container_preloader").style.display = "block";
        },
        success:function(comentarios){
            let encabezado_text_comentarios =`<div class="container_bloque_informacion_titulo"><h3>Comentarios</h3></div>`;
            if(comentarios.length > 0){
                let sintax_default = "";
                for(i in comentarios){
                    sintax_default += `
                    <div class="container-comentario-usuario">
                        <div class="container-nombre-usuario-comentario">
                            <span>
                                <span class="id_usuario_comentario">
                                    <strong>
                                        ${comentarios[i].id_usuario}
                                    </strong>
                                </span>
                                <strong>
                                    ${comentarios[i].nombre}
                                    ${comentarios[i].apellido_paterno}
                                </strong>
                            </span>
                            <span class="valoracion-producto-estrellas">
                                ${crearEstrellas(comentarios[i].producto_puntaje)}
                                <span class="boton_eliminar_comentario">
                                    <button class="button_delete_comentario">Eliminar <i class="fas fa-trash"></i></button>
                                </span>
                            </span>
                        </div>
                        <div class="container-mensaje-usuario-comentario">
                            <p>
                                ${comentarios[i].comentario}
                            </p>
                        </div>
                        <div class="container-fecha-usuario-comentario">
                                ${comentarios[i].fecha_registro}
                        </div>
                    </div>`;
                }
                container_comentarios.innerHTML = `${encabezado_text_comentarios}<div id="container_comentarios_usuarios">${sintax_default}</div>`;
            document.querySelector(".container_preloader").style.display = "none";
            botonesComentarios(document.querySelectorAll("#container_comentarios_usuarios .button_delete_comentario"));
        }else{
                container_comentarios.innerHTML = "<strong>Este producto no tiene comentartios.</strong>"
            document.querySelector(".container_preloader").style.display = "none";
            }
        }
    });
    container_comentarios.innerHTML = "";
}
function crearEstrellas(number){
    let estrellas = "";
    for (let i = 0; i < 5; i++) {
        if(i<number){
            estrellas += "<i class='fas fa-star star_valoracion_producto_encendida'></i>";
        }else{
            estrellas += "<i class='fas fa-star star_valoracion_producto_apagada'></i>";
        }
    }
    return estrellas;
}
let id_usuario;
let id_comentario;
let div_comentario;
let id_producto;
function botonesComentarios(botones){
    for (let i = 0; i < botones.length; i++) {
        botones[i].addEventListener("click",function(){
            id_usuario = this.parentNode.parentNode.parentNode.children[0].children[0].innerText.trim();
            id_comentario = this.parentNode.parentNode.parentNode.parentNode.children[2].innerText.trim();
            div_comentario = this.parentNode.parentNode.parentNode.parentNode;;
            id_producto = select_comentario.value;
            // deleteComentario(id_usuario,id_comentario,select_comentario.value,div_comentario);
            openWindowDelete();
        });
    }
}
confirmar_delete.addEventListener("click",confirmDelete);
cancelar_delete.addEventListener("click",closeWindowDelete);

function openWindowDelete(){
    // selecionamos a los botones de confirmar y cancelar
    ventana_delete.classList.remove("ventana_desactivada");
}
function closeWindowDelete(){
    ventana_delete.classList.add("ventana_desactivada");
    document.querySelector("#mensaje_delete_value").innerText="";
}
function confirmDelete(){
    deleteComentario();
}

function deleteComentario(){
    let comentarios_delete = document.getElementById("container_comentarios_usuarios");
    if(comentarios_delete.children.length > 0){
        let date_comentario = {
            "id_usuario": id_usuario,
            "id_comentario": id_comentario,
            "id_producto": id_producto
        };
        $.ajax({
            type:'POST',
            url:`${window.location.origin}/panel_control_tienda_online/modificaciones/mostrar_comentarios.php`,
            data: date_comentario,
            success:function(respuesta_delete){
                // let container_comentarios = document.getElementById("container_comentarios_usuarios");
                // console.log(container_comentarios);
                // console.log(respuesta_delete);
            }
        });
        comentarios_delete.removeChild(div_comentario);
    }
    closeWindowDelete();
}