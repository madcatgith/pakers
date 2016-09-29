<?php /* Smarty version Smarty-3.1.8, created on 2016-07-11 11:09:48
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpIBlock/productattr/showList_productattr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104293856577d037aea1791-20145065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fceebe33c71961c98bc33adb2fdaef5f115d702b' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpIBlock/productattr/showList_productattr.tpl',
      1 => 1468235379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104293856577d037aea1791-20145065',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577d037b0522d5_72736534',
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577d037b0522d5_72736534')) {function content_577d037b0522d5_72736534($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['data']->value)>0){?>       
<table class="hide-on-small fullwidth">
                    <thead>
                        <tr>
                            <th>Типоразмер</th>
                            <th>Крутящий момент (NM)</th>
                            <th>Мощность (KW)</th>
                            <th>Передаточное отношение</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <tr>  
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->get('type');?>
</td>
                        <td>Min <?php echo $_smarty_tpl->tpl_vars['item']->value->get('minTonque');?>
 — Max <?php echo $_smarty_tpl->tpl_vars['item']->value->get('maxTonque');?>
</td>
                        <td>Min <?php echo $_smarty_tpl->tpl_vars['item']->value->get('minCapacity');?>
 — Max <?php echo $_smarty_tpl->tpl_vars['item']->value->get('maxCapacity');?>
</td>
                        <td>Min <?php echo $_smarty_tpl->tpl_vars['item']->value->get('minGearRatio');?>
 — Max <?php echo $_smarty_tpl->tpl_vars['item']->value->get('maxGearRatio');?>
</td>
                        <tr>
                        <?php } ?>
                    </tbody>
        </table>
<?php }?>                    <?php }} ?>