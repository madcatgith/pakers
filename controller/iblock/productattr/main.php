<?php
$langID = Lang::getID();
$iblock = new IBlock('productattr', Lang::getID());
$iblock->setTpl('productattr')->addWhere('product_id='.Url::get('productID'))->addOrder('id')->setPrepare(function($data) {
    
    foreach ($data as $item) {
        $item->set('type', $item->get('type'));
		$item->set('minTonque', $item->get('minTonque'));
		$item->set('maxTonque', $item->get('maxTonque'));
		$item->set('minCapacity', $item->get('minCapacity'));
		$item->set('maxCapacity', $item->get('maxCapacity'));
		$item->set('minGearRatio', $item->get('minGearRatio'));
		$item->set('maxGearRatio', $item->get('maxGearRatio'));
                $item->set('poles', $item->get('poles'));
                $item->set('insttype', $item->get('instttype'));
                $item->set('motortype', $item->get('motortype'));
                $item->set('phases', $item->get('phases'));
                $item->set('desc', $item->get('desc'));
                $item->set('electric', $item->get('electric'));
                
    }
    return $data;
})->displayList();

/*if(count($data = $iblock->getList()) {
	$iblock->displayList();
}*/