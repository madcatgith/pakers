<?php /* Smarty version Smarty-3.1.8, created on 2016-08-16 11:35:55
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2043351321577cf62b0ff238-34671485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cffca199bc276482ec110b4c11e3b788940479ae' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/lib/wmpPage/page_index.tpl',
      1 => 1471347308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2043351321577cf62b0ff238-34671485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577cf62b2b2e50_66353893',
  'variables' => 
  array (
    'noCache' => 0,
    'langID' => 0,
    'menuID' => 0,
    'page' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cf62b2b2e50_66353893')) {function content_577cf62b2b2e50_66353893($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">
    <head>
        
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php echo SEO::getSeoTags();?>

		<link rel="apple-touch-icon" sizes="57x57" href="../../files/gallery/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="../../files/gallery/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="../../files/gallery/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="../../files/gallery/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="../../files/gallery/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="../../files/gallery/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="../../files/gallery/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="../../files/gallery/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="../../files/gallery/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="../../files/gallery/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../../files/gallery/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="../../files/gallery/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../../files/gallery/favicon-16x16.png">
		<link rel="manifest" href="../../manifest.json">
                <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700italic,700' rel='stylesheet' type='text/css'>
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="../../files/gallery/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
		<link rel="stylesheet" href="../../media/css/style.css?rand=0.95"/>
        <?php if (Registry::get('isLoginAdmin')){?>
            <link href="/media/css/admin.css?v=<?php echo $_smarty_tpl->tpl_vars['noCache']->value;?>
" rel="stylesheet" media="all">
            <script type="text/javascript" src="/media/js/admin.js?v=<?php echo $_smarty_tpl->tpl_vars['noCache']->value;?>
"></script>
        <?php }?>
        <script>var SESSID_ID = <?php echo json_encode(wmp_sessid());?>
;</script>
		<script type="text/javascript">
            window.onload = function() {
				var aheight = document.getElementById('headerId').offsetHeight;
				var bmargin;
				bmargin = aheight;
				document.getElementById('mainId').style.marginTop = bmargin + "px";
			}
		</script>
    </head>
	<body oncopy="return false">
		<!-- wrapper -->
		<div class="l-wrapper">
			<!-- header -->
			<header id="headerId" class="l-header b-header" style="position: fixed; z-index: 222;">
				<div class="container">
					<div class="b-header__top">
						<div class="b-header__navbar show-on-tablet ">
							<a class="js-nav-top-show" href="#">
								<i class="icon-menu"></i>
							</a>
						</div>
						<div class="b-logo b-header__logo left">
							<a href="/"><i class="icon-logo"></i></a>
						</div>
						<div class="b-header__contact right">
							<div class="inline-list b-header__contact-social hide-on-tablet">
								<?php echo Banner::show(1,'socials');?>

							</div>
							<div class="inline-list b-header__contact-tel">
								<?php echo Controller::run('iblock/contacts/secondary');?>

							</div>
						</div>
					</div>
					<nav class="b-nav-top hide-on-tablet">
						<ul class="inline-list b-nav-top__menu-list">
							<?php echo Menu::getTreeByTemplate($_smarty_tpl->tpl_vars['langID']->value,1,'li');?>

						</ul>
					</nav>
				</div>
			</header>
			<!-- header end -->
			<!-- mobile menu-->
			<div class="offcanvas-mobile">
				<nav class="b-nav-top">
					<ul class="">
						<?php echo Menu::getTreeByTemplate($_smarty_tpl->tpl_vars['langID']->value,1,'li');?>

					</ul>
				</nav>
				<div class="b-header__contact-tel" style="list-style-type: none;">
					<?php echo Controller::run('iblock/contacts/secondary');?>

				</div>
				<div class="b-header__contact-social">
					<?php echo Banner::show(1,'socials');?>

				</div>
			</div>
			<!-- mobile menu end-->
			<!--arrow top-->
			<div id="scrollup"><img alt="Прокрутить вверх" src="../../images/arrow-top.png"></div>
			<style scoped>
				@media(max-width: 960px) {
					#scrollup {
						width:50px;
						height: 100px;
						position: fixed; 
						opacity: 0.8; 
						padding: 15px 10px 10px; 
						background: #fde428;
						border-radius: 5px; 
						-webkit-border-radius: 5px;
						-moz-border-radius: 5px;
						left: 10px; 
						bottom: 10px; 
						display: none; 
						cursor: pointer;
						z-index: 100;
					}
				}
				@media(min-width: 961px) {
					#scrollup {
						position: fixed; 
						opacity: 0.8; 
						padding: 15px 10px 10px; 
						background: #fde428;
						border-radius: 5px; 
						-webkit-border-radius: 5px;
						-moz-border-radius: 5px;
						left: 10px; 
						bottom: 10px; 
						display: none; 
						cursor: pointer;
						z-index: 100;
					}	
				}
			</style>
			<!--arrow top end-->
                        <?php if ($_smarty_tpl->tpl_vars['menuID']->value!=0){?>
                        
			<!-- main -->
			<main id="mainId">
                            <section class="section-banner m-bg valign-wrapper hide-on-tablet">
                            <?php echo Banner::show(3,'catalog');?>

                        </section>
					<?php echo $_smarty_tpl->tpl_vars['page']->value->show(Menu::get($_smarty_tpl->tpl_vars['langID']->value,$_smarty_tpl->tpl_vars['menuID']->value,'view'));?>

                                        </main>
				<?php }else{ ?>
                                    <main id="mainId">
					<?php echo $_smarty_tpl->tpl_vars['page']->value->show('main');?>

                                    </main>
				<?php }?>
			
			<!-- main end -->
        </div>
		<!--wrapper end-->
		<!-- footer -->
		<footer class="l-footer b-footer">
			<div class="container">
				<div class="b-footer__left left">
					<div class="b-footer__top">
						<div class="b-logo inline-list">
							<a href="#"><i class="icon-logo-grey"></i></a>
						</div>
						<div class="inline-list b-footer__social hide-on-tablet">
							<?php echo Banner::show(1,'socials');?>

						</div>
					</div>
					<nav class="b-nav inline-list hide-on-tablet">
						<?php echo Menu::getTreeByTemplate($_smarty_tpl->tpl_vars['langID']->value,1,'li');?>

					</nav>
				</div>
				<div class="b-footer__right b-footer__contact right">
					<h3 class="b-footer__contact-title">Наши контакты</h3>
					<ul class="b-footer__contact-tel-list">
						<?php echo Controller::run('iblock/contacts/main');?>

					</ul>
				</div>
			</div>
		</footer>
		<!-- footer end -->
		<script type="text/javascript" src="../../media/js/vendor/jquery-2.1.3.min.js"></script>
		<!--<script type="text/javascript">$("body").on("contextmenu", false);</script>-->
		<script type="text/javascript">
			var scrollUp = document.getElementById('scrollup'); // найти элемент

			scrollUp.onclick = function() { //обработка клика
				$('body,html').animate({
					scrollTop: 0 
				}, 500);
			};

			window.onscroll = function () { // при скролле показывать и прятать блок
				if ( window.pageYOffset > 0 ) {
					scrollUp.style.display = 'block';
				} else {
					scrollUp.style.display = 'none';
				}
			};
		</script>
		<script type="text/javascript" src="../../media/js/vendor/modernizr-2.7.2.min.js"></script>
		<script type="text/javascript" src="../../media/js/owl.carousel/owl.carousel.min.js"></script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
		<script type="text/javascript" src="../../bower_components/wow/dist/wow.min.js"></script>
		<script>
			wow = new WOW(
					{
						boxClass:     'wow',      // default
						animateClass: 'animated', // default
						offset:       100,          // default 0
						mobile:       false,       // default true
						live:         false        // default true
					}
			);
			wow.init();
		</script>
                <script>
                    $('#scrollup').hover(function(){
                        $('#scrollup img').attr('src','../../images/arrow-top_white.png');
                    },function(){
                        $('#scrollup img').attr('src','../../images/arrow-top.png');
                    });
                </script>
		<script type="text/javascript" src="../../media/js/script.js"></script>
        <?php if (Registry::get('isLoginAdmin')){?>
            <div id="dictionaryList">
                <table>
                    <tr>
                        <td class="id">#</td>
                        <td>Словарь</td>
                        <td></td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = Dictionary::getSelected(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</td>
                            <td><a href="javascript:void(0);" data-lang="<?php echo $_smarty_tpl->tpl_vars['data']->value['lang_id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" data-title="<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['data']->value['title']), ENT_QUOTES, 'utf-8', true);?>
">ред.</a></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        <?php }?>
        <?php if (@IS_WMP){?><!-- PDO queries count: <?php echo Registry::get('db')->getCount();?>
 --><?php }?>
   </body>
</html><?php }} ?>