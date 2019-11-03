<?php

/* @var $this yii\web\View */
use app\components\MenuWidget;
use app\components\Brands_menuWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
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
        <div class="features_items"><!--features_items-->
            <?php if(empty($products)): ?>
                <h2 class="title text-center">Товары не найдены</h2>
            <?php endif; ?>

            <?php if(!empty($products)): ?>
                <h2 class="title text-center">Товары <?=$count_record?> категории: <?=$category->name?></h2>
                <?php $kl=0?>
                <?php foreach($products as $product):?>
                    <?php $kl+=1;
                    if($kl==1){
                        echo '<div class="row">';
                    }
                    ?>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <?php $img=$product->getImage();
                                    echo Html::img($img->getUrl('x240'),['alt'=>'Image product'])?>
                                    <h2><?=$product['price']?> руб.</h2>
                                    <p><a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $product->id]) ?>"><?= $product->name?></a></p>
                                    <a href="#" data-id="<?= $product->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                </div>

                                <?php
                                if($product['new']=='1'){
                                    echo Html::img('@web/images/home/new.png', ['alt' => 'New', 'class' => 'new']);
                                }
                                if($product['sale']=='1'){
                                    echo Html::img('@web/images/home/sale.png', ['alt' => 'Sale', 'class' => 'new']);
                                }
                                ?>
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
            <?php endif;?>
        </div><!--features_items-->
</div>
</div>
</section>