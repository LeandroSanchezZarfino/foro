<?php
/* Smarty version 3.1.30, created on 2019-10-01 23:25:20
  from "C:\xampp\htdocs\sace\application\views\ddjj\ddjj.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d940a90e677f1_87913393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9429b55ee8935211b950760f3cc3a9f42ddbba23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\ddjj\\ddjj.tpl',
      1 => 1569983119,
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
function content_5d940a90e677f1_87913393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo site_url();?>
public/js/grilla/dineFiltroGrilla.js?ver1.2"><?php echo '</script'; ?>
>

<div id="modal-ddjj-descargar" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Descargar declaraciones juradas   
                </h4>
            </div>
            <br>
            <div style="margin-right: 20px; margin-left: 20px;">
                <table>
                    <tr>
                        <p>La cantidad máxima de días permitidos para exportar simultaneamente es <strong id="maxDias">1</strong></p>
                        <br>
                        <div class="form-group">
                             <div class="col-md-3">
                                <label>Desde: </label>
                                 
                             </div>
                             <div class="col-md-9">
                                <input type="date" 
                                    id="modal-filtro-fecha" 
                                    name="modal-filtro-fecha" 
                                    class="form-control" 
                                    style="border-radius: 5px;" 
                                    value="" onchange="validarDias(this,'modal-filtro-fecha-hasta')"/>
                                 
                             </div>
                        </div>
                    </tr>
                    <br>
                    <tr>
                        <div class="form-group"> 
                            <div class="col-md-3">
                                <label>Hasta: </label>
                            </div>
                            <div class="col-md-9">
                                <input type="date" 
                                    id="modal-filtro-fecha-hasta" 
                                    name="modal-filtro-fecha-hasta" 
                                    class="form-control" 
                                    style="border-radius: 5px;" 
                                    value="" onchange="validarDias(this,'modal-filtro-fecha');" />
                            </div>
                        </div>
                    </tr>
                    <br>
                    <hr>
                    <tr>
                        <div class="form-group">
                            <div class="col-md-3">
                                <label>Franja </label>
                            </div>
                            <div class="col-md-9">
                                <select id="modal-filtro-nroddjj-franja" 
                                    name="modal-filtro-nroddjj-franja" 
                                    class="form-control" 
                                    style="border-radius: 5px;">
                                    <option value="">Todas</option>
                                    <option value="1">Franja 1</option>
                                    <option value="2">Franja 2</option>
                                    <option value="3">Franja 3</option>
                                    <option value="4">Franja 4</option>
                                </select>
                            </div>
                        </div> 
                    </tr>
                    <br>
                    <hr>
                    <tr>
                        <div class="form-group">
                            <div class="col-md-3">
                                <label>Estado</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control" id="modal-filtro-estadoddjj">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['estados']->value, 'estado');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['estado']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['estado']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['estado']->value->getDescripcion();?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </select>
                            </div>
                        </div>
                    </tr>
                    <br>

                    <?php if ($_smarty_tpl->tpl_vars['perfil']->value == 1 || $_smarty_tpl->tpl_vars['perfil']->value == 4 || $_smarty_tpl->tpl_vars['perfil']->value == 5) {?>
                    <hr>
                    <tr>
                        <div class="form-group">
                            <div class="col-md-3">
                                <label>Distrito *</label>
                            </div>
                            <div class="col-md-9">
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
                            </div>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <div class="col-md-3">
                                <label>Cargo *</label>
                            </div>
                            <div class="col-md-9">
                                <select id="filtro_cargo_id" name="cargo_electoral_id" class="form-control">
                                    <option value="-1">Seleccione</option>                    
                                </select>
                            </div>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <div class="col-md-3">
                                <label>Tipo *</label>                                
                            </div>
                            <div class="col-md-9">
                                <select id="filtro_perfil" name="perfil_id" class="form-control">
                                    <option value="-1">Seleccione</option>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['perfilAp']->value;?>
">Agrupaci&oacute;n pol&iacute;tica</option>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['perfilSca']->value;?>
">Servicio de comunicaci&oacute;n audiovisual</option>
                                </select>                                
                            </div>
                        </div>
                    </tr>
                    <tr>
                        <div class="form-group">
                            <div class="col-md-3">
                                <label>Entidad *</label>
                            </div>
                            <div class="col-md-9">
                                <select id="entidad_id" name="entidad_id" class="form-control">
                                    <option value="-1">Seleccione</option>
                                </select>
                            </div>
                        </div>
                    </tr>
                    <?php }?>
                </table>
                <br>
                <div  style="text-align: center;">
                    <button  id="modal-exportar" class="btn btn-primary" onclick="validar();">Exportar DDJJ</button>
                    <br><br>
                </div>
            </div>       
        </div>
    </div>
</div>



<div id="modal-verificacion" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Descargar declaraciones juradas
                </h4>
            </div>
            <div style="margin-right: 20px; margin-left: 20px; text-align: center;">
                    <br>
                    <label>Debe seleccionar una fecha y una franja para poder exportar</label>
                    <br><br>
                    <button class="btn btn-primary" onclick="cerrarModal();">Cerrar</button>
            </div>
                <br>
            </div>
        </div>
    </div>
</div>



<div id="modal-sin-ddjj" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    Descargar declaraciones juradas
                </h4>
            </div>
            <div style="margin-right: 20px; margin-left: 20px; text-align: center;">
                    <br>
                    <label>No hay DDJJ generadas en la fecha y/o franja seleccionada</label>
                    <br><br>
                    <button class="btn btn-primary" onclick="cerrarModalSinDDJJ();">Cerrar</button>
            </div>
                <br>
            </div>
        </div>
    </div>
</div>


<div class="section" style="height: 1500px;">
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
                                    <div class="col-md-12 aelinea" ><span><img style="width: 100px;cursor: pointer;" src="<?php echo site_url();?>
public/img/mas-info-png.png" onclick="$('.infoenlinea').toggle();">
                                    <div class="infoenlinea" style="display:none; background:#b3b3b3 ;border-radius:10px;padding:7px; color:white;">Son el registro de todas las operaciones hechas en el sistema. Las declaraciones juradas se pueden visualizar, guardar e imprimir.</div><br></span>
                            </div>
                            <br><br>
                             <h2>Declaraciones juradas</h2>                            
                                            <a type="button"
                                                onclick= "verModalDescargar();" 
                                                    class="btn btn-back">Exportar</a>
                                            <button class="btn btn-warning"  id="btnLimpiarFiltro">Limpiar Filtros</button>
                                            <br>
                                            <div>
                                                <?php if (isset($_smarty_tpl->tpl_vars['paginador']->value)) {?>   
                                                    <?php if ($_smarty_tpl->tpl_vars['paginador']->value->getQ() != '') {?>
                                                        Resultados para la b&uacute;squeda: <a href="<?php echo site_url();?>
ddjj/listar">[X]</a><br>
                                                        <i><?php echo $_smarty_tpl->tpl_vars['paginador']->value->getQ();?>
</i> 
                                                        <br><br>
                                                    <?php }?>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>         
                                <div class="container">
                                     <div class="row">         
                                        <div class="col-md-12">
                                            <h5>Ingrese alg&uacute;n concepto para Buscar y luego presione la tecla Entrar</h5>
                                            <div id="tabla-ddjj-top" class="input-group col-md-12">
                                                <table id="tabla-ddjj" class="table table-inverse col-md-11">
                                                <thead>    
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th style="text-align: center;"  colspan="2">Fecha</th>
                                                    </tr>
                                                <tr>
                                                    <th style="text-align: center;">DDJJ N°</th>
                                                    <th style="text-align: center;">/</th>
                                                    <th style="text-align: center;">Franja</th>    
                                                    <th style="text-align: center;">Medio</th>
                                                    <th style="text-align: center;">Agrupación</th>
                                                    <th style="text-align: center;">Lista</th>
                                                    <th style="text-align: center;">Desde</th>
                                                    <th style="text-align: center;">Hasta</th>
                                                    <th style="text-align: center;">Ver</th>

                                                </tr>
                                                <tr>

                                                            <td>
                                                            <input type="text" 
                                                                       id="filtro-nroddjj" 
                                                                       name="numero" 
                                                                       class="form-control" 
                                                                       style="border-radius: 5px;" 
                                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['busqueda']->value)) {
echo $_smarty_tpl->tpl_vars['busqueda']->value['numero'];
}?>"/>
                                                            </td>
                                                            <td>
                                                            <select  id="filtro-nroddjj-franja" 
                                                                       name="numero" 
                                                                       class="form-control" 
                                                                       style="border-radius: 5px;"
                                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['busqueda']->value)) {
echo $_smarty_tpl->tpl_vars['busqueda']->value['numero'];
}?>">
                                                                <option value="">Todas</option> 
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                            </td>
                                                            <td>
                                                                 <select  id="filtro-franja" 
                                                                       name="franja" 
                                                                       class="form-control" 
                                                                       style="border-radius: 5px;"
                                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['busqueda']->value)) {
echo $_smarty_tpl->tpl_vars['busqueda']->value['numeroFranja'];
}?>">
                                                                <option value="">Todas</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>      
                                                            </td>
                                                            <td>
                                                                <input type="text" 
                                                                       id="filtro-medio" 
                                                                       name="medio" 
                                                                       class="form-control" 
                                                                       style="border-radius: 5px;" value=""
                                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['busqueda']->value)) {
echo $_smarty_tpl->tpl_vars['busqueda']->value['medio'];
}?>"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" 
                                                                       id="filtro-agrupacion" 
                                                                       name="agrupacion" 
                                                                       class="form-control" 
                                                                       style="border-radius: 5px;" value=""
                                                                value="<?php if (isset($_smarty_tpl->tpl_vars['busqueda']->value)) {
echo $_smarty_tpl->tpl_vars['busqueda']->value['agrupacion'];
}?>"/>
                                                            </td>
                                                            <td>
                                                                <input type="text" 
                                                                       id="filtro-lista" 
                                                                       name="lista" 
                                                                       class="form-control" 
                                                                       style="border-radius: 5px;" 
                                                                       value="<?php if (isset($_smarty_tpl->tpl_vars['busqueda']->value)) {
echo $_smarty_tpl->tpl_vars['busqueda']->value['lista'];
}?>"/>
                                                            </td>
                                                            <td>                                                
                                                                <input type="date" id="filtro-fecha" name="fecha" class="form-control" style="border-radius: 5px;" value="<?php if (isset($_smarty_tpl->tpl_vars['busqueda']->value)) {
echo $_smarty_tpl->tpl_vars['busqueda']->value['fecha'];
}?>"/>
                                                            </td>
                                                            <td>
                                                            <input type="date" id="filtro-fecha-fin" name="fecha-fin" class="form-control" style="border-radius: 5px;" value="<?php if (isset($_smarty_tpl->tpl_vars['busqueda']->value)) {
echo $_smarty_tpl->tpl_vars['busqueda']->value['fechaFin'];
}?>"/>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-info" onclick="buscarDDJJbtn();"><i class="fa fa-search"></i></button>
                                                            </td>
                                                </tr>
                                                </thead>
                                                </table>
                                                <div id="ddjj-paginador"></div>            
                                                <a href="<?php echo site_url();?>
principal"
                                                class="btn btn-back">
                                                Volver
                                                </a>                       
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
<div class="clear"></div>
</div>


<div class="modal" id="modalError" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
        <p>Ingrese al menos un parámetro de búsqueda</p>
        <br><br>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div> 

<?php echo '<script'; ?>
>
    function validarDias(inputFecha,otroInput){
        var idCambio = inputFecha.id;
        if(!$("#"+otroInput).val()){
            $("#"+otroInput).val($("#"+idCambio).val()); 
        }
        var maxDias = parseInt($("#maxDias").html());
        var fechaInicio = new Date($("#modal-filtro-fecha").val());
        var fechaFin = new Date($("#modal-filtro-fecha-hasta").val());
        const diffTime = Math.abs(fechaFin.getTime() - fechaInicio.getTime());
        const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
        if(diffDays > maxDias){
            if(idCambio == "modal-filtro-fecha"){
                var nuevaFecha = new Date();
                nuevaFecha.setDate(fechaInicio.getDate() + maxDias);
                nuevaFecha = nuevaFecha.toISOString().split('T')[0];
                $("#"+otroInput).val(nuevaFecha);
            }else{
                var nuevaFecha = new Date();
                nuevaFecha.setDate(fechaFin.getDate() - maxDias);
                nuevaFecha = nuevaFecha.toISOString().split('T')[0];
                $("#"+otroInput).val(nuevaFecha);
            }
        }
    }    

    /*
   function abrirModalFecha(){
        $("#modalFechas").modal("show");
        $('#filtro-fecha-fin').val(null);
        $('#filtro-fecha').val(null);
        if($("#filtradoFecha").val() == 1){
            $('#filtro-fin').hide();

        }else{
            $('#filtro-fin').show();

        }
   }
   function resetFecha(){
        $("#filtradoFecha").show();
        $("#fechaElegida").hide();
        $("#resetFecha").hide();
   }
    function confirmarFecha(){
        //$("#filtradoFecha").hide();
        $("#filtradoFecha").val($("#filtradoFecha option:first").val());
        $("#fechaElegida").show();
        $("#resetFecha").show();
        $("#resetFecha").css('display',"inline-flex");
        var txt = "";
        var inicio = $('#filtro-fecha').val();
        var fin = $('#filtro-fecha-fin').val();
        /*if(inicio != null){
            txt =getFecha("filtro-fecha");
        }
        console.log(fin);
        if(fin != null && fin != ""){
            txt += " - "+ (getFecha("filtro-fecha-fin"));
        }
        $("#txtFechaElegida").text(txt);
        
        $("#filtradoFecha option:first").text("Seleccionado!");
    }
    function getFecha(selector){
        d = new Date(document.getElementById(selector).value);
        dt = d.getDate();
        mn = d.getMonth()+1;
        return dt+"/"+mn;
    } */


