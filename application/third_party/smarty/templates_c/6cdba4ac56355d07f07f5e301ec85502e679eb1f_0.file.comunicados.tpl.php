<?php
/* Smarty version 3.1.30, created on 2019-06-23 22:09:22
  from "C:\xampp\htdocs\sace\application\views\comunicados\comunicados.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1022c239d803_06650501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cdba4ac56355d07f07f5e301ec85502e679eb1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\comunicados\\comunicados.tpl',
      1 => 1555001785,
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
function content_5d1022c239d803_06650501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="modalComunicado" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Enviar comunicado
                </h4>
            </div>
            <div id="modalComunicado-body" class="modal-body"></div>
            <div class="modal-footer">
                <img id="modal-loader" src="<?php echo site_url();?>
public/img/loader_32.gif" style="display: none;">
                &nbsp;
                &nbsp;
                <input type="button"
                       id="modalComunicadoOk"
                       name="modalComunicadoOk"
                       data-id=""
                       class="btn btn-primary" 
                       value="Aceptar">
                &nbsp;
                <button type="button" class="btn btn-back" data-dismiss="modal">Cancelar</button>
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
                            
                            <div class="col-md-12 aelinea" >
                                <span><img style="width: 100px;cursor: pointer;" src="<?php echo site_url();?>
public/img/mas-info-png.png" onclick="$('.infoenlinea').toggle();">
                                    <div class="infoenlinea" style="display:none; background:#b3b3b3 ;border-radius:10px;padding:7px; color:white;">
En esta sección aparecen los comunicados emitidos por la Dirección de Campañas Electorales. Los mismos serán de suma importancia durante el transcurso de la campaña electoral.  </div><br>
                                </span>
                            </div>

                            <form>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2>Comunicados</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                <br>
                                                <?php if ($_smarty_tpl->tpl_vars['crear']->value) {?>
                                                    <a href="<?php echo site_url();?>
comunicados/nuevo" 
                                                       class="btn btn-primary">
                                                        Emitir comunicado
                                                    </a>&nbsp; 
                                                <?php }?>
                                                <a href="<?php echo site_url();?>
principal"
                                                   class="btn btn-back">
                                                    Volver
                                                </a>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group col-md-12">
                                                <table class="table table-inverse col-md-12">
                                                    <tr>
                                                        <th>Asunto</th>

                                                        <th>Fecha</th>
                                                        <th>Acción</th>
                                                        <th>Enviar</th>
                                                    </tr>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginador']->value->getDatos(), 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getAsunto();?>
</td>

                                                            <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getFecha()->format('d.m.Y H:i');?>
</td>
                                                            <td>
                                                                <?php if ($_smarty_tpl->tpl_vars['editar']->value) {?>
                                                                    <?php if ($_smarty_tpl->tpl_vars['u']->value->getActivo() == 0) {?>
                                                                        <a href="<?php echo site_url();?>
comunicados/editar/<?php echo $_smarty_tpl->tpl_vars['u']->value->getId();?>
">Editar</a>
                                                                    <?php } else { ?>
                                                                        <a href="<?php echo site_url();?>
comunicados/editar/<?php echo $_smarty_tpl->tpl_vars['u']->value->getId();?>
">Ver Comunicado</a>
                                                                    <?php }?>
                                                                <?php } else { ?>
                                                                    Editar
                                                                <?php }?>
                                                            </td>
                                                            <td>
                                                                <?php if ($_smarty_tpl->tpl_vars['editar']->value && !$_smarty_tpl->tpl_vars['u']->value->getActivo()) {?>
                                                                    <a href="javascript:void(0);" 
                                                                       class="btnHabilitar" 
                                                                       data-id="<?php echo $_smarty_tpl->tpl_vars['u']->value->getId();?>
"
                                                                       data-name="<?php echo $_smarty_tpl->tpl_vars['u']->value->getAsunto();?>
">Enviar</a>
                                                                <?php } else { ?>
                                                                    Enviado
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
                                                            <td colspan="4" align="center">
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
                                                <br>
                                                <?php if ($_smarty_tpl->tpl_vars['crear']->value) {?>
                                                    <a href="<?php echo site_url();?>
comunicados/nuevo" 
                                                       class="btn btn-primary">
                                                        Emitir comunicado
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
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo site_url();?>
public/js/comunicados.js"><?php echo '</script'; ?>
>
</div>
<div class="clear"></div>
</div>	


<?php if ($_smarty_tpl->tpl_vars['chat']->value) {?>
    <div id="chat-container" class="fixed" style="display: none;"></div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
