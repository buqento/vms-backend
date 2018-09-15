<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dcllongvisit */

$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'Lama Kunjungan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dcllongvisit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
