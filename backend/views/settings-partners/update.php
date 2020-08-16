<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SettingsPartners */

$this->title = 'Update Settings Partners: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Settings Partners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="settings-partners-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
