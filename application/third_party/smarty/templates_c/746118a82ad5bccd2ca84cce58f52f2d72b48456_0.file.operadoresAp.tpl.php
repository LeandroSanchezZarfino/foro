<?php
/* Smarty version 3.1.30, created on 2019-07-04 22:22:04
  from "C:\xampp\htdocs\sace\application\views\usuario\operadoresAp.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1ea63ca3bad4_45364343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '746118a82ad5bccd2ca84cce58f52f2d72b48456' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\usuario\\operadoresAp.tpl',
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
function content_5d1ea63ca3bad4_45364343 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div id="modalBloquearAp" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Bloquear operador AP
                </h4>
            </div>
            <div id="modalBloquearAp-body" class="modal-body"></div>
            <div class="modal-footer">
                <input type="button"
                       id="modalBloquearApOk"
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
                              
                            
                            <div class="col-md-12 aelinea" ><span><img style="width: 100px;cursor: pointer;" src="<?php echo site_url();?>
public/img/mas-info-png.png" onclick="$('.infoenlinea').toggle();">
                            <div class="infoenlinea" style="display:none; background:#b3b3b3 ;border-radius:10px;padding:7px; color:white;">Los usuarios con perfil administrador podrán crear, bloquear y editar usuarios con perfil operador para que gestionen en el sistema con funciones limitadas. </div></span>
                            <br>
                            </div>
                            
                            <form>
                            <div class="container">
                            <div class="row">
                                    <div class="col-md-6">
                                        <h2>Gesti&oacute;n de operadores AP</h2>
                                    </div>
                                </div>
                            
                                            <?php if ($_smarty_tpl->tpl_vars['crear']->value && !isset($_smarty_tpl->tpl_vars['admin']->value)) {?>
                                                <a href="<?php echo site_url();?>
operador/ap/nuevo" 
                                                   class="btn btn-primary">
                                                    Nuevo
                                                </a>&nbsp; 
                                            <?php }?>
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

                                            <table class="table table-inverse col-md-11">		 
                                                <tr>
                                                    <th>Usuario</th>
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Estado</th>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['admin']->value) && $_smarty_tpl->tpl_vars['admin']->value) {?>
                                                        <th>Entidad</th>
                                                    <?php }?>
                                                    <th>Editar</th>
                                                    <th>Bloquear</th>
                                                </tr>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getUsuario();?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getNombre();?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getApellido();?>
</td>
                                                        <td><?php if ($_smarty_tpl->tpl_vars['u']->value->getActivo()) {?>Activo<?php } else { ?>Bloqueado<?php }?></td>
                                                        <?php if (isset($_smarty_tpl->tpl_vars['admin']->value) && $_smarty_tpl->tpl_vars['admin']->value) {?>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getEntidad()->getNombre();?>
</td>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['editar']->value) {?>
                                                            <td>
                                                                <a href="<?php echo site_url();?>
operador/ap/editar/<?php echo $_smarty_tpl->tpl_vars['u']->value->getId();?>
">
                                                                    Editar
                                                                </a>
                                                            </td>
                                                        <?php } else { ?>
                                                            <td>
                                                                -
                                                            </td>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['eliminar']->value) {?>
                                                            <td>
                                                                <a href="javascript:void(0)" 
                                                                   data-id="<?php echo $_smarty_tpl->tpl_vars['u']->value->getId();?>
" 
                                                                   data-name="<?php echo $_smarty_tpl->tpl_vars['u']->value->getNombre();?>
" 
                                                                   class="btnEliminarOpAp">
                                                                    <?php if ($_smarty_tpl->tpl_vars['u']->value->getActivo()) {?>
                                                                        Bloquear
                                                                    <?php } else { ?>
                                                                        Desbloquear
                                                                    <?php }?>
                                                                </a>
                                                            </td>
                                                        <?php } else { ?>
                                                            <td>
                                                                -
                                                            </td>
                                                        <?php }?>
                                                    </tr>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </table>
                                            <br>
                                            <?php if ($_smarty_tpl->tpl_vars['crear']->value && !isset($_smarty_tpl->tpl_vars['admin']->value)) {?>
                                                <a href="<?php echo site_url();?>
operador/ap/nuevo" 
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
?>


                      
<?php }
}
