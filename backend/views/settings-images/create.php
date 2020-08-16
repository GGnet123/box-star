<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SettingsImages */

$this->title = 'Create Settings Images';
$this->params['breadcrumbs'][] = ['label' => 'Settings Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-images-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
