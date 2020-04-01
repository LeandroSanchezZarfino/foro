<?php
/* Smarty version 3.1.30, created on 2019-03-22 13:28:55
  from "C:\xampp\htdocs\sace\application\views\usuario\usuarios.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c950d472772a4_16917222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc6390fbac9c9ef89c7f3ffbb1e228db083b9aae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\usuario\\usuarios.tpl',
      1 => 1544012216,
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
function content_5c950d472772a4_16917222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="modalBloquearUsuario" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Bloquear usuario
                </h4>
            </div>
            <div id="modalBloquearUsuario-body" class="modal-body">
                
            </div>
            <div class="modal-footer">
                <input type="button"
                       id="modalBloquearUsuarioOk"
                       name="modalBloquearUsuarioOk"
                       data-id=""
                       class="btn btn-primary" 
                       value="Aceptar">
                &nbsp;
                <button type="button" class="btn btn-back" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>


<div id="modalRestablecerPassword" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Restablecer contrase&ntilde;a
                </h4>
            </div>
            <div id="modalRestablecerPassword-body" class="modal-body">
                
            </div>
            <div class="modal-footer">
                <input type="button"
                       id="modalRestablecerPasswordOk"
                       name="modalRestablecerPasswordOk"
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
usuario/<?php echo $_smarty_tpl->tpl_vars['paginador']->value->getPaginaActual();?>
">
                                <div class="container">
                                <br>
                                <br>
                                                <?php if ($_smarty_tpl->tpl_vars['crear']->value) {?>
                                                    <a href="<?php echo site_url();?>
usuario/nuevo" 
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
                                            <h2>Gesti&oacute;n de usuarios</h2>
                                            
                                            <div id="custom-search-input">
                                                <div class="input-group col-md-12">
                                                    <input type="text" 
                                                           name="q" 
                                                           class="form-control input-lg" 
                                                           placeholder="Buscar Usuario por Nombre o Mail..." />
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-info btn-lg" type="submit">
                                                            <i class="fa fa-search" aria-hidden="true"></i>
                                                        </button>                  
                                                   </span>                                                    
                                                </div>                    
                                            </div>
                                            <div>
                                                <?php if ($_smarty_tpl->tpl_vars['paginador']->value->getQ() != '') {?>
                                                    Resultados para la busqueda: <i><?php echo $_smarty_tpl->tpl_vars['paginador']->value->getQ();?>
</i> - 
                                                    <a href="<?php echo site_url();?>
usuario">[X]</a>
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
                                                    <th>Usuario original</th>
                                                    <th>Usuario</th>
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Mail</th>
                                                    <th>Estado</th>
                                                    <th>Perfil</th>
                                                    <th>Editar</th>
                                                    <th>Bloquear</th>
                                                    <th>Contrase&ntilde;a</th>
                                                </tr>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginador']->value->getDatos(), 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getUsuarioOriginal();?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getUsuario();?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getNombre();?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getApellido();?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getEmail();?>
</td>
                                                    <td><?php if ($_smarty_tpl->tpl_vars['u']->value->getActivo()) {?>Activo<?php } else { ?>Bloqueado<?php }?></td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getPerfil();?>
</td>
                                                    <?php if ($_smarty_tpl->tpl_vars['u']->value->getPerfil()->getId() == $_smarty_tpl->tpl_vars['administrador']->value || $_smarty_tpl->tpl_vars['u']->value->getId() == $_smarty_tpl->tpl_vars['usuarioLogueado']->value) {?>
                                                        <td>Editar</td>
                                                        <td>Bloquear</td>
                                                        <td>Restablecer</td>
                                                    <?php } else { ?>
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['editar']->value) {?>
                                                                <a href="<?php echo site_url();?>
usuario/editar/<?php echo $_smarty_tpl->tpl_vars['u']->value->getId();?>
">Editar</a>
                                                            <?php } else { ?>
                                                                Editar
                                                            <?php }?>
                                                        </td>
                                                        <td>
                                                            <?php if ($_smarty_tpl->tpl_vars['eliminar']->value) {?>
                                                                <a data-id="<?php echo $_smarty_tpl->tpl_vars['u']->value->getId();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['u']->value->getNombre();?>
" href='javascript:void(0);' class='btnEliminarUsuario'><?php if ($_smarty_tpl->tpl_vars['u']->value->getActivo()) {?>Bloquear<?php } else { ?>Desbloquear<?php }?></a>
                                                            <?php } else { ?>
                                                                Bloquear
                                                            <?php }?>
                                                        </td>
                                                        <td>
                                                                <a data-id="<?php echo $_smarty_tpl->tpl_vars['u']->value->getId();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['u']->value->getNombre();?>
" href='javascript:void(0);' class='btnRestablecerPassword'>Restablecer</a>
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
                                                        <td colspan="9" align="center">
                                                            <?php if ($_smarty_tpl->tpl_vars['paginador']->value->paginaAnterior() != '') {?>
                                                                <a href="<?php echo site_url();?>
usuario/<?php echo $_smarty_tpl->tpl_vars['paginador']->value->paginaAnterior();
if ($_smarty_tpl->tpl_vars['paginador']->value->getQ() != '') {?>/<?php echo $_smarty_tpl->tpl_vars['paginador']->value->getQ();
}?>">&#60</a>
                                                            <?php } else { ?>
                                                                &#60
                                                            <?php }?>

                                                            <?php echo $_smarty_tpl->tpl_vars['paginador']->value->getPaginaActual();?>
 

                                                            <?php if ($_smarty_tpl->tpl_vars['paginador']->value->proximaPagina() != '') {?>
                                                                <a href="<?php echo site_url();?>
usuario/<?php echo $_smarty_tpl->tpl_vars['paginador']->value->proximaPagina();
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
                                                    Mostrando p&aacute;gina <?php echo $_smarty_tpl->tpl_vars['paginador']->value->getPaginaActual();?>
 de 
                                                    <?php echo $_smarty_tpl->tpl_vars['paginador']->value->getTotalPaginas();?>

                                                </div>
                                            
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
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo site_url();?>
public/js/usuarios/usuariosAdmin.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
