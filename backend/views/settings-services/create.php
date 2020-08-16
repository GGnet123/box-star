<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SettingsServices */

$this->title = 'Create Settings Services';
$this->params['breadcrumbs'][] = ['label' => 'Settings Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-services-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
