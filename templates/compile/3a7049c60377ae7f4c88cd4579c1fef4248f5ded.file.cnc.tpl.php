<?php /* Smarty version Smarty-3.1.8, created on 2016-07-06 15:12:52
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/mGrid/engine/templates/cnc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1740991260577d1ff490f0c6-83718059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a7049c60377ae7f4c88cd4579c1fef4248f5ded' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/mGrid/engine/templates/cnc.tpl',
      1 => 1464684589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1740991260577d1ff490f0c6-83718059',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
    'langId' => 0,
    'options' => 0,
    'val' => 0,
    'key' => 0,
    'bases' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577d1ff4abcf74_81628525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577d1ff4abcf74_81628525')) {function content_577d1ff4abcf74_81628525($_smarty_tpl) {?><input type="text" style="font-size:11px; margin-bottom: 2px; width:80%;" name="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['langId']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['langId']->value;?>
" class="text ui-widget-content ui-corner-all" />
<input type="button" value="Генерировать ЧПУ" id="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_gen_<?php echo $_smarty_tpl->tpl_vars['langId']->value;?>
" class="text ui-widget-content ui-corner-all" />
<input type="button" value="Проверить ЧПУ" id="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_check_<?php echo $_smarty_tpl->tpl_vars['langId']->value;?>
" style="margin-left: 2px;" class="text ui-widget-content ui-corner-all" /><br />
<div id="<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_alert_<?php echo $_smarty_tpl->tpl_vars['langId']->value;?>
" class="cncHolder" style="padding: 2px 0pt; width: 100%; height: 14px; font-size: 11px;"></div>
<script type="text/javascript">

    $("#<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_gen_<?php echo $_smarty_tpl->tpl_vars['langId']->value;?>
").click(function()
    {

        var val1 = '';

        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['val']->value=='text'){?>
                $('#dialog [name^="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"]').each(function()
                { 
                    var v = $(this).val(); 
                    if (v) {  
                        val1 += ' ' + v; 
                        return false;
                    }
                });
            <?php }elseif($_smarty_tpl->tpl_vars['val']->value=='select'){?>
                $('#dialog [name^="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"] option:selected').each(function()
                { 
                    var v = $(this).text(); 
                    if (v){ 
                        val1 += ' ' + v; 
                        return false;   
                    }
                });
            <?php }elseif($_smarty_tpl->tpl_vars['val']->value=='value'){?>
                    val1 += ' <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
';
            <?php }?>
        <?php } ?>

        if (val1 === '') {
            $("#<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_alert_<?php echo $_smarty_tpl->tpl_vars['langId']->value;?>
").html('<span style="color: 3f02222;">Введите название меню и нажмите генерировать</span>');
        } else {

            // $("#<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['langId']->value;?>
").val(my_replace(alphabet, val1));
            
            $.post('/admin/request.php?fn=generate/uri', {
                string: val1
            }, function(data)
            {
                $("#<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['langId']->value;?>
").val(my_replace(alphabet, data.string));
                $("#<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_alert_<?php echo $_smarty_tpl->tpl_vars['langId']->value;?>
").html('<span style="color: #18c42c;">ЧПУ успешно сгенерирован</span>');
            }, 'json');            
        }
    });

    $("#<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_check_<?php echo $_smarty_tpl->tpl_vars['langId']->value;?>
").click(function()
    {

        var my_string = $("#<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['langId']->value;?>
").val();

        if (my_string === '') {
            $("#<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_alert_<?php echo $_smarty_tpl->tpl_vars['langId']->value;?>
").html('<span style="color: #f02222;">Поле ЧПУ пустое, сгенерируйте или введите свой</span>');
        } else {

            var currlang = $(".ui-tabs-selected.ui-state-active").attr("lang");
            
            $.post("/admin/mGrid/engine/adm-ajax.php", {
                action : "check_cnc", 
                bases: "<?php echo $_smarty_tpl->tpl_vars['bases']->value;?>
", 
                field : "<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
", 
                item: id, 
                value: my_string, 
                lang: currlang
            }, function(data)
            {
		if(data.flag == 2) {
                    $("#<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_alert_<?php echo $_smarty_tpl->tpl_vars['langId']->value;?>
").html('<span style="color: #18c42c;">данный ЧПУ удовлетворяет требованиям<span>');
		}else if(data.flag == 1) {
                    $("#<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_alert_<?php echo $_smarty_tpl->tpl_vars['langId']->value;?>
").html('<span style="color: #f02222;">такой ЧПУ уже существует</span>');
		}else{
                    $("#<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
_alert_<?php echo $_smarty_tpl->tpl_vars['langId']->value;?>
").html('<span style="color: #f02222;">Ошибка проверки ЧПУ</span>');
		}
            }, "json");
        }
    });
</script><?php }} ?>