<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Orders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'client_name',
            [
                'attribute' => 'client_phone',
                'filter' => \yii\widgets\MaskedInput::widget([
                    'mask' => '+1 (999) 999-9999',
                    'name' => 'OrdersSearch[client_phone]'
                ])
            ],
            [
                'attribute' => 'move_type_id',
                'filter' => \yii\helpers\ArrayHelper::map(\backend\models\MoveTypes::find()->all(), 'id', 'title'),
                'value' => function($model) {
                    return $model->moveType->title;
                }
            ],
            [
                'attribute' => 'move_size_id',
                'filter' => \yii\helpers\ArrayHelper::map(\backend\models\MoveSizes::find()->all(), 'id', 'title'),
                'value' => function($model) {
                    return $model->moveSize->title;
                }
            ],
            [
                'attribute' => 'origin_city_id',
                'filter' => \yii\helpers\ArrayHelper::map(\backend\models\Cities::find()->all(), 'id', 'title'),
                'value' => function($model) {
                    return $model->originCity->title;
                }
            ],
            [
                'attribute' => 'destination_city_id',
                'filter' => \yii\helpers\ArrayHelper::map(\backend\models\Cities::find()->all(), 'id', 'title'),
                'value' => function($model) {
                    return $model->destinationCity->title;
                }
            ],
            [
                'attribute' => 'move_date',
                'filter' => \yii\jui\DatePicker::widget([
                    'dateFormat' => 'yyyy-MM-dd',
                    'name' => 'OrdersSearch[move_date]',
                    'options' => [
                        'class' => 'form-control',
                        'autocomplete' => 'off'
                    ]
                ]),
                'value' => function ($model) {
                    return date('Y-m-d', strtotime($model->move_date));
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>