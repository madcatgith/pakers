<?php /* Smarty version Smarty-3.1.8, created on 2016-07-06 15:11:19
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/form/form/select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1172569881577d1f976ee1c5-07273576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '595009dd0f5c65b61e2837e9ca402a49e2b8ae0d' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/form/form/select.tpl',
      1 => 1464684659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1172569881577d1f976ee1c5-07273576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577d1f977972f0_85876675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577d1f977972f0_85876675')) {function content_577d1f977972f0_85876675($_smarty_tpl) {?><select name="formID" id="formID" class="form-control">
    <option value="0">Выберите форму</option>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value[0]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value[0]['langed_title'];?>
</option>
    <?php } ?>
</select><?php }} ?>