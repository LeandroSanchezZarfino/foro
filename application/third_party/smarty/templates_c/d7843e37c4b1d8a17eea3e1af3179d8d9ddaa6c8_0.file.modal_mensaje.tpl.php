<?php
/* Smarty version 3.1.30, created on 2020-04-08 08:11:00
  from "C:\xampp72\htdocs\foro\application\views\modal_mensaje.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e8d6af4920f09_33599417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7843e37c4b1d8a17eea3e1af3179d8d9ddaa6c8' => 
    array (
      0 => 'C:\\xampp72\\htdocs\\foro\\application\\views\\modal_mensaje.tpl',
      1 => 1586141981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d6af4920f09_33599417 (Smarty_Internal_Template $_smarty_tpl) {
?>
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


<?php echo '<script'; ?>
 type="text/javascript">
  function mostrarMensaje(mensaje){
    $("#titulo_modal_ok").text(mensaje);
    $("#modal_mensaje").modal("show");
  }

<?php echo '</script'; ?>
><?php }
}
