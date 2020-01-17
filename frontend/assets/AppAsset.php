<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.css',
        'css/animate.css',
        'css/owl.carousel.min.css',
        'css/fonts/ionicons/css/ionicons.min.css',
        'css/fonts/fontawesome/css/font-awesome.min.css',
        'css/fonts/flaticon/font/flaticon.css',
        'css/maganific-popup.css',
        'css/style.css',
        'css/font-awesome.css',
        'css/ionicons.css',
        'css/owl.carousel.css',
        'css/owl.theme.default.css',
        'css/owl.theme.green.css',

//        'css/site.css',
    ];
    public $js = [
        'js/jquery-3.2.1.min.js',
        'js/jquery-migrate-3.0.0.js',
        'js/popper.min.js',
        'js/bootsrap.min.js',
        'js/owl.carousel.min.js',
        'js/jquery.waypoints.min.js',
        'js/jquery.stellar.min.js',
        'js/jquery.animateNumber.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/main.js',
        'js/bootstrap.bundle.min.js',
        'js/counterup.min.js',
        'js/easing.js',
        'js/isotope.pkgd.js',
        'js/jquery.js',
        'js/jquery-migrate.js',
        'js/lightbox.js',
        'js/mobile-nav.js',
        'js/owl.carousel/owl.carousel.min.js',
        'js/waypoints.min.js',
        'js/wow.js',
//        'js/google-map.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
