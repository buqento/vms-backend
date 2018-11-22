<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\models\DclBuilding;
?>

<div class="dclfloor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php 
        $building_id = DclBuilding::find()->select(['name'])->indexBy('id')->column();
        echo $form->field($model, 'building_id')->widget(Select2::classname(), [
            'data' => $building_id
        ]);
    ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
