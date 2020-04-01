<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Registrate!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="formulario_modal" action="registrar" method="post">
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                <i class="fa fa-user"></i>
              </span>
            </div>
            <input type="text" name="usuario" placeholder="Usuario" required class="form-control">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                <i class="fa fa-envelope"></i>
              </span>
            </div>
            <input type="email" name="mail" placeholder="E-mail" class="form-control" required>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                <i class="fa fa-lock"></i>
              </span>
            </div>
            <input type="password" name="contrasenia" placeholder="Contraseña" class="form-control" required="">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                <i class="fa fa-lock"></i>
              </span>
            </div>
            <input type="password" name="recontrasenia" placeholder="Repite Contraseña" class="form-control" required="">
          </div>
        </div>
        <hr>
        <div class="form-group" style="text-align: center;">
          <button class="btn btn-primary">Confirmar Datos</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript">
  $("#modalLoginForm").submit(function( event ) {
    event.preventDefault();
    var form = $(this);
    $.ajax({
      type: "POST",
      url: "registrar",
      data: form.serialize(), // serializes the form's elements.
      success: function(data)
      {
        console.log(data);
        //location.reload();
      },
      error:function(response){
        console.log(response);
      }
     });
  });
</script>