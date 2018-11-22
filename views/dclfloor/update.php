<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dclfloor */

$this->title = 'Ubah Lantai';
$this->params['breadcrumbs'][] = ['label' => 'Lantai', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="dclfloor-update">

    <h1><?= $this->title ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
