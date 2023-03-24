var buscador = $("#tabla").DataTable();

$("#input-buscar").keyup(function(){
    
    buscador.search($(this).val()).draw();
    
    if ($("#input-buscar").val() == ""){
        $(".contenido-buscar").fadeOut(300);
    }else{
        $(".contenido-buscar").fadeIn(300);
    }
})