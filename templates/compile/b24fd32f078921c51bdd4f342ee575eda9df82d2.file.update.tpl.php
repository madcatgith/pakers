<?php /* Smarty version Smarty-3.1.8, created on 2016-07-11 14:18:07
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/form/form/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11087492655783aa9fd70e34-81706856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b24fd32f078921c51bdd4f342ee575eda9df82d2' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/form/form/update.tpl',
      1 => 1464684659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11087492655783aa9fd70e34-81706856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'error' => 0,
    'success' => 0,
    'langID' => 0,
    'values' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5783aa9feaa641_86700371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783aa9feaa641_86700371')) {function content_5783aa9feaa641_86700371($_smarty_tpl) {?><div class="col-sm-9">
    <div class="well well-small"><strong>Редактирование формы (ID: <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
)</strong> <a class="btn btn-success btn-back" href="<?php echo @URL;?>
">Вернуться к списку</a></div>
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?><div class="alert alert-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['success']->value)){?><div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div><?php }?>
    <form action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="post" class="form-horizontal form-offset-0" role="form">
        <input type="hidden" name="data[0][id]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
" />
        <div class="form-group">
            <div class="col-sm-10">
                <div class="checkbox">
                    <label for="isSend">
                        <input type="checkbox" id="isSend" value="1" name="data[0][isSend]"<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['isSend']){?> checked="checked"<?php }?>> Отправлять уведомление на почту?
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
                <div class="checkbox">
                    <label for="hasCaptcha">
                        <input type="checkbox" id="hasCaptcha" value="1" name="data[0][hasCaptcha]"<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['hasCaptcha']){?> checked="checked"<?php }?>> Добавить защиту от роботов (Captcha)
                    </label>
                </div>
            </div>
        </div>
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
                        <label for="title<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" class="col-sm-2 control-label">Название формы</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" name="data[<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
][title]" placeholder="Название формы" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['langID']->value]['title'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" class="col-sm-2 control-label">Сообщение после отправки формы</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="message<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" name="data[<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
][message]" rows="3" placeholder="Сообщение после отправки формы"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['langID']->value]['message'];?>
</textarea>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div><?php }} ?>