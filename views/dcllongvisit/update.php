<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dcllongvisit */

$this->title = 'Ubah Lama Kunjungan: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Lama Kunjungan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Ubah';
?>
<div class="dcllongvisit-update">

    <h1>#<?= Html::encode($model->id) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
