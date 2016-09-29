<?php
$include = @include($_SERVER['DOCUMENT_ROOT'] . "/admin/admin_top.php");

if (!$include or $adm_wellcome != "Y") {
    exit;
}

$id = $_REQUEST['id'];

include BASEPATH . "includes.php";
// Ловим отображение списка контента
$viewList  = $_POST['viewList'];
$galleryID = (int) $_REQUEST['galleryID'];
$onPage    = (int) $_REQUEST['onPage'];

if ($onPage <= 0) {
    $onPage = 10;
}

// Преобразование кавычек из формы в БД
$step = "form_to_db";
include BASEPATH . "/admin/admin_functions_post_quotes.php";


if ($edit_new_one != "") {
    $select_langs = DB::Query("select * from `?_lang` where active=1 order by place");
    while ($get_lang     = DB::GetArray($select_langs)) {
        $lang_id = $get_lang['id'];

        $title[$lang_id]    = Helpers::prepareValue('', $title[$lang_id]);
        $SEOTitle[$lang_id] = Helpers::prepareValue('', $SEOTitle[$lang_id]);

        if ($title[$lang_id] != "") {
            $select_dublikat2 = DB::Query("
				select count(*)+0
				from `?_menu`
				where id!=$id
				and SEOTitle = '$SEOTitle[$lang_id]'
				and title='$title[$lang_id]'
				and lang_id='$lang_id'
				and menu_id='$menu_id'
				and view='$view' ");
            $dublikat         = $dublikat + @array_shift(DB::GetArray($select_dublikat2));
        }
    }

    if ($dublikat > 0)
        $sys_message[] = Dictionary::GetAdminWord(620);
    else {
        if ($old_menu_id != $menu_id) {
            $update_places    = DB::Query("
				update `?_menu`
				set place=place-1
				where place>$place and menu_id=$old_menu_id");
            $select_max_place = DB::Query("
				select max(place)+0
				from `?_menu`
				where menu_id=$menu_id ");
            $place            = @array_shift(DB::GetArray($select_max_place)) + 1;
        }

        $imgurl = $imgurl_full;

        $edit = DB::Query("update `?_menu`
			set menu_id='$menu_id',
			cnc='$cnc',place='$place',view='$view',only_for_users='$only_for_users',imgurl='$imgurl',imgurl2='$imgurl2',viewListContent ='$viewList'
			where id='$id' ");

        if (defined('_MODULE_TAG')) {
            $sql_linked_ids = array();
            foreach ($connected_ids as $key => $value) {
                if ($value === 'true') {
                    $sql_linked_ids[] = "('{$id}', '{$key}', 'menu')";
                }
            }

            DB::Query("DELETE from ?_tag_col where `item_id` = $id and `item_table` = 'menu'");

            if (count($sql_linked_ids) > 0) {
                DB::Query("INSERT into ?_tag_col (`item_id`,`link_id`,`item_table`)
					values " . implode(', ', $sql_linked_ids));
            }
        }

        $select_langs = DB::Query("select * from `?_lang` where active=1 order by place");
        while ($get_lang     = DB::GetArray($select_langs)) {
            $lang_id = $get_lang[id];

            if ($title[$lang_id] != "") {
                $does_it_exist = DB::Query("select * from `?_menu` where id=$id and lang_id=$lang_id ");
                if (@mysql_num_rows($does_it_exist) == "") {
                    $edit_menu = DB::Query("
						insert into `?_menu`
						(showInFreeCoffee, coffeeType, showDate, `fileSrc`, `fileSize`, `onPage`, class, img, galleryID, id,    cnc,    menu_id, active,              view,    only_for_users,    place,    title,              imgurl,    imgurl2,    lang_id, SEODescription, SEOKeywords,              announce,              viewListContent, SEOTitle,              slogan) values
						('". (filter_input(INPUT_POST, 'showInFreeCoffee') ?: 0) ."', '". filter_input(INPUT_POST, 'coffeeType') ."', '". (filter_input(INPUT_POST, 'showDate') ?: 0) ."', '" . mysql_real_escape_string($_POST['fileSrc']) . "', '" . mysql_real_escape_string(getStrFileSize($_POST['fileSrc'])) . "', '{$onPage}', '" . mysql_real_escape_string($_POST['class']) . "', '{$img[$lang_id]}','{$galleryID}', '$id', '$cnc', '$menu_id', '$active[$lang_id]', '$view', '$only_for_users', '$place', '$title[$lang_id]', '$imgurl', '$imgurl2', '$lang_id', '$SEODescription[$lang_id]', '$SEOKeywords[$lang_id]', '$announce[$lang_id]', '$viewList',     '$SEOTitle[$lang_id]', '$slogan[$lang_id]') ");
                } else {
                    $edit_menu = DB::Query("
						update `?_menu` set
						active='$active[$lang_id]',
												showInFreeCoffee='". (filter_input(INPUT_POST, 'showInFreeCoffee') ?: 0) ."',
                                                coffeeType = '". filter_input(INPUT_POST, 'coffeeType') ."',
                                                showDate='". (filter_input(INPUT_POST, 'showDate') ?: 0) ."',
                                                fileSrc='" . mysql_real_escape_string($_POST['fileSrc']) . "', fileSize='" . mysql_real_escape_string(getStrFileSize($_POST['fileSrc'])) . "',
                                                onPage='{$onPage}',
						img='{$img[$lang_id]}',
						galleryID='{$galleryID}',
						class='" . mysql_real_escape_string($_POST['class']) . "',
						title='$title[$lang_id]',
						SEOTitle='$SEOTitle[$lang_id]',
						SEODescription = '$SEODescription[$lang_id]',
						SEOKeywords    = '$SEOKeywords[$lang_id]', viewListContent ='$viewList', announce    = '$announce[$lang_id]'
						, slogan    = '$slogan[$lang_id]'
						where lang_id='$lang_id' and id='$id' ");
                }
                //-------------------------------------
                if (!$edit_menu)
                    $sys_message[] = " " . Dictionary::GetAdminWord(621) . " \"$title[$lang_id]\"...";
                else {

                    $sys_message[] = "" . Dictionary::GetAdminWord(291) . " \"$title[$lang_id]\" " . Dictionary::GetAdminWord(459) . " (<a href=\"menus.php?menu_id=$menu_id\">" . Dictionary::GetAdminWord(294) . "</a>).";
                }
            }
        }
    }
    Helpers::buildMenuAlias();
}

// Заголовок
echo admin_func_top(Dictionary::GetAdminWord(622));
// Вывод сообщений про обработанность различных действий
echo admin_func_sys_message($sys_message);

// Кнопки
//поиск
echo '<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#a5cd38">
	<tr>
	<td width="300" class="td_left" style="vertical-align: top; border: 1px solid #a5cd38;">
	<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tr><td style="padding: 0;">';
echo admin_func_menu_tree("menu_id", "menus.php", "&nbsp;&nbsp;", Dictionary::GetAdminWord(231), "1"
        , "width:300px; float:left; font-size:9px;", array($id));
echo '          </td></tr></table>
	</td>
	<td style="vertical-align: top; background: #fff;">';

// Вылавливаем из БД информацию
$no_array_fields = array('id', 'showInFreeCoffee', 'coffeeType', 'showDate', 'fileSrc', 'onPage', 'class', 'cnc', 'menu_id', 'galleryID', 'view', 'only_for_users', 'place', 'imgurl', 'imgurl2', 'lang_id', 'viewListContent');
$select_langs    = DB::Query("select * from `?_lang` where active=1 order by place");

while ($get_lang = DB::GetArray($select_langs)) {

    $lang_id = $get_lang[id];

    $select     = DB::Query("select * from `?_menu` where id='$id' and lang_id=$lang_id ");
    $get        = DB::GetArray($select);
    $num_fields = mysql_num_fields($select);

    for ($i = 0; $i < $num_fields; $i++) {
        $field_name = @mysql_field_name($select, $i);
        if (!in_array($field_name, $no_array_fields)) {
            $temp = "if(!@is_array(\$" . $field_name . ")) unset(\$" . $field_name . ");\n";
            $temp .= "\$" . $field_name . "[$lang_id] = \$get[\$field_name];";
            eval($temp);
        } else {
            if (!empty($get[lang_id])) {
                $temp = "\$" . $field_name . " = \$get[\$field_name];";
                eval($temp);
            }
        }
    }
}

if (defined('_MODULE_TAG')) {
    $tags_s = DB::Query("select link_id from `?_tag_col` tc where tc.item_id = $id and tc.item_table= 'menu'", true);
    $tags   = array();
    while ($get    = DB::GetRow($tags_s)) {
        $tags[$get['link_id']] = $get['link_id'];
    }

    $wmpTree = new wmpTree();

    $wmpTree->BranchesSelect = wmpTree::$PreDefSql['tagBranches'];
    $wmpTree->LeavesSelect   = wmpTree::$PreDefSql['tagLeaves'];

    $wmpTree->IsCheckBoxedBranches = false;
    $wmpTree->IsCheckBoxedLeaves   = true;

    $wmpTree->IdsName = 'connected_ids';

    $wmpTree->ShowLeaves = true;

    $treeBody = $wmpTree->func_items_tree("item_id", "#", "&nbsp;&nbsp;", Dictionary::GetAdminWord(231), ""
            , "width:300px; float:left; font-size:9px; border:1px solid silver;"
            , array('checked' => $tags, 'ignored' => array(), 'undetermined' => array()), true, '');
}



if (empty($id) && $id != 0)
    exit;

echo "<form method=post action='?id=" . $id . "' name=foreverForm>";
echo admin_func_right_table_start(2);
echo "<input type=hidden name=id value=\"$id\" >";
echo "<input type=hidden name=edit_new_one value=1>";
echo "<input type=hidden name=place value=\"$place\">";
echo "<input type=hidden name=old_menu_id value=\"$menu_id\">";

if(in_array($menu_id, Menu::getChildrenIDs(1, 15))) {
    $catalogueType = '<select name="coffeeType"><option>&nbsp;</option>';
    foreach (ProductCatalogue::getTypes() as $typeID => $type) {
        $catalogueType .= '<option value="'. $typeID .'"'. ($typeID == $coffeeType ? ' selected="selected"' : '') .'>'. $type .'</option>';
    }
    $catalogueType .= '</select>';

    echo admin_func_right_table_row_start(1);
    echo admin_func_right_table_data("Тип кофе", "", "2lb");
    echo admin_func_right_table_data($catalogueType, "", "1br");
}

echo admin_func_right_table_row_start(1);
echo admin_func_right_table_data(Dictionary::GetAdminWord(232), "", "1lt");
echo admin_func_right_table_data(Helpers::getMenuSelect('menu_id', $menu_id), "", "2tr");

//admin_func_menu_tree_select($id, "menu_id", "", "&nbsp;&nbsp;&nbsp;&nbsp;", Dictionary::GetAdminWord(296), "", "0")

if (count($menu_view_type_title) > 1) {
    echo admin_func_right_table_row_start(1);
    echo admin_func_right_table_data(Dictionary::GetAdminWord(297), "", "1l");
    echo '<td class="tdr"><select name="view" id="view">';

    while (list($k, $v) = @each($menu_view_type_title)) {
        $selected = "";
        if ($view == $k)
            $selected = "selected";

        echo "<option value=$k $selected>$v";
    }
    echo "</select>";
} else {
    echo '<input type=hidden name=view value="default">';
}
//---- Выпадалка выбора вида списка контента
$viewList = $viewListContent;
if (count($content_view_list_type_title) > 1) {
    echo admin_func_right_table_row_start(1);
    echo admin_func_right_table_data("Вид списка контентов:", "", "1l");
    echo "<td class=tdr><select name=viewList>";

    while (list($k, $v) = @each($content_view_list_type_title)) {
        $selected = "";
        if ($viewList == $k)
            $selected = "selected";

        echo "<option value=$k $selected>$v";
    }

    echo "</select>";
} else {
    echo '<input type=hidden name=viewList value="default">';
}
//-----------------------------------------------------
echo "</td>";
/*
echo admin_func_right_table_row_start(1);
echo admin_func_right_table_data(Dictionary::GetAdminWord(696), "", "1l");
echo "<td class=tdr><select name=only_for_users>";

$only_for_users_array[0] = Dictionary::GetAdminWord(697);
$only_for_users_array[1] = Dictionary::GetAdminWord(698);

while (list($k, $v) = @each($only_for_users_array)) {
    unset($selected);
    if ($only_for_users == $k)
        $selected = "selected";
    echo "<option value=$k $selected>$v";
}
echo "</select>";
echo "</td>";
*/
echo admin_func_right_table_row_start(1);
echo admin_func_right_table_data("Картинка:", "", "1lb");
echo admin_func_right_table_data(admin_func_right_input("", "imgurl_full", $imgurl, 215, 3) . "&nbsp;" . admin_func_right_input("submit", "", Dictionary::GetAdminWord(239), "", "onClick=\"newwin2('files.php?show=imgurl_full',720,520); return false;\""), "", "2br");

echo admin_func_right_table_row_start(1);
echo admin_func_right_table_data("Файл:", "", "1l");
echo admin_func_right_table_data(admin_func_right_input('', 'fileSrc', $fileSrc, 215, 3, '', array('id' => 'fileSrc')) . '&nbsp;' . admin_func_right_input("submit", "", Dictionary::GetAdminWord(239), '', 'onclick="newwin2(\'/admin/files.php?show=jqGrid&amp;obj=fileSrc\', 720, 520); return false;"'), '', '2r');

echo admin_func_right_table_row_start(1);
echo admin_func_right_table_data("Кол-во элементов на странице:", "", "2lb");
echo admin_func_right_table_data(admin_func_right_input("", "onPage", $onPage, 50, 3, ''), "", "1br");

echo admin_func_right_table_row_start(1);
echo admin_func_right_table_data("class [html]:", "", "2lb");
echo admin_func_right_table_data(admin_func_right_input("", "class", $class, 250, 3), "", "1br");

if (defined('_MODULE_TAG') && 2 === 1) {
    echo admin_func_right_table_row_start(1);
    echo admin_func_right_table_data("Теги:", "", "2lb");
    echo admin_func_right_table_data($treeBody, "", "1br");
}

// единый чпу для языковых версий
echo admin_func_right_table_row_start(1);
echo admin_func_right_table_data("ЧПУ", "", "1lb");

$temp_cnc = '<input type="text" id="cnc" name="cnc" value="' . $cnc . '" style="width: 335px;"><br/>';
$temp_cnc .= '<input type="button" id="cnc_gen" value="Генерировать ЧПУ">';
$temp_cnc .= '<input type="button" id="cnc_check" value="Проверить ЧПУ">';
$temp_cnc .= '<div style="width: 335px; height: 15px; font-size: 12px; padding: 2px 0 2px 0;" id="alert_cnc"></div>';

echo admin_func_right_table_data($temp_cnc, "", "2br");
?>
<script type="text/javascript">
    $(document).ready(function() {
        $("#cnc_gen").click(function()
        {
            $.post('/admin/request.php?fn=generate/uri', {
                string: $('input[name^=title]').val()
            }, function(data)
            {
                $('#cnc').val(my_replace(alphabet, data.string));
                $('#alert_cnc').html('<span style="color: #18c42c;">ЧПУ успешно сгенерирован</span>');
            }, 'json');
        });
        $("#cnc_check").click(function() {
            var my_string = $('#cnc').val();
            if (my_string == '') {
                $('#alert_cnc').html('<span style="color: 3f02222;">Поле ЧПУ пустое, сгенерируйте или введите свой</div>');
            } else {
                $.post("adm_ajax.php", {action: "check_cnc", name: my_string, type: "menu", menu: "<?= $id; ?>", menu_id: '<?= $menu_id; ?>', lang: "1"},
                function(data) {
                    if (data.flag == 2) {
                        $('#alert_cnc').html('<span style="color: #18c42c;">данный ЧПУ удовлетворяет требованиям<span>');
                    } else if (data.flag == 1) {
                        $('#alert_cnc').html('<span style="color: 3f02222;">такой ЧПУ уже существует</span>');
                    } else {
                        $('#alert_cnc').html('<span style="color: 3f02222;">Ошибка проверки ЧПУ</span>');
                    }
                }, "json");
            }
        });
    });
</script>
<?php

$select_langs = DB::Query("select * from `?_lang` where active=1 order by place");

while ($get_lang = DB::GetArray($select_langs)) {

    $lang_id           = $get_lang['id'];
    $checked[$lang_id] = '';

    if ($active[$lang_id] == 1) {
        $checked[$lang_id] = "checked";
    }

    echo admin_func_right_table_row_start(2);
    echo admin_func_right_table_data("&nbsp;", "", 7);
    echo admin_func_right_table_row_start(3);
    echo admin_func_right_table_data("<a name='" . $get_lang["http_accept_language"] . "' ></a><font color=white>[$get_lang[title]]</font>", "", 1);
    echo admin_func_right_table_data(admin_func_right_input("checkbox", "active[$lang_id]", 1, "", $checked[$lang_id]) . "<font color=white>" . Dictionary::GetAdminWord(240) . "</font>", "", "2r");

    echo admin_func_right_table_row_start(2);
    echo admin_func_right_table_data("SEOTitle", "", "1l");
    $temp_in_title = '<input type="text" name="SEOTitle[' . $lang_id . ']" id="titleGlobal_' . $lang_id . '" value="' . $SEOTitle[$lang_id] . '" style="width: 335px;" />';
    echo admin_func_right_table_data($temp_in_title, "", "2r");

    echo admin_func_right_table_row_start(2);
    echo admin_func_right_table_data(Dictionary::GetAdminWord(178), "", "1l");
    $temp_in_title = '<input type="text" name="title[' . $lang_id . ']" id="title_' . $lang_id . '" value="' . $title[$lang_id] . '" style="width: 335px;" />';
    echo admin_func_right_table_data($temp_in_title, "", "2r");

    echo admin_func_right_table_row_start(2);
    echo admin_func_right_table_data("SEODescription", "", "1lb");
    echo admin_func_right_table_data(admin_func_right_input("", "SEODescription[$lang_id]", $SEODescription[$lang_id], 335, 3), "", "2br");

    echo admin_func_right_table_row_start(2);
    echo admin_func_right_table_data("SEOKeywords", "", "1lb");
    echo admin_func_right_table_data(admin_func_right_input("", "SEOKeywords[$lang_id]", $SEOKeywords[$lang_id], 335, 3), "", "2br");
    
    echo admin_func_right_table_row_start(2);
    echo admin_func_right_table_data(Dictionary::GetAdminWord(241) . ' <a href="#" onclick="window.open(\'/admin/ckeditor/?name=announce'. $lang_id .'\', \'CKEditor\', \'resizable=yes,width=\'+screen.width+\',height=\'+screen.height+\',left=30,top=30\');">Html редактор</a>', "", "3l");
    echo admin_func_right_table_data("<textarea id=\"announce$lang_id\" name=\"announce[$lang_id]\" style=\"width:425px;height:80px;\">$announce[$lang_id]</textarea>", "", "2r");    
    
    // echo admin_func_right_table_row_start(2);
    // echo admin_func_right_table_data("Cлоган", "", "3l");
    // echo admin_func_right_table_data(get_html_editor("slogan[{$lang_id}]"), "", "2r");
    // echo admin_func_right_table_row_start(2);
    // echo admin_func_right_table_data("<textarea id=slogan[$lang_id] name=slogan[$lang_id] style=\"width:100%;height:50px;\">$slogan[$lang_id]</textarea>", "", "7lbr");

    //echo admin_func_right_table_row_start(2);
    //echo admin_func_right_table_data("Аннонс", "", "3l");
    //echo admin_func_right_table_data(get_html_editor("announce[{$lang_id}]") . "&nbsp;|&nbsp;<a class=blue href=\"spec_includes.php?form=foreverForm&field=announce$lang_id\" onClick=\"newwin('spec_includes.php?form=foreverForm&field=announce[$lang_id]',800,520); return false;\">" . Dictionary::GetAdminWord(244) . "</a><br>", "", "2r");

    //echo admin_func_right_table_row_start(2);
    //echo admin_func_right_table_data("<textarea id=announce[$lang_id] name=announce[$lang_id] style=\"width:100%;height:170px;\">$announce[$lang_id]</textarea>", "", "7lbr");
}

echo admin_func_right_table_row_start(2);
echo admin_func_right_table_data(admin_func_right_input("submit", "", Dictionary::GetAdminWord(538), "", 1), "", 7);

echo admin_func_right_table_end();
echo "</form>";
echo "<br>";


echo "
	<script language=\"JavaScript\">
	function newwin2(url,width,height) {
	window.open(url, 'window', 'width='+width+',height='+height+',toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes');
	}
	</script>";

$select_config = DB::Query("select education from `?_config` ");
if (@array_shift(DB::GetArray($select_config)) == "0") {

    echo "<br><br>";
    echo "<table border=0 cellspacing=5 cellpadding=0 width=600>";
    echo "<tr bgcolor=ffffff>";
    echo "<td colspan=2>";
    echo "<b>" . Dictionary::GetAdminWord(246) . "</b>";

    echo "<tr bgcolor=ffffff>";
    echo "<td valign=top>";
    echo "<table cellspacing=1 cellpadding=3 border=0 bgcolor=627080>";
    echo "<tr bgcolor=#ffffff>";
    echo "<td valign=top><nobr><b>" . Dictionary::GetAdminWord(232) . " &nbsp;</b></nobr></td>";
    echo "</nobr></table>";
    echo "<td valign=top>";
    echo Dictionary::GetAdminWord(299);

    echo "<tr bgcolor=ffffff>";
    echo "<td valign=top>";
    echo "<table cellspacing=1 cellpadding=3 border=0 bgcolor=627080>";
    echo "<tr bgcolor=ffffff>";
    echo "<td valign=top><nobr><b>" . Dictionary::GetAdminWord(297) . " &nbsp;</b></nobr></td>";
    echo "</nobr></table>";
    echo "<td valign=top>";
    echo Dictionary::GetAdminWord(300);

    echo "<tr bgcolor=ffffff>";
    echo "<td valign=top>";
    echo "<table cellspacing=1 cellpadding=3 border=0 bgcolor=627080>";
    echo "<tr bgcolor=ffffff>";
    echo "<td valign=top><nobr><b>" . Dictionary::GetAdminWord(298) . " &nbsp;</b></nobr></td>";
    echo "</nobr></table>";
    echo "<td valign=top>";
    echo Dictionary::GetAdminWord(301);

    echo "<tr bgcolor=ffffff>";
    echo "<td valign=top>";
    echo "<table cellspacing=1 cellpadding=3 border=0 bgcolor=627080>";
    echo "<tr bgcolor=ffffff>";
    echo "<td valign=top><nobr><b>" . Dictionary::GetAdminWord(178) . " &nbsp;</b></nobr></td>";
    echo "</nobr></table>";
    echo "<td valign=top>";
    echo Dictionary::GetAdminWord(302);

    echo "<tr bgcolor=ffffff>";
    echo "<td valign=top>";
    echo "<table cellspacing=1 cellpadding=3 border=0 bgcolor=627080>";
    echo "<tr bgcolor=ffffff>";
    echo "<td valign=top><nobr><input type=checkbox name=active[1] value=1 > " . Dictionary::GetAdminWord(240) . "</nobr></td>";
    echo "</nobr></table>";
    echo "<td valign=top>";
    echo Dictionary::GetAdminWord(303);

    echo "<tr bgcolor=ffffff>";
    echo "<td valign=top>";
    echo "<input type=submit class=button value=\" " . Dictionary::GetAdminWord(440) . "\">";
    echo "<td valign=top>";
    echo "- " . Dictionary::GetAdminWord(622) . "";
    echo "</table>";
}

//конец таблицы
echo '</td></tr></table>';

include(BASEPATH . "/admin/admin_footer.php");
