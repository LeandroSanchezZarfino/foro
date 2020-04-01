<?php
/* Smarty version 3.1.30, created on 2019-10-03 18:55:19
  from "C:\xampp\htdocs\sace\application\views\principal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d966e47e10c91_27675586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c7e39d424f03d8a0499e083b3ad910de2f686f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sace\\application\\views\\principal.tpl',
      1 => 1570139713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:html/header.tpl' => 1,
    'file:html/menu_lateral.tpl' => 1,
    'file:html/menu_top.tpl' => 1,
    'file:html/footer_principal.tpl' => 1,
  ),
),false)) {
function content_5d966e47e10c91_27675586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:html/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div id="modal-encuesta-iram" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Encuesta de satisfacci&oacute;n para usuarios SACE </h4>
            </div>
            <div  style="text-align: center;">
                <br>
                <a id="aceptar" type="button" class="btn btn-primary"  href="<?php if ($_smarty_tpl->tpl_vars['encuestaIram']->value == 1) {?> <?php echo $_smarty_tpl->tpl_vars['linkIram']->value;?>
 <?php }?> 
" target="_blank" onClick="javascript:contestarIram();">Contestar ahora</a>&nbsp;
                <button id="luego" type="button" class="btn btn-secondary" onClick="javascript:contestarIramLuego();">Recordar luego</button>&nbsp;
                <br>
                <br>
        </div>
    </div>
</div>
</div>



<div id="modal-encuesta-calificacion" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" onClick="javascript::contestarValoracionLuego();" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                   Califique la Plataforma 
                </h4>
            </div>
            <div id="body" class="modal-body">
                <div class="row lead" style="margin-left:0px">
                    <div id="stars" class="starrr"></div>
                        Usted est&aacute; calificando con <span id="count">5</span> estrella(s)
                </div>
            </div>
            <div class="modal-footer"> 
                <div class="col-md-12" style="text-align: right;">
                    <button id="aceptar" type="button" class="btn btn-primary" onClick="javascript:calificar();">Calificar</button>&nbsp;
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="min-height: 800px;">
                <?php $_smarty_tpl->_subTemplateRender("file:html/menu_lateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                
                <div id="page-content-wrapper">
                    
                    <div class="page-content inset">
                        <?php $_smarty_tpl->_subTemplateRender("file:html/menu_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <div class="row">
                            <div class="col-md-6"></div>
                        </div>
                    </div>
                           
                </div>
            </div> 
        </div>
    </div>
</div>
<div class="clear"></div>
</div>	

<?php if ($_smarty_tpl->tpl_vars['chat']->value) {?>
    <div id="chat-container" class="fixed" style="display: none;"></div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:html/footer_principal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['encuestaValoracion']->value == 5) {?>
<style>
#stars.starrr {
color: #ffbe00;
}
</style>

<?php echo '<script'; ?>
>
    $("#modal-encuesta-calificacion").modal('show');
    
var __slice = [].slice;
(function($, window) {
    var Starrr;

    Starrr = (function() {
        Starrr.prototype.defaults = {
            rating:5,
            numStars: 5,
            change: function(e, value) {}
        };

        function Starrr($el, options) {
            var i, _, _ref,
                _this = this;

            this.options = $.extend({}, this.defaults, options);
            this.$el = $el;
            _ref = this.defaults;
            for (i in _ref) {
                _ = _ref[i];
                if (this.$el.data(i) != null) {
                    this.options[i] = this.$el.data(i);
                }
            }
            this.createStars();
            this.syncRating();
            this.$el.on('mouseover.starrr', 'i', function(e) {
                return _this.syncRating(_this.$el.find('i').index(e.currentTarget) + 1);
            });
            this.$el.on('mouseout.starrr', function() {
                return _this.syncRating();
            });
            this.$el.on('click.starrr', 'i', function(e) {
                return _this.setRating(_this.$el.find('i').index(e.currentTarget) + 1);
            });
            this.$el.on('starrr:change', this.options.change);
        }

        Starrr.prototype.createStars = function() {
            var _i, _ref, _results;

            _results = [];
            for (_i = 1, _ref = this.options.numStars; 1 <= _ref ? _i <= _ref : _i >= _ref; 1 <= _ref ? _i++ : _i--) {
                _results.push(this.$el.append("<i class='fa fa-star-o'></i>"));
            }
            return _results;
        };

        Starrr.prototype.setRating = function(rating) {
            if (this.options.rating === rating) {
                rating = void 0;
            }
            this.options.rating = rating;
            this.syncRating();
            return this.$el.trigger('starrr:change', rating);
        };

        Starrr.prototype.syncRating = function(rating) {
            var i, _i, _j, _ref;

            rating || (rating = this.options.rating);
            if (rating) {
                for (i = _i = 0, _ref = rating - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
                    this.$el.find('i').eq(i).removeClass('fa-star-o').addClass('fa-star');
                }
            }
            if (rating && rating < 5) {
                for (i = _j = rating; rating <= 4 ? _j <= 4 : _j >= 4; i = rating <= 4 ? ++_j : --_j) {
                    this.$el.find('i').eq(i).removeClass('fa-star').addClass('fa-star-o');
                }
            }
            if (!rating) {
                return this.$el.find('i').removeClass('fa-star').addClass('fa-star-o');
            }
        };

        return Starrr;

    })();
    return $.fn.extend({
        starrr: function() {
            var args, option;

            option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
            return this.each(function() {
                var data;

                data = $(this).data('star-rating');
                if (!data) {
                    $(this).data('star-rating', (data = new Starrr($(this), option)));
                }
                if (typeof option === 'string') {
                    return data[option].apply(data, args);
                }
            });
        }
    });
})(window.jQuery, window);

$(function() {
    return $(".starrr").starrr();
});

$( document ).ready(function() {
      
  $('#stars').on('starrr:change', function(e, value){
    $('#count').html(value);
  });
  
  $('#stars-existing').on('starrr:change', function(e, value){
    $('#count-existing').html(value);
  });
});


function calificar(){
$("#modal-encuesta-calificacion").modal('hide');   
valoracion = $('#count').html();
        $.ajax({
            data: {
                "valoracion" : valoracion
            },
            url: base_url + "usuario/calificar",
            type: "POST",
            dataType: "json",
            beforeSend: function () {},
            success: function () {}
        });
}

function contestarValoracionLuego(){
    $("#modal-encuesta-calificacion").modal('hide');   
        $.ajax({
            data: {
                "valoracion" : 77
            },
            url: base_url + "usuario/calificar",
            type: "POST",
            dataType: "json",
            beforeSend: function () {},
            success: function () {}
        });      
}

<?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['encuestaIram']->value == 1) {?>
    <?php echo '<script'; ?>
>
        $("#modal-encuesta-iram").modal('show');
        function contestarIram(){
            $.ajax({
                    data: {
                        "contesta": 2
                    },
                    url: base_url + "usuario/encuestaIram",
                    type: "POST",
                    dataType: "json",
                    beforeSend: function () {},
                    success: function () {}
                });
        $("#modal-encuesta-iram").modal('hide');
        }

        function contestarIramLuego(){
            $.ajax({
                    data: {
                        "contesta": 3 
                    },
                    url: base_url + "usuario/encuestaIram",
                    type: "POST",
                    dataType: "json",
                    beforeSend: function () {},
                    success: function () {}
                });
        $("#modal-encuesta-iram").modal('hide');
}
    <?php echo '</script'; ?>
>
<?php }
}
}
