<?php /* Smarty version Smarty-3.1.8, created on 2016-07-13 09:45:52
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/banner/element/update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21790312457860dd016ac57-81009364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5a4574a6faf443916eeab0cbe74a493fbe9fc88' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/module/view/banner/element/update.tpl',
      1 => 1464684656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21790312457860dd016ac57-81009364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'error' => 0,
    'success' => 0,
    'banner' => 0,
    'types' => 0,
    'kType' => 0,
    'vType' => 0,
    'cf' => 0,
    'type' => 0,
    'menu' => 0,
    'mData' => 0,
    'menuIDs' => 0,
    'content' => 0,
    'menuID' => 0,
    'cData' => 0,
    'cValue' => 0,
    'menuData' => 0,
    'iblock' => 0,
    'ibData' => 0,
    'langID' => 0,
    'values' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_57860dd059e816_58889675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57860dd059e816_58889675')) {function content_57860dd059e816_58889675($_smarty_tpl) {?><div class="col-sm-9">
    <div class="well well-small"><strong>Добавление элемента баннера (ID: <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['bannerID'];?>
)</strong> <a class="btn btn-success btn-back" href="<?php echo @URL;?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['bannerID'];?>
/element">Вернуться к списку елементов</a></div>
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?><div class="alert alert-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['success']->value)){?><div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div><?php }?>
    <form action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="post" class="form-horizontal form-offset-0" role="form">
        <input type="hidden" name="data[0][id]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['id'];?>
" />
        <input type="hidden" name="data[0][bannerID]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['bannerID'];?>
" />
        <input type="hidden" name="data[0][sort]" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['sort'];?>
" />
        <div class="form-group">
            <div class="col-md-12">
                <label class="col-sm-3 control-label" for="image">Картинка</label>
                <div class="col-sm-9 input-group">
                    <input class="form-control" id="image" name="data[0][image]" placeholder="Картинка" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[0]['image'];?>
">
                    <div class="input-group-btn">
                        <a style="margin-left: 0;" href="javascript:void(0);" onclick="newwin2('/admin/files.php?show=jqGrid&amp;obj=image', 720, 520); return false;" class="btn btn-default">Обзор</a>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['banner']->value[0]['hasFilter']){?>
            <div class="form-group">
                <div style="display:none;" id="filterTpl">
                    <div class="input-group col-sm-12 filterHolder">
                        <div class="type col-sm-3">
                            <select name="data[0][filter][X][type]" class="form-control type-select" placeholder="Тип фильтра">
                                <option value="">Тип фильтра</option>
                                    <?php  $_smarty_tpl->tpl_vars['vType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vType']->_loop = false;
 $_smarty_tpl->tpl_vars['kType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vType']->key => $_smarty_tpl->tpl_vars['vType']->value){
$_smarty_tpl->tpl_vars['vType']->_loop = true;
 $_smarty_tpl->tpl_vars['kType']->value = $_smarty_tpl->tpl_vars['vType']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['kType']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['vType']->value;?>
</option>
                                    <?php } ?>
                            </select> 
                        </div>
                        <div class="menuType col-sm-3">
                            <select name="data[0][filter][X][menu][]" class="form-control" multiple="multiple"></select>
                        </div>
                        <div class="contentType col-sm-3">
                            <select name="data[0][filter][X][content][]" class="form-control col-sm-3" multiple="multiple"></select>
                        </div>
                        <div class="productType col-sm-3">
                            <select name="data[0][filter][X][product][]" class="form-control col-sm-3" multiple="multiple"></select>
                        </div>
                        <div class="iblockType col-sm-3">
                            <select name="data[0][filter][X][iblock][]" class="form-control col-sm-3" multiple="multiple"></select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label class="col-sm-3 control-label" for="filter">Фильтр показа</label>
                    <div class="col-sm-9 else-holder" id="filter">
                        <?php $_smarty_tpl->tpl_vars['cf'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['data']->value[0]['filter']), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['cf']->value){?>
                            <?php  $_smarty_tpl->tpl_vars['menuIDs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuIDs']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value[0]['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['menuIDs']->key => $_smarty_tpl->tpl_vars['menuIDs']->value){
$_smarty_tpl->tpl_vars['menuIDs']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['menuIDs']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['index']++;
?>
                                <div class="input-group col-sm-12 filterHolder updateFilter" data-filter="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['i']['index'];?>
">
                                    <div class="type col-sm-3">
                                        <select name="data[0][filter][<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['i']['index'];?>
][type]" class="form-control type-select" placeholder="Тип фильтра">
                                            <option value="">Тип фильтра</option>
                                            <?php  $_smarty_tpl->tpl_vars['vType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vType']->_loop = false;
 $_smarty_tpl->tpl_vars['kType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vType']->key => $_smarty_tpl->tpl_vars['vType']->value){
$_smarty_tpl->tpl_vars['vType']->_loop = true;
 $_smarty_tpl->tpl_vars['kType']->value = $_smarty_tpl->tpl_vars['vType']->key;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['kType']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['kType']->value==$_smarty_tpl->tpl_vars['type']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['vType']->value;?>
</option>
                                            <?php } ?>
                                        </select> 
                                    </div>
                                    <div class="menuType col-sm-3 active">
                                        <select name="data[0][filter][<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['i']['index'];?>
][menu][]" class="form-control" multiple="multiple">
                                            <?php  $_smarty_tpl->tpl_vars['mData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mData']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value->actionSelect(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mData']->key => $_smarty_tpl->tpl_vars['mData']->value){
$_smarty_tpl->tpl_vars['mData']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['mData']->value['id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['menuIDs']->value[$_smarty_tpl->tpl_vars['mData']->value['id']])){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['mData']->value['title'];?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="contentType col-sm-3<?php if ($_smarty_tpl->tpl_vars['type']->value=='contentType'){?> active<?php }?>">
                                        <select name="data[0][filter][<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['i']['index'];?>
][content][]" class="form-control col-sm-3" multiple="multiple">
                                            <?php if ($_smarty_tpl->tpl_vars['type']->value=='contentType'){?>
                                                <?php $_smarty_tpl->tpl_vars['cData'] = new Smarty_variable($_smarty_tpl->tpl_vars['content']->value->actionSelect(0), null, 0);?>
                                                <?php  $_smarty_tpl->tpl_vars['menuData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuData']->_loop = false;
 $_smarty_tpl->tpl_vars['menuID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menuIDs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuData']->key => $_smarty_tpl->tpl_vars['menuData']->value){
$_smarty_tpl->tpl_vars['menuData']->_loop = true;
 $_smarty_tpl->tpl_vars['menuID']->value = $_smarty_tpl->tpl_vars['menuData']->key;
?>
                                                    <?php  $_smarty_tpl->tpl_vars['cValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cValue']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cData']->value[$_smarty_tpl->tpl_vars['menuID']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cValue']->key => $_smarty_tpl->tpl_vars['cValue']->value){
$_smarty_tpl->tpl_vars['cValue']->_loop = true;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['cValue']->value['id'];?>
"<?php if (in_array($_smarty_tpl->tpl_vars['cValue']->value['id'],$_smarty_tpl->tpl_vars['menuData']->value)){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['cValue']->value['title'];?>
</option>
                                                    <?php } ?>
                                                <?php } ?>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="productType col-sm-3<?php if ($_smarty_tpl->tpl_vars['type']->value=='productType'){?> active<?php }?>">
                                        <select name="data[0][filter][<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['i']['index'];?>
][product][]" class="form-control col-sm-3" multiple="multiple"></select>
                                    </div>
                                    <div class="iblockType col-sm-3<?php if ($_smarty_tpl->tpl_vars['type']->value=='iblockType'){?> active<?php }?>">
                                        <select name="data[0][filter][<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['i']['index'];?>
][iblock][]" class="form-control col-sm-3" multiple="multiple">
                                            <?php if ($_smarty_tpl->tpl_vars['type']->value=='iblockType'){?>
                                                <?php $_smarty_tpl->tpl_vars['ibData'] = new Smarty_variable($_smarty_tpl->tpl_vars['iblock']->value->findInMenu(0), null, 0);?>
                                                <?php  $_smarty_tpl->tpl_vars['menuData'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuData']->_loop = false;
 $_smarty_tpl->tpl_vars['menuID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menuIDs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuData']->key => $_smarty_tpl->tpl_vars['menuData']->value){
$_smarty_tpl->tpl_vars['menuData']->_loop = true;
 $_smarty_tpl->tpl_vars['menuID']->value = $_smarty_tpl->tpl_vars['menuData']->key;
?>
                                                    <?php  $_smarty_tpl->tpl_vars['cValue'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cValue']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ibData']->value[$_smarty_tpl->tpl_vars['menuID']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cValue']->key => $_smarty_tpl->tpl_vars['cValue']->value){
$_smarty_tpl->tpl_vars['cValue']->_loop = true;
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['cValue']->value['id'];?>
"<?php if (in_array($_smarty_tpl->tpl_vars['cValue']->value['id'],$_smarty_tpl->tpl_vars['menuData']->value)){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['cValue']->value['title'];?>
</option>
                                                    <?php } ?>
                                                <?php } ?>
                                            <?php }?>                                        
                                        </select>
                                    </div>
                                </div>                                
                            <?php } ?>
                        <?php }?>
                        <div class="input-group col-sm-12 filterHolder" data-filter="<?php echo $_smarty_tpl->tpl_vars['cf']->value;?>
">
                            <div class="type col-sm-3">
                                <select name="data[0][filter][<?php echo $_smarty_tpl->tpl_vars['cf']->value;?>
][type]" class="form-control type-select" placeholder="Тип фильтра">
                                    <option value="">Тип фильтра</option>
                                    <?php  $_smarty_tpl->tpl_vars['vType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vType']->_loop = false;
 $_smarty_tpl->tpl_vars['kType'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vType']->key => $_smarty_tpl->tpl_vars['vType']->value){
$_smarty_tpl->tpl_vars['vType']->_loop = true;
 $_smarty_tpl->tpl_vars['kType']->value = $_smarty_tpl->tpl_vars['vType']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['kType']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['vType']->value;?>
</option>
                                    <?php } ?>
                                </select> 
                            </div>
                            <div class="menuType col-sm-3">
                                <select name="data[0][filter][<?php echo $_smarty_tpl->tpl_vars['cf']->value;?>
][menu][]" class="form-control" multiple="multiple"></select>
                            </div>
                            <div class="contentType col-sm-3">
                                <select name="data[0][filter][<?php echo $_smarty_tpl->tpl_vars['cf']->value;?>
][content][]" class="form-control col-sm-3" multiple="multiple"></select>
                            </div>
                            <div class="productType col-sm-3">
                                <select name="data[0][filter][<?php echo $_smarty_tpl->tpl_vars['cf']->value;?>
][product][]" class="form-control col-sm-3" multiple="multiple"></select>
                            </div>
                            <div class="iblockType col-sm-3">
                                <select name="data[0][filter][<?php echo $_smarty_tpl->tpl_vars['cf']->value;?>
][iblock][]" class="form-control col-sm-3" multiple="multiple"></select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 else-holder">
                        <button type="button" class="btn btn-default btn-ok" id="filterAdd" disabled="disabled">Добавить фильтр</button>
                    </div>
                </div>
            </div>
        <?php }?>
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
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <div class="checkbox">
                                <label for="active<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
">
                                    <input type="checkbox" id="active<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" value="1" name="data[<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
][active]"<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['langID']->value]['active']){?> checked="checked"<?php }?>> Активность
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="href<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" class="col-sm-3 control-label">Ссылка</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="href<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" name="data[<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
][href]" placeholder="Ссылка" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['langID']->value]['href'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" class="col-sm-3 control-label">Название</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" name="data[<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
][title]" placeholder="Название" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['langID']->value]['title'];?>
">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" class="col-sm-3 control-label">Текст</label>
                        <div class="col-sm-9">
                            <textarea name="data[<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
][text]" id="text<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
" rows="6" class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['langID']->value]['text'];?>
</textarea>
                            <button onclick="window.open('/admin/ckeditor/?name=text<?php echo $_smarty_tpl->tpl_vars['langID']->value;?>
', 'CKEditor', 'resizable=yes,width=1200,height=600,left=30,top=30');" class="btn btn-default col-md-12" type="button">HTML редактор</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>
<script type="text/javascript">
    var data = {
        'menuType': <?php echo $_smarty_tpl->tpl_vars['menu']->value->actionSelect();?>
,
        'contentType': <?php echo $_smarty_tpl->tpl_vars['content']->value->actionSelect();?>
,
        'iblockType': <?php echo $_smarty_tpl->tpl_vars['iblock']->value->findInMenu();?>
, 
        'productType': {
        }
    };
</script><?php }} ?>