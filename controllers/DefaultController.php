<?php
namespace cultivonsleweb\yii2\slug\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\widgets\ActiveForm;

class DefaultController extends Controller {

    public function actionIndex(){
        return $this->render('index');
    }
} 