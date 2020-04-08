<div class="modal fade" id="modalPublicacionForm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" id="titulo_modal_publicacion"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formPublicacion" class="margin padding" action="{base_url()}abmPublicacion" method="post" enctype="multipart/form-data">
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



{if isset($publicacionCreada)}
  {if $publicacionCreada == true}
  <script type="text/javascript">
    $(document).ready(function() {
          mostrarMensaje("Se envió la publicación a los administradores para su evaluación");
    });
  </script>
  {/if}
{/if}