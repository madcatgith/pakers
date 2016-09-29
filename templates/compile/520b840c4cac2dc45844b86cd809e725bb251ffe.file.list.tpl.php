<?php /* Smarty version Smarty-3.1.8, created on 2016-07-07 10:23:15
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/orders/view/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1184418210577e2d935f3831-69787779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '520b840c4cac2dc45844b86cd809e725bb251ffe' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/orders/view/list.tpl',
      1 => 1464684556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1184418210577e2d935f3831-69787779',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paymentMethods' => 0,
    'orders' => 0,
    'deliveryMethods' => 0,
    'deliveryStatus' => 0,
    'order' => 0,
    'key' => 0,
    'status' => 0,
    'item' => 0,
    'val' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577e2d93d3c771_10684849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577e2d93d3c771_10684849')) {function content_577e2d93d3c771_10684849($_smarty_tpl) {?><link href="/admin/orders/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/admin/orders/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="/admin/orders/bootstrap/css/fuelux.min.css" rel="stylesheet">
<link href="/admin/orders/bootstrap/css/fuelux-responsive.min.css" rel="stylesheet">
<link href="/admin/orders/bootstrap/css/datepicker.css" rel="stylesheet">
<script src="/admin/orders/bootstrap/js/jquery-1.10.2.min.js"></script>
<script src="/admin/orders/bootstrap/js/bootstrap.min.js"></script>
<script src="/admin/orders/bootstrap/js/bootstrap-datepicker.js"></script>
<script src="/admin/orders/bootstrap/js/orders.js"></script>
<script type="text/javascript">
    var paymentMethods = <?php echo json_encode($_smarty_tpl->tpl_vars['paymentMethods']->value);?>
;
</script>
<div class="fuelux">
    <h3>Заказы</h3>
    <table class="table table-bordered datagrid datagrid-stretch-header table-grid">
        <thead>
            <tr>
                <th colspan="13">
                    <span class="datagrid-header-title"><strong>Применить к выделенным:</strong></span>
                    <button class="btn" type="button" title="Новый заказ" data-range="all" data-value="0" data-action="newOrder">
                        <i class="icon icon-minus"></i> Новый заказ
                    </button>
                    <button class="btn btn-info" type="button" title="Подтвержден" data-range="all" data-value="1" data-action="confirmed">
                        <i class="icon icon-white icon-ok"></i> Подтвержден
                    </button>
                    <button class="btn btn-inverse" type="button btn-info" title="Доставляется / Вывозится" data-range="all" data-value="3" data-action="execution">
                              <i class="icon icon-white icon-shopping-cart"></i> Доставляется / Вывозится
                    </button>
                    <button class="btn btn-success" type="button" title="Выполнен" data-range="all" data-value="4" data-action="delivered">
                        <i class="icon icon-white icon-check"></i> Выполнен
                    </button>
                    <button data-action="remove" data-range="all" title="Удалить" type="button" class="btn btn-danger">
                        <i class="icon icon-white icon-remove"></i> Удалить
                    </button>
                </th>
            </tr>                
            <form action="/admin/orders/" method="get">
                <input type="hidden" value="" name="<?php echo $_smarty_tpl->tpl_vars['orders']->value->getOnPage();?>
" />     
                <tr>
                    <th class="middle"><button id="collapse" type="button" class="btn btn-small"><i class="icon icon-plus">&nbsp;</i></button></th>
                    <th class="middle"><input data-checkgroup="all" type="checkbox" /></th>
                    <?php echo getTH('id','#','width="35"');?>

                    <?php echo getTH('name','ФИО');?>

                    <?php echo getTH('phone','Телефон');?>

                    
                    <?php echo getTH('city','Город');?>

                    
                    <?php echo getTH('deliveryType','Тип доставки');?>

                    <?php echo getTH('deliveryStatus','Статус заказа');?>

                    <?php echo getTH('orderCreated','Дата заказа');?>

                    
                    <?php echo getTH('total','Сумма');?>

                    <th>Действия</th>
                </tr>
                <tr>
                    <td class="filters" width="36">&nbsp;</td>
                    <td class="filters" width="13">&nbsp;</td>
                    <td class="filters" width="70"><?php echo getFilters('id','text','input-mini');?>
</td>
                    <td class="filters"><?php echo getFilters('name','text','input-medium');?>
</td>
                    <td class="filters"><?php echo getFilters('phone','text','input-medium');?>
</td>
                    
                    <td class="filters"><?php echo getFilters('city','text','input-medium');?>
</td>
                    
                    <td class="filters" width="150" style="text-align: center;"><?php echo getFilters('deliveryMethod','select',$_smarty_tpl->tpl_vars['deliveryMethods']->value);?>
</td>
                    <td class="filters" width="150" style="text-align: center;"><?php echo getFilters('deliveryStatus','select',$_smarty_tpl->tpl_vars['deliveryStatus']->value);?>
</td>
                    <td class="filters" width="117"><?php echo getFilters('orderCreated','date');?>
</td>
                    
                    <td class="filters" width="120"><?php echo getFilters('total','integer');?>
</td>
                    <td class="filters" width="88" style="text-align: center; vertical-align: middle;">
                        <button type="submit" class="btn btn-primary">
                            <i class="icon icon-white icon-ok"></i>
                        </button>
                    </td>
                </tr>
            </form>
        </thead>
        <tbody>
            <form action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="get">
                <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value->getRows(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['index']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value){
$_smarty_tpl->tpl_vars['order']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['index']['iteration']++;
?>
                    <tr class="infoBorder nr statusBG<?php echo $_smarty_tpl->tpl_vars['order']->value['deliveryStatus'];?>
">
                        <td>
                            <button type="button" data-link="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" class="btn btn-small"><i class="icon icon-plus">&nbsp;</i></button>
                        </td>
                        <td>
                            <input type="checkbox" name="checkgroup[order][<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
]" data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" />
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['phone'];?>
</td>
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['city'];?>
</td>
                        
                        <td><?php if ($_smarty_tpl->tpl_vars['order']->value['deliveryType']){?><?php echo $_smarty_tpl->tpl_vars['deliveryMethods']->value[$_smarty_tpl->tpl_vars['order']->value['deliveryType']];?>
<?php }else{ ?>-<?php }?></td>
                        <td class="filters2">
                            <select name="deliveryStatus" data-id="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" class="input-medium">
                                <?php  $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['deliveryStatus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status']->key => $_smarty_tpl->tpl_vars['status']->value){
$_smarty_tpl->tpl_vars['status']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['status']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['order']->value['deliveryStatus']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</option>
                                <?php } ?>
                            </select>
                        </td>                
                        <td><?php echo date('Y.m.d H:i',strtotime($_smarty_tpl->tpl_vars['order']->value['date']));?>
</td>
                        
                        <td><?php echo $_smarty_tpl->tpl_vars['order']->value['amount'];?>
 UAH</td>
                        <td class="filters3" style="text-align: center;">
                            
                            <button data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" data-action="remove" data-range="one" title="Удалить" type="button" class="btn btn-danger">
                                <i class="icon icon-white icon-remove"></i>
                            </button>
                        </td>
                    </tr>
                    <tr style="display: none;" data-link="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" class="hiddenBoder statusBG<?php echo $_smarty_tpl->tpl_vars['order']->value['deliveryStatus'];?>
" >
                        <td colspan="3" style="padding: 2px 0 0; text-align: left; vertical-align: middle;">
                            &nbsp;
                        </td>
                        <td colspan="12" style="padding: 0;">
                            <table style="margin: 0; border: 0 none; width: 100%;">
                                <thead>
                                    <tr class="statusBG<?php echo $_smarty_tpl->tpl_vars['order']->value['deliveryStatus'];?>
">
                                        <td style="border: 0 none;" width="12">
                                            <input data-checkgroup="inner" type="checkbox" />
                                        </td>
                                        <th width="35">#</th>
                                        <th>Название</th>
                                        <th>Цена</th>
                                        <th width="56">Ко-во</th>
                                        <th>Общая</th>
                                        <th width="325">Комментарий</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['itemIndex']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['itemIndex']['iteration']++;
?>
                                        <tr class="nr">
                                            <td style="border-left: 0 none; text-align: center;" width="13">
                                                <input name="checkgroup[cart][<?php echo $_smarty_tpl->tpl_vars['item']->value['info']->get('id');?>
]" type="checkbox" data-value="<?php echo $_smarty_tpl->tpl_vars['item']->value['info']->get('id');?>
" />
                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['info']->get('id');?>
</td>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['item']->value['info']->getImage()){?><img src="<?php echo filesSmallGenerate(Image::mEncrypt(('height=90&maxWidth=90&src=').($_smarty_tpl->tpl_vars['item']->value['info']->getImage())));?>
" <?php echo htmlSizes(Image::mEncrypt(('height=90&maxWidth=90&src=').($_smarty_tpl->tpl_vars['item']->value['info']->getImage())));?>
 alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['info']->get('title'), ENT_QUOTES, 'utf-8', true);?>
" /><?php }?>
                                                <?php echo $_smarty_tpl->tpl_vars['item']->value['info']->get('title');?>

                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['info']->getPrice();?>
<?php if ($_smarty_tpl->tpl_vars['item']->value['info']->get('price_for')){?><br />/ <?php echo $_smarty_tpl->tpl_vars['item']->value['info']->get('price_for');?>
<?php }?></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
</td>
                                            <td><?php if ($_smarty_tpl->tpl_vars['item']->value['info']->get('price_for_digit')){?><?php echo $_smarty_tpl->tpl_vars['item']->value['amount']/$_smarty_tpl->tpl_vars['item']->value['info']->get('price_for_digit')*$_smarty_tpl->tpl_vars['item']->value['info']->getPrice();?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['amount']*$_smarty_tpl->tpl_vars['item']->value['info']->getPrice();?>
<?php }?></td>
                                            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['itemIndex']['iteration']==1){?>
                                                <td class="bg<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['index']['iteration']%2;?>
" rowspan="<?php echo count($_smarty_tpl->tpl_vars['order']->value['items']);?>
"><?php if ($_smarty_tpl->tpl_vars['order']->value['comment']){?><?php echo nl2br($_smarty_tpl->tpl_vars['order']->value['comment']);?>
<?php }else{ ?>&nbsp;<?php }?></td>
                                            <?php }?>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                <?php } ?>
            </form>
        </tbody>   
        <tfoot class="table table-bordered datagrid datagrid-stretch-footer">
            <tr class="infoBorder">
                <th colspan="15">
                    <form action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="get">                      
                        <div style="visibility: visible;" class="datagrid-footer-left">
                            <div class="grid-controls">
                                <span>
                                    <span class="grid-start"><?php echo $_smarty_tpl->tpl_vars['orders']->value->getOffset()+1;?>
</span> -
                                    <span class="grid-end">
                                        <?php if ($_smarty_tpl->tpl_vars['orders']->value->getOffset()+$_smarty_tpl->tpl_vars['orders']->value->getOnPage()<$_smarty_tpl->tpl_vars['orders']->value->getNumRows()){?>
                                            <?php echo $_smarty_tpl->tpl_vars['orders']->value->getOffset()+$_smarty_tpl->tpl_vars['orders']->value->getOnPage();?>

                                        <?php }else{ ?>
                                            <?php echo $_smarty_tpl->tpl_vars['orders']->value->getNumRows();?>

                                        <?php }?>
                                    </span> из
                                    <span class="grid-count"><?php echo $_smarty_tpl->tpl_vars['orders']->value->getNumRows();?>
 <?php echo declension($_smarty_tpl->tpl_vars['orders']->value->getNumRows(),array('запись','записи','записей'));?>
</span>
                                </span>
                                <div data-resize="auto" class="select grid-pagesize">
                                    <select name="onPage" id="onPage">
                                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = array(10,20,30,50,75,100); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                                            <option<?php if ($_smarty_tpl->tpl_vars['orders']->value->getOnPage()==$_smarty_tpl->tpl_vars['val']->value){?> selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <span>Записей на страницу</span>
                            </div>
                        </div>
                        <div style="visibility: visible;" class="datagrid-footer-right">
                            <div class="grid-pager">
                                <?php echo pagination($_smarty_tpl->tpl_vars['page']->value+1,$_smarty_tpl->tpl_vars['orders']->value->getNumRows(),$_smarty_tpl->tpl_vars['orders']->value->getOnPage());?>

                            </div>
                        </div>                                      
                    </form>
                </th>
            </tr>
        </tfoot>
    </table>
</div>                    <?php }} ?>