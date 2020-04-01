<?php
/* Smarty version 3.1.30, created on 2019-07-04 22:21:52
  from "C:\xampp\htdocs\sace\application\views\usuario\operadorAp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1ea63001a952_86202249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e00c8ccb8aab8baea8c3af5d230af7b67d5d47be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\usuario\\operadorAp.tpl',
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
function content_5d1ea63001a952_86202249 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['usuario']->value->getId() == '') {?>
        <?php $_smarty_tpl->_assignInScope('alta', "true" ,true);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('alta', "false" ,true);
?>
    <?php }
} else { ?>
    <?php $_smarty_tpl->_assignInScope('alta', "true" ,true);
}?>
<div class="section">
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

                            
                            <form   id="frmOperadorSca"
                                    name="frmOperadorSca"
                                    method="post" 
                                    action="<?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {
echo site_url();?>
operador/ap/agregar<?php } else {
echo site_url();?>
operador/ap/modificar/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getId();
}?>">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2><?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {?>Nuevo Operador<?php } else { ?>Editar Operador<?php }?></h2>
                                            <div class="errorProceso">
                                                <p><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Usuario*</label>
                                                <input type="text" 
                                                       id="usuario"
                                                       name="usuario" 
                                                       data-id="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getId();
}?>"
                                                       placeholder="Usuario" 
                                                       class="form-control"
                                                       style="width: 400px;" 
                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getUsuario();
}?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Nombre*</label>
                                                <input type="text" 
                                                       name="nombre" 
                                                       placeholder="Nombre" 
                                                       class="form-control"
                                                       style="width: 400px;"  
                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getNombre();
}?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Apellido*</label>
                                                <input type="text" 
                                                       name="apellido" 
                                                       placeholder="Apellido" 
                                                       class="form-control"
                                                       style="width: 400px;"  
                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getApellido();
}?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Email*</label>
                                                <input type="text" 
                                                       name="email" 
                                                       placeholder="Email" 
                                                       class="form-control"
                                                       style="width: 400px;" 
                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getEmail();
}?>">
                                            </div>
                                            <h8><strong>Todos los campos con *</strong>, son obligatorios. <br><br>
                                            <strong>IMPORTANTE:</strong> la contrase&ntilde;a inicial ser&aacute; igual que el nombre de usuario.<br>
                                            Por ejemplo. Si el usuario es "operador1", la contrase&ntilde;a ser&aacute; "operador1" y se deber&aacute; cambiar en el primer inicio de sesi&oacute;n.</h8>
                                            <br><br>
                                            <div class="form-group">
                                                <input type="submit" name="submit" class="btn btn-primary" value="Guardar">&nbsp;&nbsp;
                                                <a href="<?php echo site_url();?>
operador/ap" class="btn btn-back">Volver</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            

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
