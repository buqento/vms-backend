<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Dclbuilding;
use app\models\Dclfloor;
use dosamigos\ckeditor\CKEditor;
use kartik\select2\Select2;
use kartik\file\FileInput;
use kartik\time\TimePicker;
?>

<div class="dcldestination-form">

    <?php $form = ActiveForm::begin(); ?>

<div class="col-md-4">
    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'open_hour')->widget(TimePicker::classname(), []) ?>

    <?= $form->field($model, 'close_hour')->widget(TimePicker::classname(), []) ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

</div>
<div class="col-md-4">    

    <?= $form->field($model, 'profile')->textarea(['rows' => 10]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 3]) ?>

</div>
<div class="col-md-4">


    <?= $form->field($model, 'picture')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
        ])
    ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
</div>
<div class="col-md-4">
    <?php ActiveForm::end(); ?>

</div>
