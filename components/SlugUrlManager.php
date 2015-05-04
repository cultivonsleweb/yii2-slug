<?php

namespace cultivonsleweb\yii2\slug\components;

use Yii;
use yii\web\UrlManager;
use cultivonsleweb\yii2\slug\models\ClwSlugs;

class SlugUrlManager extends UrlManager {

    public function init (){
        foreach (ClwSlugs::find()->all() as $obj){

            $this->addRules([
                [
                    'pattern' => "$obj->pattern",
                    'route' => "$obj->route",
                    'suffix' => "$obj->suffix",
                    'defaults' => "$obj->defaults"
                ]
            ], true);
        }

        parent::init();
    }



} 