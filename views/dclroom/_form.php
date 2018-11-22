<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use app\models\DclDestination;
use app\models\DclFloor;
use app\models\DclBuilding;
use kartik\select2\Select2;
use kartik\depdrop\DepDrop;
?>

<div class="dclroom-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
        $buildings = DclBuilding::find()->select('name')->indexBy('id')->column();
        echo $form->field($model, 'building_id')->widget(Select2::classname(),
            [
                'data' => $buildings,
                'options' => ['id' => 'building-id', 'prompt' => 'Pilih Gedung'],
            ]); 
    ?>

    <?php
        echo $form->field($model, 'floor_id')->widget(DepDrop::classname(), [
            'type'=>DepDrop::TYPE_SELECT2,
            'options'=>['prompt' => 'Pilih Lantai'],
            'pluginOptions'=>[
                'depends'=>['building-id'],
                'placeholder'=>'Pilih Lantai',
                'url'=>Url::to(['/dclroom/floor'])
            ]
        ]);
    ?>

    <?php
	    $tenant = DclDestination::find()->select('company_name')            
	    	->indexBy('id')
			->column();
	    echo $form->field($model, 'tenant_id')->widget(Select2::classname(),
	    	[
	    		'data' => $tenant,
	    		'options' => ['id' => 'tenant-id'],
	    ]); 
    ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
