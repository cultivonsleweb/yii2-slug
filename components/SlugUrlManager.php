<?php

namespace cultivonsleweb\yii2\slug\components;

use Yii;
use yii\web\UrlManager;
use cultivonsleweb\yii2\slug\models\ClwSlugs;

class SlugUrlManager extends UrlManager {

    public function init (){


        foreach (ClwSlugs::find()->all() as $obj){

            $this->addRules([
                "$obj->pattern" => "$obj->route"
               // 'test-me' => 'site/test'
            ], true);
        }

        /*
        $this->rules = [
            'test-me' => 'site/test'
        ];*/
        parent::init();
    }
} 