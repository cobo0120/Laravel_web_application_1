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
    <li>申請No:{{ $post['id'] }}</li>
    <li>発注日時：{{$post['created_at']}}</li>
    <li>発注金額小計：{{$post['subtotal']}}</li>
    <li>消費税：{{$post['tax_amount']}}</li>
    <li>合計金額：{{$post['total_amount']}}</li>
    {{-- ここはどの様にしていくか分からないです aタグで飛ばすのか？--}}
    <li>確認画面URL：</li>
  </ul>
</body>
</html>





