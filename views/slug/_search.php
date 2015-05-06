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

    <?= $form->field($model, 'id_slug')->label(Yii::t('cultivonsleweb','Id slug')) ?>

    <?= $form->field($model, 'pattern')->label(Yii::t('cultivonsleweb','Pattern')) ?>

    <?= $form->field($model, 'route')->label(Yii::t('cultivonsleweb','Route')) ?>

    <?= $form->field($model, 'suffix')->label(Yii::t('cultivonsleweb','Suffix')) ?>

    <?= $form->field($model, 'defaults')->label(Yii::t('cultivonsleweb','Defaults')) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('cultivonsleweb', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('cultivonsleweb', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
