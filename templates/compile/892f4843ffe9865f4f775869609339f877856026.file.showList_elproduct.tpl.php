<?php /* Smarty version Smarty-3.1.8, created on 2016-07-11 11:30:17
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpIBlock/elproduct/showList_elproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99957943577d1d2db1a1e4-34302914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '892f4843ffe9865f4f775869609339f877856026' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpIBlock/elproduct/showList_elproduct.tpl',
      1 => 1468236611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99957943577d1d2db1a1e4-34302914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577d1d2dbafc90_04629801',
  'variables' => 
  array (
    'data' => 0,
    'item' => 0,
    'item2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577d1d2dbafc90_04629801')) {function content_577d1d2dbafc90_04629801($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['data']->value)>0){?>   
<table class="hide-on-small fullwidth">
                    <thead>
                        <tr>
                            <th>Мощность (KW)</th>
                            <th>Типоразмер</th>
                            <th>Полюса</th>
                            <th>Тип крепления двигателя</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <tr>  
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->get('min_pow');?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->get('type_min');?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['item']->value->get('polus');?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->get('engine_type_t');?>
</td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                        
        <table class="hide-on-small fullwidth">
                    <thead>
                        <tr>
                            <th>Тип двигателя</th>
                            <th>Количество фаз</th>
                            <th>Исполнение</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
$_smarty_tpl->tpl_vars['item2']->_loop = true;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['item2']->value->get('engine_type');?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['item2']->value->get('phase_count');?>
</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['item2']->value->get('execution');?>
</td>
                        </tr>
                        <?php } ?>
                    </tbody>
         </table>
<?php }?>                    <?php }} ?>