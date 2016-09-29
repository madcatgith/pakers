<?php /* Smarty version Smarty-3.1.8, created on 2016-07-25 11:44:36
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_8.tpl" */ ?>
<?php /*%%SmartyHeaderCode:309382528577cf8095546b0-44367175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c185fad5bbfa39cd06a3f46f9870cd2e46bd6f6' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_8.tpl',
      1 => 1469446992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309382528577cf8095546b0-44367175',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf8095e48b4_19244820',
  'variables' => 
  array (
    'menuArray' => 0,
    'counter' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf8095e48b4_19244820')) {function content_577cf8095e48b4_19244820($_smarty_tpl) {?>    <div class="container container-main">
        
    <div class="content content-grid">
        <h1 class="section-title">Сферы применения</h1>
<div class="b-catalog column">
	<?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable("100", null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<div class="b-catalog__item column-3 wow fadeInRight" data-wow-duration="800ms"
                data-wow-delay="<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
ms">
			<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+300, null, 0);?>
            <!--<div class="img-wrap">-->
			<div>
                <!--<img class="responsive" src="/image.php?<?php echo Image::mEncrypt(('width=500&height=400&src=').($_smarty_tpl->tpl_vars['item']->value['imgurl']));?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"/>-->
                <img class="responsive spheres" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imgurl'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"/>
            </div>
            <a class="more-link" href=""><span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span></a>
        </div>
	<?php } ?>
</div>
    </div>
</div><?php }} ?>