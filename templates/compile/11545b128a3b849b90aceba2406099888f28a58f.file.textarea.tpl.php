<?php /* Smarty version Smarty-3.1.8, created on 2016-07-11 15:23:39
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpForms/elements/textarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1059410114577cfcfb183216-97394189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11545b128a3b849b90aceba2406099888f28a58f' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpForms/elements/textarea.tpl',
      1 => 1468246667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1059410114577cfcfb183216-97394189',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cfcfb1a3434_53890578',
  'variables' => 
  array (
    'formID' => 0,
    'element' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cfcfb1a3434_53890578')) {function content_577cfcfb1a3434_53890578($_smarty_tpl) {?><textarea id="field<?php echo $_smarty_tpl->tpl_vars['formID']->value;?>
<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
" name="data[<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
]" placeholder="<?php echo $_smarty_tpl->tpl_vars['element']->value['placeholder'];?>
"><?php echo $_smarty_tpl->tpl_vars['element']->value['value'];?>
</textarea><?php }} ?>