<?php
/* @var $projects \common\models\Project []*/

?>




<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
            <div class="col-md-7 text-center section-heading">
                <h2 class="text-primary heading">Loyihalar</h2>
<!--                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>-->
            </div>
        </div>



        <div class="row element-animate">
            <?php foreach ($projects as $project) ?>
            <div class="col-md-12 mb-5 mb-lg-0 col-lg-6">
                <div class="block-20 ">
                    <figure>
                        <a href="#"><img src="images/img_1.jpg" alt="" class="img-fluid"></a>
                    </figure>
                    <div class="text">
                        <h3 class="heading"><?= $project->title  ?></h3>

                            <p><?= $project->full_desk ?> </p>
                            <p> <?= $project->short_desk ?></p>

                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <?php foreach ($projects as $project) : ?>

                <div class="block-21 d-flex mb-4">
                    <figure class="mr-3">
                        <a href="#"><img src="images/img_1.jpg" alt="" class="img-fluid"></a>
                    </figure>
                    <div class="text">
                        <h3 class="heading"><?= $project->title ?></h3>
                        <div class="meta">
                            <div><a href="#"><?= $project->full_desk ?></a></div>
                            <div><a href="#"><span class="ion-android-person"></span> <?= $project->short_desk ?></a></div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>


            </div>
        </div>
    </div>
    <p>
    <div class="row justify-content-center mb-lg-5">

        <div class="col-md-7 text-center section-heading">
           <p> <a href="#" class="btn btn-primary ">Read More</a></p>
        </div>
    </div>
    </p>
</div>

