<?php /* Smarty version Smarty-3.1.8, created on 2016-08-17 10:16:11
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpContent/template_content_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14310549755784a7905f17e8-17425042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33d8860fdeda74a2f676de3b88cd042059d110c3' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpContent/template_content_news.tpl',
      1 => 1471428970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14310549755784a7905f17e8-17425042',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5784a79065ec05_75282902',
  'variables' => 
  array (
    'title' => 0,
    'hasImage' => 0,
    'imgurl' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784a79065ec05_75282902')) {function content_5784a79065ec05_75282902($_smarty_tpl) {?><div class="container container-main">
    <div class="content content-grid news">
        <h1 class="section-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'utf-8', true);?>
</h1>
        <?php if ($_smarty_tpl->tpl_vars['hasImage']->value){?>
        
            <img style="width: 70%;" class="news-image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imgurl']->value, ENT_QUOTES, 'utf-8', true);?>
" alt="catalog"/>
        
        <?php }?>
        <p><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</p>
    </div>
</div>    
<?php }} ?>