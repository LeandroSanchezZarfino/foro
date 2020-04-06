<?php
/* Smarty version 3.1.30, created on 2020-04-06 18:40:19
  from "C:\xampp72\htdocs\foro\application\views\template\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e8b5b73724993_05673903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa3dc0c40882fe0ebc867bb96514f50941a495fb' => 
    array (
      0 => 'C:\\xampp72\\htdocs\\foro\\application\\views\\template\\footer.tpl',
      1 => 1586141437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login_modal.tpl' => 1,
    'file:registrar_modal.tpl' => 1,
    'file:publicacion_modal.tpl' => 1,
    'file:modal_mensaje.tpl' => 1,
  ),
),false)) {
function content_5e8b5b73724993_05673903 (Smarty_Internal_Template $_smarty_tpl) {
?>
</div>
	<div class="footer">
		<p>Leandro A. Sánchez Zarfino - Tel: 11 3192 0880 - leandro.sanchezzarfino@gmail.com</p>
	</div>

</body>
</html>

<?php $_smarty_tpl->_subTemplateRender("file:login_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:registrar_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:publicacion_modal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:modal_mensaje.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
