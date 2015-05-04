<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model cultivonsleweb\yii2\slug\models\SlugSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clw-slugs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_slug') ?>

    <?= $form->field($model, 'pattern') ?>

    <?= $form->field($model, 'route') ?>

    <?= $form->field($model, 'suffix') ?>

    <?= $form->field($model, 'defaults') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('cultivonsleweb', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('cultivonsleweb', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
