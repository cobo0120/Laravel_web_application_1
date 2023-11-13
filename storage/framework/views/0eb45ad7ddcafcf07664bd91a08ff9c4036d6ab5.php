 
<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>申請入力フォームの作成</title>

</head>


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






<form  method="post" action="<?php echo e(route('post.store')); ?>">
  <?php echo csrf_field(); ?>
        
        <div class="container">
        <div class="form-group col-1">
            <label class="label">申請No</label>
            <input class="form-control" type="text" name="application_number">
        </div>
        
        <div class="form-group col-1">
            <label class="label">申請日付</label>
            <input class="form-control" type="text" name="application_day">
        </div>
        
        <div class="form-group col-1">
             <label class="label">部署名</label>
             <input class="form-control" type="text" name="department_name">
        </div>
        
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
        
        <div class="form-group col-4">
             <label class="label">利用目的</label>
             <textarea class="form-control" name="purpose_of_use"></textarea>
        </div>

        
        <div class="form-group col-1">
            <label class="label">納品希望日</label>
            <input class="form-control" type="text" name="delivery_hope_day">
       </div>
       <div class="form-group col-1">
        <label class="label">納品日</label>
        <input class="form-control" type="text" name="delivery_day">
       </div>
       <div class="form-group col-1">
        <label class="label">ダミー</label>
        <input class="form-control" type="text" name="consumable_equipment">
       </div>


       
       



 <div class="row my-4">
  
        <div class="col-1">
            <label class="label">区分</label>
            <input type="text" class="form-control" name="consumables_equpment">
        </div>
        <div class="col-3">
            <label class="label">商品名</label>
            <input type="text" class="form-control"  name="product_name">
        </div>
        <div class="col-2">
            <label class="label">購入単価</label>
        <input type="text" class="form-control" name="unit_purchase_price">
        </div>
        <div class="col-1">
            <label class="label">数量</label>
        <input type="text" class="form-control" name="purchase_quantity">
        </div>
        <div class="col-1">
            <label class="label">単位</label>
            <input type="text" class="form-control" name="unit">
        </div>
        <div class="col-2">
            <label class="label">勘定科目</label>
            <input type="text" class="form-control" name="account" >
        </div>
 </div>
  


     
       <div class="form-group col-1 my-4">
        <label class="label">小計</label>
        <input class="form-control" type="text" name="subtotal" >
        </div>
       <div class="form-group col-1 my-4">
        <label class="label">消費税</label>
        <input class="form-control" type="text" name="tax_amount">
        </div>
       <div class="form-group col-1 my-4">
        <label class="label">発注金額合計</label>
        <input class="form-control" type="text" name="total_amount">
        </div>
     


     
     <div class="col-4 my-4">
        <label class="label">メールアドレス</label>
        <input type="text" class="form-control" name="mail_address" >
    </div>

    
    <div class="form-group col-8">
        <label class="label">備考欄（差戻理由など）</label>
        <textarea class="form-control" name=""></textarea>
    </div>


       
    
        <div class="btn-area">
            <button type="submit" class="btn btn-primary add" style="margin: 200px">承認</button>
            <button type="submit" class="btn btn-primary add" style="margin: 200px">差戻</button>
        </div>
    

    </div>
    </form>
  </body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel_web_application/resources/views/posts/authorizer.blade.php ENDPATH**/ ?>