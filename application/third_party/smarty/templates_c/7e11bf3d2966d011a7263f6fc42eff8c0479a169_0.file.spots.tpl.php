<?php
/* Smarty version 3.1.30, created on 2019-07-15 12:33:30
  from "C:\xampp\htdocs\sace\application\views\spot\spots.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d2c9ccaa94033_93400844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e11bf3d2966d011a7263f6fc42eff8c0479a169' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\spot\\spots.tpl',
      1 => 1554833469,
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
function content_5d2c9ccaa94033_93400844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="modalEliminarSpot" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Eliminar spot
                </h4>
            </div>
            <div id="modalEliminarSpot-body" class="modal-body">
                
            </div>
            <div class="modal-footer">
                <input type="button"
                       id="modalEliminarSpotOk"
                       name="modalEliminarSpotOk"
                       data-id=""
                       class="btn btn-primary" 
                       value="Aceptar">
                &nbsp;
                <button type="button" class="btn btn-back" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>



<div id="modalBloquearSpot" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Bloquear spot
                </h4>
            </div>
            <div id="modalBloquearSpot-body" class="modal-body">
                
            </div>
            <div class="modal-footer">
                <input type="button"
                       id="modalBloquearSpotOk"
                       name="modalBloquearSpotOk"
                       data-id=""
                       class="btn btn-primary" 
                       value="Aceptar">
                &nbsp;
                <button type="button" class="btn btn-back" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>




<div id="modalDescripcionSpot" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Descripcíon spot
                </h4>
            </div>
            <div id="modalDescripcionSpot-body" class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                &nbsp;
            </div>
        </div>
    </div>
</div>



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

                        <div class="row" style="min-height: 400px;">

                            
                            <div class="col-md-12 aelinea" ><span><img style="width: 100px;cursor: pointer;" src="<?php echo site_url();?>
public/img/mas-info-png.png" onclick="$('.infoenlinea').toggle();">
                                    <div class="infoenlinea" style="display:none; background:#b3b3b3 ;border-radius:10px;padding:7px; color:white;">
                                        
Ingreso del nombre y datos identificatorios de los spots publicitarios que luego se utilizarán en la grilla en las diferentes franjas horarias. Es importante que al momento de enviar el material a los servicios para su emisión, el spot sea identificado claramente y bajo el mismo nombre que se consignó en la carga.
                                    </div><br></span>
                            </div>
                            <br>
                            <form>
                                <div class="container">
                               
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2>Gesti&oacute;n de spots</h2>
                                        </div>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['crear']->value) {?>
                                                    <a href="<?php echo site_url();?>
spot/nuevo" 
                                                       class="btn btn-primary">
                                                        Nuevo
                                                    </a>&nbsp; 
                                                <?php }?>
                                                <a href="<?php echo site_url();?>
principal"
                                                   class="btn btn-back">
                                                    Volver
                                                </a><br><br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group col-md-12">

                                                <table class="table table-inverse col-md-11">
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Duración (en módulos)</th>
                                                        <th>Productora</th>
                                                        <th>Tipo</th>
                                                        <th>Cargo</th>
                                                        <th>Descripci&oacute;n</th>
                                                        <th>Link de<br> visualizaci&oacute;n</th>
                                                        <th>Editar</th>
                                                        <th>Bloquear</th>

                                                    </tr>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spots']->value, 'spot');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['spot']->value) {
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['spot']->value->getBloqueado()) {?>
                                                            <tr style="background: rgb(241, 241, 241);">
                                                        <?php } else { ?>
                                                            <tr>
                                                        <?php }?>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['spot']->value->getNombre();?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['spot']->value->getDuracion();?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['spot']->value->mostrarProductora();?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['spot']->value->getTipoServicio()->getNombre();?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['spot']->value->getCargo();?>
</td>
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['spot']->value->getDescripcion() == '') {?>
                                                                --
                                                            <?php } else { ?>
                                                                <?php if ($_smarty_tpl->tpl_vars['spot']->value->getBloqueado()) {?>
                                                                    Descripci&oacute;n
                                                                <?php } else { ?>
                                                                    <a href="" data-toggle="modal" data-target="#modalDescripcionSpot" onclick="$('#modalDescripcionSpot-body').text('<?php echo $_smarty_tpl->tpl_vars['spot']->value->getDescripcion();?>
');">
                                                                        Descripci&oacute;n
                                                                    </a>
                                                                <?php }?>
                                                            <?php }?>
                                                        </td>
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['spot']->value->getLink() == '') {?>
                                                                --
                                                            <?php } else { ?>
                                                                <?php if ($_smarty_tpl->tpl_vars['spot']->value->getBloqueado()) {?>
                                                                    Link
                                                                <?php } else { ?>
                                                                    <?php if (strstr($_smarty_tpl->tpl_vars['spot']->value->getLink(),"http") || strstr($_smarty_tpl->tpl_vars['spot']->value->getLink(),"ftp")) {?> 
                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['spot']->value->getLink();?>
" target="_blank">
                                                                            Link
                                                                        </a>
                                                                    <?php } else { ?>
                                                                        <a href="//<?php echo $_smarty_tpl->tpl_vars['spot']->value->getLink();?>
" target="_blank">
                                                                            Link
                                                                        </a>
                                                                    <?php }?>
                                                                <?php }?>
                                                            <?php }?>    
                                                        </td>
                                                        <?php if ($_smarty_tpl->tpl_vars['spot']->value->getUtilizado()) {?>
                                                            <td>-</td>
                                                            <td>
                                                                <?php if ($_smarty_tpl->tpl_vars['spot']->value->getBloqueado()) {?>
                                                                    <a data-id="<?php echo $_smarty_tpl->tpl_vars['spot']->value->getId();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['spot']->value->getNombre();?>
" href="javascript:void(0);" class='btnDesbloquearBloquearSpot'>Desbloquear</a>
                                                                <?php } else { ?>
                                                                    <a data-id="<?php echo $_smarty_tpl->tpl_vars['spot']->value->getId();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['spot']->value->getNombre();?>
" href="javascript:void(0);" class='btnBloquearSpot'>Bloquear</a>
                                                                <?php }?>
                                                            </td>

                                                        <?php } else { ?>
                                                            <td>
                                                                <?php if ($_smarty_tpl->tpl_vars['editar']->value) {?>
                                                                    <a href="<?php echo site_url();?>
spot/editar/<?php echo $_smarty_tpl->tpl_vars['spot']->value->getId();?>
">Editar</a>
                                                                <?php } else { ?>
                                                                    Editar
                                                                <?php }?>
                                                            </td>
                                                            <td>
                                                                <?php if ($_smarty_tpl->tpl_vars['editar']->value) {?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['spot']->value->getBloqueado()) {?>
                                                                        <a data-id="<?php echo $_smarty_tpl->tpl_vars['spot']->value->getId();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['spot']->value->getNombre();?>
" href="javascript:void(0);" class='btnDesbloquearBloquearSpot'>Desbloquear</a>
                                                                    <?php } else { ?>
                                                                        <a data-id="<?php echo $_smarty_tpl->tpl_vars['spot']->value->getId();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['spot']->value->getNombre();?>
" href="javascript:void(0);" class='btnBloquearSpot'>Bloquear</a>
                                                                    <?php }?>
                                                                <?php } else { ?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['spot']->value->getBloqueado()) {?>
                                                                        Bloqueado
                                                                    <?php } else { ?>
                                                                        Bloquear
                                                                    <?php }?>
                                                                <?php }?>
                                                            </td>
                                                            
                                                        <?php }?>
                                                    </tr>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                </table>
                                                <br>
                                                <?php if ($_smarty_tpl->tpl_vars['crear']->value) {?>
                                                    <a href="<?php echo site_url();?>
spot/nuevo" 
                                                       class="btn btn-primary">
                                                        Nuevo
                                                    </a>&nbsp; 
                                                <?php }?>
                                                <a href="<?php echo site_url();?>
principal"
                                                   class="btn btn-back">
                                                    Volver
                                                </a>
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


<?php if ($_smarty_tpl->tpl_vars['chat']->value) {?>
    <div id="chat-container" class="fixed" style="display: none;"></div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
