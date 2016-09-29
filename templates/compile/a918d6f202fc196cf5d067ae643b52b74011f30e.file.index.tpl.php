<?php /* Smarty version Smarty-3.1.8, created on 2016-07-12 15:32:09
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/banner/element/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108418708257850d791fb6c9-29263440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a918d6f202fc196cf5d067ae643b52b74011f30e' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/banner/element/index.tpl',
      1 => 1464684656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108418708257850d791fb6c9-29263440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bannerID' => 0,
    'banner' => 0,
    'data' => 0,
    'd' => 0,
    'type' => 0,
    'types' => 0,
    'filter' => 0,
    'f' => 0,
    'langID' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57850d793ecc47_97523109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57850d793ecc47_97523109')) {function content_57850d793ecc47_97523109($_smarty_tpl) {?><div class="well well-small"><strong>Список елементов баннера (ID: <?php echo $_smarty_tpl->tpl_vars['bannerID']->value;?>
)</strong> 
    <a class="btn btn-success btn-back" href="<?php echo @URL;?>
">Вернуться к списку баннеров</a>
    <a class="btn btn-success btn-back" href="<?php echo @URL;?>
/<?php echo $_smarty_tpl->tpl_vars['bannerID']->value;?>
/element/insert">Добавить элемент</a>
</div>
<table class="table table-hover table-bordered table-elements">
    <thead>
        <tr>
            <th width="10">#</th>       
            <th width="150">Название елемента</th>
            <?php if ($_smarty_tpl->tpl_vars['banner']->value[0]['hasFilter']){?>
                <th width="500">Фильтр</th>
            <?php }?>
            <th width="40">Языки</th>
            <th width="100">Действия</th>
        </tr>
    </thead>
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
            <tr data-id="<?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
">
                <td class="id"><?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
</td>
                <td width="150"><?php echo $_smarty_tpl->tpl_vars['d']->value[1]['title'];?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['banner']->value[0]['hasFilter']){?>
                    <td>
                        <?php if (!empty($_smarty_tpl->tpl_vars['d']->value[0]['filter'])){?>
                            <ul>
                                <?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['d']->value[0]['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value){
$_smarty_tpl->tpl_vars['filter']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['filter']->key;
?>
                                    <li>Тип "<?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['type']->value];?>
": 
                                        <?php if ($_smarty_tpl->tpl_vars['type']->value=='menuType'){?>
                                            <?php echo $_smarty_tpl->tpl_vars['filter']->value;?>

                                        <?php }else{ ?>
                                            <ul>
                                                <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
                                                    <li><i>Меню</i>: <?php echo $_smarty_tpl->tpl_vars['f']->value['title'];?>
;<br/> <i>Элементы</i>: <?php echo $_smarty_tpl->tpl_vars['f']->value['values'];?>
</li>
                                                <?php } ?>                                                
                                            </ul>
                                        <?php }?>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php }?>
                    </td>
                <?php }?>
                <td class="langs">
                    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['langID'] = new Smarty_Variable;
 $_from = Lang::getLanguages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value){
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['langID']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
                        <?php if (isset($_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['langID']->value])&&$_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['langID']->value]['active']){?>
                            <a href="<?php echo @URL;?>
/<?php echo $_smarty_tpl->tpl_vars['bannerID']->value;?>
/element/<?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
#lang<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title_short'];?>
</a>
                        <?php }elseif(isset($_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['langID']->value])){?>
                            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['title_short'];?>
</span>
                        <?php }?>
                    <?php } ?>
                </td>
                <td>
                    <a href="<?php echo @URL;?>
/<?php echo $_smarty_tpl->tpl_vars['bannerID']->value;?>
/element/<?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                    <a class="removeData" data-action="banner/element/delete" data-id="<?php echo $_smarty_tpl->tpl_vars['d']->value[0]['id'];?>
" href="javascript:void(0);"><i class="glyphicon glyphicon-remove"></i> Remove</a>
                    <span class="glyphicon glyphicon-resize-vertical"></span>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table><?php }} ?>