function buscarDDJJbtn(){
    var numero          = $("#filtro-nroddjj").val();
                var numeroFranja    = $("#filtro-nroddjj-franja").val();
                var fecha           = $("#filtro-fecha").val();
                var fechaFin        = $("#filtro-fecha-fin").val();
                var franja          = $("#filtro-franja").val();
                var medio           = $("#filtro-medio").val();
                var agrupacion      = $("#filtro-agrupacion").val();
                var cargo           = $("#filtro-cargo").val();
                var lista           = $("#filtro-lista").val();

                //var valorPagina = $("#valorPagina").val();
                var flag = 0;
                $("input").each(function( index ) {

                    if($(this).val() != "" && $(this).is(":visible")){
                        flag = 1;
                    }
                    
                });
                $( "select" ).each(function( index ) {
                    if($(this).val() != "" && $(this).is(":visible")){
                        flag = 1; 
                    }
                });
                if(flag == 0) {
                    $("#modalError").modal("show");
                    return;
                }
                $.ajax({
                    data: {
                        "numero": numero,
                        "numeroFranja": numeroFranja,
                        "fecha": fecha,
                        "fechaFinal":fechaFin,
                        "franja": franja,
                        "medio": medio,
                        "agrupacion": agrupacion,
                        "cargo": cargo,
                        "lista": lista
                    },
                    url: base + "ddjj/generarTabla/1",
                    type: 'POST',
                    dataType: "html",
                    beforeSend: function () {
                        Overlay.show("#tabla-ddjj");
                    },
                    success: function (response) {
                        Overlay.remove();   
                        $("#tabla-ddjj-body").remove();
                        $("#tabla-ddjj-foot").remove();
                        $("#tabla-ddjj").append(response);
                    },
                    error: function (xhr, status, error) {
                        var err = eval("(" + xhr.responseText + ")");
                    }
                });
}

  
 $('#tabla-ddjj').each(function () {
        $(this).find('input,date').keypress(function (e) {
            // Cada vez que se apreta Enter sobre un input o un date
            if (e.which === 10 || e.which === 13) {
                var numero          = $("#filtro-nroddjj").val();
                var numeroFranja    = $("#filtro-nroddjj-franja").val();
                var fecha           = $("#filtro-fecha").val();
                var fechaFin        = $("#filtro-fecha-fin").val();
                var franja          = $("#filtro-franja").val();
                var medio           = $("#filtro-medio").val();
                var agrupacion      = $("#filtro-agrupacion").val();
                var cargo           = $("#filtro-cargo").val();
                var lista           = $("#filtro-lista").val();
                var flag = 0;
                $("input").each(function( index ) {
                    if($(this).val() != "" && $(this).is(":visible")){
                        flag = 1;
                    }
                });
                $( "select" ).each(function( index ) {
                    if($(this).val() != "" && $(this).is(":visible")){
                        flag = 1; 
                    }
                });
                if(flag == 0) {
                    $("#modalError").modal("show");
                    return;
                }//var valorPagina = $("#valorPagina").val();
                $.ajax({
                    data: {
                        "numero": numero,
                        "numeroFranja": numeroFranja,
                        "fecha": fecha,
                        "fechaFinal":fechaFin,
                        "franja": franja,
                        "medio": medio,
                        "agrupacion": agrupacion,
                        "cargo": cargo,
                        "lista": lista
                    },
                    url: base + "ddjj/generarTabla/1",
                    type: 'POST',
                    dataType: "html",
                    beforeSend: function () {
                        Overlay.show("#tabla-ddjj");
                    },
                    success: function (response) {
                        Overlay.remove();   
                        $("#tabla-ddjj-body").remove();
                        $("#tabla-ddjj-foot").remove();
                        $("#tabla-ddjj").append(response);
                    },
                    error: function (xhr, status, error) {
                        var err = eval("(" + xhr.responseText + ")");
                    }
                });
            }
        });
    });

 function verModalDescargar(){
   
    $("#modal-ddjj-descargar").modal("show");
    document.getElementById('modal-exportar').disabled=false;   
    $('#modal-exportar').text('Exportar DDJJ'); 
}

