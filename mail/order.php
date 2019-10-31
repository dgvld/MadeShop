<?php
use yii\helpers\Html;

$this->title = 'Заказ № ' . $session['id'];
?>
<h1><?= Html::encode($this->title); ?></h1>
<ul>

    <li>Покупатель: <?= Html::encode($session['name']); ?></li>
    <li>E-mail: <?= Html::encode($session['email']); ?></li>
    <li>Телефон: <?= Html::encode($session['phone']); ?></li>
    <li>Адрес покупателя: <?= Html::encode($session['address']); ?></li>
    <li>Комментарий к заказу: <?= Html::encode($session['comment']); ?></li>
</ul>

<div class="table-responsive">
    <table style="width: 100%; border: 1px solid #ddd; border-collapse: collapse;">
        <thead>
        <tr style="background: #f9f9f9;">
            <th style="padding: 8px; border: 1px solid #ddd;">Наименование</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Количество</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Цена</th>
            <th style="padding: 8px; border: 1px solid #ddd;">Сумма</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($session['cart'] as $id => $item): ?>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd;">
                        <?= $item['name']?><br>
                        <?= \yii\helpers\Url::to(['product/view', 'id' => $id], true) ?>
                </td>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= $item['qty'] ?></td>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= $item['price'] ?></td>
                <td style="padding: 8px; border: 1px solid #ddd;"><?= $item['qty'] * $item['price'] ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;" colspan="3">Итого: </td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= $session['cart.qty'] ?></td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;" colspan="3">На сумму: </td>
            <td style="padding: 8px; border: 1px solid #ddd;"><?= $session['cart.sum'] ?></td>
        </tr>
        </tbody>
    </table>
</div>