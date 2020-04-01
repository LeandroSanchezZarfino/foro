<?php
/* Smarty version 3.1.30, created on 2019-10-03 18:47:44
  from "C:\xampp\htdocs\sace\application\views\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d966c80988be3_36724479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3803d297cc13f6a168d0994612d1466f32d00215' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\login.tpl',
      1 => 1550162737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:html/footer_login.tpl' => 1,
  ),
),false)) {
function content_5d966c80988be3_36724479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container altura">
    
    <form id="frmAlta" method="post" action="<?php echo site_url();?>
main/Acreditar" class="form-login">
    <div class="row margin-top">
        <div class="login center-block borde-gris" style="border-radius: 5px;border-color:'#828282';">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="tit">INICIO DE SESIÓN</p>
                    <p style="color: red;">
                        <b><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</b>
                    </p>
                </div>
            </div>
            <hr>
            <label class="sr-only" for="usrForm">Usuario</label>
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon">
                    <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                </div>
                <input type="text" name="usuario" id="usrForm" class="form-control" placeholder="Usuario">
            </div>
            </br>
            <label class="sr-only" for="usrPass" >Contraseña</label>
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
			<div class="input-group-addon">
                    <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                </div>
                <input type="password" name="password" id="usrPass" class="form-control" placeholder="Contraseña">
            </div>  
            

           <div class="row margin-top text-right">
                <button type="submit" style ="font-style: normal" class="btn btn-default">INGRESAR</button></br></br>
                <p class="aclaracion"><a href="usuario/solicitar">Olvidé la contrase&ntilde;a</a></p>
            </div>
        </div>

    </div>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
