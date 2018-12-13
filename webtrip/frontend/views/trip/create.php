<?php
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


?>
<div class="site-trip">

    <div class="row">
        <h1>You are planing a trip to <?= $country->name?></h1>
    </div class ="trip-form">

    <?php $form = ActiveForm::begin(['id' => 'trip-form']); ?>
    <?=  $form-> field($model, 'startdate')->widget(DatePicker::classname(), [

        'options' => ['placeholder' => 'End date & time'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
        ]
    ])
    ?>
    <?=  $form-> field($model, 'enddate')->widget(DatePicker::classname(), [

        'options' => ['placeholder' => 'End date & time'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
        ]
    ])
    ?>
    <?= $form->field($model, 'notes')->textArea() ?>
    <?= Html::submitButton('Ok', ['class' => 'btn btn-primary', 'name' => 'trip-button']) ?>
    <?php ActiveForm::end(); ?>


</div>
</div>