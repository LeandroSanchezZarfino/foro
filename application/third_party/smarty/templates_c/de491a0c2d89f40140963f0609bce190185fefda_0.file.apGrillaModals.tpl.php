<?php
/* Smarty version 3.1.30, created on 2019-07-15 12:33:41
  from "C:\xampp\htdocs\sace\application\views\grilla\apGrillaModals.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d2c9cd5847430_38591986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de491a0c2d89f40140963f0609bce190185fefda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\grilla\\apGrillaModals.tpl',
      1 => 1562289064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2c9cd5847430_38591986 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="modal-exportar" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Exportar grilla por fecha
                </h4>
            </div>
            <div style="margin-right: 20px; margin-left: 20px;">
                    <br>
                    <label>Fecha Inicio: </label>
                    <input type="date" 
                        id="modal-fecha" 
                        name="modal-fecha" 
                        class="form-control" 
                        style="border-radius: 5px;" 
                        value=""/>
                        <br>
                        <label>Fecha Fin:</label>
                            <input type="date" name="modal-fecha-fin" id="modal-fecha-fin" class="form-control" style="border-radius: 5px" value="">
                        <br>
                        <div style="text-align: center">
                        <button  id="expotar-grilla-dia" class="btn btn-primary" onclick="validar();">Exportar </button>
                        </div>
                        <br>
            </div>
        </div>
    </div>
</div>



<div id="modal-verificacion" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Exportar grilla por fecha 
                </h4>
            </div>
            <div style="margin-right: 20px; margin-left: 20px; text-align: center;">
                    <br>
                    <label>Debe seleccionar una fecha para poder exportar</label>
                    <br><br>
                    <button class="btn btn-primary" onclick="cerrarModalVerificacion();">Cerrar</button>
            </div>
                <br>
            </div>
        </div>
    </div>
</div>




<div id="modal-ddjj-general" class="modal fade" role="dialog">
    <div class="modal-dialog" style="width: 30% !important;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Información asignación
                </h4>
            </div>
            <div id="body" class="modal-body">
                    <div style="text-align: center;">
                        <a id="linkDDJJ3" href="" target="_blank" type="button" class="btn btn-primary">Ver DDJJ</a>
                    </div>
            </div>
        </div>
    </div>
</div>



<div id="modal-asignacion" class="modal fade" data-pauta="" data-medio="" data-franja="" data-estado="" data-servicio="" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Asignar spots
                </h4>
            </div>
            <div id="info-body" class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <b>Informaci&oacute;n:</b><br>
                        1 M&oacute;dulo Tv = <?php echo $_smarty_tpl->tpl_vars['modulosTv']->value;?>
 segundos
                        <br>
                        1 M&oacute;dulo Radio = <?php echo $_smarty_tpl->tpl_vars['modulosRadio']->value;?>
 segundos
                    </div>
                </div>
            </div>
            <div id="body" class="modal-body">
                <div class="row">
                    <div class="col-md-8">
                        Cargo electoral
                        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cargo']->value;?>
" readonly>

                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
                <div class="clear-15"></div>
                <div class="row">
                    <div class="col-md-8" id="spotsTv">
                        Spots publicitarios
                        <select id="spot_id" class="form-control">
                            <option value="-1">Seleccione</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['spots']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['s']->value->getId();?>
" 
                                        data-descripcion="<?php echo $_smarty_tpl->tpl_vars['s']->value->getDescripcion();?>
" 
                                        data-duracion="<?php echo $_smarty_tpl->tpl_vars['s']->value->getDuracion();?>
"
                                        data-servicio="<?php echo $_smarty_tpl->tpl_vars['s']->value->getTipoServicio()->getId();?>
"> 
                                        <?php echo $_smarty_tpl->tpl_vars['s']->value->getNombre();?>

                                </option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>  
                    <div class="col-md-4">
                        <br>
                        M&oacute;dulos a asignar: <span id="modulos">0</span>
                        <br>
                        M&oacute;dulos asignados: <span id="modulos-asignados">0</span>
                    </div>
                </div>
                <div id="spot-content">
                    <div class="row">
                        <div class = "clear-15"></div>
                        <div class = "col-md-3"><b>Spot</b></div> 
                        <div class = "col-md-6"><b>Descripci&oacute;n</b></div>
                        <div class = "col-md-2"><b>M&oacute;dulos</b></div>
                        <div class = "col-md-1"></div>
                    </div>
                </div>
                
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p id="error-spot" style="color: red; font-weight: bold;"></p>
                        <div class="clear" style="height: 5px;"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a id="linkDDJJ1" href="" target="_blank" style="display:none">Ver DDJJ</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit"
                       id="btnSubmit"
                       name="btnSubmit"
                       class="btn btn-primary" 
                       value="Confirmar">
                &nbsp;
                <button type="button" class="btn btn-back" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>



<div id="modal-mostrar-asignacion" class="modal fade" data-pauta="" data-medio="" data-franja=""    role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Spots asignados para esta franja
                </h4>
            </div>
            <div id="info-body" class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <b>Informaci&oacute;n:</b><br>
                        1 M&oacute;dulo Tv = <?php echo $_smarty_tpl->tpl_vars['modulosTv']->value;?>
 segundos
                        <br>
                        1 M&oacute;dulo Radio = <?php echo $_smarty_tpl->tpl_vars['modulosRadio']->value;?>
 segundos
                    </div>
                </div>
            </div>
            <div id="body" class="modal-body"></div>
            <div class="modal-footer">
                <a id="linkDDJJ2" href="" target="_blank">Ver DDJJ</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>           
            </div>
        </div>
    </div>
</div>



<div id="modal-confirmar-operacion" data-pauta="0" data-franja="0" data-estado="0" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Confirmar operaci&oacute;n
                </h4>
            </div>
            <div id="body" class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        ¿Está seguro que desea confirmar la operaci&oacute;n?
                    </div>
                </div>
                <div class="clear-15"></div>
                <div class="row">
                    <div class="col-md-12">
                        Observaciones
                        <textarea id="observacion" class="form-control" style="resize: none;" maxlength="255"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-6" style="text-align: left;">
                    <input id="descargar-ddjj" type="checkbox" value="1">Descargar DDJJ
                </div>
                <div class="col-md-6" style="text-align: right;">
                    <button id="aceptar" type="button" class="btn btn-primary">Aceptar</button>&nbsp;
                    <button type="button" class="btn btn-back" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="modal-franja-excedida" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Franja horaria superada
                </h4>
            </div>
            <div id="body" class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        La franja horaria sobre la que usted quiere operar, ya ha caducado
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-6"></div>
                <div class="col-md-6" style="text-align: right;">
                    <button type="button" class="btn btn-back" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
