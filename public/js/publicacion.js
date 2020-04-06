function nuevaPublicacion(id = 0) {
    $("#modalPublicacionForm").modal("show");
    var form = $("#modalPublicacionForm");
    if (id == 0) {
        $(".input_publicacion").val("");
        $("#titulo_modal_publicacion").text("Nueva Publicación");
    } else {
        $("#titulo_modal_publicacion").text("Editar Publicación");
        $.ajax({
            url: "getPublicacion",
            data: {
                id: id
            },
            type: "POST",
            success: function(result) {
                var obj = JSON.parse(result);
                $("#id_publicacion_modal").val(id);
                $("#titulo_publicacion_modal").val(obj.titulo);
                $("#descripcion_publicacion_modal").val(obj.descripcion);
            },
            error: nuevaPublicacion()
        });
    }
}

var formulario;
$(document).ready(function() {
	$(".enviar_comentario_form").submit(function(event) {
	    event.preventDefault();
	    var form = $(this);
        var id = form.serializeArray()[0].value;
	    $.ajax({
	        type: "POST",
	        url: $(this).attr("action"),
	        data: form.serialize(), // serializes the form's elements.
	        success: function(data) {
                console.log(data);
                var obj = JSON.parse(data);
                var txt = '<div class="row"><div class="col-md-12"><span>'+obj.comentario+'</span></div><div class="col-md-12" style="font-size: 10px;">'
                            +'<span>'+obj.usuario+'</span><span>'+obj.fecha+'</span></div></div><hr>';
                $("#comentarios"+id).append(txt);
	        	$("textarea").val(""); 
	        }
	    });
	});
});

function darLike(id){
    $.ajax({
        type: "POST",
        url: "darLike",
        data: {id:id}, // serializes the form's elements.
        success: function(data) {
            $("#likes"+id).val(intval($("#likes"+id).val())++);
        }
    });
}