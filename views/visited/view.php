<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\tabs\TabsX;

/* @var $this yii\web\View */
/* @var $model app\models\Visited */

$this->title = $model->visit_code;
$this->params['breadcrumbs'][] = ['label' => 'Kunjungan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visited-view">

<?php $content1 = DetailView::widget([
    'model' => $model,
    'attributes' => [
        // 'id',
        'guest_name',
        'id_type',
        'id_number',
        'gender',
        'phone_number',
        'email:email',
        'photo',
        'address',
        'visit_code',
        'destination',
        'dt_visit:datetime',
        'long_visit',
        'additional_info:ntext',
        'created:datetime',
    ],
]) ?>

<?php
echo TabsX::widget([
    'position' => TabsX::POS_ABOVE,
    'align' => TabsX::ALIGN_LEFT,
    'items' => [
        [
            'label' => 'Detail Pengunjung',
            'content' => $content1,
            'active' => true
        ],
        [
            'label' => 'Log Pengunjung',
            'content' => 'Log',
            // 'headerOptions' => ['style'=>'font-weight:bold'],
            'options' => ['id' => 'myveryownID'],
        ],
        
    ],
]);
?>




</div>