function validar(){
    if($("#modal-filtro-fecha").val()==""){
         $("#modal-verificacion").modal("show");
    }
    else{
        exportarDDJJ();
    }
}
function exportarDDJJ(){
    document.getElementById('modal-exportar').disabled=true;    
    $('#modal-exportar').text('Descargando..');
    var numeroFranja    = $("#modal-filtro-nroddjj-franja").val();
    var fecha     = $("#modal-filtro-fecha").val();
    var hasta = $("#modal-filtro-fecha-hasta").val();
    var estado = $("#modal-filtro-estadoddjj").val();
    var cargo = $("#filtro_cargo_id").val();
    var perfil = $("#modal_filtro_perfil").val();
    var entidad = $("#modal_entidad_id").val();


    $.ajax({
                    data: {                  
                        "numeroFranja": numeroFranja,
                        "fecha": fecha,
                        "fechaFinal": hasta,
                        "estado": estado,
                        "cargo": cargo,
                        "perfil": perfil,
                        "entidad": entidad
                    },

                    url: base + "ddjj/exportarPorFechaFranja",
                    type: 'POST',
                    dataType: "html",
                    beforeSend: function () {
                    },
                    success: function (response) {
                        Overlay.remove(); 
                        document.getElementById('modal-exportar').disabled=false;  
                        if(response!=0){
                            url = base + response;
                            $(location).attr('href',url);
                        }else{
                            $("#modal-sin-ddjj").modal("show");
                        }

                        $('#modal-exportar').text('Exportar DDJJ');
                },
                    error: function (xhr, status, error) {
                        var err = eval("(" + xhr.responseText + ")");
            }
    });
}

    
 function listar(nroPagina)
 {
    var numero      	= $("#filtro-nroddjj").val();
    var numeroFranja  	= $("#filtro-nroddjj-franja").val();
    var fecha       	= $("#filtro-fecha").val();
    var fechaFin        = $("#filtro-fecha-fin").val();
    var franja      	= $("#filtro-franja").val();
    var medio       	= $("#filtro-medio").val();
    var agrupacion  	= $("#filtro-agrupacion").val();
    var cargo       	= $("#filtro-cargo").val();
    var lista       	= $("#filtro-lista").val();
	
    //var valorPagina = $("#valorPagina").val();
    $.ajax({
        data: {
            "numero": numero,
            "numeroFranja": numeroFranja,
            "fecha": fecha,
             "fechaFinal":fechaFin,
            "franja": franja,
            "medio": medio,
            "agrupacion": agrupacion,
            "cargo": cargo,
            "lista": lista
        },
        url: base + "ddjj/generarTabla/" + nroPagina,
        type: 'POST',
        dataType: "html",
        beforeSend: function () {
            Overlay.show("#tabla-ddjj");
        },
        success: function (response) {
            Overlay.remove();   
            $("#tabla-ddjj-body").remove();
            $("#tabla-ddjj-foot").remove();
            $("#tabla-ddjj").append(response);
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
        }
    });
   
}

