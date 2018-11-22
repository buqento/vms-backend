<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Ruangan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dclroom-index">

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
        // 'filterModel' => $searchModel,
        'summary' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            [
                'attribute' => 'tenant_id',
                'value' => function($data){
                    return $data->tenant->company_name;
                }
            ],
            [
                'attribute' => 'floor_id',
                'value' => function($data){
                    return $data->floor->name;
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
