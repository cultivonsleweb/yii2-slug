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
     * @var string Alias for module
     */
    public $alias = "@slug";

    public $modelClasses = [];

    public function init(){
        parent::init();

        $this->checkModuleProperties();

        // set up i8n
        if (empty(Yii::$app->i18n->translations['cultivonsleweb'])) {
            Yii::$app->i18n->translations['cultivonsleweb'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => __DIR__ . '/messages',
                //'forceTranslation' => true,
            ];
        }
        // override modelClasses
        $this->modelClasses = array_merge($this->getDefaultModelClasses(), $this->modelClasses);
        // set alias
        $this->setAliases([
            $this->alias => __DIR__,
        ]);
    }

    protected function checkModuleProperties(){
        $className = get_called_class();


    }

    protected function getDefaultModelClasses(){
        return [
            'Slug' => 'cultivonsleweb\yii2\slug\models\ClwSlugs',
        ];
    }

    /**
     * Bootstrap method to be called during application bootstrap stage.
     * @param Application $app the application currently running
     */
    public function bootstrap($app){

    }
}