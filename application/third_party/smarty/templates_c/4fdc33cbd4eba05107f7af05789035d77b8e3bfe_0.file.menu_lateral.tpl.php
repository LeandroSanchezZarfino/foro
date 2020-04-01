<?php
/* Smarty version 3.1.30, created on 2019-10-03 18:55:20
  from "C:\xampp\htdocs\sace\application\views\html\menu_lateral.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d966e480d21b8_78259016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fdc33cbd4eba05107f7af05789035d77b8e3bfe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\html\\menu_lateral.tpl',
      1 => 1544012215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d966e480d21b8_78259016 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once 'C:\\xampp\\htdocs\\sace\\application\\third_party\\smarty\\libs\\plugins\\function.counter.php';
?>
<div id="wrapper" class="active">
    <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav text-right">
            <li class="sidebar-brand text-right">
                <a id="menu-toggle-sace" 
                   href="javascript:void(0);" 
                   style="text-align: right;padding: 10px;">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
        <div class="panel-group" id="accordion">
            <div class="panel panel-default" style="border: none !important;">
                <?php smarty_function_counter(array('start'=>1,'skip'=>1,'assign'=>"id"),$_smarty_tpl);?>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
                    <div class="panel-heading" 
                         style="background-color: #278cbd !important;  border-radius: 0px;">
                        <?php if ($_smarty_tpl->tpl_vars['menu']->value->getEsArbol() == true) {?>
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['menu']->value->getTitulo();?>
  <span class="caret-right"></span>
                                </a>
                            </h4>
                        <?php } else { ?>
                            <h4 class="panel-title">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value->getUrl();?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['menu']->value->getTitulo();?>
  <span class="caret-right"></span>
                                </a>
                            </h4>
                        <?php }?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['menu']->value->getEsArbol() == true) {?>
                        <div id="collapse<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel-collapse collapse">
                            <div class="panel-body" style="width: 100%; border-top: 1px solid #dddddd;">
                                <table class="tablaMenu">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu']->value->getSubItems(), 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->getActividad()->getUrl();?>
" 
                                                   target="<?php echo $_smarty_tpl->tpl_vars['item']->value->getActividad()->getTarget();?>
">
                                                   <?php echo $_smarty_tpl->tpl_vars['item']->value->getActividad()->getTitulo();?>

                                                </a>
                                                <span class="badge"><?php echo $_smarty_tpl->tpl_vars['item']->value->getActividad()->getNotificaciones();?>
</span>
                                            </td>
                                        </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </table>
                            </div>
                        </div>   
                    <?php }?>
                    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
    </div>
<input type="hidden" name="token" id="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"> <?php }
}
