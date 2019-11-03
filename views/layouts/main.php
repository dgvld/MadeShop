<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;

AppAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <?php
//        $this->registerJsFile('js/html5shiv.js', ['position' => \yii\web\View::POS_HEAD, 'condition' => 'lte IE9']);
//        $this->registerJsFile('js/respond.min.js', ['position' => \yii\web\View::POS_HEAD, 'condition' => 'lte IE9']);
    ?>

</head><!--/head-->

<body>
<?php $this->beginBody() ?>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><?= Html::img('@web/images/home/viber.png', ['alt' => 'Viber', 'height' => 15])?> Viber</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav data-toggle="tooltip" data-placement="bottom" title="ВКонтакте"">
                            <li><a href="https://vk.com/club54040566"><i class="fa fa-vk"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div id="companyinfo" class="companyinfo">
                        <a href="<?= \yii\helpers\Url::home(); ?>"><h2><span>LIVE</span>-SNEAKERS</h2></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#" onclick="return getCart()"><i class="fa fa-shopping-cart"></i> Корзина</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="<?= \yii\helpers\Url::home(); ?>" class="active">Главная</a></li>
                            <li><a href="/site/view">Доставка и оплата</a></li>
                            <li><a href="/cart/view">Как купить</a></li>
                            <li><a href="/site/contact">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <form method="get" action="<?= \yii\helpers\Url::to(['category/search'])?>">
                            <input type="text" placeholder="Search" name="q">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<?= $content ?>

<footer id="footer"><!--Footer-->
    <div class="footer-widget">
        <div class="container">
                <div class="col-sm-3">
                    <div class="companyinfo">
                        <h2><span>LIVE</span>-SNEAKERS</h2>
                        <p>Кроссовки по доступным ценам.</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>ТОВАРЫ</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a class="disabled">Кроссовки</a></li>
                            <li><a class="disabled">Кеды</a></li>
                            <li><a class="disabled">Бутсы</a></li>
                            <li><a class="disabled">Шлепанцы</a></li>
                            <li><a class="disabled">Балетки</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>СЕРВИС И ПОМОЩЬ</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Доставка и оплата</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>КОНТАКТЫ</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a class="disabled">Телефон: +2 95 01 88 821</a></li>
                            <li><a class="disabled">E-mail: info@domain.com</a></li>
                            <li><a class="disabled">Мессенджеры: <?= Html::img('@web/images/home/viber.png', ['alt' => 'Viber', 'height' => 15])?></a></li>
                            <li><a class="disabled">Социальные сети:</a><a href="https://vk.com/club54040566"><i class="fa fa-vk"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="text-center">© 2019 «LIVE-SNEAKERS»</p>
                <p class="pull-left">Информация на сайте «LIVE-SNEAKERS» не является публичной офертой. Указанные цены действуют только при оформлении заказа через интернет-магазин</p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->

<?php
\yii\bootstrap\Modal::begin([
    'header' => '<h2>Корзина</h2>',
    'id' => 'cart',
    'size' => 'modal-lg',
    'footer' => '<button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
        <a href="' . \yii\helpers\Url::to(['cart/view']) . '" class="btn btn-success">Приобрести</a>
        <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>'
]);

\yii\bootstrap\Modal::end();
?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>