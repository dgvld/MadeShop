<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
<div class="container">
    <?php if( Yii::$app->session->hasFlash('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>

    <?php if( Yii::$app->session->hasFlash('error') ): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('error'); ?>
        </div>
    <?php endif;?>
    <?php if(!empty($session['cart'])): ?>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наименование</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Сумма</th>
                    <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($session['cart'] as $id => $item):?>
                    <tr>
                        <<td><?= \yii\helpers\Html::img($item['img'], ['alt' => $item['name'], 'height' => 50]) ?></td>
                        <td><a href="<?= Url::to(['product/view', 'id' => $id])?>"><?= $item['name']?></a></td>
                        <td><?= $item['qty']?></td>
                        <td><?= $item['price']?></td>
                        <td><?= $item['qty'] * $item['price']?></td>
                        <td><span data-id="<?= $id?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                    </tr>
                <?php endforeach?>
                <tr>
                    <td colspan="5">Итого: </td>
                    <td><?= $session['cart.qty']?></td>
                </tr>
                <tr>
                    <td colspan="5">На сумму: </td>
                    <td><?= $session['cart.sum']?></td>
                </tr>
                </tbody>
            </table>
        </div>
        <hr/>
    <?php else: ?>
        <h3>Корзина пуста</h3>
    <?php endif;?>

    <!--=== Content Part ===-->
    <section class="padding-xxs">
        <div class="container content">
            <div class="row">
                <div class="col-md-12 sx-content">
                    <h2><span style="font-family: Arial, Helvetica; font-size: 16pt;">
                            <b>Как купить.</b>
                        </span>
                    </h2>
                    <span style="font-family: Arial, Helvetica;">
                               Для оформления заявки на товар по телефону +2 95 01 88 821 назовите название
                        и артикул товара из каталога оператору интернет-магазина. По ним он сможет ответить
                        на любые интересующие Вас вопросы, касающиеся приобретения товара.
                    </span><br>
                    <span style="font-family: Arial, Helvetica;">
                              Для оформления заказа по мессенджеру Viber или социальной сети ВКонтакте скопируйте
                        назавание и артикул товара из каталога, либо сделайте скриншот корзины и отправьте Ваше сообщение.
                    </span>

                    <h2><span style="font-family: Arial, Helvetica; font-size: 16pt;">
                            <b>Самовывоз в г. Ижевск.</b>
                        </span>
                    </h2>
                    <p>
                        <span style="font-family: Arial, Helvetica;">
                                Вы можете самостоятельно забрать заказ из нашего магазина в рабочее
                            время на 9 Января, 223.
                        </span>
                    </p>
                    <span style="font-family: Arial, Helvetica;"> </span>
                    <h2>
                        <span style="font-family: Arial, Helvetica;"> <b>
                                <span style="font-size: 16pt;">
                                    Доставка курьером по Ижевску.
                                </span></b>
                        </span>
                    </h2>
                    <p>
                        <span style="font-family: Arial, Helvetica;">
                             Осуществляется доставка товара по городу Ижевску. Доставка осуществляется в будни.
                             Время доставки обговаривается с оператором.
                             Доставка по Ижевску составляет 100 рублей.
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>
</div>