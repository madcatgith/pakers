<?php /* Smarty version Smarty-3.1.8, created on 2016-07-11 14:42:27
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/form/view/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9805761535783b05345fb59-09828116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '014263579cc3331234ada62dc687796f14ace10f' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/form/view/index.tpl',
      1 => 1464684663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9805761535783b05345fb59-09828116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formID' => 0,
    'records' => 0,
    'record' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5783b053516be3_56879761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783b053516be3_56879761')) {function content_5783b053516be3_56879761($_smarty_tpl) {?><div class="well well-small"><strong>Просмотр записей формы (ID: <?php echo $_smarty_tpl->tpl_vars['formID']->value;?>
)</strong> <a class="btn btn-success btn-back" href="<?php echo @URL;?>
">Вернуться к списку</a></div>
<?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['record']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value){
$_smarty_tpl->tpl_vars['record']->_loop = true;
?>
    <div class="panel panel-default panel-view">
        <div class="panel-heading">Запись #<?php echo $_smarty_tpl->tpl_vars['record']->value['id'];?>
 (<?php echo $_smarty_tpl->tpl_vars['record']->value['date'];?>
) | <?php echo Lang::get($_smarty_tpl->tpl_vars['record']->value['langID'],'title_short');?>
 | IP: <?php echo $_smarty_tpl->tpl_vars['record']->value['ip'];?>
 | Country: <?php echo $_smarty_tpl->tpl_vars['record']->value['country'];?>
 <a class="glyphicon glyphicon-remove removeData" data-action="form/view/delete" data-id="<?php echo $_smarty_tpl->tpl_vars['record']->value['id'];?>
" href="javascript:void(0);"></a></div>
        <div class="panel-body">
            <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['record']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                <div><strong><?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
</div>
            <?php } ?>
        </div>
    </div>
<?php } ?><?php }} ?>