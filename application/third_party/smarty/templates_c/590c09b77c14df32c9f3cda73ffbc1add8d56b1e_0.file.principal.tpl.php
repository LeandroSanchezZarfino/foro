<?php
/* Smarty version 3.1.30, created on 2020-04-09 01:35:07
  from "C:\xampp72\htdocs\foro\application\views\principal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e8e5fabb2e877_94867494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '590c09b77c14df32c9f3cda73ffbc1add8d56b1e' => 
    array (
      0 => 'C:\\xampp72\\htdocs\\foro\\application\\views\\principal.tpl',
      1 => 1586388666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/header.tpl' => 1,
    'file:template/footer.tpl' => 1,
  ),
),false)) {
function content_5e8e5fabb2e877_94867494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
	<div class="row align-items-center espaciado">
		<div class="col-md-12 publicacion">
			<h2 style="color:grey"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
		</div>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publicaciones']->value, 'publicacion');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['publicacion']->value) {
?>
		<div class="col-md-6">
			<div class="publicacion">
				<div class="titulo inline">
					<h4 class="inline"><?php echo $_smarty_tpl->tpl_vars['publicacion']->value->titulo;?>
</h4>
					<?php if (isset($_smarty_tpl->tpl_vars['session_id']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['publicacion']->value->usuario_id == $_smarty_tpl->tpl_vars['session_id']->value) {?>
							<a href="javascript:nuevaPublicacion('<?php echo $_smarty_tpl->tpl_vars['publicacion']->value->_id;?>
')" class="btn btn-warning inline" style="color: white;" data-toggle="tooltip" title="Editar mi publicación"><i class="fa fa-pencil"></i></a>
						<?php }?> 
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['mostrar_estado']->value)) {?>
					<?php if ($_smarty_tpl->tpl_vars['mostrar_estado']->value == true) {?>
						<br>
						<span class="<?php echo $_smarty_tpl->tpl_vars['publicacion']->value->aprobada;?>
"><?php if ($_smarty_tpl->tpl_vars['publicacion']->value->aprobada == "true") {?>Aprobada<?php } else { ?>No aprobada<?php }?></span>
					<?php }?>
					<?php }?>
				</div>
				<div class="descripcion">
					<?php echo $_smarty_tpl->tpl_vars['publicacion']->value->descripcion;?>

				</div>
				<div class="imagenes publicacion">
					<img src="<?php echo $_smarty_tpl->tpl_vars['publicacion']->value->imagenes;?>
" class="imagen" alt="<?php echo base_url();?>
public/img/noImg.jpg">
				</div>
				<?php if (isset($_smarty_tpl->tpl_vars['perfil']->value)) {?>
				<?php if ($_smarty_tpl->tpl_vars['perfil']->value == 1 && $_smarty_tpl->tpl_vars['publicacion']->value->aprobada == "false") {?>
					<br>
					<div>
						<a href="<?php echo base_url();?>
aceptarPublicacion/<?php echo $_smarty_tpl->tpl_vars['publicacion']->value->_id;?>
" class="btn btn-success"><i class="fa fa-check"></i></a>
						<a href="<?php echo base_url();?>
rechazarPublicacion/<?php echo $_smarty_tpl->tpl_vars['publicacion']->value->_id;?>
" class="btn btn-danger"><i class="fa fa-times"></i></a>
					</div>
					<br>
					<?php }?>
				<?php }?>
				<div class="comentarios">
					<?php if (isset($_smarty_tpl->tpl_vars['session_id']->value)) {?>
					<form class="form-inline enviar_comentario_form" style="align-items: center;" action="<?php echo base_url();?>
enviarComentario" method="POST">
						<div class="col-md-10">
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['publicacion']->value->_id;?>
">
							<textarea class="form-control espaciado" style="width: 100%;" name="comentario" placeholder="Deja tu comentario"></textarea>
						</div>
						<div class="col-md-2">
							<button type="submit" class="btn btn-primary" style="line-height: 10px;"><i class="fa fa-send"></i></button>
							<button type="button" class="btn btn-success" style="line-height: 10px;" onclick="darLike('<?php echo $_smarty_tpl->tpl_vars['publicacion']->value->_id;?>
')">
								<i class="fa fa-thumbs-up"></i>
								<span id="likes<?php echo $_smarty_tpl->tpl_vars['publicacion']->value->_id;?>
"><?php if (isset($_smarty_tpl->tpl_vars['publicacion']->value->likes)) {
echo count($_smarty_tpl->tpl_vars['publicacion']->value->likes);
} else { ?>0<?php }?></span>
							</button>
						</div>
					</form>
					<?php } else { ?>
						<textarea class="form-control espaciado" name="comentario" placeholder="Iniciá sesión para comentar" disabled=""></textarea>
					<?php }?>
					<div class="comentarios">
						<h4 style="color: grey;cursor: pointer;" data-toggle="collapse" data-target="#comentarios<?php echo $_smarty_tpl->tpl_vars['publicacion']->value->_id;?>
" aria-expanded="true" aria-controls="comentarios<?php echo $_smarty_tpl->tpl_vars['publicacion']->value->_id;?>
">Comentarios <i class="fa fa-chevron-down"></i></h4>
						<div class="container collapse" id="comentarios<?php echo $_smarty_tpl->tpl_vars['publicacion']->value->_id;?>
" >
						<hr>
							<?php if (count($_smarty_tpl->tpl_vars['publicacion']->value->comentarios) != 0) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publicacion']->value->comentarios, 'comentario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->value) {
?>
								<div class="row">
									<div class="col-md-12">
										<span><?php echo $_smarty_tpl->tpl_vars['comentario']->value->comentario;?>
</span>
									</div>
									<div class="col-md-12" style="font-size: 10px;">
										<span><?php echo $_smarty_tpl->tpl_vars['comentario']->value->usuario;?>
</span>
										<span><?php echo $_smarty_tpl->tpl_vars['comentario']->value->fecha;?>
</span>
									</div>
								</div>	
								<hr>									
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							<?php } else { ?>
								<div class="row" id="noComments<?php echo $_smarty_tpl->tpl_vars['publicacion']->value->_id;?>
">
									<div class="col-md-12">
										<span>No hay comentarios</span>
									</div>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
