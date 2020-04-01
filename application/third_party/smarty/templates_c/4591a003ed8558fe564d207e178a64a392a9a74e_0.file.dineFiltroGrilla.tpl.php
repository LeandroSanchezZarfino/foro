<?php
/* Smarty version 3.1.30, created on 2019-07-19 14:02:47
  from "C:\xampp\htdocs\sace\application\views\grilla\dineFiltroGrilla.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d31f7b719f7f7_57153679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4591a003ed8558fe564d207e178a64a392a9a74e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\grilla\\dineFiltroGrilla.tpl',
      1 => 1563212447,
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
function content_5d31f7b719f7f7_57153679 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="section" style="height: 1200px;">
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

                            
                        <form   id="frmDineFiltroGrilla"
                                method="post" 
                                action="<?php echo site_url();?>
grilla/publica" >    
                            <div id="filtro-multiple" style="margin-left: 30px;padding: 20px; width: 440px; border: solid 2px #E4E4E4;          border-radius: 6px; background-color: #fff; margin-bottom: 20px;">                   
                            <table>         
                                <tr>             
                                    <h2>Grilla pauta publicitaria</h2>
                                    <hr>
                                </tr>  
                                <tr>
                                    <label>Distrito Electoral*</label><br>
                                        <select id="filtro_distrito_id" name="distrito_prod_id" class="form-control">
                                            <option value="-1">Seleccione</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['distritos']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value->getNombre();?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </select>
                                    <div id="loader_distrito"></div><br>
                                </tr>
                                <tr>
                                    <label>Cargo electoral*</label><br>
                                    <select id="filtro_cargo_id" name="cargo_electoral_id" class="form-control">
                                        <option value="-1">Seleccione</option>                    
                                    </select><br>
                                </tr>
                                <tr>
                                    <label>Tipo de entidad*</label><br>
                                    <select id="filtro_perfil" name="perfil_id" class="form-control">
                                        <option value="-1">Seleccione</option>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['perfilAp']->value;?>
">Agrupaci&oacute;n pol&iacute;tica</option>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['perfilSca']->value;?>
">Servicio de comunicaci&oacute;n audiovisual</option>
                                    </select>
                                    <div id="loader_entidad"></div><br>
                                </tr>
                                <tr>
                                    <label>Entidad*</label><br>
                                    <select id="entidad_id" name="entidad_id" class="form-control">
                                        <option value="-1">Seleccione</option>
                                    </select>
                                </tr>
                                <hr>
                                <div style="text-align: right;">
                                    <button type="submit" style="width:100px;" class="btn btn-primary">Cargar</button> 

                                    <button type="button" class="btn btn-danger" onclick="eliminarFiltros();">Limpiar</button>        
                                    <a href="<?php echo site_url();?>
principal"
                                        class="btn btn-back">Volver</a>
                                </div>
                                </div> 
                            </table>
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
public/js/grilla/dineFiltroGrilla.js?ver1.2"><?php echo '</script'; ?>
>
<div class="clear"></div>
</div>	
<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
