<?php /* Smarty version Smarty-3.1.8, created on 2016-07-15 10:15:44
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpProductCatalogue/showProduct_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:724842023577d037ac9b056-51994393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60b7c742bf9b68886b1ee107550cae566deb6694' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpProductCatalogue/showProduct_main.tpl',
      1 => 1468577737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '724842023577d037ac9b056-51994393',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577d037ae590d5_21347915',
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577d037ae590d5_21347915')) {function content_577d037ae590d5_21347915($_smarty_tpl) {?><div class="content-grid__main">
	<h1 class="section-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->getTitle();?>
</h1>
    <div class="b-product">
        <?php if ($_smarty_tpl->tpl_vars['product']->value->getImage()!=''){?>
        <div class="b-product__img-wrap">
            <div class="img-wrap product">
                <img class="responsive" src="<?php echo filesSmallGenerate(Image::mEncrypt(('height=253&src=').($_smarty_tpl->tpl_vars['product']->value->getImage())));?>
" alt="preview"/>
            </div>
            <div class="b-product__carousel">
                <div class="js-product-carousel owl-carousel">
                    <!--Слайдер-->
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['product']->value->get('gallery_id');?>
<?php $_tmp1=ob_get_clean();?><?php echo Gallery::displayGallery($_tmp1,'product');?>
                    
                </div>
            </div>
        </div>
        <?php }?>        
		
        <div class="b-product__description">
            <?php if ($_smarty_tpl->tpl_vars['product']->value->get('minCapacity')!=''||$_smarty_tpl->tpl_vars['product']->value->get('minTorque')!=''||$_smarty_tpl->tpl_vars['product']->value->get('minGearRatio')!=''){?>
            <dl>
                <dt>Мощность (Kw):</dt>
                <dd>Min <?php echo $_smarty_tpl->tpl_vars['product']->value->get('minCapacity');?>
 — Max <?php echo $_smarty_tpl->tpl_vars['product']->value->get('maxCapacity');?>
</dd>
                <dt>Крутящий момент (Nm):</dt>
                <dd>Min <?php echo $_smarty_tpl->tpl_vars['product']->value->get('minTorque');?>
 — Max <?php echo $_smarty_tpl->tpl_vars['product']->value->get('maxTorque');?>
</dd>
                <dt>Передаточное отношение:</dt>
                <dd>Min <?php echo $_smarty_tpl->tpl_vars['product']->value->get('minGearRatio');?>
 — Max <?php echo $_smarty_tpl->tpl_vars['product']->value->get('maxGearRatio');?>
</dd>
            </dl>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value->get('pdf')!=''){?>
            <p>
                <a class="btn btn-download" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['product']->value->get('pdf');?>
">
                    <span class="icon-pdf left"></span>
                    <span>Скачать <br/>тех. документацию</span>
                </a>
            </p>
            <?php }?>
        </div>
        
        <!-- content-->
        <div class="b-product__content">
            <article>
                <p>
					<?php echo $_smarty_tpl->tpl_vars['product']->value->get('announcement');?>

                </p>
               
						<!--таблица-->
						<?php echo Controller::run('iblock/productattr/main');?>

                                                
                                                <?php echo Controller::run('iblock/elproduct/main');?>

                  
            </article>
        </div>

    </div>
                                                
    <!-- section callback-->
    <section class="section-callback">
		<?php echo Controller::run('forms/index');?>

    </section>
</div><?php }} ?>