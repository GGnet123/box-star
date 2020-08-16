<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SettingsText */

$this->title = 'Create Settings Text';
$this->params['breadcrumbs'][] = ['label' => 'Settings Texts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-text-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
