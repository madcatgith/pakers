<?php /* Smarty version Smarty-3.1.8, created on 2016-07-13 14:15:03
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_interesting.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90233156657864cb3070a91-03905350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fbe2fcc1980cede8694137a2870fae47e2e6b1b' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_interesting.tpl',
      1 => 1468419299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90233156657864cb3070a91-03905350',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57864cb30daef1_78788428',
  'variables' => 
  array (
    'langID' => 0,
    'menuID' => 0,
    'contentID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57864cb30daef1_78788428')) {function content_57864cb30daef1_78788428($_smarty_tpl) {?><main class="l-main l-main--catalog">
    <?php echo Content::getBody($_smarty_tpl->tpl_vars['langID']->value,$_smarty_tpl->tpl_vars['menuID']->value,$_smarty_tpl->tpl_vars['contentID']->value);?>

</main>
<!-- section content-->
<section class="section section-faq m-grey">
    <div class="container">
        <h3 class="section-title">Интересно знать</h3>
        <?php echo Menu::getTreeByTemplate($_smarty_tpl->tpl_vars['langID']->value,34,'info');?>

    </div>
</section>

<?php }} ?>