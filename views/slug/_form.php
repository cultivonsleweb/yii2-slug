<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model cultivonsleweb\yii2\slug\models\ClwSlugs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clw-slugs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pattern')->textarea(['rows' => 6])->label(Yii::t('cultivonsleweb','Pattern')) ?>

    <?= $form->field($model, 'route')->textarea(['rows' => 6])->label(Yii::t('cultivonsleweb','Route')) ?>

    <?= $form->field($model, 'suffix')->textInput(['maxlength' => 100])->label(Yii::t('cultivonsleweb','Suffix')) ?>

    <?= $form->field($model, 'defaults')->textarea(['rows' => 6])->label(Yii::t('cultivonsleweb','Defaults')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('cultivonsleweb', 'Create') : Yii::t('cultivonsleweb', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
