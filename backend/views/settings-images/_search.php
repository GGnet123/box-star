<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SettingsImagesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-images-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'about_us_image') ?>

    <?= $form->field($model, 'our_service_1') ?>

    <?= $form->field($model, 'our_service_2') ?>

    <?= $form->field($model, 'our_service_3') ?>

    <?php // echo $form->field($model, 'comment_section_image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
