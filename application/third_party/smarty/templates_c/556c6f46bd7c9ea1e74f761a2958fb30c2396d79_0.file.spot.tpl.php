<?php
/* Smarty version 3.1.30, created on 2019-07-15 12:33:20
  from "C:\xampp\htdocs\sace\application\views\spot\spot.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d2c9cc0382ee2_73963576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '556c6f46bd7c9ea1e74f761a2958fb30c2396d79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\spot\\spot.tpl',
      1 => 1562289064,
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
function content_5d2c9cc0382ee2_73963576 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
<?php if (isset($_smarty_tpl->tpl_vars['spot']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['spot']->value->getId() == '') {?>
        <?php $_smarty_tpl->_assignInScope('alta', "true" ,true);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('alta', "false" ,true);
?>
    <?php }
} else { ?>
    <?php $_smarty_tpl->_assignInScope('alta', "true" ,true);
}?>
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
                                    <div class="infoenlinea" style="display:none; background:#b3b3b3 ;border-radius:10px;padding:7px; color:white;">
                                Ingreso del nombre y datos identificatorios de los spots publicitarios que luego se utilizarán en la grilla en las diferentes franjas horarias. 
                            Es importante que al momento de enviar el material a los servicios para su emisión, el spot sea identificado claramente y bajo el mismo nombre que se consignó en la carga.
                            
                        </div><br></span>
                            </div>
                            <br>
                            <br>
                            <div class="container">
                             <div class="form-group">
                                                <input type="submit" name="submit" class="btn btn-primary" value="Guardar">&nbsp;&nbsp;
                                                <a href="<?php echo site_url();?>
spot" class="btn btn-back">Volver</a>
                                            </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form   id="frmSpot" 
                                                method="post" 
                                                action="<?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {
echo site_url();?>
spot/agregar<?php } else {
echo site_url();?>
spot/modificar/<?php echo $_smarty_tpl->tpl_vars['spot']->value->getId();
}?>">
                                            <h2>
                                                <?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {?>
                                                    Nuevo Spot
                                                <?php } else { ?>
                                                    Editar Spot
                                                <?php }?>
                                            </h2>
                                            
                                            <div class="errorProceso">
                                                <p><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?></p>
                                            </div>

                                            <div class="form-group">
                                                <label>Nombre*</label>
                                                <input  type="text" 
                                                        id="nombre"
                                                        data-id="<?php if (isset($_smarty_tpl->tpl_vars['spot']->value)) {
echo $_smarty_tpl->tpl_vars['spot']->value->getId();
}?>"
                                                        name="nombre" 
                                                        placeholder="Nombre" 
                                                        class="form-control"
                                                        style="width: 400px;" 
                                                        value="<?php if (isset($_smarty_tpl->tpl_vars['spot']->value)) {
echo $_smarty_tpl->tpl_vars['spot']->value->getNombre();
}?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Descripci&oacute;n</label>
                                                <br> Longitud m&aacute;xima 255 caracteres
                                                <textarea type="text" 
                                                        name="descripcion" 
                                                        placeholder="Descripci&oacute;n" 
                                                        class="form-control"
                                                        maxlength ="255"
                                                        style="width: 400px; resize: none;"><?php if (isset($_smarty_tpl->tpl_vars['spot']->value)) {
echo $_smarty_tpl->tpl_vars['spot']->value->getDescripcion();
}?></textarea>
                                            </div>     
                                            <div class="form-group">
                                                <label>Duración (en Módulos) *</label>
                                                <input  type="text" 
                                                        name="duracion" 
                                                        placeholder="Duraci&oacute;n" 
                                                        class="form-control"
                                                        style="width: 400px;" 
                                                        value="<?php if (isset($_smarty_tpl->tpl_vars['spot']->value)) {
echo $_smarty_tpl->tpl_vars['spot']->value->getDuracion();
}?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Link de visualizaci&oacute;n</label>
                                                <input  type="text" 
                                                        name="link" 
                                                        placeholder="Link" 
                                                        class="form-control"
                                                        style="width: 400px;"
                                                        value="<?php if (isset($_smarty_tpl->tpl_vars['spot']->value)) {
echo $_smarty_tpl->tpl_vars['spot']->value->getLink();
}?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Tipo de servicio*</label>
                                                <select id="tiposervicio_id"
                                                        name="tiposervicio_id" 
                                                        class="form-control"
                                                        style="width: 400px;" >
                                                    <option value="0">Seleccione</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tiposervicios']->value, 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?>
                                                         <?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {?>
                                                            <?php if (isset($_smarty_tpl->tpl_vars['spot']->value)) {?>
                                                                <?php if ($_smarty_tpl->tpl_vars['spot']->value->getTipoServicio()->getId() == $_smarty_tpl->tpl_vars['e']->value->getId()) {?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</option>
                                                                <?php } else { ?>
                                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</option>
                                                                <?php }?>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</option>
                                                            <?php }?>
                                                        <?php } else { ?>
                                                            <?php if ($_smarty_tpl->tpl_vars['spot']->value->getTipoServicio()->getId() == $_smarty_tpl->tpl_vars['e']->value->getId()) {?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</option>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
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
                                                <input type="checkbox" 
                                                       name="productoraPropia" 
                                                       id="productoraPropia" 
                                                       value="1"
                                                       <?php if (isset($_smarty_tpl->tpl_vars['spot']->value) && $_smarty_tpl->tpl_vars['spot']->value->getProduccionPropia()) {?>checked<?php }?>>Producci&oacute;n Propia
                                            </div>
                                            <div class="form-group" id="productora">
                                                <label>Productora*</label>
                                                <select id="productora_id" 
                                                        name="productora_id" 
                                                        class="form-control" 
                                                        style="width: 400px;"
                                                        <?php if (isset($_smarty_tpl->tpl_vars['spot']->value) && $_smarty_tpl->tpl_vars['spot']->value->getProduccionPropia()) {?>disabled<?php }?>>
                                                <option value="0">Seleccione</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productora']->value, 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {?>
                                                        <?php if (isset($_smarty_tpl->tpl_vars['spot']->value)) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['spot']->value->getProductora()->getId() == $_smarty_tpl->tpl_vars['e']->value->getId()) {?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</option>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</option>
                                                            <?php }?>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</option>
                                                        <?php }?>
                                                    <?php } else { ?>
                                                        <?php if (!$_smarty_tpl->tpl_vars['spot']->value->getProduccionPropia()) {?>
                                                            <?php if ($_smarty_tpl->tpl_vars['spot']->value->getProductora()->getId() == $_smarty_tpl->tpl_vars['e']->value->getId()) {?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value->getId();?>
" selected><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</option>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</option>
                                                            <?php }?>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
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
                                            <h8><strong>Todos los campos con *</strong>, son obligatorios</h8>
                                            <div class="form-group">
                                                <input type="submit" name="submit" class="btn btn-primary" value="Guardar">&nbsp;&nbsp;
                                                <a href="<?php echo site_url();?>
spot" class="btn btn-back">Volver</a>
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
        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready(function () {
                $('#productoraPropia').click(function () {
                    var $this = $(this);
                    if ($this.is(':checked')) {
                        $('#productora_id').prop('disabled', true);
                    } else {
                        $('#productora_id').prop('disabled', false);
                    }
                });
            });
        <?php echo '</script'; ?>
>
    </div>
</div>
<div class="clear"></div>
</div>


<?php if ($_smarty_tpl->tpl_vars['chat']->value) {?>
    <div id="chat-container" class="fixed" style="display: none;"></div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
