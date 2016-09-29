<?php

$langID = Lang::getID();
$portfolioID = Url::get('portfolioID') ?: 0;

try {
    $iblock = new IBlock('portfolio', $langID);
    $iblock 
        ->setOnPage(Menu::get($langID, 4, 'onPage'))
        ->setPage(Url::get('page'))
        ->setMenuID(4)
		->addSelect('cat_l.title as category_title')
		->addTable('LEFT JOIN ?_category as cat ON t.category_id = cat.id')
		->addTable('LEFT JOIN ?_category_lang as cat_l ON cat_l.id = cat.id and cat_l.lang_id = t_l.lang_id')
		->setTpl('main');
   
    if($portfolioID) {
		$element_info = $iblock->getOne($portfolioID);
		$element_sort = $element_info->get('sort');
		$sql = 'select  t.sort 
            from wmp_portfolio as t
            where t.active = 1 order by t.sort desc limit 0,1';
		$query = Registry::get('db')->query($sql)->fetch();		
		$max_sort = $query['sort'];
		$iblock->setPrepare(function($data) use ($portfolioID, $langID, $element_sort, $max_sort) {
            $data->set('portfolio_href', Url::setUrl(array('lang' => $langID,'menu' => 4)));
			$iblock_prev = new IBlock('portfolio', $langID);
			$prev = $iblock_prev->setOnPage(1)
						->setPage(Url::get('page'))
						->setMenuID(4)
						->addWhere('t.sort = ' . ($element_sort > 1 ? $element_sort - 1 :  $max_sort))
						->getList();
			if($prev){
				$data->set('prev_href', $prev[0]->get('href'));
			}
			$iblock_next = new IBlock('portfolio', $langID);
			$next = $iblock_next->setOnPage(1)
						->setPage(Url::get('page'))
						->setMenuID(4)
						->addWhere('t.sort = ' . ($element_sort != $max_sort ? $element_sort + 1 :  1))
						->getList();
			if($next){
				$data->set('next_href', $next[0]->get('href'));		
			}
			return $data;
        });
        if($return) {
            return $iblock->showOne($portfolioID);
        } else {
            $iblock->displayOne($portfolioID);
        }
    } else {
        if($return) {
            return $iblock->showList();
        } else {
            $iblock->displayList();
        }
    }
} catch (AException $e) {
    return $e->logError();
}