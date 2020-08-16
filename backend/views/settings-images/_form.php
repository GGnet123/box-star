<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SettingsImages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-images-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'about_us_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'our_service_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'our_service_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'our_service_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment_section_image')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
