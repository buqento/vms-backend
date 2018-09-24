<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Userapp */

$this->title = 'Tambah';
$this->params['breadcrumbs'][] = ['label' => 'Pengguna', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userapp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
