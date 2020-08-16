<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Orders */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="orders-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'client_name',
            'client_phone',
            [
                'attribute' => 'move_type_id',
                'value' => $model->moveType->title
            ],
            [
                'attribute' => 'move_size_id',
                'value' => $model->moveSize->title
            ],
            [
                'attribute' => 'origin_city_id',
                'value' => $model->originCity->title
            ],
            [
                'attribute' => 'destination_city_id',
                'value' => $model->destinationCity->title
            ],
            'move_date',
        ],
    ]) ?>

</div>