<?php
/* Smarty version 3.1.30, created on 2019-09-17 13:01:28
  from "C:\xampp\htdocs\sace\application\views\grilla\scaGrilla.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d810358530821_99483552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2c66330503f8ac5c089754676e2ac4350f16569' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\grilla\\scaGrilla.tpl',
      1 => 1568736086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:html/estados_spots.tpl' => 1,
    'file:html/menu_lateral.tpl' => 1,
    'file:html/menu_top.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_5d810358530821_99483552 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
                    <div style="text-align: center;">
                        <button type="button" id="btnExportFecha" class="btn btn-info">Filtrar Por Fecha</button>
                        <button type="button" id="btnExportSemana" class="btn btn-info">Filtrar Por Semana</button>
                        
                    </div>
                    <div id="filtrarPorDia">
                    <br>
                         <label>Fecha: </label>
                        <input type="date" 
                            id="modal-filtro-fecha" 
                            name="modal-filtro-fecha" 
                            class="form-control" 
                            style="border-radius: 5px; " 
                            value=""/>
                    </div>
                   
                    <div id="filtrarPorSemana" style="display: none;">
                    <br>
                        <label>Semana:</label>
                        <input min="0" max="4" type="number" id="modal-filtro-semana" name="modal-filtro-semana" class="form-control" style="border-radius: 5px;">
                    </div>
                    <hr>
                    <label>Cargo</label>
                    <select id="export-cargo"  class="form-control">
                        <option value="-1">Todos</option>
                    </select>
                    <hr>
                    <label>Agrupación</label>
                    <select id="export-agrupacion" class="form-control">
                        <option value="-1">Todos</option>
                    </select>
                    <hr>
                    <div style="text-align: center">
                    <button  id="modal-boton-exportar" class="btn btn-primary" onclick="validar();">Exportar grilla</button>
                    </div>
            </div>
            <br>   
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



<div id="modal-sinUso" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Franja sin uso
                </h4>
            </div>
            <div id="body" class="modal-body">
                <div class="row">
                     <div class="col-md-12">
                        La franja horaria seleccionada se encuentra sin uso.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="modal-bloqueo" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Franja sin uso
                </h4>
            </div>
            <div id="body" class="modal-body">
                <div class="row">
                     <div class="col-md-12">
                        La franja horaria se encuentra bloqueada por el Debate Público
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="modal-ddjj-general" class="modal fade" role="dialog" >
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
                        <a id="linkDDJJ2" href="" target="_blank" type="button" class="btn btn-primary">Ver DDJJ</a>
                        </div>
            </div>
        </div>
    </div>
</div>



<div id="modal-asignacion" class="modal fade" data-pauta="" data-duracion="" data-franja="" data-estado="" data-dia="" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Aceptar/Rechazar spot
                </h4>
            </div>
            <div id="header-body" class="modal-body">
                <h2 id="duracion"></h2>
            </div>
            <div id="body" class="modal-body"></div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p id="error" style="color: red; font-weight: bold;"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a id="linkDDJJ1" href="" target="_blank">Ver DDJJ</a>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <button id="asignar" type="button" class="btn btn-primary">Aceptar</button>&nbsp;
                <button type="button" class="btn btn-back" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>



<div id="modal-confirmar-asignacion" data-pauta="0" data-franja="0" data-estado="0" class="modal fade" role="dialog">
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
                        ¿Est&aacute;s seguro que desea confirmar la operaci&oacute;n?
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



<div id="modal-rechazar" class="modal fade" data-spot="" data-franja= "" data-dia="" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Motivo de rechazo
                </h4>
            </div>
            <div id="body" class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <label>Seleccione el motivo de rechazo</label>
                        <select id="motivo_rechazo" class="form-control" onchange="avisarRechazoInexistencia();"></select>
                        <br>
                        <p id="rechazoPorInexistente" style="display: none">Recuerde que puede rechazar por este motivo solamente 48 hs antes de la emisi&oacuten</p>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p id="error-rechazo" style="color: red; font-weight: bold;"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="rechazar" type="button" class="btn btn-primary">
                    Rechazar
                </button>
            </div>
        </div>
    </div>
</div>



<div id="modal-no-emision" class="modal fade" data-spot="" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Motivo de No emisi&oacute;n
                </h4>
            </div>
            <div id="body" class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <label>Seleccione el motivo de no emisi&oacute;n</label>
                        <select id="motivo-no-emision" class="form-control"></select>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p id="error-emision" style="color: red; font-weight: bold;"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="no-emitir" type="button" class="btn btn-primary">
                    No Emitir
                </button>
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



<div id="modal-franja-noEmitida" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Franja horaria futura
                </h4>
            </div>
            <div id="body" class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        La franja horaria sobre la que usted quiere operar es futura.
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-6"></div>
                <div class="col-md-6" style="text-align: right;">
                    <a id="linkDDJJ3" href="" target="_blank">Ver DDJJ</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-back" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section" style="height: 1000px;">
    <?php $_smarty_tpl->_subTemplateRender("file:html/estados_spots.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
                                La grilla se presenta bajo un esquema de matriz en el que cada renglón corresponde a un día, y cada columna a la fecha, servicio de comunicación y espacios de publicidad electoral (expresados en módulos) asignados en cuatro franjas horarias (F1, F2, F3, F4), siendo los horarios de las franjas los siguientes: <br>
                F1 de 7 a 11hs <br>       
                F2 de 11 a 16hs <br>
                F3 de 16 a 20hs <br>
                F4 de 20 a 01hs <br>
Cada módulo equivale a 12 segundos para TV, y 9 segundos para Radio. 
<br>

 </div></span>
                            </div>
                            <form id="frmScaGrilla">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2>Pauta publicitaria</h2>
                                                <a href="<?php echo site_url();?>
principal"
                                                   class="btn btn-back">
                                                    Volver
                                                </a>
                                                <a  href="javascript:activarModal();"
                                                    class="btn btn-back">
                                                    Exportar grilla
                                                </a>

                                            <input id="btnActFiltrar" 
                                                               type="button" 
                                                               class="btn btn-primary" 
                                                               value="Filtrar" onclick="$('#custom-search-input').toggle();$('#btnActFiltrar').toggle();">
                                            <br><br>
                                            <div id="custom-search-input" style="padding: 10px; display: none;">

                                                <div class="row">
                                                    <div class="form-group col-xs-4">
                                                        <label>Fecha inicio</label>
                                                        <input type="date" 
                                                               id="filtro-fecha-inicio"
                                                               class="form-control"
                                                               style="border: 1px solid #cccccc;">
                                                    </div>
                                                    <div class="form-group col-xs-4">
                                                        <label>Fecha fin</label>
                                                        <input type="date" 
                                                               id="filtro-fecha-fin"
                                                               class="form-control"
                                                               style="border: 1px solid #cccccc;">
                                                    </div>
                                                    <div class="form-group col-xs-4">
                                                        <label>Estado</label>
                                                        <select id="filtro-estado"
                                                                class="form-control">
                                                            <option value="0">Seleccione</option>
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['estados']->value, 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['e']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['e']->value->getDescripcion();?>
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
                                                    <div class="col-md-12">
                                                        <span>
                                                            <strong>Importante:</strong> Al establecer el filtrado por rango de fecha
                                                            se deja sin efecto el filtro por fecha exacta
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <hr>
                                                    <div class="form-group col-xs-4">
                                                        <input id="btnFiltrar" 
                                                               type="button" 
                                                               class="btn btn-primary" 
                                                               value="Filtrar">
                                                        &nbsp;
                                                        <a  id="btnLimpiarFiltro" 
                                                            href="javascript:void(0);"
                                                            class="btn btn-back">Limpiar</a>
                                                        <a  id="btnOcultarFiltro" 
                                                            href="javascript:void(0);"
                                                            class="btn btn-back" onclick="$('#custom-search-input').toggle();$('#btnActFiltrar').toggle();">Ocultar</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="filtro-resultado"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h2>
                                                <?php echo $_smarty_tpl->tpl_vars['medio']->value;?>

                                            </h2>
                                        </div>
                                        <div class="col-md-4"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group col-md-10">
                                                <div id="grilla">
                                                    
                                                    <table id="grilla-tabla" class="table table-inverse col-md-11">		 
                                                        <tr>
                                                            <th align='center'>Fecha
                                                                <a class='fa fa-angle-up' style='font-weight:bold; font-size:18px;' href="javascript:filtro('pauta.dia','asc');"></a>
                                                                <a class='fa fa-angle-down' style='font-weight:bold; font-size:18px;' href="javascript:filtro('pauta.dia','desc');"></a>
                                                            </th>
                                                            <th align='center'>Agrupaci&oacute;n
                                                                <a class='fa fa-angle-up' style='font-weight:bold; font-size:18px;' href="javascript:filtro('agrupacion.nombre','asc');"></a>
                                                                <a class='fa fa-angle-down' style='font-weight:bold; font-size:18px;' href="javascript:filtro('agrupacion.nombre','desc');"></a>
                                                            </th>
                                                            <th align='center'>Lista
                                                                <a class='fa fa-angle-up' style='font-weight:bold; font-size:18px;' href="javascript:filtro('lista.nombreLista','asc');"></a>
                                                                <a class='fa fa-angle-down' style='font-weight:bold; font-size:18px;' href="javascript:filtro('lista.nombreLista','desc');"></a>
                                                            </th>
                                                            
                                                            <th align='center'>Cargo
                                                                <a class='fa fa-angle-up' style='font-weight:bold; font-size:18px;' href="javascript:filtro('cargo.descripcion','asc');"></a>
                                                                <a class='fa fa-angle-down' style='font-weight:bold; font-size:18px;' href="javascript:filtro('cargo.descripcion','desc');"></a>
                                                            </th>
                                                            <th align='center'>F1</th>
                                                            <th align='center'>F2</th>
                                                            <th align='center'>F3</th>
                                                            <th align='center'>F4</th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <input type="date" 
                                                                       id="filtro-fecha" 
                                                                       name="fecha" 
                                                                       class="form-control" 
                                                                       style="border-radius: 5px;" 
                                                                       value=""/>
                                                            </td>
                                                            <td>
                                                                <input type="text" 
                                                                       id="filtro-agrupacion" 
                                                                       name="agrupacion" 
                                                                       class="form-control" 
                                                                       style="border-radius: 5px;" value=""/>
                                                            </td>
                                                            <td>
                                                                <input type="text" 
                                                                       id="filtro-lista" 
                                                                       name="lista" 
                                                                       class="form-control" 
                                                                       style="border-radius: 5px;" 
                                                                       value=""/>
                                                            </td>
                                                            <td>
                                                                <input type="text" 
                                                                       id="filtro-cargo" 
                                                                       name="cargo" 
                                                                       class="form-control" 
                                                                       style="border-radius: 5px;" 
                                                                       value=""/>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tfoot></tfoot>
                                                    </table>
                                                    <br>
                                                    <div id="grilla-footer"></div>
                                                </div>
                                                <br>
                                                
                                                <br><br>
                                                <a href="<?php echo site_url();?>
principal"
                                                   class="btn btn-back">
                                                    Volver
                                                </a>
                                                &nbsp;
                                                <a  href="javascript:activarModal();"
                                                    class="btn btn-back">
                                                    Exportar grilla
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
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo site_url();?>
public/js/grilla/grillaEstadoSpots.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo site_url();?>
public/js/grilla/grillaSca.js?v2.5"><?php echo '</script'; ?>
>
<div class="clear"></div>
</div>


<?php if ($_smarty_tpl->tpl_vars['chat']->value) {?>
    <div id="chat-container" class="fixed" style="display: none;"></div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
