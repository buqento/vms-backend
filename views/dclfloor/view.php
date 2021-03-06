<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Lantai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dclfloor-view">

    <h1>#<?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute' => 'building_id',
                'value' => function($data){
                    return $data->building->name;
                }
            ],
        ],
    ]) ?>

</div>
