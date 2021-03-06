<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Question */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="question-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'type')->dropDownList($model->getTypes()) ?>

    <?= $form->field($model, 'test_id')->hiddenInput()->label(false) ?>

<!--    --><?//= $form->field($model, 'root')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'lft')->textInput() ?>
<!---->
<!--    --><?//= $form->field($model, 'rgt')->textInput() ?>

<!--    --><?//= $form->field($model, 'depth')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
