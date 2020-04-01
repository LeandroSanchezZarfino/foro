<?php
/* Smarty version 3.1.30, created on 2019-07-15 12:33:41
  from "C:\xampp\htdocs\sace\application\views\grilla\apGrilla.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d2c9cd55c8039_74172770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faef963b764df13afd4dd5e336d96389e3bd2dd9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\grilla\\apGrilla.tpl',
      1 => 1554148835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:grilla/apGrillaModals.tpl' => 1,
    'file:html/estados_spots.tpl' => 1,
    'file:html/menu_lateral.tpl' => 1,
    'file:html/menu_top.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_5d2c9cd55c8039_74172770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:grilla/apGrillaModals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 
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
                            <div class="infoenlinea" style="display:none; background:#b3b3b3 ;border-radius:10px;padding:7px; color:white;">La grilla se presenta bajo un esquema de matriz en el que cada renglón corresponde a un día, y cada columna a la fecha, servicio de comunicación y espacios de publicidad electoral (expresados en módulos) asignados en cuatro franjas horarias (F1, F2, F3, F4), siendo los horarios de las franjas los siguientes: <br>
                F1 de 7 a 11hs <br>       
                F2 de 11 a 16hs <br>
                F3 de 16 a 20hs <br>
                F4 de 20 a 01hs <br>
Cada módulo equivale a 12 segundos para TV, y 9 segundos para Radio. <br>

</div><br></span>
                            </div>
                            <form id="frmScaGrilla">
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
                                            <input  id="btnActFiltrar" 
                                                    type="button" 
                                                    class="btn btn-primary" 
                                                    value="Filtrar" onclick="$('#custom-search-input').toggle();$('#btnActFiltrar').toggle();">
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
                                                <?php echo $_smarty_tpl->tpl_vars['distrito']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['lista']->value;?>

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
                                                            <a class='fa fa-angle-down' style='font-weight:bold; font-size:18px;' href="javascript:filtro('pauta.dia','desc');"></a></th>
                                                            
                                                            <th align='center'>Medio
                                                            <a class='fa fa-angle-up' style='font-weight:bold; font-size:18px;' href="javascript:filtro('medio.nombreFantasma','asc');"></a>
                                                                <a class='fa fa-angle-down' style='font-weight:bold; font-size:18px;' href="javascript:filtro('medio.nombreFantasma','desc');"></a>
                                                            </th>
                                                        
                                                            <th align='center'>Tipo
                                                                        <a class='fa fa-angle-up' style='font-weight:bold; font-size:18px;' href="javascript:filtro('servicio.id ASC,medio.distritoId DESC','');"></a>
                                                                        <a class='fa fa-angle-down' style='font-weight:bold; font-size:18px;' href="javascript:filtro('servicio.id DESC,medio.distritoId ASC','');"></a>
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
                                                                       value=""
                                                                       placeholder="mm/dd/aaaa"/>
                                                                        
                                                            </td>
                                                            <td>
                                                                <input type="text" 
                                                                       id="filtro-medio" 
                                                                       name="agrupacion" 
                                                                       class="form-control" 
                                                                       style="border-radius: 5px;" value=""/>

                                                            </td>
                                                            
                                                            <td></td>
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
                                                <a  href="javascript:verModalExportarPorFecha();"
                                                    class="btn btn-back">
                                                    Exportar Grilla
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
public/js/grilla/grillaAp.js?v2.6"><?php echo '</script'; ?>
>
<div class="clear"></div>
</div>	


<?php if ($_smarty_tpl->tpl_vars['chat']->value) {?>
    <div id="chat-container" class="fixed" style="display: none;"></div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
