<?php
/* Smarty version 3.1.30, created on 2019-07-03 00:22:58
  from "C:\xampp\htdocs\sace\application\views\usuario\detalleUsuario.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1c1f927adf44_21655670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6aa140f4409cf4cbe2e984bade42de9f2ef2a5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\usuario\\detalleUsuario.tpl',
      1 => 1551904840,
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
function content_5d1c1f927adf44_21655670 (Smarty_Internal_Template $_smarty_tpl) {
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

                            
                            <form   id="frmUsuario" 
                                    method="post" 
                                    action="<?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {
echo site_url();?>
usuario/agregar<?php } else {
echo site_url();?>
usuario/modificarPerfil/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getId();
}?>"> 
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2><?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {?>Nuevo Usuario<?php } else { ?>Editar Usuario<?php }?></h2>
                                        <div class="errorProceso">
                                            <p><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">

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
}?>"
                                                   readonly>
                                        </div>

                                        <div class="form-group">
                                            <label>Perfil actual</label>
                                            <input  name="perfil_id"
                                                    id="perfil_id"
                                                    value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getPerfil()->getId();
}?>"
                                                    style="display: none;" 
                                            >
                                            <input type="text"
                                                class="form-control" 
                                                style="width: 400px;" 
                                                value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getPerfil();
}?>"
                                                readonly="" 
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label>Entidad*</label>
                                            <input  type="entidad_id" 
                                                    name="entidad_id"
                                                    value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getEntidad()->getId();
}?>"
                                                    style="display: none" 
                                            >
                                            <input  class="form-control" 
                                                    style="width: 400px;" 
                                                    value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getEntidad()->getNombre();
}?>"
                                                    readonly="" 
                                            >
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
                                            <label>e-mail*</label>
                                            <input type="text" 
                                                   name="email" 
                                                   placeholder="Email" 
                                                   class="form-control"
                                                   style="width: 400px;" 
                                                   value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getEmail();
}?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">.
                                            <label>Distrito*</label>
                                            
                                            <input  type="provincia_id" name="provincia_id"
                                                    value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getProvincia()->getId();
}?>" 
                                                    style="display: none" 
                                            >
                                            <input  class="form-control" 
                                                    style="width: 400px;"
                                                    value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getProvincia();
}?>" 
                                                    readonly="" 
                                            >
                                        </div>

                                        <div class="form-group">
                                            <label>Ciudad*</label>

                                            <input  type="localidad_id" name="localidad_id"
                                                    value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getLocalidad()->getId();
}?>" 
                                                    style="display: none" 
                                            >
                                            <input  class="form-control" 
                                                    style="width: 400px;"
                                                    value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getLocalidad();
}?>" 
                                                    readonly="" 
                                            >
                                        </div>
                                        <div class="form-group">
                                            <label>Calle y n&uacute;mero*</label>
                                            <input type="text" 
                                                   name="calle" 
                                                   placeholder="Calle" 
                                                   class="form-control"
                                                   style="width: 400px;" 
                                                   value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getCalle();
}?>">

                                        </div>
                                        <div class="form-group">
                                            <label>Número de piso</label>
                                            <input type="text" 
                                                   name="numeroPiso" 
                                                   placeholder="Numero de Piso" 
                                                   maxlength="3"
                                                   class="form-control"
                                                   style="width: 400px;"  
                                                   value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getNumeroPiso();
}?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Depto.</label>
                                            <input type="text" 
                                                   name="departamento" 
                                                   placeholder="Departamento" 
                                                   maxlength="5"
                                                   class="form-control"
                                                   style="width: 400px;"   
                                                   value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getDepartamento();
}?>">

                                        </div>
                                        <div class="form-group">
                                            <label>Teléfono</label>
                                            <input type="text" 
                                                   name="telefono" 
                                                   placeholder="Telefono" 
                                                   class="form-control"
                                                   style="width: 400px;" 
                                                   value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value->getTelefono();
}?>">

                                        </div>
                                    </div>
                                </div>
                                <h8><strong>Todos los campos con *</strong>, son obligatorios</h8>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" name="submit" class="btn btn-primary" value="Guardar">&nbsp;&nbsp;
                                            <a href="<?php echo site_url();?>
" class="btn btn-back">Volver</a>
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
?>

<?php if ($_smarty_tpl->tpl_vars['chat']->value) {?>
    <div id="chat-container" class="fixed" style="display: none;"></div>
<?php }
}
}
