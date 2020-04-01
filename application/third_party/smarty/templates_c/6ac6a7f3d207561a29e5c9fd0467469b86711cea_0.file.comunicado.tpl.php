<?php
/* Smarty version 3.1.30, created on 2019-06-23 22:08:59
  from "C:\xampp\htdocs\sace\application\views\comunicados\comunicado.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1022ab188746_85363472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ac6a7f3d207561a29e5c9fd0467469b86711cea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\comunicados\\comunicado.tpl',
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
function content_5d1022ab188746_85363472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
<?php if (isset($_smarty_tpl->tpl_vars['comunicados']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['comunicados']->value->getId() == '') {?>
        <?php $_smarty_tpl->_assignInScope('alta', "true" ,true);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('alta', "false" ,true);
?>
    <?php }
} else { ?>
    <?php $_smarty_tpl->_assignInScope('alta', "true" ,true);
}?>
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
                                        <form   id="frmcomunicados" 
                                                method="post" 
                                                action="<?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {
echo site_url();?>
comunicados/agregar<?php } else {
echo site_url();?>
comunicados/modificar/<?php echo $_smarty_tpl->tpl_vars['comunicados']->value->getId();
}?>">
                                            <h2>
                                                <?php if ($_smarty_tpl->tpl_vars['alta']->value == "true") {?>Nuevo Comunicado<?php } else { ?>Editar Comunicado<?php }?>
                                            </h2>
                                            
                                            <div class="errorProceso">
                                                <p><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?></p>
                                            </div>

                                            <div class="form-group">
                                                <label>Asunto</label>

                                                <?php if ($_smarty_tpl->tpl_vars['comunicados']->value->GetActivo() == 1) {?>
                                                <input  type="text" disabled 
                                                        name="asunto" 
                                                        placeholder="Asunto"
                                                        class="form-control"
                                                        style="width: 600px;" 
                                                        value="<?php if (isset($_smarty_tpl->tpl_vars['comunicados']->value)) {
echo $_smarty_tpl->tpl_vars['comunicados']->value->getAsunto();
}?>">
                                                <?php } else { ?>
                                                <input  type="text" 
                                                        name="asunto" 
                                                        placeholder="Asunto"
                                                        class="form-control"
                                                        style="width: 600px;" 
                                                        value="<?php if (isset($_smarty_tpl->tpl_vars['comunicados']->value)) {
echo $_smarty_tpl->tpl_vars['comunicados']->value->getAsunto();
}?>">
                                                <?php }?>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Mensaje</label>
                                                <?php if ($_smarty_tpl->tpl_vars['comunicados']->value->GetActivo() == 1) {?>
                                                <textarea name="mensaje" disabled 
                                                        placeholder="Mensaje" 
                                                        class="form-control"
                                                        style="width: 600px; height:200px; resize:none;"><?php if (isset($_smarty_tpl->tpl_vars['comunicados']->value)) {
echo $_smarty_tpl->tpl_vars['comunicados']->value->getMensaje();
}?></textarea>       
                                                <?php } else { ?>
                                                <textarea name="mensaje" 
                                                        placeholder="Mensaje" 
                                                        class="form-control"
                                                        style="width: 600px; height:200px; resize:none;"><?php if (isset($_smarty_tpl->tpl_vars['comunicados']->value)) {
echo $_smarty_tpl->tpl_vars['comunicados']->value->getMensaje();
}?></textarea>  
                                                <?php }?>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['comunicados']->value->getId() == '') {?>
                                                <div class="form-group">
                                                    <label>Destinatarios</label>
                                                    <br>
                                                    <input type="radio" name="destinatarios" value="-1">&nbsp;Todos
                                                    &nbsp;
                                                    <input type="radio" name="destinatarios" value="<?php echo $_smarty_tpl->tpl_vars['perfilAp']->value->getId();?>
">&nbsp;Agrupaciones politicas
                                                    &nbsp;
                                                    <input type="radio" name="destinatarios" value="<?php echo $_smarty_tpl->tpl_vars['perfilSca']->value->getId();?>
">&nbsp;Servicios de comunicaci&oacute;n
                                                    <br>
                                                    <span id="destinatarios-error"></span>
                                                </div>
                                            <?php }?>
                                            <div class="form-group">
                                                 <?php if ($_smarty_tpl->tpl_vars['comunicados']->value->GetActivo() == 0) {?>
                                                <input type="button" id="btnSubmit" class="btn btn-primary" value="Guardar">
                                                &nbsp;&nbsp;
                                                <?php }?>
                                                <a href="<?php echo site_url();?>
comunicados" class="btn btn-back">Volver</a>
                                                &nbsp;&nbsp;
                                                <span id="procesando"></span>
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
    </div>
    <?php echo '<script'; ?>
>
        $(function () {
            $("#btnSubmit").on("click", function () {
                if ($("#frmcomunicados").valid())
                {
                    $("#procesando").html("Enviando comunicado, aguarde un momento por favor...");
                    $("#frmcomunicados").submit();
                }
            });
        });
    <?php echo '</script'; ?>
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
