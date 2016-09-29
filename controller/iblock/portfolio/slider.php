<?php
$langID = Lang::getID();
$iblock = new IBlock('portfolio', Lang::getID());
$iblock->setMenuID(4)->setTpl('slider')->setPrepare(function($data) {
    foreach ($data as $item) {
        $item->set('logo', $item->get('logo'));
		$item->set('title', $item->get('title'));
		$item->set('preview', $item->get('preview'));
		$item->set('text', $item->get('text'));
    }
    return $data;
})->displayList();