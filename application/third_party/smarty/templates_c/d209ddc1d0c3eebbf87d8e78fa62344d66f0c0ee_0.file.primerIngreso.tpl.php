<?php
/* Smarty version 3.1.30, created on 2019-10-03 18:48:19
  from "C:\xampp\htdocs\sace\application\views\usuario\primerIngreso.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d966ca3e3e847_38543396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd209ddc1d0c3eebbf87d8e78fa62344d66f0c0ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\usuario\\primerIngreso.tpl',
      1 => 1563212447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:html/menu_top.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_5d966ca3e3e847_38543396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  

<div class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="page-content-wrapper">
                    
                    <div class="page-content inset">
                        <?php $_smarty_tpl->_subTemplateRender("file:html/menu_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <div class="row">

                            
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form   id="frmPrimerIngreso" 
                                                method="post" 
                                                action="<?php echo site_url();?>
usuario/confirmarDatos/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getId();?>
">
                                            <h2>
                                                ¡Bienvenido!
                                            </h2>
                                            <p>
                                                Ingresaste por primera vez al sistema. 
                                                Necesitamos verificar y completar tu información personal.<br> 
                                                Por favor, ingresá todos los datos solicitados 
                                                (los campos marcados con asterisco son obligatorios).<br>
                                                ¡Muchas gracias! 
         
                                            </p>
                                            <div class="clear" style="height: 15px;"></div>
                                            <div class="errorProceso">
                                                <p><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?></p>
                                                <br>
                                            </div>
                                            <div style="font-weight: bold;">
                                                <p><?php echo $_smarty_tpl->tpl_vars['entidad']->value;?>
</p>
                                            </div>
                                            <div class="clear" style="height: 15px;"></div>
                                            <div class="form-group">
                                                <label>Usuario*</label>
                                                <input  type="text" 
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
                                                <label>Contrase&ntilde;a*</label>
                                                <input  type="password" 
                                                        id="password"
                                                        name="password" 
                                                        placeholder="Minimo 6 Caracteres" 
                                                        class="form-control"
                                                        style="width: 400px;" 
                                                        value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirmar contrase&ntilde;a*</label>
                                                <input  type="password" 
                                                        id="repassword"
                                                        name="repassword" 
                                                        placeholder="Minimo 6 Caracteres" 
                                                        class="form-control"
                                                        style="width: 400px;"  
                                                        value="">
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
                                            <div class="form-group">
                                                <label>Provincia*</label>
                                                <select id="provincia_id" 
                                                        name="provincia_id" 
                                                        class="form-control"
                                                        style="width: 400px;" >
                                                    <option value="-1">Seleccione</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['provincias']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['usuario']->value->getProvincia()->getId() == $_smarty_tpl->tpl_vars['p']->value->getId()) {?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</option>
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
                                                <select id="localidad_id" 
                                                        name="localidad_id" 
                                                        class="form-control"
                                                        style="width: 400px;" >
                                                    <option value="-1">Seleccione</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['localidades']->value, 'l');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['usuario']->value->getLocalidad()->getId() == $_smarty_tpl->tpl_vars['l']->value->getId()) {?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['l']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['l']->value;?>
</option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['l']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value;?>
</option>
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
                                                <label>Piso</label>
                                                <input type="text" 
                                                       name="numeroPiso" 
                                                       placeholder="Número de Piso" 
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

                                            <div class="form-group">
                                                <input type="submit" name="submit" class="btn btn-primary" value="Confirmar Datos">
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
