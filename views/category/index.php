<?php

/* @var $this yii\web\View */
use app\components\MenuWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use app\models\Product;
?>
<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>LIVE</span>-SNEAKERS</h1><br>
                                <h2>Кроссовки по доступным ценам.</h2>
                                <p>Будь свободен в выборе своей обуви.<br>У нас найдется обувь для путешествий, активного отдыха и пеших прогулок.</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/1.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>LIVE</span>-SNEAKERS</h1><br>
                                <h2>Кроссовки по доступным ценам.</h2>
                                <p>Будь свободен в выборе своей обуви.<br>У нас найдется обувь для путешествий, активного отдыха и пеших прогулок.</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/2.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>LIVE</span>-SNEAKERS</h1><br>
                                <h2>Кроссовки по доступным ценам.</h2>
                                <p>Будь свободен в выборе своей обуви.<br>У нас найдется обувь для путешествий, активного отдыха и пеших прогулок.</p>
                            </div>
                            <div class="col-sm-6">
                                <img src="images/home/3.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>

                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
<div class="container">
<div class="row">
<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Каталог товаров</h2>
        <ul class="catalog category-products">
            <?= \app\components\MenuWidget::widget(['tpl' => 'menu'])?>
        </ul>
    </div>
</div>

    <div class="col-sm-9 padding-right">
        <?php if(!empty($rec_products)): ?>
            <div class="features_items"><!--features_items-->
                <h2 class="title text-center">Рекомендуемые товары</h2>

                <?php foreach($rec_products as $hit):?>

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <?php $img=$hit->getImage();
                                    echo Html::img($img->getUrl('x240'),['alt'=>'Image product'])?>
                                    <h2><?=$hit->price?> руб.</h2>
                                    <p><a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id]) ?>"><?= $hit->name?></a></p>
                                    <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $hit->id])?>" data-id="<?= $hit->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                </div>
                                <!--
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>$<?=$hit->price?></h2>
                                            <p><?=$hit->name?></p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>-->
                                <?php
                                if($hit->new=='1'){
                                    echo Html::img('@web/images/home/new.png', ['alt' => 'New', 'class' => 'new']);
                                }
                                if($hit->sale=='1'){
                                    echo Html::img('@web/images/home/sale.png', ['alt' => 'Sale', 'class' => 'new']);
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                <?php endforeach;?>


            </div><!--features_items-->
        <?php endif;?>

</div>
</div>
</div>
</section>