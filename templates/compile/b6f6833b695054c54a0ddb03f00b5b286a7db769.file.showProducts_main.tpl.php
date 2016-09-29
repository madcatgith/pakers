<?php /* Smarty version Smarty-3.1.8, created on 2016-07-12 14:06:08
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpProductCatalogue/showProducts_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1844985359577cf62b440318-50323281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6f6833b695054c54a0ddb03f00b5b286a7db769' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpProductCatalogue/showProducts_main.tpl',
      1 => 1468332365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1844985359577cf62b440318-50323281',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf62b53ac78_46530401',
  'variables' => 
  array (
    'products' => 0,
    'langID' => 0,
    'productsList' => 0,
    'product' => 0,
    'counter' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf62b53ac78_46530401')) {function content_577cf62b53ac78_46530401($_smarty_tpl) {?>
<div class="content-grid__main">
<?php $_smarty_tpl->tpl_vars['productsList'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['products']->value,3,true), null, 0);?>
                   <h1 class="section-title"><?php echo Menu::get($_smarty_tpl->tpl_vars['langID']->value,Url::get('menuID'),'title');?>
</h1>
                   
                    <div class="b-catalog column m-bottom">
                        <?php echo Menu::getTreeByTemplate($_smarty_tpl->tpl_vars['langID']->value,Url::get('menuID'),'innercat');?>

                         <?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(100, null, 0);?>
                         <?php  $_smarty_tpl->tpl_vars['products'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productsList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['products']->key => $_smarty_tpl->tpl_vars['products']->value){
$_smarty_tpl->tpl_vars['products']->_loop = true;
?>
                         <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                             <a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
">
                        <div class="b-catalog__item column-3 wow fadeInRight" data-wow-duration="800ms" data-wow-delay="<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
ms">
                            <?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+200, null, 0);?>
                            <div class="img-wrap">
                                <img class="responsive" src="<?php echo $_smarty_tpl->tpl_vars['product']->value->getImage();?>
" alt="catalog"/>
                            </div>
                            <a class="more-link" href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getUrl();?>
"><span><?php echo $_smarty_tpl->tpl_vars['product']->value->getTitle();?>
</span></a>
                        </div>
                             </a>
                        <?php } ?>
                    <?php } ?>    
                </div>
</div>
                
 <?php }} ?>