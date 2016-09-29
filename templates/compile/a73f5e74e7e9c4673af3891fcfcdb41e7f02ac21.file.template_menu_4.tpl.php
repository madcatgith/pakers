<?php /* Smarty version Smarty-3.1.8, created on 2016-07-06 12:16:56
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1525941301577cf6b81ceb62-07969755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a73f5e74e7e9c4673af3891fcfcdb41e7f02ac21' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_4.tpl',
      1 => 1465210964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1525941301577cf6b81ceb62-07969755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menuArray' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf6b82a84e3_62553220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf6b82a84e3_62553220')) {function content_577cf6b82a84e3_62553220($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<div class="b-faq__item column-4">
    <ul class="b-faq__item-list">
		<li><a class="is-active" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
		<?php echo Menu::getTreeByTemplate(Lang::getID(),$_smarty_tpl->tpl_vars['item']->value['id'],'6');?>

    </ul>
</div>
<?php } ?><?php }} ?>