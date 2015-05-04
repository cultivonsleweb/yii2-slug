<?php

namespace cultivonsleweb\yii2\slug\components;

use Yii;
use yii\web\UrlManager;
use cultivonsleweb\yii2\slug\models\ClwSlugs;

class SlugUrlManager extends UrlManager {

    public function init (){
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
        return ['site/test'];
        if ($this->enablePrettyUrl) {
            $pathInfo = $request->getPathInfo();
            if ( strstr($pathInfo, 'slug/')){
                $str = explode("/",$pathInfo);
                $key = 0;
                foreach ($str as $index => $tag){
                    if ( $tag == 'slug' ){
                        $key = $index+1;
                    }
                }
                if ( 0 != $key ){
                    return ClwSlugs::find()->where([
                        'id_slug' => $key
                    ])->One()->route;
                }
            }
            /*
            $str = explode("/",$pathInfo);
            print_r ( $str );
            foreach (ClwSlugs::find()->where([
                'id_slug' => ':slug'
            ])->params([
                    ':slug'=>$str[1]
                ]) as $obj){
                return $obj->route;
            }
            */
        }

        return parent::parseRequest($request);
    }

} 