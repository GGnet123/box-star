<?php

use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SettingsText */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-text-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'call_us_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about_us')->widget(CKEditor::className(), [
        'kcfinder' => true,
    ]); ?>

    <?= $form->field($model, 'one_tick_header')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'one_tick_content')->widget(CKEditor::className(), [
        'kcfinder' => true,
    ]); ?>

    <?= $form->field($model, 'two_tick_header')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'two_tick_content')->widget(CKEditor::className(), [
        'kcfinder' => true,
    ]); ?>

    <?= $form->field($model, 'three_tick_header')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'three_tick_content')->widget(CKEditor::className(), [
        'kcfinder' => true,
    ]); ?>

    <?= $form->field($model, 'four_tick_header')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'four_tick_content')->widget(CKEditor::className(), [
        'kcfinder' => true,
    ]); ?>

    <?= $form->field($model, 'five_tick_header')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'five_tick_content')->widget(CKEditor::className(), [
        'kcfinder' => true,
    ]); ?>

    <?= $form->field($model, 'six_tick_header')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'six_tick_content')->widget(CKEditor::className(), [
        'kcfinder' => true,
    ]); ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
