<?php
/* Smarty version 3.1.30, created on 2020-04-01 08:04:29
  from "C:\xampp72\htdocs\foro\application\views\template\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e842eed505e62_84166645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33383aaeb1a466b26de6d33dacdf31cc05121775' => 
    array (
      0 => 'C:\\xampp72\\htdocs\\foro\\application\\views\\template\\header.tpl',
      1 => 1585523038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/includes.tpl' => 1,
  ),
),false)) {
function content_5e842eed505e62_84166645 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<?php $_smarty_tpl->_subTemplateRender("file:template/includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</head>
	<body>
		<nav class="navbar navbar-expand-lg">
			<a class="navbar-brand" href="javascript:void(0)">Inicio</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
			<span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
			</button>
			<div class="collapse navbar-collapse" id="navb">
				<?php if (isset($_smarty_tpl->tpl_vars['session_id']->value)) {?>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)">Mi Perfil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)">Mis Publicaciones</a>
					</li>
				</ul>
				<?php } else { ?>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#modalLoginForm">Iniciar Sesión</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#modalRegisterForm">Registrate</a>
					</li>
				</ul>
				<?php }?>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="text" placeholder="...">
					<button class="btn btn-primary my-2 my-sm-0" type="button">Buscar</button>
				</form>
			</div>
		</nav>
		<div class="main_container">
			<?php }
}
