<?php
/* Smarty version 3.1.30, created on 2019-03-22 15:49:20
  from "C:\xampp\htdocs\sace\application\views\comunicados\lectura.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c952e30ed39c8_47724608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2983016dc1e7f8ccb9908a43b8d19d3c49af1cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\comunicados\\lectura.tpl',
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
function content_5c952e30ed39c8_47724608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  

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

                            
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2><?php echo $_smarty_tpl->tpl_vars['comunicado']->value->getAsunto();?>
</h2>
                                        <hr>
                                        
                                        <div class="form-group" style="width: 800px;">
                                            <p><?php echo $_smarty_tpl->tpl_vars['comunicado']->value->getMensaje();?>
</p>
                                        </div>

                                        <div class="form-group">
                                            <a href="<?php echo site_url();?>
comunicados" class="btn btn-back">Volver</a>
                                        </div>
                                    </div>
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


<?php if ($_smarty_tpl->tpl_vars['chat']->value) {?>
    <div id="chat-container" class="fixed" style="display: none;"></div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
