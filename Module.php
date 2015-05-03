<?php
namespace cultivonsleweb\yii2\slug;

use Yii;
use yii\base\Application;
use yii\base\BootstrapInterface;
use yii\base\InvalidConfigException;
use yii\db\ActiveRecord;
use yii\web\GroupUrlRule;
use cultivonsleweb\yii2\slug\components\SlugUrlRule;
use cultivonsleweb\yii2\slug\models\ClwSlugs;

class Module extends \yii\base\Module implements BootstrapInterface {

    /**
     * Bootstrap method to be called during application bootstrap stage.
     * @param Application $app the application currently running
     */
    public function bootstrap($app){

        foreach (ClwSlugs::find() as $obj){
            $app->getUrlManager()->addRules([
                'rules' => [
                    $obj->pattern => $obj->route
                ]
            ]);
        }
        /*
        $groupUrlRule = new GroupUrlRule([
            'prefix' => $this->id,
            'rules' => [
                '<controller:(admin|copy|auth)>' => '<controller>',
                '<controller:(admin|copy|auth)>/<action:\w+>' => '<controller>/<action>',
                '<action:\w+>' => 'default/<action>',
            ],
        ]);
        $app->getUrlManager()->addRules([
            // rule declarations here
        ], false);
        */
    }
}