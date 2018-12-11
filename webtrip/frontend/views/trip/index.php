<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<h1>Your Trips</h1>

    <div class="container">

    </div>
<div class="container">

    <div class="col-lg-6">
        <h4>To do Trips</h4>
        <div class="list-group">
            <?php foreach ($todoTrips as $trip) {?>
                <div class="list-group-item" >

                    <h4 class="list-group-item-heading"><?= $trip->country->name?></h4>
                    <p class="list-group-item-text"><?= $trip->startdate ?></p>
                    <p class="list-group-item-text"><?= $trip->enddate ?></p>
                    <br>
                    <?= Html::a('Trip information', ['trip/trip-information', 'id_trip'=>$trip->id_trip], ['class'=>'btn btn-primary']) ?>

                </div>
            <?php } ?>
        </div>
    </div>

    <div class="col-lg-6">
        <h4>Trips Done</h4>
        <div class="list-group">
            <?php foreach ($doneTrips as $trip) {?>
                <div class="list-group-item" >

                    <h4 class="list-group-item-heading"><?= $trip->country->name?></h4>
                    <p class="list-group-item-text"><?= $trip->startdate ?></p>
                    <p class="list-group-item-text"><?= $trip->enddate ?></p>
                    <br>
                    <?= Html::a('Trip information', ['trip/trip-information', 'id_trip'=>$trip->id_trip], ['class'=>'btn btn-primary']) ?>

                </div>
            <?php } ?>
        </div>
    </div>

</div>