<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Iniciar Sesión</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="formulario_modal" id="formLogin" action="{base_url()}acreditar" method="post">
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                <i class="fa fa-envelope"></i>
              </span>
            </div>
            <input type="text" name="usuario" placeholder="Usuario" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                <i class="fa fa-lock"></i>
              </span>
            </div>
            <input type="password" name="contrasenia" placeholder="Contraseña" class="form-control">
          </div>
        </div>
        <hr>
        <div class="form-group">
          <p id="text_error_login" class="text-error"></p>
        </div>
        <div class="form-group" style="text-align: center;">
          <button class="btn btn-primary">Iniciar Sesión</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript">
  $("#formLogin").submit(function( event ) {
    event.preventDefault();
    var form = $(this);
    $.ajax({
      type: "POST",
      url: "acreditar",
      data: form.serialize(), // serializes the form's elements.
      success: function(data)
      {
        location.reload();
      },
      error:function(response){
          var respuesta = JSON.parse(response.responseText).message;
          $("#text_error_login").text(respuesta);
      }
     });
  });
</script>