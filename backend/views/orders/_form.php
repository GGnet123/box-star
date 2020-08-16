<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'client_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'client_phone')->widget(\yii\widgets\MaskedInput::class, [
        'mask' => '+1 (999) 999-9999'
    ]) ?>

    <?php $move_type = \backend\models\MoveTypes::find()->all(); ?>
    <?= $form->field($model, 'move_type_id')->dropDownList(\yii\helpers\ArrayHelper::map($move_type, 'id', 'title')) ?>

    <?php $move_size = \backend\models\MoveSizes::find()->all(); ?>
    <?= $form->field($model, 'move_size_id')->dropDownList(\yii\helpers\ArrayHelper::map($move_size, 'id', 'title')) ?>

    <?= $form->field($model, 'rooms_number_id')->dropDownList(\backend\models\Orders::$rooms) ?>

    <?php $city = \backend\models\Cities::find()->all() ?>
    <?= $form->field($model, 'origin_city_id')->widget(\kartik\select2\Select2::class, [
            'data' => \yii\helpers\ArrayHelper::map($city, 'id', 'zip_code')
    ]) ?>

    <?= $form->field($model, 'destination_city_id')->widget(\kartik\select2\Select2::class, [
            'data' => \yii\helpers\ArrayHelper::map($city, 'id', 'zip_code')
    ]) ?>

    <?= $form->field($model, 'move_date')->widget(\kartik\date\DatePicker::class, [
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

<?php
    $with_rooms = \backend\models\MoveSizes::find()->select('id')->where(['with_rooms' => 1])->all();
    $array = json_encode(array_column($with_rooms, 'id'));

$js = <<<JS
    let rooms = $('#orders-rooms_number_id');
    let move_size = $('#orders-move_size_id');
    let rooms_label = $("label[for='orders-rooms_number_id']");
    rooms.hide();
    var arr = $array;
    function showRooms() {
        let bool = false;
        for (let i = 0; i < arr.length; i++) {
            if (move_size.val() == arr[i]) {
                bool = true;
            }
        }
        
        if (bool === true) {
            rooms_label.show();
            rooms.show();
        } else {
            rooms_label.hide();
            rooms.hide();
        }
    }
   
    $(document).ready(function() {
        showRooms();
    });

    move_size.change(function() {
        showRooms();
    });
JS;

$this->registerJs($js);
?>
