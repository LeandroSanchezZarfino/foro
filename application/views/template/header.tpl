<!DOCTYPE html>
<html>
	<head>
		<title></title>
		{include file="template/includes.tpl"}
	</head>
	<body>
		<nav class="navbar navbar-expand-lg">
			<a class="navbar-brand" href="javascript:void(0)">Inicio</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
			<span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
			</button>
			<div class="collapse navbar-collapse" id="navb">
				{if isset($session_id)}
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)">Mi Perfil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)">Mis Publicaciones</a>
					</li>
				</ul>
				{else}
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#modalLoginForm">Iniciar Sesión</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#modalRegisterForm">Registrate</a>
					</li>
				</ul>
				{/if}
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="text" placeholder="...">
					<button class="btn btn-primary my-2 my-sm-0" type="button">Buscar</button>
				</form>
			</div>
		</nav>
		<div class="main_container">
			