<?php /* Smarty version Smarty-3.1.8, created on 2016-07-07 17:17:13
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/crumbs_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:982758778577cf62b3cbaf4-09199923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11666bb74e977a383ac82ef557e7542e5b919b33' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/crumbs_1.tpl',
      1 => 1467907173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '982758778577cf62b3cbaf4-09199923',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf62b3fce27_79885589',
  'variables' => 
  array (
    'crumbs' => 0,
    'crumb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf62b3fce27_79885589')) {function content_577cf62b3fce27_79885589($_smarty_tpl) {?><section class="section-breadcrumbs hide-on-small">
    <div class="container">
        <div class="b-breadcrumbs">
            <ul class="b-breadcrumbs__list">
				<?php if (count($_smarty_tpl->tpl_vars['crumbs']->value)>0){?>
					<?php  $_smarty_tpl->tpl_vars['crumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['crumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['crumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['crumb']->key => $_smarty_tpl->tpl_vars['crumb']->value){
$_smarty_tpl->tpl_vars['crumb']->_loop = true;
?>
						<?php if (next($_smarty_tpl->tpl_vars['crumbs']->value)){?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['crumb']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['crumb']->value['title'];?>
</a></li>
						<?php }else{ ?>
							<li><span><?php echo $_smarty_tpl->tpl_vars['crumb']->value['title'];?>
</span></li>
						<?php }?>
					<?php } ?>
				<?php }?>
            </ul>
        </div>
    </div>
</section>

				
<?php }} ?>