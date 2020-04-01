<?php
/* Smarty version 3.1.30, created on 2019-10-03 18:43:03
  from "C:\xampp\htdocs\sace\application\views\loginSeleccion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d966b67815759_54839159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82a9c1c0809c995234a39e8da87ed51b66486038' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\loginSeleccion.tpl',
      1 => 1544620930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:html/footer_login.tpl' => 1,
  ),
),false)) {
function content_5d966b67815759_54839159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container altura">
    
    <form id="frmAlta" method="post" action="<?php echo site_url();?>
main/elegirBaseYEntrar" class="form-login">
    <div class="row margin-top">
        <div class="login center-block borde-gris margin-top">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="tit">Ver información de: </p>
                </div>
            </div>
            <br>
             <div>
                <select class="form-control" name="bdSelect">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dbs']->value, 'db');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['db']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['db']->value['nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['db']->value['descripcion'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
            </div>
            <div class="row margin-top text-right">
                <button type="submit" class="btn btn-default">ACEPTAR</button></br></br>
            </div>
        </div>

    </div>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
