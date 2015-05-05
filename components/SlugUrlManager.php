<?php

namespace cultivonsleweb\yii2\slug\components;

use Yii;
use yii\web\UrlManager;
use cultivonsleweb\yii2\slug\models\ClwSlugs;

class SlugUrlManager extends UrlManager {

    public function init (){
        Yii::$app->getModule("slug")->init();
        foreach (ClwSlugs::find()->all() as $obj){

            foreach (ClwSlugs::find()->all() as $obj){
                $rules = [
                    'pattern' => "$obj->pattern",
                    'route' => "$obj->route",
                    'suffix' => "$obj->suffix"
                ];
                $default = $obj->defaults;
                if (  0 != strlen((string)$default) ){
                    $rules['defaults'] = (array)"$obj->defaults";
                }

                $this->addRules([
                    $rules
                ], true);
            }
        }
        parent::init();
    }

    public function parseRequest($request){
        return parent::parseRequest($request);
    }


} 