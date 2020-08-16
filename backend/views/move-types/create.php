<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MoveTypes */

$this->title = 'Create Move Types';
$this->params['breadcrumbs'][] = ['label' => 'Move Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="move-types-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
