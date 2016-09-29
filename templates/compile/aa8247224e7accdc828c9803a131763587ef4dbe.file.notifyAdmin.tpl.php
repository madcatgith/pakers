<?php /* Smarty version Smarty-3.1.8, created on 2016-07-11 14:41:08
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpForms/notifyAdmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:637944505783b0043d5075-63799564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa8247224e7accdc828c9803a131763587ef4dbe' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpForms/notifyAdmin.tpl',
      1 => 1467892526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '637944505783b0043d5075-63799564',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
    'recordInfo' => 0,
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5783b004504852_65902063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783b004504852_65902063')) {function content_5783b004504852_65902063($_smarty_tpl) {?><h3>Заполнена форма - <?php echo $_smarty_tpl->tpl_vars['form']->value['title'];?>
 (ID: <?php echo $_smarty_tpl->tpl_vars['form']->value['id'];?>
)</h3><br />

<b>Дата и время:</b> <?php echo $_smarty_tpl->tpl_vars['recordInfo']->value['date'];?>
 <br />
<b>IP:</b> <?php echo $_smarty_tpl->tpl_vars['recordInfo']->value['ip'];?>
 <br />
<b>Страна:</b> <?php echo $_smarty_tpl->tpl_vars['recordInfo']->value['country'];?>
 <br /><br />

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <b><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
:</b> <?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
 <br />
<?php } ?><?php }} ?>