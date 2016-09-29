<?php /* Smarty version Smarty-3.1.8, created on 2016-08-17 09:13:45
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpForms/showForm_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1487479886577cfcfb1abce9-13442441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d7c113be294c89c4c088c491fc8abfa500f766b' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpForms/showForm_1.tpl',
      1 => 1471425220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1487479886577cfcfb1abce9-13442441',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cfcfb268350_67903757',
  'variables' => 
  array (
    'form' => 0,
    'formID' => 0,
    'elements' => 0,
    'element' => 0,
    'success' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cfcfb268350_67903757')) {function content_577cfcfb268350_67903757($_smarty_tpl) {?><h3 class="section-title"><?php echo $_smarty_tpl->tpl_vars['form']->value['title'];?>
</h3>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>
" enctype="multipart/form-data" id="forms<?php echo $_smarty_tpl->tpl_vars['form']->value['id'];?>
" class="section-callback__wrap">
	<input type="hidden" name="formID" value="<?php echo $_smarty_tpl->tpl_vars['formID']->value;?>
" />
    <?php echo wmp_sessid_input();?>

	<div class="section-callback__row first">
		<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['element']->value['type']!='textarea'){?>
				<div class="row">
					<label for="field<?php echo $_smarty_tpl->tpl_vars['formID']->value;?>
<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['element']->value['title'];?>
 <?php if ($_smarty_tpl->tpl_vars['element']->value['isRequired']){?><span class="req">*</span><?php }?></label>
					<?php echo $_smarty_tpl->tpl_vars['element']->value['tpl'];?>

				</div>
			<?php }?>
		<?php } ?>
	</div>
	<div class="section-callback__row">
		<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['element']->value['type']=='textarea'){?>
				<div class="row">
					<label for="field<?php echo $_smarty_tpl->tpl_vars['formID']->value;?>
<?php echo $_smarty_tpl->tpl_vars['element']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['element']->value['title'];?>
 <?php if ($_smarty_tpl->tpl_vars['element']->value['isRequired']){?><span class="req">*</span><?php }?></label>
					<?php echo $_smarty_tpl->tpl_vars['element']->value['tpl'];?>

				</div>
			<?php }?>
		<?php } ?>
    </div>
	<div class="section-callback__row--btn">
		<input type="submit" value="<?php echo Dictionary::GetUniqueWord(69);?>
"  class="btn btn-submit">
    </div>
</form>
<?php if (isset($_smarty_tpl->tpl_vars['success']->value)||isset($_smarty_tpl->tpl_vars['errors']->value)){?>
	<script>
		window.location.hash="order";
	</script>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['success']->value)){?>
	<p class="formSuccess" style="color: green; font-weight: 700; margin-top: 15px;">
		<?php echo $_smarty_tpl->tpl_vars['form']->value['message'];?>

	</p>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)){?>
	<div class="formError" style="color: red; font-weight: 700; margin-top: 15px;">
		<?php echo implode('</div><div class="formError">',$_smarty_tpl->tpl_vars['errors']->value);?>

	</div>
<?php }?><?php }} ?>