<?php /* Smarty version Smarty-3.1.8, created on 2016-07-11 15:55:22
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/form/element/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8770719285783c16abc7a37-72368121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12d1d3c91ce9abfcb5b82357005331cbed0d77fd' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/form/element/update.tpl',
      1 => 1464684656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8770719285783c16abc7a37-72368121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formID' => 0,
    'data' => 0,
    'types' => 0,
    'error' => 0,
    'success' => 0,
    'langID' => 0,
    'values' => 0,
    'validation' => 0,
    'key' => 0,
    'validate' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5783c16b01e0b6_25348694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783c16b01e0b6_25348694')) {function content_5783c16b01e0b6_25348694($_smarty_tpl) {?><div class="col-sm-9">
    <div class="well well-small"><strong>Редактирования поля формы (ID: <?php echo $_smarty_tpl->tpl_vars['formID']->value;?>
) - <?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['data']->value[0]['type']];?>
</strong> <a class="btn btn-success btn-back" href="<?php echo @URL;?>
/<?php echo $_smarty_tpl->tpl_vars['formID']->value;?>
/element">Вернуться к списку елементов</a></div>
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?><div class="alert alert-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['success']->value)){?><div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div><?php }?>
    <form action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="post" class="form-horizontal form-offset-0" role="form">
        <input type="hidden" name="data[0][id]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
" />
        <input type="hidden" name="data[0][type]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['type'];?>
" />
        <input type="hidden" name="data[0][formID]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['formID'];?>
" />
        <input type="hidden" name="data[0][sort]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['sort'];?>
" />
        <ul class="nav nav-tabs langs">
            <?php  $_smarty_tpl->tpl_vars['values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['values']->_loop = false;
 $_smarty_tpl->tpl_vars['langID'] = new Smarty_Variable;
 $_from = Lang::getLanguages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['values']->key => $_smarty_tpl->tpl_vars['values']->value){
$_smarty_tpl->tpl_vars['values']->_loop = true;
 $_smarty_tpl->tpl_vars['langID']->value = $_smarty_tpl->tpl_vars['values']->key;
?>
                <li><a data-toggle="tab" href="#lang<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['values']->value['title'];?>
</a></li>
            <?php } ?>
        </ul>
        <div class="tab-content">
            <?php  $_smarty_tpl->tpl_vars['values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['values']->_loop = false;
 $_smarty_tpl->tpl_vars['langID'] = new Smarty_Variable;
 $_from = Lang::getLanguages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['values']->key => $_smarty_tpl->tpl_vars['values']->value){
$_smarty_tpl->tpl_vars['values']->_loop = true;
 $_smarty_tpl->tpl_vars['langID']->value = $_smarty_tpl->tpl_vars['values']->key;
?>
                <div class="tab-pane" id="lang<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
">
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-3">
                            <div class="checkbox">
                                <label for="isActive<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
">
                                    <input type="checkbox" id="isActive<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" value="1" name="data[<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
][isActive]"<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['langID']->value]['isActive']){?> checked="checked"<?php }?>> Активность
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-3">
                            <div class="checkbox">
                                <label for="isRequired<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
">
                                    <input type="checkbox" id="isRequired<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" value="1" name="data[<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
][isRequired]"<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['langID']->value]['isRequired']){?> checked="checked"<?php }?>> Обязательное поле
                                </label>
                            </div>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['type']=='select'){?>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-3">
                                <div class="checkbox">
                                    <label for="isMulty<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
">
                                        <input type="checkbox" id="isMulty<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" value="1" name="data[<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
][isMulty]"<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['langID']->value]['isMulty']){?> checked="checked"<?php }?>> Множественный выбор
                                    </label>
                                </div>
                            </div>
                        </div>					
                    <?php }?>
                    <div class="form-group">
                        <label for="title<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" class="col-sm-3 control-label">Название поля</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" name="data[<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
][title]" placeholder="Название поля" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['langID']->value]['title'];?>
">
                        </div>
                    </div>
                    <?php if (in_array($_smarty_tpl->tpl_vars['data']->value[0]['type'],array('text','textarea'))){?>
                        <div class="form-group">
                            <label for="placeholder<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" class="col-sm-3 control-label">Подсказка в поле</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="placeholder<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" name="data[<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
][placeholder]" placeholder="Подсказка в поле" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['langID']->value]['placeholder'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="value<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" class="col-sm-3 control-label">Значение по умолчанию</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="value<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" name="data[<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
][value]" placeholder="Значение по умолчанию" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['langID']->value]['value'];?>
">
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value[0]['type']=='text'){?>
                            <div class="form-group">
                                <label for="validation<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" class="col-sm-3 control-label">Дополнительная валидация</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="validation<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" name="data[<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
][validation]" placeholder="Дополнительная валидация">
                                        <option value=""></option>
                                        <?php  $_smarty_tpl->tpl_vars['validate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['validate']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['validation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['validate']->key => $_smarty_tpl->tpl_vars['validate']->value){
$_smarty_tpl->tpl_vars['validate']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['validate']->key;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['langID']->value]['validation']==$_smarty_tpl->tpl_vars['key']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['validate']->value;?>
</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        <?php }?>
                    <?php }?>
                    <?php if (in_array($_smarty_tpl->tpl_vars['data']->value[0]['type'],array('select','radio','checkbox'))){?>
                        <div class="form-group">
                            <label for="value<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" class="col-sm-3 control-label">Значения</label>
                            <div class="col-sm-9 multyValues" data-lang="<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
">
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['langID']->value]['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <div>
                                        <input type="text" class="form-control" id="value<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" name="data[<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
][value][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" placeholder="Значение" value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" />
                                        <span class="glyphicon glyphicon-resize-vertical"></span>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-sm-9 col-sm-offset-3">
                                <br /><a href="javascript:void(0);" class="btn btn-success addRow" data-lang="<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
">Добавить поле</a>
                                <a href="javascript:void(0);" class="btn btn-danger delRow" data-lang="<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
">Удалить последнее поле</a>
                            </div>
                        </div>					
                    <?php }?>
                </div>
            <?php } ?>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div><?php }} ?>