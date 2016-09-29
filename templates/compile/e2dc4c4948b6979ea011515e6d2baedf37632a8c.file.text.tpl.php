<?php /* Smarty version Smarty-3.1.8, created on 2016-07-11 14:17:52
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpForms/elements/text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1722081498577cf76e211726-13663712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2dc4c4948b6979ea011515e6d2baedf37632a8c' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpForms/elements/text.tpl',
      1 => 1468246667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1722081498577cf76e211726-13663712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf76e261c62_99043478',
  'variables' => 
  array (
    'element' => 0,
    'formID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf76e261c62_99043478')) {function content_577cf76e261c62_99043478($_smarty_tpl) {?><input
    <?php if ($_smarty_tpl->tpl_vars['element']->value['validation']=='email'){?>
        type="email"
    <?php }else{ ?>
        type="text"
    <?php }?>    
    id="field<?php echo $_smarty_tpl->tpl_vars['formID']->value;?>
<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
" 
    name="data[<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
]" 
    value="<?php echo $_smarty_tpl->tpl_vars['element']->value['value'];?>
" 
    placeholder="<?php echo $_smarty_tpl->tpl_vars['element']->value['placeholder'];?>
"
    <?php if ($_smarty_tpl->tpl_vars['element']->value['validation']){?> 
        data-validation="<?php echo $_smarty_tpl->tpl_vars['element']->value['validation'];?>
"
    <?php }?> 
    <?php if ($_smarty_tpl->tpl_vars['element']->value['isRequired']){?>
        required="true"
    <?php }?> 
/><?php }} ?>