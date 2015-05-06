<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel cultivonsleweb\yii2\slug\models\SlugSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('cultivonsleweb', 'Manage Slugs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clw-slugs-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('cultivonsleweb', 'Create Clw Slugs'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
