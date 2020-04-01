<?php
/* Smarty version 3.1.30, created on 2019-02-08 12:41:19
  from "C:\xampp\htdocs\sace\application\views\debate\nuevo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c5da31f3a6479_31872932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e93b89487d3082412331ad1429d2680295519f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\debate\\nuevo.tpl',
      1 => 1549486379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:html/estados_spots.tpl' => 1,
    'file:html/menu_lateral.tpl' => 1,
    'file:html/menu_top.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_5c5da31f3a6479_31872932 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="section">
    <?php $_smarty_tpl->_subTemplateRender("file:html/estados_spots.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                              <form action="nuevoDebate" method="POST">
                                <div class="col-md-6">
                                  <h2>Debate Público</h2>
                                  <div class="form-group col-xs-12">
                                    <label>Descripción</label>
                                    <input type="text" class="form-control" name="desc" required="">
                                  </div>
                                  <div class="form-group col-xs-12">
                                    <label>Fecha </label>
                                    <input type="date" name="fecha" id="filtro-fecha-fin" class="form-control" style="border: 1px solid #cccccc;" required="">
                                  </div>
                                  <div class="form-group col-xs-12">
                                    <label>Franja</label>
                                    <select name="franja" class="form-control" required="">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                    </select>
                                  </div>
                                  <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-info">Crear</button>
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
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo site_url();?>
public/js/grilla/grillaAdmin.js" ver?1.5><?php echo '</script'; ?>
>
<div class="clear"></div>
</div>	
<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
