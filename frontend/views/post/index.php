<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

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
