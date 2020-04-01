<?php
/* Smarty version 3.1.30, created on 2019-09-17 12:46:33
  from "C:\xampp\htdocs\sace\application\views\enMantenimiento-debate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d80ffd93e25f3_43861260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57c5693a680a9cffe2a8d31b315632d387971975' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\enMantenimiento-debate.tpl',
      1 => 1566312519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:html/footer_login.tpl' => 1,
  ),
),false)) {
function content_5d80ffd93e25f3_43861260 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container altura">
    
    <form id="frmAlta" method="post" action="<?php echo site_url();?>
main/acreditar" class="form-login">
    <div class="row margin-top">
       <img src="public/img/debate.png" class="img-responsive">
    </div>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
