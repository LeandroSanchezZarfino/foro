<?php
/* Smarty version 3.1.30, created on 2019-06-23 22:10:11
  from "C:\xampp\htdocs\sace\application\views\comunicados\notificacion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1022f31090b2_32747450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c84decdf7be3f6f9a66c4ed8468fb2bec5e2883f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\comunicados\\notificacion.tpl',
      1 => 1555001341,
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
function content_5d1022f31090b2_32747450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="modalComunicado" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div id="modalComunicado-body" class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<div class="section" style="height:1200px;">
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
                            <div class="infoenlinea" style="display:none; background:#b3b3b3 ;border-radius:10px;padding:7px; color:white;"><?php if (($_smarty_tpl->tpl_vars['perfil']->value == PERFIL_OP_DINE) || ($_smarty_tpl->tpl_vars['perfil']->value == PERFIL_DINE)) {?>
                            Se recibirán comunicados desde la Dirección Nacional Electoral <?php }?>
                            <?php if (($_smarty_tpl->tpl_vars['perfil']->value == PERFIL_OP_AP) || ($_smarty_tpl->tpl_vars['perfil']->value == PERFIL_AP) || ($_smarty_tpl->tpl_vars['perfil']->value == PERFIL_SCA) || ($_smarty_tpl->tpl_vars['perfil']->value == PERFIL_OP_SCA)) {?>
                                En esta sección aparecen los comunicados emitidos por la Dirección de Campañas Electorales. Los mismos serán de suma importancia durante el transcurso de la campaña electoral.<?php }?></div><br></span>
                            </div>
                            <form>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2>Comunicados recibidos</h2>
                                        </div>

                                    </div>
                                    <a href="<?php echo site_url();?>
principal"
                                                   class="btn btn-back">
                                                    Volver
                                                </a>
                                                <br>
                                                <br>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group col-md-12">
                                                <table class="table table-inverse col-md-12">
                                                    <tr>
                                                        <th>Asunto</th>

                                                        <th>Fecha</th>
                                                    </tr>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginador']->value->getDatos(), 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
                                                        <tr>
                                                            <td>
                                                                <a href="<?php echo site_url();?>
comunicados/leer/<?php echo $_smarty_tpl->tpl_vars['u']->value->getId();?>
">
                                                                    <?php echo $_smarty_tpl->tpl_vars['u']->value->getAsunto();?>

                                                                </a>
                                                            </td>

                                                            <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getFecha()->format('d.m.Y H:i');?>
</td>
                                                        </tr>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="2" align="center">
                                                                <?php if ($_smarty_tpl->tpl_vars['paginador']->value->paginaAnterior() != '') {?>
                                                                    <a href="<?php echo site_url();?>
comunicados/<?php echo $_smarty_tpl->tpl_vars['paginador']->value->paginaAnterior();
if ($_smarty_tpl->tpl_vars['paginador']->value->getQ() != '') {?>/<?php echo $_smarty_tpl->tpl_vars['paginador']->value->getQ();
}?>">&#60</a>
                                                                <?php } else { ?>
                                                                    &#60
                                                                <?php }?>

                                                                <?php echo $_smarty_tpl->tpl_vars['paginador']->value->getPaginaActual();?>
 

                                                                <?php if ($_smarty_tpl->tpl_vars['paginador']->value->proximaPagina() != '') {?>
                                                                    <a href="<?php echo site_url();?>
comunicados/<?php echo $_smarty_tpl->tpl_vars['paginador']->value->proximaPagina();
if ($_smarty_tpl->tpl_vars['paginador']->value->getQ() != '') {?>/<?php echo $_smarty_tpl->tpl_vars['paginador']->value->getQ();
}?>">&#62</a>
                                                                <?php } else { ?>
                                                                    &#62
                                                                <?php }?>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <br><br>
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
