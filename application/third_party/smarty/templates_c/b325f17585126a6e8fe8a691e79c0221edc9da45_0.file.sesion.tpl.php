<?php
/* Smarty version 3.1.30, created on 2019-07-19 14:19:53
  from "C:\xampp\htdocs\sace\application\views\sesion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d31fbb9dc8d83_79459961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b325f17585126a6e8fe8a691e79c0221edc9da45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\sesion.tpl',
      1 => 1544012215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:html/footer.tpl' => 1,
  ),
),false)) {
function content_5d31fbb9dc8d83_79459961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <div class="row margin-top">
        <div class="login center-block borde-gris margin-top"
             style="width: 600px; border:0px;">
            <h3>Su sesi&oacute;n ha caducado</h3>
            <p>
                Redirigiendo a principal en <span id="timeout">10</span>...
            </p>
            <br>

        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    var base = $("head base").attr("href");
    $(document).ready(function() { 
        
        var timer = setInterval(function() {
            var timeLeft = $("#timeout").html();                                
            if(eval(timeLeft) === 0){
                clearInterval(timer);
                window.location.replace(base);             
            }else{              
                $("#timeout").html(eval(timeLeft)- eval(1));

            }
        }, 1000); 
    });   
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:html/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
