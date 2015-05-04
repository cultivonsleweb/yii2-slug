<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model cultivonsleweb\yii2\slug\models\ClwSlugs */

$this->title = Yii::t('cultivonsleweb', 'Update {modelClass}: ', [
    'modelClass' => 'Clw Slugs',
]) . ' ' . $model->id_slug;
$this->params['breadcrumbs'][] = ['label' => Yii::t('cultivonsleweb', 'Clw Slugs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_slug, 'url' => ['view', 'id' => $model->id_slug]];
$this->params['breadcrumbs'][] = Yii::t('cultivonsleweb', 'Update');
?>
<div class="clw-slugs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
