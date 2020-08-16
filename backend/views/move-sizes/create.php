<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MoveSizes */

$this->title = 'Create Move Sizes';
$this->params['breadcrumbs'][] = ['label' => 'Move Sizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="move-sizes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
