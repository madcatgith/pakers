<?php

$no_html = 1;
$include = @include("../../../admin_top.php");
if(!$include or $adm_wellcome != "Y") exit;

?>
<html>
<head>
<title>Редактор галлереи</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<meta name="robots" content="noindex, nofollow">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/admin/js/jstree/jquery.tree.min.js"></script>
<script type="text/javascript" src="/admin/js/jstree/plugins/jquery.tree.checkbox.js"></script>


<link rel="stylesheet" type="text/css" title="text style" href="/admin/tags.css" />
<link rel="stylesheet" type="text/css" title="text style" href="/admin/colorpicker.css" />
<link rel="stylesheet" type="text/css" title="text style" href="/admin/css/ui-lightness/jquery-ui-1.7.2.custom.css" />


<link rel="stylesheet" type="text/css" title="text style" href="/admin/tags.css" />
<link href="/admin/css/ui-lightness/jquery-ui-1.7.2.custom.css" title="text style" type="text/css" rel="stylesheet">

    <script type="text/javascript">

    function newwin2(url,width,height) {
        window.open(url,"window","width="+width+",height="+height+",toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes");
    }

    function newwin(url,width,height){
        window.open(url,"window","width="+width+",height="+height+",toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes");
    }
    function newwin3(url,name, width,height) {
        window.open(url,name,"width="+width+",height="+height+",toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes");
    }

    var timeout         = 500;
    var closetimer        = 0;
    var ddmenuitem      = 0;

    function jsddm_open()
    {    jsddm_canceltimer();
    jsddm_close();
    ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');}

    function jsddm_close()
    {    if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

    function jsddm_timer()
    {    closetimer = window.setTimeout(jsddm_close, timeout);}

    function jsddm_canceltimer()
    {    if(closetimer)
    {    window.clearTimeout(closetimer);
    closetimer = null;}}

    $('#jsddm > li').hover (jsddm_open, jsddm_timer);

    document.onclick = jsddm_close;

    function  CustomClickHandler(node){
        var id = $(node).find('a:first').attr('rel');
        var type = $(node).find('a:first').attr('type');
        if (id && type == 2){
            if (opener.FireEventFromChild){
                opener.FireEventFromChild ('"<?=$_GET['name']?>"', id);
                window.close();
            } else {
                opener.document.getElementById('"<?=$_GET['name']?>"').value=id;
                window.close();
            }
        }
    }

    $(document).ready(function() {
        $('a[type=2]').css('font-style', 'italic');
    });

   </script>
<STYLE>
    .progressWrapper {
        width: 245px;
        overflow: hidden;
        float: left;
    }

    .progressContainer {
        margin: 5px;
        padding: 4px;
        border: solid 1px #E8E8E8;
        background-color: #F7F7F7;
        overflow: hidden;
    }
    /* Message */
    .message {
        margin: 1em 0;
        padding: 10px 20px;
        border: solid 1px #FFDD99;
        background-color: #FFFFCC;
        overflow: hidden;
    }
    /* Error */
    .red {
        border: solid 1px #B50000;
        background-color: #FFEBEB;
    }

    /* Current */
    .green {
        border: solid 1px #DDF0DD;
        background-color: #EBFFEB;
    }

    /* Complete */
    .blue {
        border: solid 1px #CEE2F2;
        background-color: #F0F5FF;
    }

    .progressName {
        font-size: 8pt;
        font-weight: 700;
        color: #555;
        width: 223px;
        height: 14px;
        text-align: left;
        white-space: nowrap;
        overflow: hidden;
    }

    .progressBarInProgress,
    .progressBarComplete,
    .progressBarError {
        font-size: 0;
        width: 0%;
        height: 2px;
        background-color: blue;
        margin-top: 2px;
    }

    .progressBarComplete {
        width: 100%;
        background-color: green;
        visibility: hidden;
    }

    .progressBarError {
        width: 100%;
        background-color: red;
        visibility: hidden;
    }

    .progressBarStatus {
        margin-top: 2px;
        width: 237px;
        font-size: 7pt;
        font-family: Arial;
        text-align: left;
        white-space: nowrap;
    }

    a.progressCancel {
        font-size: 0;
        display: block;
        height: 14px;
        width: 14px;
        background-image: url(/admin/files/cancelbutton.gif);
        background-repeat: no-repeat;
        background-position: -14px 0px;
        float: right;
    }

    a.progressCancel:hover {
        background-position: 0px 0px;
    }
    .rh{
        position: relative;
        overflow: hidden;
    }
    .swfupload{
        position: absolute;
        top: 0px;
        left: 0px;
    }


div#img_gallery {
        width: 582; color: #757678;
        background: #a5cd38; padding: 1px 1px 1px 1px;
        border: 1px solid #A5906B;
        position: relative; overflow: hidden;
        float:left;
        margin-left:2px;
        margin-top:-2px;
        }
#img_gallery div{
          font: normal 13px Verdana;
          background: #ffffff;
      }
.addContentBlock {
    float:right;
    width:300px;
    margin-right:2px;
    margin-top:-2px;
}
.addContentBlock .existItem {
    background-color: #f7f0b8;
    border:1px solid #A5906B;
    margin-bottom:5px;
    padding:10px;
}
.addContentBlock .newItem {
    background-color: #f7f0b8;
    border:1px solid #A5906B;
    padding:10px;
}
</STYLE>

</head>
<body style='margin:0; background-color: #fcf7d5;' onload='this.focus();'>
<?php

$lang_array = Lang::getLanguages();
$parent_cat = 0;
if (isset($_GET['item_id']))
    $parent_cat = $_GET['item_id'];

// Заголовок
echo admin_func_top('управление галереей');
echo admin_func_sys_message($sys_message);

$onClick = "CustomClickHandler(node); return false;";

// Кнопки
//поиск

    $wmpTree = new wmpTree();
    $wmpTree->BranchesSelect = wmpTree::$PreDefSql['galleryBranchesWithLeaf'];
    $wmpTree->ShowLeaves = false;
    $treeBody = $wmpTree->func_items_tree("item_id", "/admin/gallery.php", "&nbsp;&nbsp;", Dictionary::GetAdminWord(231), $onClick
                                , "width:300px; float:left; font-size:9px;", array($parent_cat), false
                                , $type = '');

    echo $treeBody;

?>
</script>

</body>
</html>