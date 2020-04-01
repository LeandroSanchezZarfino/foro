<?php
/* Smarty version 3.1.30, created on 2019-04-11 15:35:53
  from "C:\xampp\htdocs\sace\application\views\sca\reporteSpotsFecha.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5caf8909a8e8c3_61340222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ab733eccc789473b27ce4411e189bce01a16c7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\sca\\reporteSpotsFecha.tpl',
      1 => 1555002066,
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
function content_5caf8909a8e8c3_61340222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="modal-verificacion" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Reporte de asignaciones por fecha
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

                        <div class="col-md-12 aelinea" >
                                <span><img style="width: 100px;cursor: pointer;" src="<?php echo site_url();?>
public/img/mas-info-png.png" onclick="$('.infoenlinea').toggle();">
                                    <div class="infoenlinea" style="display:none; background:#b3b3b3 ;border-radius:10px;padding:7px; color:white;">
Podrá exportar a un formato Excel, por día, el detalle de los spots que fueron rechazados donde se indicará además el estado inicial y el estado final.  </div><br>
                                </span>
                            </div>
                        <div class="row">
                            <div class="col-md-12"  style="min-height: 300px;">
                                
                                <div class="container">
                                    <div class="form-group">
                                                    <a href="<?php echo site_url();?>
principal" class="btn btn-back">Volver</a>
                                    </div>

                                    <div class="row">
                                    <h2>Reporte de asignaciones por fecha</h2>
                                        <div class="col-md-6" style="width:30%; height:auto;">
                                            <br>
                                            <label>Fecha</label> 
                                            <input type="date" name="fecha" id="fecha" class="form-control" style="border-radius: 5px"> 
                                            <br><br>

                                            <div style="text-align: center;">
                                            <a  class="btn btn-primary" onclick="descargar();" id="exportar" style="margin-left: 15px;">
                                            Descargar
                                            </a> 
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                </div>
                                
                            <div class="clear-15"></div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<div class="clear"></div>
</div>  
<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
    
function descargar(){
    var fecha = $("#fecha").val();
    if(fecha== ""){ $("#modal-verificacion").modal("show");}
    else{
    $('#exportar').text('Descargando..'); 
    $('#exportar').disabled = true;

    $.ajax({
        data: {
            "fecha":fecha 
        },
        url: base + "sca/descargarReporteSpots",
        type: 'POST',
        dataType: "html",
        success: function (response) {
            url = base + response;
            $(location).attr('href',url);
            $('#exportar').text('Descargar');    
            $('#exportar').disabled = false;
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
><?php }
}
