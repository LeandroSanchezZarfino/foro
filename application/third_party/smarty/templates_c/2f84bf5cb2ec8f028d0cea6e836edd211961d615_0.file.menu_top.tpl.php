<?php
/* Smarty version 3.1.30, created on 2019-10-03 18:55:20
  from "C:\xampp\htdocs\sace\application\views\html\menu_top.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d966e4823eb48_43773343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f84bf5cb2ec8f028d0cea6e836edd211961d615' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\html\\menu_top.tpl',
      1 => 1544012215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d966e4823eb48_43773343 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-11 col-xs-12">
        <p class="well lead">
            Sistema de Administraci&oacute;n de Campañas Electorales 
            
            <?php if ($_smarty_tpl->tpl_vars['notificacion']->value) {?>
                &nbsp;&nbsp;
                <a href="<?php echo site_url();?>
comunicados" 
                   title="Nuevo Comunicado sin leer"
                   style="  background-color: red;
                            color: white;
                            padding: 3px 5px;
                            border-radius: 11px;">
                    <i class="fa fa-envelope"></i>
                </a>
            <?php }?>
               
            <?php if (isset($_smarty_tpl->tpl_vars['chat']->value) && $_smarty_tpl->tpl_vars['chat']->value) {?>
                &nbsp;
                &nbsp;
                <a href="javascript:void(0)"  
                   class="btn-chat" 
                   style="color: #888888 !important;">
                    <i class="fa fa-comments-o fa-3x">
                        <span id="chatNotificacion"></span>
                    </i>
                </a>
            <?php }?>
        </p>
    </div>
    <div class="col-md-1 col-xs-12">
        <ul class="user">
            <li class="admin">
                <a id="menu-toggle1">
                    <i class="fa fa-user" aria-hidden="true"></i> 
                    <?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
 
                </a>
                <br>
                <a href="<?php echo site_url();?>
main/salir"><span>cerrar sesión</span></a>
            </li>
        </ul>
    </div>
</div><?php }
}
