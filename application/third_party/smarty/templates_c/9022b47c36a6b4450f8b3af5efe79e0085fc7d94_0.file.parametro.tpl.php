<?php
/* Smarty version 3.1.30, created on 2019-05-08 10:44:14
  from "C:\xampp\htdocs\sace\application\views\parametro\parametro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cd2dd2e3a80e0_41383344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9022b47c36a6b4450f8b3af5efe79e0085fc7d94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\parametro\\parametro.tpl',
      1 => 1544012215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:html/menu_lateral.tpl' => 1,
    'file:html/menu_top.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_5cd2dd2e3a80e0_41383344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  

<div class="section" style="height: 1800px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php $_smarty_tpl->_subTemplateRender("file:html/menu_lateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                
                <div id="page-content-wrapper">
                    
                    <div class="page-content inset">
                        <?php $_smarty_tpl->_subTemplateRender("file:html/menu_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <div class="row">
                            
                            <div class="container">
                            <div class="form-group">
                                                <input type="submit" name="submit" class="btn btn-primary" value="Guardar">&nbsp;&nbsp;
                                                <a href="<?php echo site_url();?>
principal" class="btn btn-back">Volver</a>
                                            </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post" action="<?php echo site_url();?>
parametro/editar">
                                            <h2>Parametrizaci&oacute;n global</h2>
                                            <div class="errorProceso">
                                                <p><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?></p>
                                            </div>
                                         <table class="table table-inverse col-md-11">         
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parametros']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                                            <tr>
                                                <?php if ($_smarty_tpl->tpl_vars['p']->value->getClave() == "comienzo_grilla") {?>
                                                   <div class="form-group">
                                                        <td> <label><?php echo $_smarty_tpl->tpl_vars['p']->value->getTitulo();?>
</label></td>
                                                       <td> <select name="<?php echo $_smarty_tpl->tpl_vars['p']->value->getClave();?>
" 
                                                                class="form-control" 
                                                                style="width: 400px;">
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['distritos']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['nombre'];?>
</option></td>
                                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                            
                                                        </select>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="form-group">
                                                        <td><label><?php echo $_smarty_tpl->tpl_vars['p']->value->getTitulo();?>
.    </label> </td>
                                                       <td><input type="<?php echo $_smarty_tpl->tpl_vars['p']->value->getTipo();?>
" 
                                                               name="<?php echo $_smarty_tpl->tpl_vars['p']->value->getClave();?>
" 
                                                               value="<?php echo $_smarty_tpl->tpl_vars['p']->value->getValor();?>
" 
                                                               class="form-control" 
                                                               style="width: 400px;"></td>
                                                    </div>
                                                <?php }?>
                                            </tr>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </table>
                                            <div class="form-group">
                                                <input type="submit" name="submit" class="btn btn-primary" value="Guardar">&nbsp;&nbsp;
                                                <a href="<?php echo site_url();?>
principal" class="btn btn-back">Volver</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<div class="clear"></div>
</div>	
<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
