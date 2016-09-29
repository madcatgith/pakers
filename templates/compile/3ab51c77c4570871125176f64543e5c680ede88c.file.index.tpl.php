<?php /* Smarty version Smarty-3.1.8, created on 2016-07-11 15:55:18
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/form/element/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8809982525783c166976267-29177888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ab51c77c4570871125176f64543e5c680ede88c' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/form/element/index.tpl',
      1 => 1464684656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8809982525783c166976267-29177888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formID' => 0,
    'types' => 0,
    'kType' => 0,
    'vType' => 0,
    'data' => 0,
    'd' => 0,
    'langID' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5783c166ab3e63_86334774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783c166ab3e63_86334774')) {function content_5783c166ab3e63_86334774($_smarty_tpl) {?><div class="well well-small"><strong>Список елементов формы (ID: <?php echo $_smarty_tpl->tpl_vars['formID']->value;?>
)</strong> 
    <a class="btn btn-success btn-back" href="<?php echo @URL;?>
">Вернуться к списку форм</a>
    <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Добавить елемент <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
            <?php  $_smarty_tpl->tpl_vars['vType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vType']->_loop = false;
 $_smarty_tpl->tpl_vars['kType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vType']->key => $_smarty_tpl->tpl_vars['vType']->value){
$_smarty_tpl->tpl_vars['vType']->_loop = true;
 $_smarty_tpl->tpl_vars['kType']->value = $_smarty_tpl->tpl_vars['vType']->key;
?>
                <li><a href="<?php echo @URL;?>
/<?php echo $_smarty_tpl->tpl_vars['formID']->value;?>
/element/insert/<?php echo $_smarty_tpl->tpl_vars['kType']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['vType']->value;?>
</a></li>
            <?php } ?>
        </ul>
    </div>
</div>
<table class="table table-hover table-bordered table-elements">
    <thead>
        <tr>
            <th width="10">#</th>            
            <th width="80">Тип элемента</th>
            <th>Название елемента</th>
            <th>Значение</th>
            <th width="40">Языки</th>
            <th width="150">Действия</th>
        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
            <tr data-id="<?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
">
                <td class="id"><?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['d']->value[0]['type']];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['d']->value[0]['langed_title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['d']->value[0]['langed_value'];?>
</td>
                <td class="langs">
                    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['langID'] = new Smarty_Variable;
 $_from = Lang::getLanguages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['langID']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
                        <?php if (isset($_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['langID']->value])&&$_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['langID']->value]['isActive']){?>
                            <a href="<?php echo @URL;?>
/<?php echo $_smarty_tpl->tpl_vars['formID']->value;?>
/element/<?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
#lang<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title_short'];?>
</a>
                        <?php }elseif(isset($_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['langID']->value])){?>
                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['title_short'];?>
</span>
                        <?php }?>
                    <?php } ?>
                </td>
                <td>
                    <a href="<?php echo @URL;?>
/<?php echo $_smarty_tpl->tpl_vars['formID']->value;?>
/element/<?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                    <a class="removeData" data-action="form/element/delete" data-id="<?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
" href="javascript:void(0);"><i class="glyphicon glyphicon-remove"></i> Remove</a>
                    <span class="glyphicon glyphicon-resize-vertical"></span>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table><?php }} ?>