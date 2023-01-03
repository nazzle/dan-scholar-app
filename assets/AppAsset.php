<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'assets/css/bootstrap.min.css',
        'assets/css/owl.carousel.min.css',
        'assets/css/slick.css',
        'assets/css/magnific-popup.css',
        'assets/css/font.awesome.css',
        'assets/css/ionicons.min.css',
        'assets/css/material.design.min.css',
        'assets/css/animate.css',
        'assets/css/jquery-ui.min.css',
        'assets/css/slinky.menu.css',
        'assets/css/plugins.css',
        'assets/css/style.css',
    ];
    public $js = [
        'assets/js/vendor/modernizr-3.7.1.min.js',
        'assets/js/vendor/jquery-3.4.1.min.js',
        'assets/js/popper.js',
        'assets/js/bootstrap.min.js',
        'assets/js/owl.carousel.min.js',
        'assets/js/slick.min.js',
        'assets/js/jquery.magnific-popup.min.js',
        'assets/js/jquery.counterup.min.js',
        'assets/js/jquery.countdown.js',
        'assets/js/jquery.ui.js',
        'assets/js/jquery.elevatezoom.js',
        'assets/js/isotope.pkgd.min.js',
        'assets/js/slinky.menu.js',
        'assets/js/plugins.js',
        'assets/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
