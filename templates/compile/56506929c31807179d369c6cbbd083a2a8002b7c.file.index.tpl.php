<?php /* Smarty version Smarty-3.1.8, created on 2016-07-06 12:19:30
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/banner/banner/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1721549684577cf7521d1180-39417377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56506929c31807179d369c6cbbd083a2a8002b7c' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/banner/banner/index.tpl',
      1 => 1464684655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1721549684577cf7521d1180-39417377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf752289c66_20933100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf752289c66_20933100')) {function content_577cf752289c66_20933100($_smarty_tpl) {?><div class="well well-small"><strong>Список баннерных мест</strong> <a class="btn btn-success btn-back" href="<?php echo @URL;?>
/insert">Добавить баннерное место</a></div>
<table class="table table-hover table-bordered table-custom">
    <thead>
        <tr>
            <th width="10">#</th>            
            <th>Название</th>
            <th>Описание</th>
            <th width="200">Действия</th>
        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
            <tr>
                <td class="id"><?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['d']->value[0]['title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['d']->value[0]['text'];?>
</td>
                <td>
                    <a href="<?php echo @URL;?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
/element"><i class="glyphicon glyphicon-list-alt"></i> Elements</a>
                    <a href="<?php echo @URL;?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                    <a class="removeData" data-action="banner/delete" data-id="<?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
" href="javascript:void(0);"><i class="glyphicon glyphicon-remove"></i> Remove</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table><?php }} ?>