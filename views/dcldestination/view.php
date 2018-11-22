<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tenant', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dcldestination-view">
    <h1>#<?= $this->title ?></h1>
    <div class="col-md-4">
        <img class="img-thumbnail" src="<?= $model->picture ?>">
    </div>
    <div class="col-md-8">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                // 'id',
                'company_name',
                'open_hour',
                'close_hour',
                'phone',
                'email:email',
                // 'profile:ntext',
                // 'picture',
                // 'address:ntext',
            ],
        ]) ?>
    </div>

</div>
