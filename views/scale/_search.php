<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ScaleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scale-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'created') ?>

    <?= $form->field($model, 'updated') ?>

    <?= $form->field($model, 'author_id') ?>

    <?= $form->field($model, 'scale_id') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'test_id') ?>

    <?php // echo $form->field($model, 'default') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
