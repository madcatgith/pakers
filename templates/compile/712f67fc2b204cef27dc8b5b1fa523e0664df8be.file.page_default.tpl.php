<?php /* Smarty version Smarty-3.1.8, created on 2016-07-07 13:48:26
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1656455930577e5daa6e7477-93020807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '712f67fc2b204cef27dc8b5b1fa523e0664df8be' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_default.tpl',
      1 => 1465301422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1656455930577e5daa6e7477-93020807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langID' => 0,
    'menuID' => 0,
    'contentID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577e5daa751f41_16310598',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577e5daa751f41_16310598')) {function content_577e5daa751f41_16310598($_smarty_tpl) {?><div class="project-block text-page" style="color: grey; margin: 50px; padding: 50px;">
	<div class="container">
		<?php echo Content::getBody($_smarty_tpl->tpl_vars['langID']->value,$_smarty_tpl->tpl_vars['menuID']->value,$_smarty_tpl->tpl_vars['contentID']->value);?>

	</div>
</div><?php }} ?>