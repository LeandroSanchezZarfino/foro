<?php
/* Smarty version 3.1.30, created on 2019-04-11 15:17:10
  from "C:\xampp\htdocs\sace\application\views\spot\scaEstadosSpots.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5caf84a6de7d92_73608050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55dc2714584153f9eb42f2b25728b0b976193c23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\spot\\scaEstadosSpots.tpl',
      1 => 1555003703,
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
function content_5caf84a6de7d92_73608050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="section" style="height: 800px;">
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
                                En esta sección podrá aceptar o rechazar los spot que hayan sido cargados por las Agrupaciones sin necesidad de abrir la grilla general. Una vez realizada la acción correspondiente, se verá reflejado en la grilla.
                        <br>

                         </div></span>
                            </div>
                            <div class="col-md-6">
                                <h2><?php echo $_smarty_tpl->tpl_vars['sca']->value->getNombre();?>
</h2>
                                <h2>Estado de Spots:</h2>
                            </div>
                            <div class="col-md-12">
                                Filtrar Agrupaciones
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="block">
                                            <label>Distrito</label>
                                            <select name="distrito" id="distrito" class="form-control" onchange="filtrarPorDistrito()">
                                                <option value="-1">-- Todos --</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agrupaciones']->value, 'agrupacion');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['agrupacion']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['agrupacion']->value['distrito_id'];?>
">
                                                        <?php echo $_smarty_tpl->tpl_vars['agrupacion']->value["distrito"];?>

                                                    </option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="block">
                                            <label>Lista</label>
                                            <select onchange="filtrarPorLista();" class="form-control" name="lista" id="lista">
                                                <option value="-1">-- Todas --</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agrupaciones']->value, 'agrupacion');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['agrupacion']->value) {
?>
                                                    <option data-distrito="<?php echo $_smarty_tpl->tpl_vars['agrupacion']->value['distrito_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['agrupacion']->value['lista_id'];?>
">
                                                        <?php echo $_smarty_tpl->tpl_vars['agrupacion']->value["lista_nombre"];?>
 - <?php echo $_smarty_tpl->tpl_vars['agrupacion']->value["distrito"];?>

                                                    </option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Buscar Agrupación</label>
                                        <input class="form-control" id="buscador" onfocusout="filtrarPorNombre();" placeholder="Nombre agupación a buscar">
                                    </div>
                                    <div class="col-md-2">
                                        <label>Reiniciar Filtros</label><br>
                                        <button class="btn btn-danger" onclick="reiniciarFiltrosBusqueda();"> <i class="fa fa-trash"></i></button>                                        
                                    </div>
                                </div>
                                <div class="row"><br><br>
                                    <div class="col-md-7">
                                        <div class="block">
                                            <label>Seleccione Agrupación</label>
                                            <select class="form-control" name="agrupacion" id="agrupacion" onchange="traerSpotsAgrupacion();">
                                                <option value="-1">-- Seleccione --</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agrupaciones']->value, 'agrupacion');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['agrupacion']->value) {
?>
                                                <option data-distrito="<?php echo $_smarty_tpl->tpl_vars['agrupacion']->value['distrito_id'];?>
" data-lista="<?php echo $_smarty_tpl->tpl_vars['agrupacion']->value['lista_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['agrupacion']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['agrupacion']->value["distrito"];?>
  -  <?php echo $_smarty_tpl->tpl_vars['agrupacion']->value["nombre"];?>
   - <?php echo $_smarty_tpl->tpl_vars['agrupacion']->value["cargo"];?>
</option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-12">
                                <div class="container">
                                    <h4 id="errorSpots"  style="display: none;">La agrupación aún no ha cargado spots en este medio </h4>
                                    <table  class="table table-inverse" id="tabla" style="display: none;">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Duración<br>en Módulos</th>
                                                <th>Cargo</th>
                                                <th>Descripcion</th>
                                                <th>Link</th>
                                                <th>Estado</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody id="listaSpots">
                                        </tbody>
                                    </table>
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

<div id="motivoRechazo" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Seleccione motivo Rechazo</h4>
      </div>
      <div class="modal-body">
        <input type="text" id="idSpotModal" style="display: none;">
        <select id="motivoRechazoId" class="form-control">
            <option value="">Seleccione</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rechazos']->value, 'rechazo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rechazo']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['rechazo']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['rechazo']->value->getMotivo();?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="guardarCambiosSpot()">Confirmar</button>
      </div>
    </div>

  </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['chat']->value) {?>
    <div id="chat-container" class="fixed" style="display: none;"></div>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo site_url();?>
public/js/spots/scaEstadosSpots.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
