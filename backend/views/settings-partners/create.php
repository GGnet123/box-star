<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SettingsPartners */

$this->title = 'Create Settings Partners';
$this->params['breadcrumbs'][] = ['label' => 'Settings Partners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-partners-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
