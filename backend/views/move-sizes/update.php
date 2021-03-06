<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MoveSizes */

$this->title = 'Update Move Sizes: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Move Sizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="move-sizes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
