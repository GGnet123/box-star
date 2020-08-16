<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MoveTypes */

$this->title = 'Update Move Types: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Move Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="move-types-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
