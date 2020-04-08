<!DOCTYPE html>
<html>
	<head>
		<title></title>
		{include file="template/includes.tpl"}
	</head>
	<body>
		<nav class="navbar navbar-expand-lg">
			<a class="navbar-brand" href="{base_url()}" style="padding: 0px;margin:0px;"><img src="{base_url()}public/img/trianguloNormal.png" height="40" style="padding: 0px;margin:0px;">Foro</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
			<span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
			</button>
			<div class="collapse navbar-collapse" style="margin-left: 40px" id="navb">
				{if isset($session_id)}
				<ul class="navbar-nav mr-auto">
					<!--<li class="nav-item">
						<a class="nav-link" href="javascript:void(0)">Mi Perfil</a>
					</li>-->
					
					<li class="nav-item">
						<a class="nav-link" href="{base_url()}misPublicaciones">Mis Publicaciones</a>
					</li>
					{if $perfil == 1}
						<li class="nav-item">
							<a href="{base_url()}validarPublicaciones" class="nav-link text-success" data-toggle="tooltip" title="Como administrador podés aceptar o rechazar las publicaciones de los usuarios antes de que sean publicas.">Aprobar Publicaciones</a>
						</li>
					{/if}
					<li class="nav-item">
						<a class="nav-link" href="javascript:nuevaPublicacion()" >Nueva Publicación</a>
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
				<form class="form-inline my-2 my-lg-0" style="align-self: center;" action="busquedaPublicaciones" method="GET">
					<input class="form-control mr-sm-2" type="text" placeholder="..." name="parametro">
					<button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
				</form>
				{if isset($session_id)}

				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="{base_url()}logout" style="margin-left: 80px;" class="nav-link"><i class="fa fa-sign-out"></i></a>
					</li>
				</ul>
				{/if}
			</div>
		</nav>
		<div class="main_container">
			