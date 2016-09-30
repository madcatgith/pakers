<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pakers</title>
    <meta name="description" content="description">
    <meta name="keywords" content="keywords" />
    <meta property="og:title" content="PAKERS Производство П.Э.Т. преформ">

    <link rel="apple-touch-icon" sizes="57x57" href="ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png">
    <link rel="manifest" href="ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--<meta name="format-detection" content="telephone=no">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&subset=cyrillic" rel="stylesheet">-->
    <link rel="stylesheet" href="/media/css/style.css?rand=0.95"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- reset-->
    {literal}<script>!function(e){"use strict";function t(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function n(t,n){return e.localStorage&&localStorage[t+"_content"]&&localStorage[t+"_file"]===n}function a(t,a){if(e.localStorage&&e.XMLHttpRequest)n(t,a)?o(localStorage[t+"_content"]):l(t,a);else{var s=r.createElement("link");s.href=a,s.id=t,s.rel="stylesheet",s.type="text/css",r.getElementsByTagName("head")[0].appendChild(s),r.cookie=t}}function l(e,t){var n=new XMLHttpRequest;n.open("GET",t,!0),n.onreadystatechange=function(){4===n.readyState&&200===n.status&&(o(n.responseText),localStorage[e+"_content"]=n.responseText,localStorage[e+"_file"]=t)},n.send()}function o(e){var t=r.createElement("style");t.setAttribute("type","text/css"),r.getElementsByTagName("head")[0].appendChild(t),t.styleSheet?t.styleSheet.cssText=e:t.innerHTML=e}var r=e.document;e.loadCSS=function(e,t,n){var a,l=r.createElement("link");if(t)a=t;else{var o;o=r.querySelectorAll?r.querySelectorAll("style,link[rel=stylesheet],script"):(r.body||r.getElementsByTagName("head")[0]).childNodes,a=o[o.length-1]}var s=r.styleSheets;l.rel="stylesheet",l.href=e,l.media="only x",a.parentNode.insertBefore(l,t?a:a.nextSibling);var c=function(e){for(var t=l.href,n=s.length;n--;)if(s[n].href===t)return e();setTimeout(function(){c(e)})};return l.onloadcssdefined=c,c(function(){l.media=n||"all"}),l},e.loadLocalStorageCSS=function(l,o){n(l,o)||r.cookie.indexOf(l)>-1?a(l,o):t(e,"load",function(){a(l,o)})}}(this);</script>{/literal}
    <script>loadCSS( "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&subset=cyrillic", false, "screen" );</script>
</head>
<body>
<div class="overlay"></div>

<div class="l-wrapper">

    <header class="l-header b-header">
        <div class="container">
            <div class="b-header__top">
                <div class="b-header__left">
                    <div class="b-logo inline-list">
                        <a href="/">
                            <!--<i class="icon-logo"></i>-->
                            <img width="176" src="/img/common/logo.png" data-2x="/img/common/logo@2x.png" alt="pakers logo"/>
                        </a>
                    </div>
                    <div class="b-header__menu inline-list">
                        <a class="b-header__menu-link" href="#">
                            <i class="icon-menu pull-left"></i>
                            <span class="inline-list hide-on-small">Меню</span>
                        </a>
                    </div>
                </div>
                <div class="b-header__right">
                    <div class="b-header__right-link b-tns inline-list hide-on-small">
                        <i class="icon-tns pull-left"></i>
                        <span>Торговый <br/>дом</span>
                    </div>
                    {Lang::getLangByTemplate('default')}
                </div>
            </div>
            <!-- nav-->
            {Menu::getTreeByTemplate($langID, 1, 'top')}
        </div>
    </header>
    <!--Content-->
    {if $menuID neq 0}
        {$page->show(Menu::get($langID, $menuID, 'view'))}
    {else}
        {$page->show('main')}
    {/if}              
    <!--Content end-->
    <footer class="l-footer b-footer">
        <div class="container">
            <div class="b-footer__logo">
                <i class="icon-logo"></i>
                <div class="b-footer__map">
                    <img class="b-footer__map-img" src="/img/common/map.png" alt="map"/>
                    {Lang::getLangByTemplate('footer')}
                </div>
            </div>
            <div class="b-footer__top">
                <div class="b-tns">
                    <i class="icon-tns pull-left"></i>
                    <span>Торговый <br/>дом</span>
                </div>
                {Menu::getTreeByTemplate($langID, 1, 'bottom')}
            </div>
            <div class="b-footer__bottom">
                <!--<div class="b-footer__contact">
                    <div class="b-footer__contact-item">
                        <h3 class="b-footer__contact-title">Контакты:</h3>
                        <address>
                            <p>
                                Тел.: +38 (057) 760-45-37, +38 (057) 760-45-38
                            </p>
                            <p>
                                Факс: +38 (057) 760-45-36
                            </p>
                            <p>
                                E-mail: <a href="mailto:sales@petpreform.com.ua">sales@petpreform.com.ua</a>.
                            </p>
                        </address>
                    </div>
                    <div class="b-footer__contact-item">
                        <h3 class="b-footer__contact-title">Адрес производства:</h3>
                        <address>
                            <p>
                                въезд Орешкова, 1А, пгт. Васищево,
                                Харьковский район, Харьковская область. <br/>
                                <a href="#">Смотреть на карте</a>
                            </p>
                        </address>
                    </div>
                </div>-->
                {Controller::run('iblock/contacts/main')}
            </div>
            <div class="b-footer__copyright">
                <p>© 2016. Все права защищены. Общество с ограниченной ответственностью «ПАКЕРС»</p>
            </div>
        </div>
    </footer>

</div>

<script src="/media/js/vendor/jquery.min.js"></script>
<script src="/media/js/vendor/modernizr-2.7.2.min.js"></script>
<script src="/media/js/main.js"></script>
</body>
</html>