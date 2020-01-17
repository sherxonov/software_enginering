<?php
/**
 * @var $events \common\models\Event[]
 */
?>

<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
            <div class="col-md-7 text-center section-heading">
                <h2 class="text-primary heading">Tadbirlar</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid block-11 element-animate fadeInUp element-animated">
        <div class="nonloop-block-11 owl-carousel owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3538px; padding-left: 10px; padding-right: 10px;"
                     class="owl-stage">
                    <?php foreach ($events as $event): ?>
                    <div style="width: 419.667px; margin-right: 20px;" class="owl-item">
                        <div class="item">
                            <div class="block-19">
                                <figure>
                                    <img src="images/img_1.jpg" alt="Image" class="img-fluid">
                                </figure>
                                <div class="text">
                                    <h2 class="heading"><a href="#"><?=$event->title ?></a></h2>
                                    <p class="mb-4"><?=$event->description ?></p>
                                    <div class="meta d-flex align-items-center">
                                        <div class="number">
                                            <span><?=$event->start_time ?></span>
                                        </div>
                                        <div class="price text-right">
<!--                                            <del class="mr-3">$23</del>-->
                                            <span>Batafsil</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
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
    <div class="row justify-content-center mb-lg-5">
        <div class="col-md-7 text-center section-heading">
            '<?= \yii\helpers\Html::a('Read More', 'all_events',
                ['class' => 'btn btn-primary', ]) ?>


        </div>
    </div>

</div>

<!-- END section -->

