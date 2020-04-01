<?php
/* Smarty version 3.1.30, created on 2019-04-11 13:55:12
  from "C:\xampp\htdocs\sace\application\views\spot\spotestados.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5caf7170378285_43139010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86cce12bbb27648192b8735da7a49e2b9d9703a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\spot\\spotestados.tpl',
      1 => 1555001511,
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
function content_5caf7170378285_43139010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                            
                            <form>
                            <div class="col-md-11 aelinea" ><span><img style="width: 100px;cursor: pointer;" src="<?php echo site_url();?>
public/img/mas-info-png.png" onclick="$('.infoenlinea').toggle();">
                                <div class="infoenlinea" style="display:none; background:#b3b3b3 ;border-radius:10px;padding:7px; color:white;">Se describen los tipos de estados que podemos encontrar en la grilla. Los estados en los que se encuentran los espacios asignados para cada franja horaria variarán de acuerdo a las gestiones que realicen en el SACE las agrupaciones políticas y los servicios de comunicación audiovisual. A continuación detallamos los mismos.</div></span>
                                </div>
                                <div class="container">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2>Tipos de estados de spots publicitarios</h2>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="container">
                                                <a href="<?php echo site_url();?>
principal"
                                                   class="btn btn-back">
                                                    Volver
                                                </a>
                                                <br><br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group col-md-12">
                                             <table class="table table-inverse col-md-11">
                                                    <tr>
                                                        <th>Descripci&oacute;n</th>
                                                        <th>Color</th>
                                                    </tr>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['estados']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['u']->value->getDescripcion();?>
</td>
                                                        <td>
                                                            <div id="color" style="background-color: <?php echo $_smarty_tpl->tpl_vars['u']->value->getColor();?>
; width: 20px; height: 20px; text-align: center; vertical-align: middle; margin-right: 20px;">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                </table>
                                                <br>
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
?>

<?php }
}
