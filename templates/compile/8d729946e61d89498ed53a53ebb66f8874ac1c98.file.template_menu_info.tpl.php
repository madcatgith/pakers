<?php /* Smarty version Smarty-3.1.8, created on 2016-07-12 11:00:57
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5318638945784cb53d276d3-18875325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d729946e61d89498ed53a53ebb66f8874ac1c98' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpMenu/template_menu_info.tpl',
      1 => 1468321253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5318638945784cb53d276d3-18875325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5784cb53d4f719_20392660',
  'variables' => 
  array (
    'menuArray' => 0,
    'langID' => 0,
    'items' => 0,
    'subs' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784cb53d4f719_20392660')) {function content_5784cb53d4f719_20392660($_smarty_tpl) {?>
    <div class="content b-faq column">
        <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menuArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
                <div class="b-faq__item column-4">
                    
                    <ul class="b-faq__item-list">
                        <?php $_smarty_tpl->tpl_vars['subs'] = new Smarty_variable(Menu::getChilds($_smarty_tpl->tpl_vars['langID']->value,$_smarty_tpl->tpl_vars['items']->value['id']), null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
                        <?php } ?>
                    </ul>
                </div>
        <?php } ?>                
</div>

<?php }} ?>