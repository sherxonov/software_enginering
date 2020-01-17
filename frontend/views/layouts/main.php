<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header role="banner">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand absolute" href="index.html">Dasturiy injiniring</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="courses.html">HTML</a>
                            <a class="dropdown-item" href="courses.html">WordPress</a>
                            <a class="dropdown-item" href="courses.html">Laravel</a>
                            <a class="dropdown-item" href="courses.html">JavaScript</a>
                            <a class="dropdown-item" href="courses.html">Python</a>
                        </div>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown05">
                            <a class="dropdown-item" href="#">HTML</a>
                            <a class="dropdown-item" href="#">WordPress</a>
                            <a class="dropdown-item" href="#">Laravel</a>
                            <a class="dropdown-item" href="#">JavaScript</a>
                            <a class="dropdown-item" href="#">Python</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
<!--                <ul class="navbar-nav absolute-right">-->
<!--                    <li>-->
<!--                        --><?php
//                            if (!Yii::$app->user->isGuest){
//                                echo Html::a(
//                                    'Chiqish',
//                                    ['/site/logout'],
//                                    ['data-method' => 'post']
//                                );
//                            }
//                            else{
//                                echo Html::a('Login' , ['site/login'])."/".Html::a('Register' , ['site/signup']);
//                            }
//                        ?>
<!--                    </li>-->
<!--                </ul>-->

            </div>
        </div>
    </nav>
</header>


    <?= $content ?>

<footer class="site-footer">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h3>University</h3>
                <p>Perferendis eum illum voluptatibus dolore tempora consequatur minus asperiores temporibus.</p>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h3 class="heading">Quick Link</h3>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Pages</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-unstyled">
                            <li><a href="#">News</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h3 class="heading">Blog</h3>
                <div class="block-21 d-flex mb-4">
                    <div class="text">
                        <h3 class="heading mb-0"><a href="#">Consectetur Adipisicing Elit</a></h3>
                        <div class="meta">
                            <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                            <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                            <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                        </div>
                    </div>
                </div>
                <div class="block-21 d-flex mb-4">
                    <div class="text">
                        <h3 class="heading mb-0"><a href="#">Dolore Tempora Consequatur</a></h3>
                        <div class="meta">
                            <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                            <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                            <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                        </div>
                    </div>
                </div>
                <div class="block-21 d-flex mb-4">
                    <div class="text">
                        <h3 class="heading mb-0"><a href="#">Perferendis eum illum</a></h3>
                        <div class="meta">
                            <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                            <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                            <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h3 class="heading">Contact Information</h3>
                <div class="block-23">
                    <ul>
                        <li><span class="icon ion-android-pin"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                        <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">+2 392 3929 210</span></a></li>
                        <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">info@yourdomain.com</span></a></li>
                        <li><span class="icon ion-android-time"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-12 text-center copyright">

                <p class="float-md-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                <p class="float-md-right">
                    <a href="#" class="fa fa-facebook p-2"></a>
                    <a href="#" class="fa fa-twitter p-2"></a>
                    <a href="#" class="fa fa-linkedin p-2"></a>
                    <a href="#" class="fa fa-instagram p-2"></a>

                </p>
            </div>
        </div>
    </div>
</footer>
<!-- END footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
