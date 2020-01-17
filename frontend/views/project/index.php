<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProjectSearch */
/* @var +$dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container-fluid block-11 element-animate fadeInUp element-animated">
        <div class="nonloop-block-11 owl-carousel owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3538px; padding-left: 10px; padding-right: 10px;" class="owl-stage">
                    <?= \yii\widgets\ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_item'
                    ]); ?>
                </div>
            </div>
            <div class="owl-nav">
                <button class="owl-prev disabled" role="presentation"><span class="ion-android-arrow-back"></span>
                </button>
                <button class="owl-next" role="presentation"><span class="ion-android-arrow-forward"></span></button>
            </div>
            <div class="owl-dots">
                <button class="owl-dot active"><span></span></button>
                <button class="owl-dot"><span></span></button>
                <button class="owl-dot"><span></span></button>
            </div>
        </div>
    </div>
</div>
