<div class="modal fade" id="modal_mensaje" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h4 id="titulo_modal_ok"></h4>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modal_mensaje">Confirmar</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  function mostrarMensaje(mensaje){
    $("#titulo_modal_ok").text(mensaje);
    $("#modal_mensaje").modal("show");
  }

</script>