{include file="template/header.tpl"}
<div class="container">
	<div class="row align-items-center espaciado">
		<div class="col-md-12 publicacion">
			<h2 style="color:grey">{$titulo}</h2>
		</div>
		{foreach from=$publicaciones item=publicacion}
		<div class="col-md-6">
			<div class="publicacion">
				<div class="titulo inline">
					<h4 class="inline">{$publicacion->titulo}</h4>
					{if isset($session_id)}
						{if $publicacion->usuario_id == $session_id}
							<a href="javascript:nuevaPublicacion('{$publicacion->_id}')" class="btn btn-warning inline" style="color: white;" data-toggle="tooltip" title="Editar mi publicación"><i class="fa fa-pencil"></i></a>
						{/if} 
					{/if}
				</div>
				<div class="descripcion">
					{$publicacion->descripcion}
				</div>
				<div class="imagenes publicacion">
					<img src="{$publicacion->imagenes}" class="imagen">
				</div>
				{if isset($perfil) && $publicacion->aprobada == "false"}
					<br>
					<div>
						<a href="{base_url()}aceptarPublicacion/{$publicacion->_id}" class="btn btn-success"><i class="fa fa-check"></i></a>
						<a href="{base_url()}rechazarPublicacion/{$publicacion->_id}" class="btn btn-danger"><i class="fa fa-times"></i></a>
					</div>
					<br>
				{/if}
				<div class="comentarios">
					{if isset($session_id)}
					<form class="form-inline enviar_comentario_form" style="align-items: center;" action="{base_url()}enviarComentario" method="POST">
						<div class="col-md-10">
							<input type="hidden" name="id" value="{$publicacion->_id}">
							<textarea class="form-control espaciado" style="width: 100%;" name="comentario" placeholder="Deja tu comentario"></textarea>
						</div>
						<div class="col-md-2">
							<button type="submit" class="btn btn-primary" style="line-height: 10px;"><i class="fa fa-send"></i></button>
							<button type="button" class="btn btn-success" style="line-height: 10px;" onclick="darLike('{$publicacion->_id}')">
								<i class="fa fa-thumbs-up"></i>
								<span id="likes{$publicacion->_id}">{if isset($publicacion->likes)}{count($publicacion->likes)}{else}0{/if}</span>
							</button>
						</div>
					</form>
					{else}
						<textarea class="form-control espaciado" name="comentario" placeholder="Iniciá sesión para comentar" disabled=""></textarea>
					{/if}
					{if count($publicacion->comentarios) > 0}
						<div class="comentarios">
							<h4 style="color: grey;" data-toggle="collapse" data-target="#comentarios{$publicacion->_id}" aria-expanded="true" aria-controls="comentarios{$publicacion->_id}">Comentarios</h4>
							<div class="container collapse" id="comentarios{$publicacion->_id}" >
							<hr>
								
								{foreach from=$publicacion->comentarios item=comentario}
									<div class="row">
										<div class="col-md-12">
											<span>{$comentario->comentario}</span>
										</div>
										<div class="col-md-12" style="font-size: 10px;">
											<span>{$comentario->usuario}</span>
											<span>{$comentario->fecha}</span>
										</div>
									</div>	
									<hr>									
								{/foreach}
							</div>
						</div>
					{/if}
				</div>
			</div>
		</div>
		{/foreach}
	</div>
</div>
{include file="template/footer.tpl"}