<?php /* Smarty version Smarty-3.1.8, created on 2016-07-11 13:59:53
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_use.tpl" */ ?>
<?php /*%%SmartyHeaderCode:391571790577cf8094e0830-12912141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee87970b5f4410e2611da4299b8bf9f3637560b5' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_use.tpl',
      1 => 1468245336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '391571790577cf8094e0830-12912141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf809546143_12867534',
  'variables' => 
  array (
    'langID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf809546143_12867534')) {function content_577cf809546143_12867534($_smarty_tpl) {?>
<?php echo Menu::getTreeByTemplate($_smarty_tpl->tpl_vars['langID']->value,6,'8');?>
<?php }} ?>