$("#btnBuscar").click(function (){
    
    $("#filtro-nroddjj").val("");
    $("#filtro-fecha").val("");
    $("#filtro-franja").val("");
    $("#filtro-medio").val("");
    $("#filtro-agrupacion").val("");
    $("#filtro-cargo").val("");
    $("#filtro-lista").val("");
    var fechaInicial      = $("#fechaInicial").val();
    var fechaFinal        = $("#fechaFinal").val();
    
    
    $.ajax({
        data: {
            "fechaInicial": fechaInicial,
            "fechaFinal": fechaFinal
        },
        url: base + "ddjj/generarTabla/1",
        type: 'POST',
        dataType: "html",
        beforeSend: function () {
            Overlay.show("#tabla-ddjj");
        },
        success: function (response) {
            Overlay.remove();   
            $("#tabla-ddjj-body").remove();
            $("#tabla-ddjj-foot").remove();
            $("#tabla-ddjj").append(response);
        },
        error: function (xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
        }
    });
   
});

$("#btnLimpiarFiltro").click(function (){
    
    $("#filtro-nroddjj").val("");
    $("#filtro-fecha").val("");
    $("#filtro-franja").val("");
	$("#filtro-nroddjj-franja").val("");
    $("#filtro-medio").val("");
    $("#filtro-agrupacion").val("");
    $("#filtro-cargo").val("");
    $("#filtro-lista").val("");
    $("#fechaInicial").val("");
    $("#fechaFinal").val("");
    $("#filtro-fecha-fin").val("");
  
    $("#tabla-ddjj-body").remove();
    $("#tabla-ddjj-foot").remove();
   
});

function cerrarModal(){
        $("#modal-verificacion").modal("hide");
    }

function cerrarModalSinDDJJ(){
        $("#modal-sin-ddjj").modal("hide");
    }

<?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['chat']->value) {?>
    <div id="chat-container" class="fixed" style="display: none;"></div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
