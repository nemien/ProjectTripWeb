<?php

use yii\helpers\Html;

?>

<html lang="<?= Yii::$app->language ?>">

<h1><b>Wishlist</b></h1>
<div class="col-lg-12">
    <?php if($wishlist != null){ ?>
    <table class="table">
        <thead>
        <tr>
            <th>Country</th>
            <th>No. of visits</th>
            <th>Avg. rating</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
        foreach ($wishlist as $wish) {
            foreach ($wish->countries as $country) {?>
            <tr>
                <td><?=  Html::img("$country->flag", ['width' => '50px']) ." "?><?php echo $country->name ?></td>
                <td><?php echo $country->visits;?></td>

                <td><?php echo round($country->average,2)?></td>
                <td><?= Html::a('View information', ['site/country-information', 'id_country'=>$country->id_country], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['wishlist/delete','id_wishlist'=>$wish->id_wishlist], ['class' => 'btn btn-danger']) ?></td>
                <?php } ?>
            </tr>
            <?php } ?>
        </tbody>
        <?php } else{echo "Your wishlist is empty! Check some ".Html::a('countries', ['site/index'])." you might like to visit";} ?>

    </table>

</div>
