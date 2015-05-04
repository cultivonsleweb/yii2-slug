<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model cultivonsleweb\yii2\slug\models\ClwSlugs */

$this->title = Yii::t('cultivonsleweb', 'Create Clw Slugs');
$this->params['breadcrumbs'][] = ['label' => Yii::t('cultivonsleweb', 'Clw Slugs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clw-slugs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
