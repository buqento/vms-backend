<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DclfloorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lantai';
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
        // 'filterModel' => $searchModel,
        'summary' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            [
                'attribute' => 'building_id',
                'value' => function($data){
                    return $data->building->name;
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

