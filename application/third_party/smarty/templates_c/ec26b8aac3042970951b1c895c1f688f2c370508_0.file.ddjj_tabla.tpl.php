<?php
/* Smarty version 3.1.30, created on 2019-07-19 14:24:05
  from "C:\xampp\htdocs\sace\application\views\ddjj\ddjj_tabla.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d31fcb5805ef2_24284323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec26b8aac3042970951b1c895c1f688f2c370508' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\ddjj\\ddjj_tabla.tpl',
      1 => 1557754714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d31fcb5805ef2_24284323 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tbody id="tabla-ddjj-body">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginador']->value->getDatos(), 'ddjj');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ddjj']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['ddjj']->value->getPauta()->getId();?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ddjj']->value->getFranja()->getId();?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ddjj']->value->getFranja()->getId();?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ddjj']->value->getMedioNombre();?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ddjj']->value->getAgrupacionNombre();?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ddjj']->value->getListaNombre();?>
</td>     
        <td colspan="2" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['ddjj']->value->getFechaPauta("d/m/Y");?>
</td>
        <td><a class="ddjj-url" href="<?php echo site_url();?>
ddjj/verDesdeGrilla/<?php echo $_smarty_tpl->tpl_vars['ddjj']->value->getPauta()->getId();?>
/<?php echo $_smarty_tpl->tpl_vars['ddjj']->value->getFranja()->getId();?>
" target="_blank">Ver</a></td>
    </tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<tbody>
<tfoot id="tabla-ddjj-foot">
    <tr>
        <td colspan="7" align="center">
            <?php if ($_smarty_tpl->tpl_vars['paginador']->value->paginaAnterior() != '') {?>
                <a href="javascript:listar(<?php echo $_smarty_tpl->tpl_vars['paginador']->value->paginaAnterior();?>
)" id="pagAnterior">&#60</a>
            <?php } else { ?>
                &#60
            <?php }?>

            <?php echo $_smarty_tpl->tpl_vars['paginador']->value->getPaginaActual();?>
 

            <?php if ($_smarty_tpl->tpl_vars['paginador']->value->proximaPagina() != '') {?>
                <a href="javascript:listar(<?php echo $_smarty_tpl->tpl_vars['paginador']->value->proximaPagina();?>
)" id="pagSgte">&#62</a>
            <?php } else { ?>
                &#62
            <?php }?>
        </td>
    </tr>
    <tr>
        <td colspan="7" >    
        <br>
        Mostrando P&aacute;gina <?php echo $_smarty_tpl->tpl_vars['paginador']->value->getPaginaActual();?>
 de <?php echo $_smarty_tpl->tpl_vars['paginador']->value->getTotalPaginas();?>

        <input type="hidden" id="totalPaginas" value="<?php echo $_smarty_tpl->tpl_vars['paginador']->value->getTotalPaginas();?>
"/>
        <br>
        </td>
    </tr>
</tfoot>
    
                            <?php }
}
