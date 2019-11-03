<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<section>
<div class="container">
<div class="row">
<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Категории</h2>
        <ul class="catalog category-products">
            <?= \app\components\MenuWidget::widget(['tpl' => 'menu'])?>
        </ul>
    </div>
</div>

<?php
$mainImg = $product->getImage();
$gallery = $product->getImages();
?>
<div class="col-sm-9 padding-right">
<div class="product-details"><!--product-details-->
    <div class="col-sm-5">
        <div class="view-product">
            <div id="similar-product" class="carousel slide" data-ride="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                     <?php $count = count($gallery); $i = 0; foreach($gallery as $img): ?>
                     <div class="item <?php if($i == 0) echo ' active'?>">
                         <img id = "image" <?= Html::img($img->getUrl(), ['alt' => '$product->name'])?>
                         <a href="#" id="zoom">
                             <?php if($i == 0) echo '<!--<h3>ZOOM</h3>-->'?>
                             <?php $i++; ?>
                         </a>
                     </div>
                     <?php if($product->new): ?>
                         <?= Html::img("@web/images/home/new.png", ['alt' => 'Новинка', 'class' => 'new'])?>
                     <?php endif?>
                     <?php if($product->sale): ?>
                         <?= Html::img("@web/images/home/sale.png", ['alt' => 'Распродажа', 'class' => 'new'])?>
                     <?php endif?>
                      <?php endforeach;?>
                </div>
            </div>
            <!-- Controls -->
            <a class="left item-control" href="#similar-product" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right item-control" href="#similar-product" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
            <!-- Modal -->
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
                            <h4 class="modal-title" id="myModalLabel"></h4>
                        </div>
                        <div class="modal-body">
                            <img src="" id="preview" style="width: 100%; height: 100%;" >
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
        </div>
    </div>
    <div class="col-sm-7">
        <div class="product-information"><!--/product-information-->

            <h2><?= $product->name?></h2>
                <span>
                    <span><?= $product->price?> руб.</span>
                    <label>Количество:</label>
                    <input type="text" value="1" id="qty" />
                    <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?= $product->id?>" class="btn btn-fefault add-to-cart cart">
                        <i class="fa fa-shopping-cart"></i>
                        В корзину
                    </a>
                </span>
            <p><b>Категория товаров:</b> <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $product->category->id]) ?>"><?= $product->category->name?></a></p>

            <?= $product->content?>
        </div><!--/product-information-->
    </div>
</div><!--/product-details-->


</div>
</div>

</section>