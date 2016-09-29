<?php
$langID = Lang::getID();
$iblock = new IBlock('portfolio', Lang::getID());
$iblock->addWhere('t.showSidebar=1')->setMenuID(4)
->addSelect('cat_l.title as category_title')
->addTable('LEFT JOIN ?_category as cat ON t.category_id = cat.id')
->addTable('LEFT JOIN ?_category_lang as cat_l ON cat_l.id = cat.id and cat_l.lang_id = t_l.lang_id')
->setPrepare(function($data) {
			foreach($data as $item){
				$item->set('portfolio_href', Url::setUrl(array('lang' => $langID,'menu' => 4)));
			}
			return $data;
			})
->setTpl('showMain')->displayList();