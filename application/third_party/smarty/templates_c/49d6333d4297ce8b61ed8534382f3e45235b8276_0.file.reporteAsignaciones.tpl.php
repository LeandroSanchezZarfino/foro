<?php
/* Smarty version 3.1.30, created on 2019-04-11 15:35:50
  from "C:\xampp\htdocs\sace\application\views\sca\reporteAsignaciones.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5caf8906331d35_55052314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49d6333d4297ce8b61ed8534382f3e45235b8276' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\sca\\reporteAsignaciones.tpl',
      1 => 1555001983,
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
function content_5caf8906331d35_55052314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  


<div id="modal-verificacion" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Reporte asignaciones
                </h4>
            </div>
            <div style="margin-right: 20px; margin-left: 20px; text-align: center;">
                    <br>
                    <label>Debe seleccionar una fecha para poder exportar</label>
                    <br><br>
                    <button class="btn btn-primary" onclick="cerrarModal();">Cerrar</button>
            </div>
                <br>
            </div>
        </div>
    </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['chat']->value) {?>
    <div id="chat-container" class="fixed" style="display: none;"></div>
<?php }?>

<div class="section" style="height: 1800px">
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
                            
                            <div class="col-md-12 aelinea" >
                                <span><img style="width: 100px;cursor: pointer;" src="<?php echo site_url();?>
public/img/mas-info-png.png" onclick="$('.infoenlinea').toggle();">
                                    <div class="infoenlinea" style="display:none; background:#b3b3b3 ;border-radius:10px;padding:7px; color:white;">
Podrá exportar a un formato Excel, por día, el detalle de los spots por franja, agrupación política, nombre del spot, estado, cantidad y duración.  </div><br>
                                </span>
                            </div>
                            <div class="container">
                            <div class="form-group">
                                                <a href="<?php echo site_url();?>
principal" class="btn btn-back">Volver</a>
                            </div>
                                <div class="row">
                                    <div class="col-md-6" style="width:30%; height:auto;">
                                            <h2>Reporte asignaciones</h2>
                                            <br><br>
                                            <label>Fecha </label>
                                                <input type="date" 
                                                    id="filtro-fecha" 
                                                    class="form-control" 
                                                    style="border-radius: 5px;" 
                                                    value=""/>
                                            <br><br>

                                            <label>Franja </label>
                                            <select id="franja" 
                                            name="franja" 
                                            class="form-control" 
                                            style="border-radius: 5px;">
                                                <option value="0">Todas</option>
                                                <option value="1">Franja 1</option>
                                                <option value="2">Franja 2</option>
                                                <option value="3">Franja 3</option>
                                                <option value="4">Franja 4</option>
                                            </select>
                                            <br><br>

                                            <div style="text-align: center;">
                                            <a id="boton-descargar" type="button" class="btn btn-primary" onclick="descargarReporteAsignaciones();">Descargar</a>
                                            </div>
                                    </div>
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
    

    function descargarReporteAsignaciones(){
        var fecha = $("#filtro-fecha").val();
        if(fecha== ""){ $("#modal-verificacion").modal("show");}
        else{

        var franja = $("#franja").val();

        $.ajax({
            data: {
                    "fecha": fecha,
                    "franja": franja
                },
            url: base + 'sca/descargarReporteAsignaciones',
            type: 'POST',
            dataType: "html",
            beforeSend: function (){
                $("#boton-descargar").text('Descargando...');
                $("#boton-descargar").disabled = false;
            },
            success: function (response){
                    Overlay.remove();
                    url = base + response;
                    $(location).attr('href',url);
                    $("#boton-descargar").text('Descargar');
            },
            error: function (xhr, status, error) {
                        var err = eval("(" + xhr.responseText + ")");
                    }

        });
        }
    }
    function cerrarModal(){
        $("#modal-verificacion").modal("hide");
    }
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
