<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model cultivonsleweb\yii2\slug\models\ClwSlugs */

$this->title = $model->id_slug;
$this->params['breadcrumbs'][] = ['label' => Yii::t('cultivonsleweb', 'Clw Slugs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clw-slugs-view">

    <h1><?= Yii::t('cultivonsleweb', 'Slug:') . ' ' . Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('cultivonsleweb', 'Update'), ['update', 'id' => $model->id_slug], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('cultivonsleweb', 'Delete'), ['delete', 'id' => $model->id_slug], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('cultivonsleweb', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'id_slug',
                'label' => Yii::t('cultivonsleweb', 'Id slug')
            ],
            [
                'attribute' => 'pattern',
                'label' => Yii::t('cultivonsleweb', 'Pattern')
            ],
            [
                'attribute' => 'route',
                'label' => Yii::t('cultivonsleweb', 'Route')
            ],
            [
                'attribute' => 'suffix',
                'label' => Yii::t('cultivonsleweb','Suffix')
            ],
            [
                'attribute' => 'defaults',
                'label' => Yii::t('cultivonsleweb', 'Defaults')
            ],
        ],
    ]) ?>

</div>
