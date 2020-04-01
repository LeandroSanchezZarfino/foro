<?php
/* Smarty version 3.1.30, created on 2020-04-01 08:04:29
  from "C:\xampp72\htdocs\foro\application\views\login_modal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e842eed5d53f1_96269207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af75a5545b937b8b6e3452a815621ec504916e7f' => 
    array (
      0 => 'C:\\xampp72\\htdocs\\foro\\application\\views\\login_modal.tpl',
      1 => 1585616016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e842eed5d53f1_96269207 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Iniciar Sesión</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="formulario_modal" action="<?php echo base_url();?>
acreditar" method="post">
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                <i class="fa fa-envelope"></i>
              </span>
            </div>
            <input type="email" name="usuario" placeholder="Usuario" class="form-control">
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
        <div class="form-group" style="text-align: center;">
          <button class="btn btn-primary">Iniciar Sesión</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php echo '<script'; ?>
 type="text/javascript">
  $("#modalLoginForm").submit(function( event ) {
    event.preventDefault();
    var form = $(this);
    $.ajax({
      type: "POST",
      url: "acreditar",
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
<?php echo '</script'; ?>
><?php }
}
