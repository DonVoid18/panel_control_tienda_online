function marcar(source) {
    checkboxes=document.getElementsByTagName('input'); //obtenemos todos los controles del tipo Input
    for(i=0;i<checkboxes.length;i++) //recoremos todos los controles
    {
        if(checkboxes[i].type == "checkbox") //solo si es un checkbox entramos
        {
            checkboxes[i].checked=source.checked; //si es un checkbox le damos el valor del checkbox que lo llamó (Marcar/Desmarcar Todos)
        }
    }
}

function editar(i=0) {
    var result ="<?php editar("+i+"); ?>"
    document.write(result);
}

function eliminar(i=0) {
    var result ="<?php eliminar("+i+"); ?>"
    document.write(result);
}