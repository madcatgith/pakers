<?php /* Smarty version Smarty-3.1.8, created on 2016-07-12 15:55:00
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpContent/template_content_list_service.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4257817715785048fb4b147-82922820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0ae1e062f5ac6d7a0d3f96df1b86b1b095764c8' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpContent/template_content_list_service.tpl',
      1 => 1468338849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4257817715785048fb4b147-82922820',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5785048fbba1f2_77163896',
  'variables' => 
  array (
    'contents' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5785048fbba1f2_77163896')) {function content_5785048fbba1f2_77163896($_smarty_tpl) {?>    <div class="container container-main">
    <div class="content content-grid">
	<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>
		<h1 class="section-title"><?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>
</h1>
                <div class="content-text">
			<?php echo $_smarty_tpl->tpl_vars['content']->value['text'];?>

                </div>        
	<?php } ?>
    </div>
</div><?php }} ?>