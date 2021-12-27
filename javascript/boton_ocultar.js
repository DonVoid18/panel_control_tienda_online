const boton_ocultar = document.querySelector(".boton_menu_togle");
const boton_abierto = document.querySelector("#boton_abierto");
const boton_cerrado = document.querySelector("#boton_cerrado");
const container_menu = document.querySelector(".container_panel_control_menu");
const text_boton_secciones =  document.querySelectorAll(".seccion_menu_control_text");
const container_panel_principal = document.querySelector(".container_panel_control_principal");
boton_ocultar.addEventListener("click",function(){
    container_menu.classList.toggle("activo_boton_ocultar_menu");
    if(container_menu.classList.value === "container_panel_control_menu activo_boton_ocultar_menu"){
        text_boton_secciones.forEach(text => {
            text.style.display = "none";
            boton_cerrado.style.display = "block";
            boton_abierto.style.display = "none";
        });
    }
    if(container_menu.classList.value === "container_panel_control_menu"){
        text_boton_secciones.forEach(text => {
            text.style.display = "block";
        });
        boton_cerrado.style.display = "none";
        boton_abierto.style.display = "block";
    }
});