<?php
/* Smarty version 3.1.30, created on 2018-12-12 11:52:31
  from "C:\xampp\htdocs\sace\application\views\enMantenimiento.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c1120afd37a33_71671949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09e33d20ae8590fe9d789461b74c4f74ef80e9b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\enMantenimiento.tpl',
      1 => 1544012215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:html/footer_login.tpl' => 1,
  ),
),false)) {
function content_5c1120afd37a33_71671949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container altura">
    
    <form id="frmAlta" method="post" action="<?php echo site_url();?>
main/acreditar" class="form-login">
    <div class="row margin-top">
       <img src="public/img/mantenimiento.png" class="img-responsive">
    </div>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
