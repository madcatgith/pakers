<?php

namespace Banner;

class BannerController {
    
    public function actionIndex() {
        $tpl = new \Template;
        $tpl->assign('data', BannerModel::model()->findAll());
        return $tpl->fetch(VIEW . 'index.tpl');
    }
    
    public function actionInsert() {
        $tpl = new \Template;

        if (filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY)) {
            if (BannerModel::model()->insert(filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY))) {
                $tpl->assign('success', 'Запись успешно добавлена.');
            } else {
                $tpl->assign('error', 'Ошибка при добавлении записи.');
            }
        }

        return $tpl->fetch(VIEW . 'insert.tpl');        
    } 
    
    public function actionUpdate() {
        $tpl = new \Template;

        if (filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY)) {
            if (BannerModel::model()->update(filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY))) {
                $tpl->assign('success', 'Запись успешно изминена.');
            } else {
                $tpl->assign('error', 'Ошибка при изминении записи.');
            }
        }

        $tpl->assign('data', BannerModel::model()->findOne(\AUrl::get('bannerID')));

        return $tpl->fetch(VIEW . 'update.tpl');        
    }
}

