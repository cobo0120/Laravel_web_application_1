<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせを受け付けました</title>
</head>
<body>
  <h1>確認担当者様へ</h1>
  <p>下記内容の申請の確認をお願い致します。<br>
  以下の情報の確認をお願いします。</p>
 
  <ul>
    <li>申請No:<?php echo e($post['id']); ?></li>
    <li>発注日時：<?php echo e($post['created_at']); ?></li>
    <li>商品名：<?php echo e($post['product_name']); ?></li>
    <li>単価：<?php echo e($post['unit_purchase_price']); ?></li>
    <li>数量：<?php echo e($post['quantity']); ?></li>
    <li>発注金額小計：<?php echo e($post['subtotal']); ?></li>
    <li>消費税：<?php echo e($post['tax_amount']); ?></li>
    <li>合計金額：<?php echo e($post['total_amount']); ?></li>
    <li>確認画面URL：</li>
  </ul>
</body>
</html>





<?php /**PATH /Applications/MAMP/htdocs/laravel_web_application/resources/views/emails/applicant_message.blade.php ENDPATH**/ ?>