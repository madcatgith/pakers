<?php /* Smarty version Smarty-3.1.8, created on 2016-07-07 10:08:49
         compiled from "/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/lib/wmpAdmin/templates_auth_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:765476999577e2a313d9007-50124027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '739351946bc428cdaafd576724a5d011c40025b4' => 
    array (
      0 => '/home/optfashion/domains/opt-fashion.com/public_html/stm/admin/lib/wmpAdmin/templates_auth_form.tpl',
      1 => 1464684536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '765476999577e2a313d9007-50124027',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_577e2a314c99c7_75505963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577e2a314c99c7_75505963')) {function content_577e2a314c99c7_75505963($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
            <title><?php echo Dictionary::GetAdminWord(811);?>
</title>
	    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	    <link type="text/css" rel="stylesheet" href="/admin/styles/style.css" />
            <script type="text/javascript" src="/admin/js/jquery-1.7.1.min.js"></script>
            <script type="text/javascript">
                
                (function(h){jQuery.fn.pngFix=function(d){d=jQuery.extend({blankgif:"blank.gif"},d);var e="Microsoft Internet Explorer"==navigator.appName&&4==parseInt(navigator.appVersion)&&-1!=navigator.appVersion.indexOf("MSIE 5.5"),f="Microsoft Internet Explorer"==navigator.appName&&4==parseInt(navigator.appVersion)&&-1!=navigator.appVersion.indexOf("MSIE 6.0");jQuery.browser.msie&&(e||f)&&(jQuery(this).find("img[src$=.png]").each(function(){jQuery(this).attr("width",jQuery(this).width());jQuery(this).attr("height", jQuery(this).height());var a="",c="",d=jQuery(this).attr("id")?'id="'+jQuery(this).attr("id")+'" ':"",g=jQuery(this).attr("class")?'class="'+jQuery(this).attr("class")+'" ':"",e=jQuery(this).attr("title")?'title="'+jQuery(this).attr("title")+'" ':"",k=jQuery(this).attr("alt")?'alt="'+jQuery(this).attr("alt")+'" ':"",b=jQuery(this).attr("align")?"float:"+jQuery(this).attr("align")+";":"",l=jQuery(this).parent().attr("href")?"cursor:hand;":"";this.style.border&&(a+="border:"+this.style.border+";",this.style.border= "");this.style.padding&&(a+="padding:"+this.style.padding+";",this.style.padding="");this.style.margin&&(a+="margin:"+this.style.margin+";",this.style.margin="");var p=this.style.cssText,c=c+("<span "+d+g+e+k)+('style="position:relative;white-space:pre-line;display:inline-block;background:transparent;'+b+l),c=c+("width:"+jQuery(this).width()+"px;height:"+jQuery(this).height()+"px;"),c=c+("filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+jQuery(this).attr("src")+"', sizingMethod='scale');"), c=c+(p+'"></span>');""!=a&&(c='<span style="position:relative;display:inline-block;'+a+l+"width:"+jQuery(this).width()+"px;height:"+jQuery(this).height()+'px;">'+c+"</span>");jQuery(this).hide();jQuery(this).after(c)}),jQuery(this).find("*").each(function(){var a=jQuery(this).css("background-image");-1!=a.indexOf(".png")&&(a=a.split('url("')[1].split('")')[0],jQuery(this).css("background-image","none"),jQuery(this).get(0).runtimeStyle.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+ a+"',sizingMethod='scale')")}),jQuery(this).find("input[src$=.png]").each(function(){var a=jQuery(this).attr("src");jQuery(this).get(0).runtimeStyle.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+a+"', sizingMethod='scale');";jQuery(this).attr("src",d.blankgif)}));return jQuery}})(jQuery); $(document).ready(function(){function h(a){a=a||".glow-container";$(a).each(function(){$(this).html('<div class="mask mask-top"></div><div class="mask mask-middle"></div><div class="mask mask-bottom"></div><div class="content content-top"></div><div class="content content-middle"></div><div class="content content-bottom"></div><div class="inner">'+this.innerHTML+'</div><div style="background-position: 0px 0px;" class="map"></div><div style="display: none;" class="gmap"></div><div style="display: none;" class="hmap"></div>'); if(g||m)$(".mask-top").length&&$(".mask-top").css("background","url(../../img/credentials.gif)"),$(".mask-middle").length&&$(".mask-middle").css("background","url(../../img/mask-middle.gif)"),$(".mask-bottom").length&&$(".mask-bottom").css("background","url(../../img/mask-bottom.gif)"),$(".content-top").length&&$(".content-top").css("background","url(../../img/content-top.gif)"),$(".content-middle").length&&$(".content-middle").css("background","url(../../img/content-middle.gif)"),$(".content-bottom").length&& $(".content-bottom").css("background","url(../../img/content-bottom.gif)");var b=this,a,c=function(){var c=[];$(b).parents().each(function(){"none"==$(this).css("display")&&($(this).css("display","block"),c.push(this))});var k=g?parseInt($(".inner",b).height())-12:$(".inner",b).height(),d=$(".mask-top",b).height(),e=$(".mask-bottom",b).height(),f=g?5:$(".content-top",b).height(),h=g?5:$(".content-bottom",b).height();$(b).height(k+d+e);$(b).css("position","relative");$(".mask-middle",b).css({height:k, top:d});$(".content-top",b).css({top:d-16});$(".content-middle",b).css({height:$(b).height()-d+32-e-f-h,top:d-16+f});$(".inner",b).css({top:d});$(".content-gradient",b).css({height:$(b).height()-d-e,top:d-16});for(a=0<c.length;0<c.length;)$(c.pop()).css("display","none")};c();a||setTimeout(c,500);a||setTimeout(c,1E3);a||setTimeout(c,1500);d(this);b=this;$("input, select, textarea",this).focus(function(){var a=b;clearTimeout(a.bgTimer);$(" .gmap",a).stop().animate({opacity:0},200);a&&($(".map",a).is(":animated")|| n&&$(".map",a).animate({backgroundPosition:"0px 0px"},45E4,"linear"))}).blur(function(){e(b)})});$(".emap",a).css({display:"block",opacity:0});$(".gmap",a).css({display:"block",opacity:1})}function d(a){$(".map",a).css({backgroundPosition:Math.floor(2500*Math.random())+5E4+"px 0"})}function e(a){$(".gmap",a).stop().animate({opacity:1},400);a.bgTimer=setTimeout(function(){d(a)},500);a&&$(".map",a).stop()}function f(a,b){b||(b=300);$(a||".hoverfade").each(function(){var a=$(this).html();$(this).html('<span class="source">'+ a+'</span><span class="hover"></span>')}).hover(function(){$(".hover",this).stop().animate({opacity:1},b)},function(){$(".hover",this).stop().animate({opacity:0},b)}).find(".hover").css("opacity",0)}function a(){$("#debug").toggle(function(){$(this).animate({width:"-=80%",opacity:0.5},400)},function(){$(this).animate({width:"+=80%",opacity:0.85})})}function c(){$(".glow").each(function(){$(this).append('<div class="map" style="background-position: 50000px 0;"></div><div class="gmap" ></div><div class="mask"></div>')}); $(".glow .gmap").css({opacity:1})}$(document).pngFix();var m="Microsoft Internet Explorer"==navigator.appName&&4==parseInt(navigator.appVersion)&&-1!=navigator.appVersion.indexOf("MSIE 5.5"),g="Microsoft Internet Explorer"==navigator.appName&&4==parseInt(navigator.appVersion)&&-1!=navigator.appVersion.indexOf("MSIE 6.0"),n=!0;$(function(){h();$("input, select, textarea").wrap('<div class="input-container"></div>')});$(function(){f()});$(function(){a();$("body").addClass("js");$("body").append('<div id="preload"></div>'); $(".corners").wrapInner('<div class="corner corner-tl"><div class="corner corner-bl"><div class="corner corner-tr"><div class="corner corner-br inner"></div></div></div></div>');$("#nav>li").addClass("nav-item");$("#nav>li>a").addClass("nav-item-link");$("#nav>li>ul>li").addClass("subnav-item");$("#nav>li>ul>li>a").addClass("subnav-item-link");c()})});
                
            </script>
	</head>
	<body style="background:#000">
            <div class="vertical-align"></div>
	    <form action="<?php echo $_SERVER['REQUEST_URI'];?>
"  method="post" class="enterme glow-container" id="main_admin_enter">
                <label>Логин:</label>
                <input type="text" name="admlogin" value="" style="width : 140px;"   maxlength="250" />
                <label>Пароль:</label>
                <input type="password" name="admpass" value="" style="width : 140px;"   maxlength="250" />
                
      		<input type="submit" class="submit" value="Вход" style="margin:10px 35px 0;cursor:pointer;" maxlength="25" />
                <?php echo wmp_sessid_input();?>

            </form>
	</body>
</html><?php }} ?>