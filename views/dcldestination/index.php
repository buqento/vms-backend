<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Tenant';
$this->params['breadcrumbs'][] = $this->title;
?>

    <div>
        <div class="col-md-6 text-left">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="col-md-6 text-right">
            <p>
            <br>
            <?= Html::a('<span class="glyphicon glyphicon-plus"></span> Tambah Data', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
        </div>
    <div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'company_name',
            'open_hour',
            'close_hour',
            //'phone',
            //'email:email',
            //'profile:ntext',
            //'picture',
            //'address:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

