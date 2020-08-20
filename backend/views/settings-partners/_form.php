<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SettingsPartners */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-partners-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo')->widget(\kartik\file\FileInput::class, [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'initialPreview'=>[Yii::$app->params['frontAssets'] .  $model->logo],
            'initialPreviewAsData'=>true,
            'overwriteInitial'=>false,
            'uploadUrl' => \yii\helpers\Url::to(['settings-partners/save-logo'], ['data-method' => 'POST']),
            'deleteUrl' => \yii\helpers\Url::to(['settings-partners/delete-logo'], ['data-method' => 'POST']),
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
