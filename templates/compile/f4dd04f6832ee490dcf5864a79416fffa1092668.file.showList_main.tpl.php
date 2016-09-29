<?php /* Smarty version Smarty-3.1.8, created on 2016-07-06 12:14:35
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpIBlock/contacts/showList_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2032576400577cf62b3182d7-83372918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4dd04f6832ee490dcf5864a79416fffa1092668' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpIBlock/contacts/showList_main.tpl',
      1 => 1464767993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2032576400577cf62b3182d7-83372918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
    'tels' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf62b3405b1_03300849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf62b3405b1_03300849')) {function content_577cf62b3405b1_03300849($_smarty_tpl) {?><!-- contacts-block -->
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<?php if (sizeof($_smarty_tpl->tpl_vars['item']->value->get('tels'))>0){?>						
		<li>
			<p>
				<?php  $_smarty_tpl->tpl_vars['tels'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tels']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value->get('tels'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tels']->key => $_smarty_tpl->tpl_vars['tels']->value){
$_smarty_tpl->tpl_vars['tels']->_loop = true;
?>
					<?php echo $_smarty_tpl->tpl_vars['tels']->value;?>

				<?php } ?>
			</p>
		</li>
	<?php }?>
<?php } ?><?php }} ?>