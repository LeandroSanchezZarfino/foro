<?php
/* Smarty version 3.1.30, created on 2019-07-05 13:39:13
  from "C:\xampp\htdocs\sace\application\views\debate\existente.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1f7d319460c3_64657292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '160188fe6b490c5c195e7c0455cf35c9fa727793' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\debate\\existente.tpl',
      1 => 1557327985,
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
function content_5d1f7d319460c3_64657292 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
                              <form action="nuevoDebate" method="POST">
                                <div class="col-md-6">
                                  <h2>Debate Público</h2>
                                  <?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
                                  <br>
                                  <h4><span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></h4>
                                  <hr>
                                  <?php }?>
                                  <div class="form-group col-xs-12">
                                    <label>Descripción</label>
                                    <input type="text" class="form-control" name="desc" required="">
                                  </div>
                                  <div class="form-group col-xs-12">
                                    <label>Fecha </label>
                                    <input type="date" name="fecha" id="filtro-fecha-fin" class="form-control" style="border: 1px solid #cccccc;" required="">
                                  </div>
                                  <div class="form-group col-xs-12">
                                    <label>Franja</label>
                                    <select name="franja" class="form-control" required="">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                    </select>
                                  </div>
                                  <div class="form-group col-xs-12">
                                    <button type="button" data-toggle="modal" data-target="#confirmacion"  class="btn btn-info">Crear</button>
                                  </div>
                                </div>
                                <div id="confirmacion" class="modal fade" role="dialog">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">¿Está seguro que quiere realizar esa acción?</h4>
                                          </div>
                                          <div class="modal-body">
                                            <p>Se realizará el proceso de bloqueo, el cual es irreversible. ¿Desea Continuar?</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="submit" class="btn btn-warning">Confirmar</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                          </div>
                                        </div>

                                      </div>
                                    </div>
                              </form>
                            </div>
                            <hr>
                            <?php if (($_smarty_tpl->tpl_vars['debates']->value)) {?>
                            <div class="container">
                                <div class="col-md-6">
                                  <h2>Debate Público</h2>
                                  <table class="table">
                                    <thead>
                                      <td>Descripción</td>
                                      <td>Fecha</td>
                                      <td>Día</td>
                                      <td>Franja</td>
                                      <td>Cancelar</td>
                                    </thead>
                                    <tbody>
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['debates']->value, 'debate');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['debate']->value) {
?>
                                      <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['debate']->value->nombre;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['debate']->value->fecha;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['debate']->value->dia;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['debate']->value->franja;?>
</td>
                                        <td><button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" onclick="cancelarDebate(<?php echo $_smarty_tpl->tpl_vars['debate']->value->id;?>
 )"><i class="fa fa-times"></i></button></td>
                                      </tr>
                                    </tbody>
                                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                  </table>
                                </div>
                            </div>
                            <?php }?>
                            
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

</div>	
<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Está seguro?</h5>
      </div>
      <div class="modal-body">
        ¿Realmente desea eliminar el debate publico?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="eliminarDebate()">Confirmar</button>
      </div>
    </div>
  </div>
</div>


<?php echo '<script'; ?>
 type="text/javascript">
  var idDebateElegido = -1;
  function cancelarDebate(idDebate){
    idDebateElegido = idDebate;
  }
  function eliminarDebate(){
    if(idDebateElegido != -1){
      $.ajax({
        data:{id:idDebateElegido},
        type:"POST",
        url:"debate/cancelarDebate",
        success:function(){
          location.reload();
        }
      });  
    }
  }
<?php echo '</script'; ?>
>
<?php }
}
