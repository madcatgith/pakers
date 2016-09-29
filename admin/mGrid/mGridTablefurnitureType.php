<?php

$GridTitle = "Вид мебели";
$from      = array(
	"table" => "furnitureType",
	"as" => "fT",
	"style" => "width: 100%;",
    "nonlang" => true,
	"nonlang_field" => array (
			"id" => array(
			//отображаемое название поля
			"title" => "id",
			// css-стиль отображения в редакторе
			"style" => "width: 100%;",
			// css-стиль отображения в таблице
			"tablestyle" => "width: 40px;",
			// тип поля лейбл, который выводится, но не редактируется
			"colType" => "lbl"
		),
		"title" => array(
			"title" => "Вид мебели",
			"colType" => "text",
			"search" => true
		),
		"active"      => array(
			"title"=> "Активность",
			"colType" => "check",
            "tablestyle" => "width: 90px; text-align: center;"
		),
	),
	"row_seq" => array("id", "title", "active")
);