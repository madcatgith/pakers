<?php

$GridTitle = 'Преформа';
$from = array(
    'jsSort' => 1,
    'jsSortField' => 'sort',
    'table' => 'preform',
    'as' => 'preform',
    'lang' => 1,
    'limit' => 100,
    'islanged' => false,
    'style' => 'width:100%',
    'orderby' => 'preform.sort',
    'nonlang_field' => array(
        'id' => array(
            'title' => 'ID',
            'tablestyle' => 'width: 40px;',
            'colType' => 'lbl'
        ),
        'active' => array(
            'title' => 'Активность',
            'tablestyle' => 'width: 70px;',
            'colType' => 'check'
        ),
		 
    ),
    'multylang_field' => array(
		'type_min' => array(
            'title' => 'Типоразмер',
            'tablestyle' => 'width:200px;',
            'colType' => 'text'
        ),
		'polus' => array(
            'title' => 'Полюса',
            'tablestyle' => 'width:200px;',
            'colType' => 'text'
        ),
		'engine_type_t' => array(
            'title' => 'Тип крепления двигателя',
            'tablestyle' => 'width:200px;',
            'colType' => 'text'
        ),
		'engine_type' => array(
            'title' => 'Тип двигателя',
            'tablestyle' => 'width:200px;',
            'colType' => 'text'
        ),
		'phase_count' => array(
            'title' => 'Количевство фаз',
            'tablestyle' => 'width:200px;',
            'colType' => 'text'
        ),
		'execution' => array(
            'title' => 'Исполнение',
            'tablestyle' => 'width:200px;',
            'colType' => 'text'
        ),
		'min_pow' => array(
            'title' => 'Мощность',
            'tablestyle' => 'width:200px;',
            'colType' => 'text'
        ),
    ),
    'row_seq' => array('id', 'active')
);
