<?php /* Smarty version Smarty-3.1.8, created on 2016-07-12 08:14:38
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:259578382577cf798429c07-74774811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ebd731835e2da05f38061904da47dc1ecb30ea4' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_news.tpl',
      1 => 1468311276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259578382577cf798429c07-74774811',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf798497267_64170676',
  'variables' => 
  array (
    'langID' => 0,
    'menuID' => 0,
    'contentID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf798497267_64170676')) {function content_577cf798497267_64170676($_smarty_tpl) {?>
<?php echo Content::getBody($_smarty_tpl->tpl_vars['langID']->value,$_smarty_tpl->tpl_vars['menuID']->value,$_smarty_tpl->tpl_vars['contentID']->value);?>
<?php }} ?>