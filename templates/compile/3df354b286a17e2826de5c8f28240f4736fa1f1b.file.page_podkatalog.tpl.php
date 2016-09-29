<?php /* Smarty version Smarty-3.1.8, created on 2016-07-12 14:29:04
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_podkatalog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:337723947577cf62b381b99-89176787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3df354b286a17e2826de5c8f28240f4736fa1f1b' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_podkatalog.tpl',
      1 => 1468333732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '337723947577cf62b381b99-89176787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf62b3a9eb3_16012988',
  'variables' => 
  array (
    'langID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf62b3a9eb3_16012988')) {function content_577cf62b3a9eb3_16012988($_smarty_tpl) {?><!--<section class="section-banner m-bg valign-wrapper hide-on-tablet">
    
</section>-->
<?php echo Menu::getCrumbs('1');?>

<main class="l-main l-main--catalog">
    <div class="container">
        <div class="content content-grid">
            <aside class="content-grid__aside">
                <h3 class="section-title">Каталог</h3>
				<?php echo Menu::getTreeByTemplate($_smarty_tpl->tpl_vars['langID']->value,4,'1');?>

				<p class="text-center">
                    <a class="btn btn-product-check fullwidth wow slideInLeft" data-wow-duration="800ms"
                       data-wow-delay="600ms" href="http://stm.opt-fashion.com/kontaktyi">
                        <span class="arrow">&#10132;</span>
                        <span>Запрос на продукцию</span>
                    </a>
                </p>
            </aside>
            <!--<div class="content-grid__main">-->
				<?php echo Controller::run('/catalog/main');?>

                
                      
                        
                           
                                
            <!--</div>-->
        </div>
    </div>
</main>
<!-- section content-->
<section class="section section-faq m-grey">
    <div class="container">
        <h3 class="section-title">Интересно знать</h3>
        <?php echo Menu::getTreeByTemplate($_smarty_tpl->tpl_vars['langID']->value,34,'info');?>

    </div>
</section>

<script>
/* $(document).ready(function(){
     $(".b-catalog__item").each(function(i){
        $(this).attr('data-wow-delay',((i*100)+200)+'ms');
    });
 });   */
</script>   <?php }} ?>