<?php /* Smarty version Smarty-3.1.8, created on 2016-07-13 09:45:44
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/banner/banner/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117194432057860dc86e9cf6-57021178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '493c8100e82c65eacd2a5e4861f0c4475869a3c6' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/banner/banner/update.tpl',
      1 => 1464684655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117194432057860dc86e9cf6-57021178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'error' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57860dc8b84480_35003025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57860dc8b84480_35003025')) {function content_57860dc8b84480_35003025($_smarty_tpl) {?><div class="col-sm-9">
    <div class="well well-small"><strong>Редактирование баннерного места (ID: <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
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
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <div class="checkbox">
                    <label for="active">
                        <input type="checkbox" id="active" value="1" name="data[0][active]"<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['active']){?> checked="checked"<?php }?>> Активность
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <div class="checkbox">
                    <label for="hasFilter">
                        <input type="checkbox" id="hasFilter" value="1" name="data[0][hasFilter]"<?php if ($_smarty_tpl->tpl_vars['data']->value[0]['hasFilter']){?> checked="checked"<?php }?>> Использовать фильтр показа?
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Название</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="data[0][title]" placeholder="Название" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['title'];?>
">
            </div>
        </div>
        <div class="form-group">
            <label for="text" class="col-sm-2 control-label">Описание</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="text" name="data[0][text]" rows="3" placeholder="Описание"><?php echo $_smarty_tpl->tpl_vars['data']->value[0]['text'];?>
</textarea>
            </div>
        </div>  
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div><?php }} ?>