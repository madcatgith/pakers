<?php
$langID = Lang::getID();
$iblock = new IBlock('preform', Lang::getID());
$iblock->setTpl('preform')->addWhere('product_id='.Url::get('productID'))->addOrder('id')->setPrepare(function($data) {
    foreach ($data as $item) {
		$item->set('name', $item->get('type_min'));
    }
	return $data;
})->displayList();

/*if(count($data = $iblock->getList()) {
	$iblock->displayList();
}*/