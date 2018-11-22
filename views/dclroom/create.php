<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dclroom */

$this->title = 'Tambah Ruangan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dclroom-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
