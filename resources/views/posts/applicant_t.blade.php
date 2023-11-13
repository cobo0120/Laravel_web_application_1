@extends('layouts.app')
 
@section('content')

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>申請入力フォームの作成</title>
{{-- @vite(['resources/js/app.js']) --}}
</head>

{{-- ボタンスタイルの設定 --}}
<body>
    <style>
        .add{
          /* パディング(余白)上下方向 左右方向 */
          padding: 10px 10px;
          /* ボタンの幅 */
          width: 200px;
          /* 背景色 青 */
          background-color: blue;
          /* フォント色 白 */
          color: white;
          /* テキスト中央揃え */
          text-align: center;
          /* フォントを太く */
          font-weight: bold;
          /* ボタンの角を丸める */
          border-radius: 5px;
           /* 上下左右方向の余白外側30px */
          margin: 100px;
           /* ボタンの影 */
          box-shadow: 0 0 20px 0 rgba(0, 0, 0, 30%);
         }
     </style>
{{-- ボタンスタイルの設定（ここまで） --}}



{{-- データを渡す記述 --}}

<form  method="post" action="{{route('post.store')}}">
  @csrf
        {{-- 自動表示 --}}
        <div class="container">
        <div class="form-group col-1">
            <label class="label">申請No</label>
            <input class="form-control" type="text" name="application_number" value="自動採番">
        </div>
        {{-- 自動表示取得 --}}
        <div class="form-group col-1">
            <label class="label">申請日付</label>
            <input class="form-control" type="text" name="application_day">
        </div>

        {{-- データベースから取得し表示 --}}
        <div class="form-group col-1">
            <label class="label">部署名</label>
             <select class="form-control" name="department_name">
             @foreach ($departments as $department)
             <option value="{{$department->id}}">{{$department->department_name}}</option> 
            @endforeach
        </select>
        </div>

        {{-- 自動表示取得 --}}
        <div class="form-group col-1">
             <label class="label">申請者名</label>
             <input class="form-control" type="text" name="employee_name">
        </div>
        <div class="form-group col-2">
             <label class="label">購入先</label>
             <input class="form-control" type="text" name="purchase">
        </div>
        <div class="form-group col-1">
             <label class="label">購入先URL</label>
             <input class="form-control" type="text" name="delivery_day">
        </div>
        {{-- テキスト入力 --}}
        <div class="form-group col-4">
             <label class="label">利用目的</label>
             <textarea class="form-control" name="purpose_of_use"></textarea>
        </div>

        {{-- 自動表示 --}}
        <div class="form-group col-1">
            <label class="label">納品希望日</label>
            <input class="form-control" type="text" name="delivery_hope_day">
       </div>
       <div class="form-group col-1">
        <label class="label">納品日</label>
        <input class="form-control" type="text" name="delivery_day">
       </div>
       <div class="form-group col-1">
        <label class="label">商品区分</label>
        <input class="form-control" type="text" name="consumable_equipment">
       </div>


      
       
       


