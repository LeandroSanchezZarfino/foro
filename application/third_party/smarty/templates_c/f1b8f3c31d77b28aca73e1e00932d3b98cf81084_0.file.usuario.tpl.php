<?php
/* Smarty version 3.1.30, created on 2019-03-06 11:19:47
  from "C:\xampp\htdocs\sace\application\views\usuario\usuario.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c7fd703ac8471_85882623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1b8f3c31d77b28aca73e1e00932d3b98cf81084' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\usuario\\usuario.tpl',
      1 => 1544012216,
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
function content_5c7fd703ac8471_85882623 (Smarty_Internal_Template $_smarty_tpl) {
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
usuario/modificar/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getId();
}?>"> 
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2><?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {?>Nuevo usuario<?php } else { ?>Editar Usuario<?php }?></h2>
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
}?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Perfil*</label>
                                            <select id="perfil_id" name="perfil_id" class="form-control" style="width: 400px;">
                                                <option value="0">Seleccione</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perfiles']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</option>
                                                        <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['usuario']->value->getPerfil()->getId() == $_smarty_tpl->tpl_vars['p']->value->getId()) {?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</option>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</option>
                                                            <?php }?>
                                                        <?php }?>
                                                    <?php } else { ?>
                                                        <?php if ($_smarty_tpl->tpl_vars['usuario']->value->getPerfil()->getId() == $_smarty_tpl->tpl_vars['p']->value->getId()) {?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</option>
                                                        <?php }?>
                                                    <?php }?>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </select>
                                            <div id="loader"></div>
                                        </div>
                                        <div class="form-group">
                                            <label>Entidad*</label>
                                            <select id="entidad_id" name="entidad_id" class="form-control" style="width: 400px;">
                                                <option value="0">Seleccione</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entidades']->value, 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value["nombre"];?>
</option>
                                                        <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['usuario']->value->getEntidad()->getId() == $_smarty_tpl->tpl_vars['e']->value["id"]) {?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value["id"];?>
" selected><?php echo $_smarty_tpl->tpl_vars['e']->value["nombre"];?>
</option>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value["nombre"];?>
</option>
                                                            <?php }?>
                                                        <?php }?>
                                                    <?php } else { ?>
                                                        <?php if ($_smarty_tpl->tpl_vars['usuario']->value->getEntidad()->getId() == $_smarty_tpl->tpl_vars['e']->value["id"]) {?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value["id"];?>
" selected><?php echo $_smarty_tpl->tpl_vars['e']->value["nombre"];?>
</option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value["id"];?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value["nombre"];?>
</option>
                                                        <?php }?>
                                                    <?php }?>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </select>
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
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Distrito*</label>
                                            <select id="provincia_id" name="provincia_id" class="form-control" style="width: 400px;">
                                                <option value="-1">Seleccione</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['provincias']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</option>
                                                        <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['usuario']->value->getProvincia()->getId() == $_smarty_tpl->tpl_vars['p']->value->getId()) {?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</option>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</option>
                                                            <?php }?>
                                                        <?php }?>
                                                    <?php } else { ?>
                                                        <?php if ($_smarty_tpl->tpl_vars['usuario']->value->getProvincia()->getId() == $_smarty_tpl->tpl_vars['p']->value->getId()) {?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</option>
                                                        <?php }?>
                                                    <?php }?>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label>Ciudad*</label>
                                            <select id="localidad_id" name="localidad_id" class="form-control" style="width: 400px;">
                                                <option value="-1">Seleccione</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['localidades']->value, 'l');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['l']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value;?>
</option>
                                                        <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['usuario']->value->getLocalidad()->getId() == $_smarty_tpl->tpl_vars['l']->value->getId()) {?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['l']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['l']->value;?>
</option>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['l']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value;?>
</option>
                                                            <?php }?>
                                                        <?php }?>
                                                    <?php } else { ?>
                                                        <?php if ($_smarty_tpl->tpl_vars['usuario']->value->getLocalidad()->getId() == $_smarty_tpl->tpl_vars['l']->value->getId()) {?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['l']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['l']->value;?>
</option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['l']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value;?>
</option>
                                                        <?php }?>
                                                    <?php }?>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </select>
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
                                            <label>Numero de piso</label>
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
usuario" class="btn btn-back">Volver</a>
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
