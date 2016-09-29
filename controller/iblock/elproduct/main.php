<?php
$langID = Lang::getID();
$iblock = new IBlock('elproduct', Lang::getID());
$iblock->setTpl('elproduct')->addWhere('product_id='.Url::get('productID'))->addOrder('id')->setPrepare(function($data) {
    foreach ($data as $item) {
		$item->set('type_min', $item->get('type_min'));
		$item->set('polus', $item->get('polus'));
		$item->set('engine_type_t', $item->get('engine_type_t'));
		$item->set('engine_type', $item->get('engine_type'));
		$item->set('phase_count', $item->get('phase_count'));
		$item->set('execution', $item->get('execution'));
		$item->set('min_pow', $item->get('min_pow'));
    }
	return $data;
})->displayList();

/*if(count($data = $iblock->getList()) {
	$iblock->displayList();
}*/