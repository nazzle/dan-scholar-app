<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<!--header area start-->

<!--offcanvas menu area start-->
<div class="off_canvars_overlay">

</div>
<header>
    <div class="main_header header_three">
        <div class="header_container sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="<?= Url::to(['/site'])?>"><img src="assets/img/logotp.png" width="180px" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="header_right_info header_right_info3 color_three">
                            <ul>
                                <li class="search_box"><a href="javascript:void(0)"><img src="assets/img/icon/icon-search.png" alt=""></a>
                                    <div class="search_widget">
                                        <form action="#">
                                            <input placeholder="Search apps here ..." type="text">
                                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </li>
                                <li class="header_account"><a href="javascript:void(0)"><img src="assets/img/icon/icon-account.png" alt=""></a>
                                    <div class="dropdown_account">
                                        <div class="dropdown_account-list">
                                            <ul>
                                                <li><a href="#">My Account</a></li>
                                                <li><a href="#">Shopping Cart</a></li>
                                                <li><a href="#">Checkout</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown_account-list">
                                            <label>Currency</label>
                                            <ul>
                                                <li><a href="#">TZ Shillings</a></li>
                                                <li><a href="#">US Dollar</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown_account-list">
                                            <label>Language</label>
                                            <ul>
                                                <li><a href="#"><img src="assets/img/icon/tz-flag.jpg" alt=""> Swahili</a></li>
                                                <li><a href="#"><img src="assets/img/icon/language.png" alt=""> English</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="mini_cart_wrapper"><a href="javascript:void(0)"><img src="assets/img/icon/icon-cart.png" alt=""> <span class="item_count">1</span></a>
                                    <!--mini cart-->
                                    <div class="mini_cart">
                                        <div class="cart_gallery">
                                            <div class="cart_item">
                                                <div class="cart_img">
                                                    <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                                </div>
                                                <div class="cart_info">
                                                    <a href="#">School App</a>
                                                    <p>@Month <span> Tsh 3,500.00 </span></p>
                                                </div>
                                                <div class="cart_remove">
                                                    <a href="#"><i class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mini_cart_table">
                                            <div class="cart_table_border">
                                                <div class="cart_total">
                                                    <span>Sub total:</span>
                                                    <span class="price">Tsh 3,500.00</span>
                                                </div>
                                                <div class="cart_total mt-10">
                                                    <span>total:</span>
                                                    <span class="price">Tsh 3,500.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mini_cart_footer">
                                            <div class="cart_button">
                                                <a href="#"><i class="fa fa-shopping-cart"></i> Enquiry</a>
                                            </div>
                                            <div class="cart_button">
                                                <a href="#"><i class="fa fa-sign-in"></i> Download</a>
                                            </div>

                                        </div>
                                    </div>
                                    <!--mini cart end-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header area end-->

<!--left side navs starts-->
<div class="header3_top_position">
    <!--main menu start-->
    <div class="main_menu menu_three color_three">
        <nav>
            <ul>
                <li><a href="<?= Url::to(['/site'])?>">Home</a></li>
                <li><a href="#">Softwares</a></li>
                <li><a href="<?= Url::to(['site/about'])?>">about App</a></li>
                <li><a href="<?= Url::to(['site/contact'])?>"> Contact Us</a></li>
            </ul>
        </nav>
    </div>
    <!--main menu end-->
    <div class="header_social">
        <ul>
            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
            <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
        </ul>
    </div>

</div>
<!--left side navs end-->

<main id="main" class="flex-shrink-0" role="main">
    <div class="home3_body_wrapper">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="footer_widgets footer_three color_three">
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer_bottom_container">
                        <div class="footer_link">
                            <ul>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="#">Site Map</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Returns</a></li>
                            </ul>
                        </div>
                        <div class="copyright_area">
                            <p>Copyright &copy; 2022 <a href="#">DanSite</a>  All Right Reserved.</p>
                        </div>
                        <div class="footer_payment">
                            <ul>
                                <li><a href="#"><img src="assets/img/icon/paypal4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/icon/paypal5.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
