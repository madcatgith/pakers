<?php /* Smarty version Smarty-3.1.8, created on 2016-07-11 15:05:53
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpForms/elements/captcha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:585068090577cf76e26a963-99282431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f70c2bc04dd64e2cb60b7b2be510a5a51b2f026' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpForms/elements/captcha.tpl',
      1 => 1468249403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '585068090577cf76e26a963-99282431',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf76e2a1ee0_45306146',
  'variables' => 
  array (
    'formID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf76e2a1ee0_45306146')) {function content_577cf76e2a1ee0_45306146($_smarty_tpl) {?><div class="captcha">
    <img id="captcha<?php echo $_smarty_tpl->tpl_vars['formID']->value;?>
" src="/captcha/captcha.php?name=data[captcha<?php echo $_smarty_tpl->tpl_vars['formID']->value;?>
]&<?php echo time();?>
" /> 
</div>
<div class="input-holder">
	<input type="text" name="data[captcha<?php echo $_smarty_tpl->tpl_vars['formID']->value;?>
]" placeholder="" />
</div><?php }} ?>