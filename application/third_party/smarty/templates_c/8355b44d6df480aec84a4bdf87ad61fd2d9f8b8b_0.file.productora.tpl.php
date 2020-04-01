<?php
/* Smarty version 3.1.30, created on 2019-06-18 15:02:37
  from "C:\xampp\htdocs\sace\application\views\productora\productora.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d09273d4d1406_51731104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8355b44d6df480aec84a4bdf87ad61fd2d9f8b8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\productora\\productora.tpl',
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
function content_5d09273d4d1406_51731104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
<?php if (isset($_smarty_tpl->tpl_vars['productora']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['productora']->value->getId() == '') {?>
        <?php $_smarty_tpl->_assignInScope('alta', "true" ,true);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('alta', "false" ,true);
?>
    <?php }
} else { ?>
    <?php $_smarty_tpl->_assignInScope('alta', "true" ,true);
}?>
<style>
    .ui-menu-item {
        width: 400px;
        background: #FFFFFF;
        border: 1px solid #E4E4E4;
        padding-left: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
        margin-left: -40px;
    }

    .ui-menu .ui-menu-item a{
        color: #000000;
        border-radius: 0px;
    }
</style>
<div class="section" style="height: 1200px;">
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

                            
                            <div class="col-md-12 aelinea" ><span><img style="width: 100px;cursor: pointer;" src="<?php echo site_url();?>
public/img/mas-info-png.png" onclick="$('.infoenlinea').toggle();">
                                    <div class="infoenlinea" style="display:none; background:#b3b3b3 ;border-radius:10px;padding:7px; color:white;">Ingreso y edición de datos de las productoras que realizan los spots publicitarios. El CUIT ingresado debe ser válido, así como los datos deben ser fehacientes.</div><br></span>
                            </div>
                            <br>
                            <form   id="frmProductora" 
                                    method="post" 
                                    action="<?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {
echo site_url();?>
productora/agregar<?php } else {
echo site_url();?>
productora/modificar/<?php echo $_smarty_tpl->tpl_vars['productora']->value->getId();
}?>"> 
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2><?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {?>Nueva Productora<?php } else { ?>Editar Productora<?php }?></h2>
                                            
                                            <div class="errorProceso">
                                                <p><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?></p>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" id="id" name="id" value="" readonly >
                                                <label>Nombre*</label>
                                                <input type="text" 
                                                       id="nombre"
                                                       data-id="<?php if (isset($_smarty_tpl->tpl_vars['productora']->value)) {
echo $_smarty_tpl->tpl_vars['productora']->value->getId();
}?>"
                                                       name="nombre" 
                                                       placeholder="Nombre" 
                                                       class="form-control"
                                                       style="width: 400px;" 
                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['productora']->value)) {
echo $_smarty_tpl->tpl_vars['productora']->value->getNombre();
}?>">
                                            </div>
                                            <span id="loader"></span>
                                            <div class="form-group">
                                                <label>Raz&oacute;n social*</label>
                                                <input type="text" 
                                                       id="razonSocial"
                                                       data-id="<?php if (isset($_smarty_tpl->tpl_vars['productora']->value)) {
echo $_smarty_tpl->tpl_vars['productora']->value->getId();
}?>"
                                                       name="razonSocial" 
                                                       placeholder="Razon Social" 
                                                       class="form-control"
                                                       style="width: 400px;" 
                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['productora']->value)) {
echo $_smarty_tpl->tpl_vars['productora']->value->getRazonSocial();
}?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Cuit*</label>
                                                <input type="text" 
                                                       id="cuit"
                                                       data-id="<?php if (isset($_smarty_tpl->tpl_vars['productora']->value)) {
echo $_smarty_tpl->tpl_vars['productora']->value->getId();
}?>"
                                                       name="cuit" 
                                                       placeholder="CUIT" 
                                                       class="form-control"
                                                       style="width: 400px;"  
                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['productora']->value)) {
echo $_smarty_tpl->tpl_vars['productora']->value->getCuit();
}?>">
                                            </div>    
                                            <div class="form-group">
                                                <label>Provincia*</label>
                                                <select id="distrito_prod_id" name="distrito_id" class="form-control" style="width:400px;">
                                                    <option value="-1">Seleccione</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['distritos']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value->getNombre();?>
</option>
                                                            <?php if (isset($_smarty_tpl->tpl_vars['productora']->value)) {?>
                                                                <?php if ($_smarty_tpl->tpl_vars['productora']->value->getDistritoElectoral()->getId() == $_smarty_tpl->tpl_vars['d']->value->getId()) {?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['d']->value->getNombre();?>
</option>
                                                                <?php } else { ?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value->getNombre();?>
</option>
                                                                <?php }?>
                                                            <?php }?>
                                                        <?php } else { ?>
                                                            <?php if ($_smarty_tpl->tpl_vars['productora']->value->getDistritoElectoral()->getId() == $_smarty_tpl->tpl_vars['d']->value->getId()) {?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['d']->value->getNombre();?>
</option>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value->getNombre();?>
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
                                                       id="calle"
                                                       name="calle" 
                                                       placeholder="Calle" 
                                                       class="form-control"
                                                       style="width: 400px;" 
                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['productora']->value)) {
echo $_smarty_tpl->tpl_vars['productora']->value->getCalle();
}?>">
                                            </div>
                                            <div class="form-group">
                                                <label>N&uacute;mero de piso</label>
                                                <input type="text" 
                                                       id="numeroPiso"
                                                       name="numeroPiso" 
                                                       placeholder="Numero de Piso" 
                                                       maxlength="3"
                                                       class="form-control"
                                                       style="width: 400px;" 
                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['productora']->value)) {
echo $_smarty_tpl->tpl_vars['productora']->value->getNumeroPiso();
}?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Depto.</label>
                                                <input type="text" 
                                                       id="departamento"
                                                       name="departamento" 
                                                       placeholder="Departamento" 
                                                       maxlength="5"
                                                       class="form-control"
                                                       style="width: 400px;" 
                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['productora']->value)) {
echo $_smarty_tpl->tpl_vars['productora']->value->getDepartamento();
}?>">
                                            </div>
                                            <h8><strong>Todos los campos con *</strong>, son obligatorios</h8>
                                            <div class="form-group">
                                                <input type="submit" name="submit" class="btn btn-primary" value="Guardar">&nbsp;&nbsp;
                                                <a href="<?php echo site_url();?>
productora" class="btn btn-back">Volver</a>
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
    <?php echo '<script'; ?>
 src="<?php echo site_url();?>
public/js/productora.js"><?php echo '</script'; ?>
>
</div>
<div class="clear"></div>
</div>


<?php if ($_smarty_tpl->tpl_vars['chat']->value) {?>
    <div id="chat-container" class="fixed" style="display: none;"></div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
 function number_format (number, decimals, decPoint, thousandsSep) { // eslint-disable-line camelcase

  number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
  var n = !isFinite(+number) ? 0 : +number
  var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
  var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
  var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
  var s = ''
  var toFixedFix = function (n, prec) {
    var k = Math.pow(10, prec)
    return '' + (Math.round(n * k) / k)
      .toFixed(prec)
  }
  // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d<?php echo 3;?>
)+(?!\d))/g, sep)
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || ''
    s[1] += new Array(prec - s[1].length + 1).join('0')
  }
  return s.join(dec)
}

$( "#cuit" ).blur(function() {
  var str = $(this).val();
  if (str.length === 11)
  {
    var modif= str.substring(0, 2) + "-" + str.substring(2, 10) + "-" + str.substring(10, 11);
    $(this).val(modif);
  }
});

<?php echo '</script'; ?>
><?php }
}
