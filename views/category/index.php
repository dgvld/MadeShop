<?php

/* @var $this yii\web\View */
use app\components\MenuWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
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
        <?php if(!empty($hit_mas)): ?>
            <div class="features_items"><!--features_items-->
                <h2 class="title text-center">Features Items</h2>
                <?php $kl=0?>
                <?php foreach($hit_mas as $hit):?>
                    <?php $kl+=1;
                    if($kl==1){
                        echo '<div class="row">';
                    }
                    ?>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <?php $img=$hit->getImage();
                                    echo Html::img($img->getUrl('x240'),['alt'=>'Image product'])?>
                                    <h2>$<?=$hit->price?></h2>
                                    <p><a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id]) ?>"><?= $hit->name?></a></p>
                                    <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $hit->id])?>" data-id="<?= $hit->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Выбрать товар</a>
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
                                    echo Html::img('@web/images/home/new_left.png', ['alt' => 'New', 'class' => 'newarrival']);
                                }
                                if($hit->sale=='1'){
                                    echo Html::img('@web/images/home/sale.png', ['alt' => 'Sale', 'class' => 'new']);
                                }
                                ?>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                    if($kl==3) {
                        echo '</div >';
                        $kl=0;
                    }
                    ?>
                <?php endforeach;?>
                <?php
                if(!($kl==0)) {
                    echo '</div >';
                }
                // display pagination
                echo LinkPager::widget([
                    'pagination' => $pages,
                ]);
                ?>

            </div><!--features_items-->
        <?php endif;?>
        <?php if(!empty($rec_products)):?>
            <div class="recommended_items"><!--recommended_items-->
                <h2 class="title text-center">recommended items</h2>

                <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $index_col=0;
                        $item_count=0;
                        foreach($rec_products as $rec_product):?>
                            <?php
                            $index_col++;
                            if($index_col==1){
                                if($item_count==0){
                                    echo '<div class="item active">';
                                }else{
                                    echo '<div class="item">';
                                }
                                $item_count++;
                            }
                            ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <?php $img=$rec_product->getImage();
                                            echo Html::img($img->getUrl('x180'),['alt'=>'Image product'])?>
                                            <h2>$<?=$rec_product->price?></h2>
                                            <p><a href="<?=Url::to(['product/view','id'=>$rec_product->id])?>" class="product_url"><?=$rec_product->name?></a></p>
                                            <a href="<?=Url::to(['cart/add','id_add'=>$rec_product->id])?>" data-id_add="<?=$rec_product->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>

                                    <?php
                                    if($rec_product->new=='1'){
                                        echo Html::img('@web/images/home/new_left.png', ['alt' => 'New', 'class' => 'newarrival']);
                                    }
                                    if($rec_product->sale=='1'){
                                        echo Html::img('@web/images/home/sale.png', ['alt' => 'Sale', 'class' => 'new']);
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php
                            if($index_col==3){
                                echo '</div>';
                                $index_col=0;
                            }
                            ?>
                        <?php endforeach;
                        if(!($index_col==0)){
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div><!--/recommended_items-->
        <?php endif;?>
</div>
</div>
</section>