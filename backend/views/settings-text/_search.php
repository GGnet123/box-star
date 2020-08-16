<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SettingsTextSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-text-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'call_us_number') ?>

    <?= $form->field($model, 'about_us') ?>

    <?= $form->field($model, '1_tick_header') ?>

    <?= $form->field($model, '1_tick_content') ?>

    <?php // echo $form->field($model, '2_tick_header') ?>

    <?php // echo $form->field($model, '2_tick_content') ?>

    <?php // echo $form->field($model, '3_tick_header') ?>

    <?php // echo $form->field($model, '3_tick_content') ?>

    <?php // echo $form->field($model, '4_tick_header') ?>

    <?php // echo $form->field($model, '4_tick_content') ?>

    <?php // echo $form->field($model, '5_tick_header') ?>

    <?php // echo $form->field($model, '5_tick_content') ?>

    <?php // echo $form->field($model, '6_tick_header') ?>

    <?php // echo $form->field($model, '6_tick_content') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
