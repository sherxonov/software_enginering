    <?php
    /**
     * @var $teachers \common\models\Teacher[]
     */
    ?>
    <div class="container site-section element-animate">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center section-heading">
                <h2 class="text-primary heading">Domlalar</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($teachers as $teacher): ?>
            <div class="col-md-6 col-lg-4">
                <div class="block-2">
                    <div class="flipper">
                        <div class="front" style="background-image: url(../images/img_1.jpg);">
                            <div class="box">
                                <h2><?=$teacher->getFullName() ?></h2>
                                <p><?=$teacher->position ?></p>
                            </div>
                        </div>
                        <div class="back">
                            <!-- back content -->
                            <blockquote>
                                <p><?=$teacher->description ?></p>
                            </blockquote>
                            <div class="author d-flex">
                                <div class="image mr-3 align-self-center">
                                  <?= \yii\helpers\Html::img(Yii::getAlias('@web'.$teacher->img,['style'=>'width: 50'])); ?>
                                </div>
                                <div class="name align-self-center"><?=$teacher->getFullName() ?><span class="position"><?=$teacher->position ?></span></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .flip-container -->
            </div>
            <?php endforeach;?>

        </div

</div>
<!---->
<!--    <div class="row">-->
<!---->
<!--        <div class="col-lg-3 col-md-6 wow fadeInUp">-->
<!--            <div class="member">-->
<!--                <img src="images/mercedes_s500_01.jpg" class="img-fluid" alt="">-->
<!--                <div class="member-info">-->
<!--                    <div class="member-info-content">-->
<!--                        <h4>Walter White</h4>-->
<!--                        <span>Chief Executive Officer</span>-->
<!--                        <div class="social">-->
<!--                            <a href=""><i class="fa fa-twitter"></i></a>-->
<!--                            <a href=""><i class="fa fa-facebook"></i></a>-->
<!--                            <a href=""><i class="fa fa-google-plus"></i></a>-->
<!--                            <a href=""><i class="fa fa-linkedin"></i></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->


        <!--<div class="container site-section element-animate">-->
        <div class="row justify-content-center mb-lg-5">
            <div class="col-md-7 text-center section-heading">
                <?= \yii\helpers\Html::a('Read More' , ['all_events']);?>
<!--                <a href="" class="btn btn-primary ">Read More</a>-->
            </div>
        </div>

<!--</div>-->
<!-- END .block-2 -->
