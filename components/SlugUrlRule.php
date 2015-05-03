<?php
namespace cultivonsleweb\yii2\slug\components;

use Yii;
use yii\web\ErrorAction;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\data\DataProviderInterface;
use yii\data\ActiveDataProvider;
use yii\web\UrlRule;
use yii\web\Request;
use yii\web\UrlRuleInterface;
use cultivonsleweb\yii2\slug\models\ClwSlugs;

/**
 * Class SlugUrlRule
 * @package cultivonsleweb\yii2\slug
 * @author Qiang Xue <qiang.xue@gmail.com>, Arnaud Méhat <amehat@gmail.com>
 * @since 2.0
 */
class SlugUrlRule extends UrlRule implements UrlRuleInterface {

    /**
     * Init class name
     *
     * @return void
     */
    public function init(){
        if ( null === $this->name ) {
            $this->name = __CLASS__;
        }
    }

    /**
     * Parses the given request and returns the corresponding route and parameters.
     * @param UrlManager $manager the URL manager
     * @param Request $request the request component
     * @return array|boolean the parsing result. The route and the parameters are returned as an array.
     * If false, it means this rule cannot be used to parse this path info.
     */
    public function parseRequest($manager, $request){
        $route = $params = '';
die ("request: $request");
        $sPathInfo = $request->getPathInfo();
        $aPathInfo = explode("/",$sPathInfo);

        $slug = ClwSlugs::find()
            ->where('slug=:slug AND controller_action !=:action')
            ->params([':slug'=>$aPathInfo[1],':action'=>'site/index'])
            ->one();

        if(!$slug)
        {
            return false;  // this rule does not apply
        }

        $route = $slug->controller_action;
        $params['id_slug'] = $slug->id_slug;
        return [$route, $params];
    }

    /**
     * Creates a URL according to the given route and parameters.
     * @param UrlManager $manager the URL manager
     * @param string $route the route. It should not have slashes at the beginning or the end.
     * @param array $params the parameters
     * @return string|boolean the created URL, or false if this rule cannot be used for creating this URL.
     */
    public function createUrl($manager, $route, $params){
        $slug = false;

        $slug = ClwSlugs::find()
            ->where('id_slug=:slug AND controller_action !=:action')
            ->params([':id_slug'=>$params[1],':action'=>'site/index'])
            ->one();

        if ( !$slug){
            return false;
        }
        return "{$slug->slug}";
    }
} 