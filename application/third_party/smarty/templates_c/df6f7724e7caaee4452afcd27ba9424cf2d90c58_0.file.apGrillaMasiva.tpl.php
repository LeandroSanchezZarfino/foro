<?php
/* Smarty version 3.1.30, created on 2019-07-04 22:24:23
  from "C:\xampp\htdocs\sace\application\views\grilla\apGrillaMasiva.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1ea6c7055346_87189099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df6f7724e7caaee4452afcd27ba9424cf2d90c58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\grilla\\apGrillaMasiva.tpl',
      1 => 1562289064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:grilla/apGrillaModals.tpl' => 1,
    'file:html/estados_spots_masivo.tpl' => 1,
    'file:html/menu_lateral.tpl' => 1,
    'file:html/menu_top.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_5d1ea6c7055346_87189099 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:grilla/apGrillaModals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 
<div class="section" style="height: 1000px;">
    <?php $_smarty_tpl->_subTemplateRender("file:html/estados_spots_masivo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
Carga Masiva.- Permite asignar uno o más spot para diferentes días y franjas horarias en un mismo servicio. <br>

</div><br></span>
                                    
                            </div>
                            <div id="frmScaGrilla">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>Pauta publicitaria</h2>
                                            <a  href="<?php echo site_url();?>
principal"
                                                class="btn btn-back">
                                                Volver
                                            </a>
                                            <a  href="javascript:verModalExportarPorFecha();"
                                                class="btn btn-back">
                                                Exportar grilla
                                            </a>
                                        </div>
                                        <div class="col-md-8 center-block">
                                            <h2>
                                                <?php echo $_smarty_tpl->tpl_vars['distrito']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['lista']->value;?>

                                            </h2>
                                        </div>
                                        <div class="col-md-4">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 center-block">
                                            <h2>Seleccione Medio</h2>
                                            
                                            <select id="filtro-medio"   name="agrupacion" class="form-control" style="border-radius: 5px;display: inline-block;">
                                                 <option value="-1">Seleccione Medio</option>
                                                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['medios']->value, 'medio');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['medio']->value) {
?>
                                                 <option value="<?php echo $_smarty_tpl->tpl_vars['medio']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['medio']->value["nombreFantasmaServicio"];?>
</option>
                                                 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                             </select>    
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <br>
                                    </div>
                                    <div class="row" id="listado" style="display: none;">
                                            <div class="col-md-7">
                                                <div id="grilla">
                                                    <table id="grilla-tabla" class="table table-inverse col-md-11">		 
                                                        <tr>
                                                            <th align='center'>Fecha</th>
                                                            <th align='center'>F1</th>
                                                            <th align='center'>F2</th>
                                                            <th align='center'>F3</th>
                                                            <th align='center'>F4</th>
                                                        </tr>
                                                        <tbody id="contenidoGrilla"></tbody>
                                                        <tfoot></tfoot>
                                                    </table>
                                                    <br>
                                                    <div id="grilla-footer"></div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-4">
                                                <table  class="table table-inverse col-md-11">
                                                    <thead>
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Duración</th>
                                                            <th>Repeticiones por franja</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody id="spots">
                                                        
                                                    </tbody>
                                                </table>
                                                <button type="button" class="btn btn-info" id="asignar">
                                                    Asignar Spots
                                                </button>
                                                <button type="button" class="btn btn-danger" id="cancelarSeleccion">
                                                    Cancelar Selección
                                                </button>
                                            </div>                                                
                                        </div>
                                        <div class="row">
                                            <a href="<?php echo site_url();?>
principal"
                                               class="btn btn-back">
                                               Volver
                                            </a>
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
<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['maxAsignaciones']->value;?>
" id="maxAsignaciones" style="display: none">

<div class="modal" id="sobranModulosModal" tabindex="1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">¡Atención!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            Los espacios en color amarillo tienen más módulos que pueden ser utilizados.
            ¿Desea continuar?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="asignar2">Continuar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
    </div>  
</div>
</div>
<div class="modal" id="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="mensajeModal"></p>
      </div>
      <div class="modal-footer">
        <button type="button" id="asignarBordo" class="btn btn-primary" onclick="aceptarAsignacionBordo();" data-dismiss="modal">Aceptar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="modal2" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="mensajeModal2"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo site_url();?>
public/js/grilla/grillaEstadoSpots.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo site_url();?>
public/js/grilla/grillaApMasiva.js?v3.3"><?php echo '</script'; ?>
> 
<div class="clear"></div>
</div>	


<?php if ($_smarty_tpl->tpl_vars['chat']->value) {?>
    <div id="chat-container" class="fixed" style="display: none;"></div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
