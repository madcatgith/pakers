<!DOCTYPE html>
<html lang="ru">
    <head>
        
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        {SEO::getSeoTags()}
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
        {if Registry::get('isLoginAdmin')}
            <link href="/media/css/admin.css?v={$noCache}" rel="stylesheet" media="all">
            <script type="text/javascript" src="/media/js/admin.js?v={$noCache}"></script>
        {/if}
        <script>var SESSID_ID = {json_encode(wmp_sessid())};</script>
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
								{Banner::show(1, 'socials')}
							</div>
							<div class="inline-list b-header__contact-tel">
								{Controller::run('iblock/contacts/secondary')}
							</div>
						</div>
					</div>
					<nav class="b-nav-top hide-on-tablet">
						<ul class="inline-list b-nav-top__menu-list">
							{Menu::getTreeByTemplate($langID, 1, 'li')}
						</ul>
					</nav>
				</div>
			</header>
			<!-- header end -->
			<!-- mobile menu-->
			<div class="offcanvas-mobile">
				<nav class="b-nav-top">
					<ul class="">
						{Menu::getTreeByTemplate($langID, 1, 'li')}
					</ul>
				</nav>
				<div class="b-header__contact-tel" style="list-style-type: none;">
					{Controller::run('iblock/contacts/secondary')}
				</div>
				<div class="b-header__contact-social">
					{Banner::show(1, 'socials')}
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
                        {if $menuID neq 0}
                        
			<!-- main -->
			<main id="mainId">
                            <section class="section-banner m-bg valign-wrapper hide-on-tablet">
                            {Banner::show(3, 'catalog')}
                        </section>
					{$page->show(Menu::get($langID, $menuID, 'view'))}
                                        </main>
				{else}
                                    <main id="mainId">
					{$page->show('main')}
                                    </main>
				{/if}
			
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
							{Banner::show(1, 'socials')}
						</div>
					</div>
					<nav class="b-nav inline-list hide-on-tablet">
						{Menu::getTreeByTemplate($langID, 1, 'li')}
					</nav>
				</div>
				<div class="b-footer__right b-footer__contact right">
					<h3 class="b-footer__contact-title">Наши контакты</h3>
					<ul class="b-footer__contact-tel-list">
						{Controller::run('iblock/contacts/main')}
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
        {if Registry::get('isLoginAdmin')}
            <div id="dictionaryList">
                <table>
                    <tr>
                        <td class="id">#</td>
                        <td>Словарь</td>
                        <td></td>
                    </tr>
                    {foreach Dictionary::getSelected() as $data}
                        <tr>
                            <td>{$data.id}</td>
                            <td>{$data.title}</td>
                            <td><a href="javascript:void(0);" data-lang="{$data.lang_id}" data-id="{$data.id}" data-title="{json_encode($data.title)|escape}">ред.</a></td>
                        </tr>
                    {/foreach}
                </table>
            </div>
        {/if}
        {if $smarty.const.IS_WMP}<!-- PDO queries count: {Registry::get('db')->getCount()} -->{/if}
   </body>
</html>