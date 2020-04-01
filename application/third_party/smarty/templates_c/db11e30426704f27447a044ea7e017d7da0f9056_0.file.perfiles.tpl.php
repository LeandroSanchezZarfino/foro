<?php
/* Smarty version 3.1.30, created on 2018-12-05 09:42:31
  from "C:\xampp\htdocs\sace\application\views\perfil\perfiles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c07c7b7cb9030_02367207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db11e30426704f27447a044ea7e017d7da0f9056' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\perfil\\perfiles.tpl',
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
function content_5c07c7b7cb9030_02367207 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\sace\\application\\third_party\\smarty\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div id="modalEliminarPerfil" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Eliminar Perfil
                </h4>
            </div>
            <div id="modalEliminarPerfil-body" class="modal-body">
                
            </div>
            <div class="modal-footer">
                <input type="button"
                       id="modalEliminarPerfilOk"
                       name="modalEliminarPerfilOk"
                       data-id=""
                       class="btn btn-primary" 
                       value="Aceptar">
                &nbsp;
                <button type="button" class="btn btn-back" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>


<div class="section">
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

                            
                            <form method="post" action="<?php echo site_url();?>
perfil">
                                <div class="container">
                                <br>
                                                <?php if ($_smarty_tpl->tpl_vars['crear']->value) {?>
                                                    <a href="<?php echo site_url();?>
perfil/nuevo" 
                                                       class="btn btn-primary">
                                                        Nuevo
                                                    </a>&nbsp; 
                                                <?php }?>
                                                <a href="<?php echo site_url();?>
principal"
                                                   class="btn btn-back">
                                                    Volver
                                                </a>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2>Gesti&oacute;n de Perfiles</h2>
                                            <div id="custom-search-input">
                                                <div class="input-group col-md-12">
                                                    <input type="text" 
                                                           name="q" 
                                                           class="form-control input-lg" 
                                                           placeholder="Buscar Perfil por Nombre..." />
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-info btn-lg" type="submit">
                                                            <i class="fa fa-search" aria-hidden="true"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <?php if ($_smarty_tpl->tpl_vars['paginador']->value->getQ() != '') {?>
                                                    Resultados para la búsqueda: <i><?php echo $_smarty_tpl->tpl_vars['paginador']->value->getQ();?>
</i> - <a href="<?php echo site_url();?>
perfil">[X]</a>
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
                                                        <th>&Uacute;ltima Modificaci&oacute;n</th>
                                                        <th>Editar</th>
                                                        <th>Eliminar</th>
                                                    </tr>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginador']->value->getDatos(), 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                                                        <tr>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['p']->value->getNombre();?>
</td>
                                                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['p']->value->getUltimaModificacion(),"%d/%m/%y %H:%M:%S");?>
</td>
                                                            <?php if ($_smarty_tpl->tpl_vars['p']->value->getId() == $_smarty_tpl->tpl_vars['administrador']->value) {?>
                                                                <td>Editar</td>
                                                                <td>Eliminar</td>
                                                            <?php } else { ?>
                                                                <td>
                                                                    <?php if ($_smarty_tpl->tpl_vars['editar']->value) {?>
                                                                        <a href="<?php echo site_url();?>
perfil/editar/<?php echo $_smarty_tpl->tpl_vars['p']->value->getId();?>
">Editar</a>
                                                                    <?php } else { ?>
                                                                        Editar
                                                                    <?php }?>
                                                                </td>
                                                                <td>
                                                                    <?php if ($_smarty_tpl->tpl_vars['eliminar']->value) {?>
                                                                        <a data-id="<?php echo $_smarty_tpl->tpl_vars['p']->value->getId();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['p']->value->getNombre();?>
" href='javascript:void(0);' class='btnEliminar'>Eliminar</a>
                                                                    <?php } else { ?>
                                                                        Eliminar
                                                                    <?php }?>
                                                                </td>
                                                            <?php }?>
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
perfil/<?php echo $_smarty_tpl->tpl_vars['paginador']->value->paginaAnterior();
if ($_smarty_tpl->tpl_vars['paginador']->value->getQ() != '') {?>/<?php echo $_smarty_tpl->tpl_vars['paginador']->value->getQ();
}?>">&#60</a>
                                                                <?php } else { ?>
                                                                    &#60
                                                                <?php }?>

                                                                <?php echo $_smarty_tpl->tpl_vars['paginador']->value->getPaginaActual();?>
 

                                                                <?php if ($_smarty_tpl->tpl_vars['paginador']->value->proximaPagina() != '') {?>
                                                                    <a href="<?php echo site_url();?>
perfil/<?php echo $_smarty_tpl->tpl_vars['paginador']->value->proximaPagina();
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
 de <?php echo $_smarty_tpl->tpl_vars['paginador']->value->getTotalPaginas();?>

                                                </div>
                                                <br>
                                                <?php if ($_smarty_tpl->tpl_vars['crear']->value) {?>
                                                    <a href="<?php echo site_url();?>
perfil/nuevo" 
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
<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
