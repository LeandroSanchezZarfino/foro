<?php
/* Smarty version 3.1.30, created on 2019-06-18 15:03:34
  from "C:\xampp\htdocs\sace\application\views\productora\productoras.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d092776e8de57_38482621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c28255907f2c6d02ae536696fef9ec6ef268f70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\productora\\productoras.tpl',
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
function content_5d092776e8de57_38482621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="modalBloquear" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Bloquear Productora
                </h4>
            </div>
            <div id="modal-body" class="modal-body">
                ¿Est&aacute;s seguro que desea Habilitar/Deshabilitar esta productora?
            </div>
            <div class="modal-footer">
                <input type="button"
                       id="modalBloquearOk"
                       name="modalBloquearOk"
                       data-id=""
                       class="btn btn-primary" 
                       value="Aceptar">
                &nbsp;
                <button type="button" class="btn btn-back" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>




<div id="modalEliminar" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Eliminar productora
                </h4>
            </div>
            <div id="modalEliminar-body" class="modal-body">
                
            </div>
            <div class="modal-footer">
                <input type="button"
                       id="modalEliminarOk"
                       name="modalEliminarOk"
                       data-id=""
                       class="btn btn-primary" 
                       value="Aceptar">
                &nbsp;
                <button type="button" class="btn btn-back" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>


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
                            <div class="infoenlinea" style="display:none; background:#b3b3b3 ;border-radius:10px;padding:7px; color:white;">Ingreso y edición de datos de las productoras que realizan los spots publicitarios. El CUIT ingresado debe ser válido, así como los datos deben ser fehacientes.</div></span>
                            <br>
                            </div>
                            <form method="post" action="<?php echo site_url();?>
productora/<?php echo $_smarty_tpl->tpl_vars['paginador']->value->getPaginaActual();?>
">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2>Gesti&oacute;n de productoras</h2>

                                            <div id="custom-search-input">
                                                <div class="input-group col-md-12">
                                                    <input type="text" 
                                                           name="q" 
                                                           class="form-control input-lg" 
                                                           placeholder="Buscar Productora por Nombre, Cuit o Raz&oacute;n Social" />
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-info btn-lg" type="submit">
                                                            <i class="fa fa-search" aria-hidden="true"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>

                                                <?php if ($_smarty_tpl->tpl_vars['crear']->value) {?>
                                                    <a href="<?php echo site_url();?>
productora/nuevo" 
                                                       class="btn btn-primary">
                                                        Nuevo
                                                    </a>&nbsp; 
                                                <?php }?>
                                                <a href="<?php echo site_url();?>
principal"
                                                   class="btn btn-back">
                                                    Volver
                                                </a>
                                                <br><br>
                                            <div>
                                                <?php if ($_smarty_tpl->tpl_vars['paginador']->value->getQ() != '') {?>
                                                    Resultados para la busqueda: <i><?php echo $_smarty_tpl->tpl_vars['paginador']->value->getQ();?>
</i> - 
                                                    <a href="<?php echo site_url();?>
productora">[X]</a>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group col-md-12">

                                                <table class="table table-inverse col-md-11">		 
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Raz&oacute;n social</th>
                                                        <th>Cuit</th>


                                                        <th>Editar</th>

                                                    </tr>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginador']->value->getDatos(), 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getNombre();?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getRazonSocial();?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getCuit();?>
</td>

                                                        
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['editar']->value) {?>
                                                                <a href="<?php echo site_url();?>
productora/editar/<?php echo $_smarty_tpl->tpl_vars['u']->value->getId();?>
">Editar</a>
                                                            <?php } else { ?>
                                                                Editar
                                                            <?php }?>
                                                        </td>
                                                        
                                                    </tr>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="7" align="center">
                                                                <?php if ($_smarty_tpl->tpl_vars['paginador']->value->paginaAnterior() != '') {?>
                                                                    <a href="<?php echo site_url();?>
productora/<?php echo $_smarty_tpl->tpl_vars['paginador']->value->paginaAnterior();
if ($_smarty_tpl->tpl_vars['paginador']->value->getQ() != '') {?>/<?php echo $_smarty_tpl->tpl_vars['paginador']->value->getQ();
}?>">&#60</a>
                                                                <?php } else { ?>
                                                                    &#60
                                                                <?php }?>

                                                                <?php echo $_smarty_tpl->tpl_vars['paginador']->value->getPaginaActual();?>
 

                                                                <?php if ($_smarty_tpl->tpl_vars['paginador']->value->proximaPagina() != '') {?>
                                                                    <a href="<?php echo site_url();?>
productora/<?php echo $_smarty_tpl->tpl_vars['paginador']->value->proximaPagina();
if ($_smarty_tpl->tpl_vars['paginador']->value->getQ() != '') {?>/<?php echo $_smarty_tpl->tpl_vars['paginador']->value->getQ();
}?>">&#62</a>
                                                                <?php } else { ?>
                                                                    &#62
                                                                <?php }?>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <br>
                                                <div>
                                                    Mostrando P&aacute;gina <?php echo $_smarty_tpl->tpl_vars['paginador']->value->getPaginaActual();?>
 de 
                                                    <?php echo $_smarty_tpl->tpl_vars['paginador']->value->getTotalPaginas();?>

                                                </div>
                                                <br>
                                                <?php if ($_smarty_tpl->tpl_vars['crear']->value) {?>
                                                    <a href="<?php echo site_url();?>
productora/nuevo" 
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
