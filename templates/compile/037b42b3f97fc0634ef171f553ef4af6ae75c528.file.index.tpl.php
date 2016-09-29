<?php /* Smarty version Smarty-3.1.8, created on 2016-07-06 15:13:02
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/form/form/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:583985998577d1ffef2b862-11739505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '037b42b3f97fc0634ef171f553ef4af6ae75c528' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/form/form/index.tpl',
      1 => 1464684656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '583985998577d1ffef2b862-11739505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'd' => 0,
    'langID' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577d1fff12ffb1_62949609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577d1fff12ffb1_62949609')) {function content_577d1fff12ffb1_62949609($_smarty_tpl) {?><div class="well well-small"><strong>Список форм</strong> <a class="btn btn-success btn-back" href="<?php echo @URL;?>
/insert">Добавить форму</a></div>
<table class="table table-hover table-bordered table-custom">
    <thead>
        <tr>
            <th width="10">#</th>            
            <th>Название формы</th>
            <th width="70">Оповещение E-mail</th>
            <th width="70">Защита от роботов</th>
            <th>Сообщение после отправки</th>
            <th width="40">Языки</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
            <tr>
                <td class="id"><?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['d']->value[0]['langed_title'];?>
</td>
                <td><input type="checkbox" disabled <?php if ($_smarty_tpl->tpl_vars['d']->value[0]['isSend']){?> checked="checked"<?php }?> /></td>
                <td><input type="checkbox" disabled <?php if ($_smarty_tpl->tpl_vars['d']->value[0]['hasCaptcha']){?> checked="checked"<?php }?> /></td>
                <td><?php echo $_smarty_tpl->tpl_vars['d']->value[0]['langed_message'];?>
</td>
                <td class="langs">
                    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['langID'] = new Smarty_Variable;
 $_from = Lang::getLanguages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['langID']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
                        <?php if (isset($_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['langID']->value])){?>
                            <a href="<?php echo @URL;?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
#lang<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title_short'];?>
</a>
                        <?php }?>
                    <?php } ?>
                </td>
                <td>
                    <a href="<?php echo @URL;?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
/view"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                    <a href="<?php echo @URL;?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
/element"><i class="glyphicon glyphicon-list-alt"></i> Elements</a>
                    <a href="<?php echo @URL;?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                    <a class="removeData" data-action="form/delete" data-id="<?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
" href="javascript:void(0);"><i class="glyphicon glyphicon-remove"></i> Remove</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table><?php }} ?>