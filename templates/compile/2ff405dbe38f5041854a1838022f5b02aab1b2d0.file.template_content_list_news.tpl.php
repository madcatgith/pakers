<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 09:02:07
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpContent/template_content_list_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1978935867577cf7984a8bf3-08303317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ff405dbe38f5041854a1838022f5b02aab1b2d0' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpContent/template_content_list_news.tpl',
      1 => 1471338126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1978935867577cf7984a8bf3-08303317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf79853ceb9_35867272',
  'variables' => 
  array (
    'contents' => 0,
    'content' => 0,
    'counter' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf79853ceb9_35867272')) {function content_577cf79853ceb9_35867272($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["counter"] = new Smarty_variable("100", null, 0);?>
<div class="container container-main">
    <div class="content content-grid">
	<h3 class="section-title">Новости</h3>
	<div class="b-main-news column">
		<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
$_smarty_tpl->tpl_vars['content']->_loop = true;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['content']->value['href'];?>
">
			<div class="b-main-news__item column-3 wow fadeInRight" data-wow-duration="800ms"
					data-wow-delay="<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
ms">
				<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+300, null, 0);?>
				<div class="img-wrap">
					<?php if ($_smarty_tpl->tpl_vars['content']->value['hasImage']){?>
						<img class="responsive" src="/image.php?<?php echo Image::mEncrypt(('width=400&height=200&src=').($_smarty_tpl->tpl_vars['content']->value['imgurl']));?>
" alt="news"/>
					<?php }?>
				</div>
				<h4><?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>
</h4>
				<p class="b-main-news__preview-text">
					<?php echo $_smarty_tpl->tpl_vars['content']->value['announcement'];?>

				</p>
			</div>
                    </a>
		<?php } ?>
	</div>
    </div>
</div><?php }} ?>