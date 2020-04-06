<?php
/* Smarty version 3.1.30, created on 2020-04-06 18:40:19
  from "C:\xampp72\htdocs\foro\application\views\publicacion_modal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e8b5b7381b902_18326289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8436a16cef6632856ce5ba6c8d175a8e219f6345' => 
    array (
      0 => 'C:\\xampp72\\htdocs\\foro\\application\\views\\publicacion_modal.tpl',
      1 => 1586145563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8b5b7381b902_18326289 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="modalPublicacionForm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" id="titulo_modal_publicacion"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formPublicacion" class="margin padding" action="<?php echo base_url();?>
abmPublicacion" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id_publicacion_modal">
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                <i class="fa fa-newspaper-o"></i>
              </span>
            </div>
            <input type="text" name="titulo" id="titulo_publicacion_modal" placeholder="Titulo" required class="form-control input_publicacion">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <textarea name="descripcion" placeholder="Escribe algo.." id="descripcion_publicacion_modal" required="" class="form-control input_publicacion"></textarea>
          </div>
          <div class="form-group centrado">
            <label for="imagen_modal_publicacion"><i class="fa fa-upload fa-3x"></i></label>
            <input type="file" name="imagenes"  style="display: none;" id="imagen_modal_publicacion" class="form-control input_publicacion">
          </div>
        </div>
        <hr>
        <div class="form-group">
          <p id="text_error_registar" class="text-error"></p>
        </div>
        <div class="form-group" style="text-align: center;">
          <button class="btn btn-primary">Confirmar Datos</button>
        </div>
      </form>
    </div>
  </div>
</div>




<?php echo '<script'; ?>
 type="text/javascript">
  $("#formPublicacion").submit(function( event ) {
    event.preventDefault();
    var form = $(this);
    $.ajax({
      type: "POST",
      url: form.attr("action"),
      data: form.serialize(),
      success: function(data)
      {
        $("#modalPublicacionForm").modal("hide");
        mostrarMensaje("Se envió la publicación a los administradores para su evaluación");
      },
      error:function(response){
        try{
          var respuesta = JSON.parse(response.responseText).message;
          $("#text_error_registar").text(respuesta);
        }catch{
          $("#text_error_registar").text("Usuario existente, intente con otro");
        }
      }
     });
  });
<?php echo '</script'; ?>
><?php }
}