{{-- 横並び項目　入力項目を増やすように設定する --}}
 <div class="row my-4">
  {{--データベースのconsumables_equipmentのレコードを取得 --}}
        <div class="col-1">
            <label class="label">区分</label>
            <select class="form-control" name="consumables_equipment">
            @foreach ($consumables as $consumable)
            <option value="{{$consumable->id}}">{{$consumable->consumables_equipment}}</option>    
            @endforeach
            </select>
        </div>
  {{--ここまで--}}

        <div class="col-3">
            <label class="label">商品名</label>
            <input type="text" class="form-control"  name="product_name">
        </div>
        <div class="col-2">
            <label class="label">購入単価</label>
        <input type="text" class="form-control"  value="0" name="unit_purchase_price" pattern="^[0-9]+$">

        </div>
        <div class="col-1">
            <label class="label">数量</label>
        <input type="text" class="form-control"  value="0" name="purchase_quantity" pattern="^[0-9]+$"required>
        </div>

        <div class="col-1">
            <label class="label">単位</label>
            <input type="text" class="form-control" name="unit" pattern="^[0-9]+$">
        </div>

        {{-- データベースから取得 --}}
        <div class="col-2">
            <label class="label">勘定科目</label>
            <select class="form-control" name="account">
                @foreach ($accounts as $account)
                   <option value="{{$account->id}}">{{$account->account}}</option>
                @endforeach
            </select>
        </div>
 </div>
{{-- 横並び項目（ここまで） --}}  



     {{-- 金額合計関係（自動計算）算術演算子の設定 --}}
    <div class="form-group col-2 my-4">
        <label class="label">小計</label>
        <input class="form-control" type="text" value="0" name="subtotal">
    </div>

    
    <div class="form-group col-1 my-4">
        <label class="label">消費税</label>
        <input class="form-control" type="text" value="0" name="tax_amount">
    </div>

    <div class="form-group col-2 my-4">
        <label class="label">発注金額合計</label>
        <input class="form-control" type="text" value="0" name="total_amount">
    </div>
     {{-- 金額合計関係（ここまで） --}}

     {{-- 計算のためのコード --}}
     

     <script>
        // 要素を取得し（どこの？何を？）変数宣言をしておく。
        const input1 = document.querySelector("input[name=unit_purchase_price]");
        const input2 = document.querySelector("input[name=purchase_quantity]");
        const subtotal = document.querySelector("input[name=subtotal]");
        const tax_amount = document.querySelector("input[name=tax_amount]");
        const total_amount = document.querySelector("input[name=total_amount]");
        const consumables_equipment = document.querySelector("select[name=consumables_equipment]");
        
        // 消費税率の変数宣言
        const tax10 =0.1
        const tax8 =0.08
        

        // アロー関数にて計算の関数定義を行う。
        // 小計の計算
        const calc_subtotal = ()=>{
        subtotal.value = Number(input1.value) * Number(input2.value);
        calc_total_amount();
        }; 
        
        // 消費税の計算（条件式）
        const calc_tax_amount =()=>{
        
        if(consumables_equipment.value==4)
        {
        tax_amount.value = Number((input1.value) * Number(input2.value))*tax8
        } else{
        tax_amount.value = Number((input1.value) * Number(input2.value))*tax10
        }
        };

        // 数値変換
        

        // 小計+消費税＝発注金額合計
        const calc_total_amount =()=>{
        total_amount.value = Number(subtotal.value) + Number(tax_amount.value)
        };
       


    // 発生条件をaddEventListenerで入力されたら表示させる（関数の実行）
        input1.addEventListener("change", calc_tax_amount, false);
        input2.addEventListener("change", calc_tax_amount, false);
        input1.addEventListener("change", calc_subtotal, false);
        input2.addEventListener("change", calc_subtotal, false);
        consumables_equipment.addEventListener("change", calc_tax_amount, false); 
        consumables_equipment.addEventListener("change", calc_total_amount, false);
            
     </script>
 {{--選択された部署によりメールアドレスの表示条件が変更 --}}
 <div class="form-group col-1">
  <label class="label">部署名</label>
   <select class="form-control" name="department_name">
   @foreach ($departments as $department)
   <option value="{{$department->id}}">{{$department->department_name}}</option> 
  @endforeach
</select>
</div>

{{-- 送信先メールアドレスの選択(正規化処理をする&アカウント登録してなければエラーが出るように設定する) --}}
<div class="col-4 my-4">
  <label class="label">メールアドレス</label>
  <select class="form-control" type="email" name="mail_address">
      @foreach ($emails as $email)
         <option value="{{$email->id}}">{{$email->email}}</option>
      @endforeach
  </select>
</div>


 
{{-- ボタン配置 --}}
  <div class="btn-area">
      <button type="submit" class="btn btn-primary add" style="margin: 100px">承認</button>
      <button type="submit" class="btn btn-primary add" style="margin: 100px">下書き</button>
      <button type="submit" class="btn btn-primary add" style="margin: 100px">取消</button>
  </div>
{{-- ボタン配置（ここまで） --}}

</div>
</form>
{{-- JavaScriptの読み込み --}}
<script src="{{ asset('/js/applicant.js') }}"></script>
</body>
</html>
@endsection
