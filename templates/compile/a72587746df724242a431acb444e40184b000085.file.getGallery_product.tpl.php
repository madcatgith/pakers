<?php /* Smarty version Smarty-3.1.8, created on 2016-07-15 08:49:58
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpGallery/getGallery_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4097600445784afc13de4e6-83036462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a72587746df724242a431acb444e40184b000085' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpGallery/getGallery_product.tpl',
      1 => 1468572593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4097600445784afc13de4e6-83036462',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5784afc1408c48_94906615',
  'variables' => 
  array (
    'images' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784afc1408c48_94906615')) {function content_5784afc1408c48_94906615($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['images']->value)>1){?>
<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
    <div>
        <a href="#">
            <img width="" src="/image.php?<?php echo Image::mEncrypt(('width=80&height=80&src=').($_smarty_tpl->tpl_vars['image']->value['src']));?>
" data-big-image="<?php echo $_smarty_tpl->tpl_vars['image']->value['src'];?>
" alt="product"/>
        </a>
    </div>
<?php } ?>
<?php }?>
<?php }} ?>