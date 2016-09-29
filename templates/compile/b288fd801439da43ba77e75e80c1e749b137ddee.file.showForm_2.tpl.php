<?php /* Smarty version Smarty-3.1.8, created on 2016-07-11 15:54:47
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpForms/showForm_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1308443483577cf76e2a8f39-39677143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b288fd801439da43ba77e75e80c1e749b137ddee' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpForms/showForm_2.tpl',
      1 => 1468252484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1308443483577cf76e2a8f39-39677143',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf76e338191_28356102',
  'variables' => 
  array (
    'success' => 0,
    'form' => 0,
    'errors' => 0,
    'formID' => 0,
    'elements' => 0,
    'element' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf76e338191_28356102')) {function content_577cf76e338191_28356102($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['success']->value)){?><p class="formSuccess"><?php echo $_smarty_tpl->tpl_vars['form']->value['message'];?>
</p><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)){?><div class="formError"><?php echo implode('</div><div class="formError">',$_smarty_tpl->tpl_vars['errors']->value);?>
</div><?php }?>
<h3 class="section-title"><?php echo $_smarty_tpl->tpl_vars['form']->value['title'];?>
</h3>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>
" enctype="multipart/form-data" id="forms<?php echo $_smarty_tpl->tpl_vars['form']->value['id'];?>
" class="section-callback__wrap">
	<input type="hidden" name="formID" value="<?php echo $_smarty_tpl->tpl_vars['formID']->value;?>
" />
    <?php echo wmp_sessid_input();?>

	<div class="section-callback__row">
		<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>                   
                            
				
                                <div class="row">
                                        <?php if ($_smarty_tpl->tpl_vars['element']->value['title']!="Каптча"){?>                                    
					<label for="field<?php echo $_smarty_tpl->tpl_vars['formID']->value;?>
<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['element']->value['title'];?>
 <?php if ($_smarty_tpl->tpl_vars['element']->value['isRequired']){?><span class="req">*</span><?php }?></label>
                                        <?php }?> 
					<?php echo $_smarty_tpl->tpl_vars['element']->value['tpl'];?>
                                        
				</div>
                                       
			
		<?php } ?>
		<input type="submit" value="<?php echo Dictionary::GetUniqueWord(69);?>
"  class="btn btn-submit" >
	</div>
</form><?php }} ?>