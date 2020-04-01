<?php
/* Smarty version 3.1.30, created on 2019-07-05 13:40:46
  from "C:\xampp\htdocs\sace\application\views\grilla\dineGrilla.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1f7d8ebcf491_62399572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ba4acec687d28a901b0d443c48b1af90cf40513' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\grilla\\dineGrilla.tpl',
      1 => 1545833988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:html/estados_spots.tpl' => 1,
    'file:html/menu_lateral.tpl' => 1,
    'file:html/menu_top.tpl' => 1,
    'file:html/footer_grilla.tpl' => 1,
  ),
),false)) {
function content_5d1f7d8ebcf491_62399572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



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
                        <a id="linkDDJJ2" href="" target="_blank" type="button" class="btn btn-primary">Ver DDJJ</a>
                    </div>
            </div>
        </div>
    </div>
</div>


<!-- ------------------------------------- BODY GENERAL ---------------------------------------------<-->

<div class="section" style="height: 1500px;">
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
                                    <div class="infoenlinea" style="display:none; background:#b3b3b3 ;border-radius:10px;padding:7px; color:white;">Se podrán visualizar módulos, estados y nombre de spot correspondiente a cada día y a cada franja horaria según un distrito, una agrupación política y un medio.<br>
                                        Los estados de los spots están representados por diferentes colores

                                    </div></span>
                                <form id="frmScaGrilla">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <br><br>
                                                <a href="<?php echo site_url();?>
grilla/admin"
                                                   class="btn btn-back">
                                                    Volver
                                                </a>
                                                <a  href="javascript:exportarExcel();"
                                                    class="btn btn-back">
                                                    Exportar grilla
                                                </a>
                                                <br>
                                                <h2>Pauta publicitaria</h2>

                                                <input id="btnActFiltrar" 
                                                       type="button" 
                                                       class="btn btn-primary" 
                                                       value="Filtrar" onclick="$('#custom-search-input').toggle();
                                                                       $('#btnActFiltrar').toggle();">

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
                                                                class="btn btn-back" onclick="$('#custom-search-input').toggle();
                                                                    $('#btnActFiltrar').toggle();">Ocultar</a> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="filtro-resultado"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
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

                                                                <th align='center'>Medio
                                                                <a class='fa fa-angle-up' style='font-weight:bold; font-size:18px;' href="javascript:filtro('medio.nombreFantasma','asc');"></a>
                                                                <a class='fa fa-angle-down' style='font-weight:bold; font-size:18px;' href="javascript:filtro('medio.nombreFantasma','desc');"></a>
                                                                </th>
                                                                <th align='center'>Cargo</th>
                                                                <th align='center'>Lista
                                                                        <a class='fa fa-angle-up' style='font-weight:bold; font-size:18px;' href="javascript:filtro('lista.nombreLista','asc');"></a>
                                                                        <a class='fa fa-angle-down' style='font-weight:bold; font-size:18px;' href="javascript:filtro('lista.nombreLista','desc');"></a>
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
                                                                           id="filtro-medio" 
                                                                           name="medio" 
                                                                           class="form-control" 
                                                                           style="border-radius: 5px;" value=""/>
                                                                </td>
                                                                <td>
                                                                    <input type="text" 
                                                                           id="filtro-cargo" 
                                                                           name="cargo" 
                                                                           class="form-control" 
                                                                           style="border-radius: 5px;" 
                                                                           value=""/>
                                                                </td>
                                                                <td>
                                                                    <input type="text" 
                                                                           id="filtro-lista" 
                                                                           name="lista" 
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
grilla/admin"
                                                       class="btn btn-back">
                                                        Volver
                                                    </a>
                                                    &nbsp;
                                                    <a  href="javascript:exportarExcel();"
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
public/js/grilla/grillaDine.js?ver1.5"><?php echo '</script'; ?>
>
    <div class="clear"></div>
</div>	
<?php $_smarty_tpl->_subTemplateRender("file:html/footer_grilla.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
