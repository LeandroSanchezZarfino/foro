<?php
/* Smarty version 3.1.30, created on 2019-02-06 17:13:19
  from "C:\xampp\htdocs\sace\application\views\prohibido.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c5b3fdfa74c70_55837857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e375589f58a902970eecc78d2c363ee921d70944' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\prohibido.tpl',
      1 => 1544012215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_5c5b3fdfa74c70_55837857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row margin-top">
        <div class="login center-block borde-gris margin-top"
             style="width: 600px; border:0px;">
            <h3>Acceso denegado</h3>
            <p>
                Su Usuario no tiene permisos para acceder o realizar la operacion actual
                <br>Le solicitamos se ponga en contacto con el Administrador de la Plataforma
                para solucionar esta situacion a la brevedad<br>
            </p>
            <br>
            <a href="<?php echo site_url();?>
">Volver a Inicio</a>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
