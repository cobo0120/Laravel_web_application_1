 
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
            <input class="form-control" type="text" name="application_number" value="自動採番">
        </div>
        
        <div class="form-group col-1">
            <label class="label">申請日付</label>
            <input class="form-control" type="text" name="application_day">
        </div>

        
        <div class="form-group col-1">
            <label class="label">部署名</label>
             <select class="form-control" name="department_name">
             <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <option value="<?php echo e($department->id); ?>"><?php echo e($department->department_name); ?></option> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
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
        <label class="label">商品区分</label>
        <input class="form-control" type="text" name="consumable_equipment">
       </div>


      
       
       



 <div class="row my-4">
  
        <div class="col-1">
            <label class="label">区分</label>
            <select class="form-control" name="consumables_equipment">
            <?php $__currentLoopData = $consumables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consumable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($consumable->id); ?>"><?php echo e($consumable->consumables_equipment); ?></option>    
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
  

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

        
        <div class="col-2">
            <label class="label">勘定科目</label>
            <select class="form-control" name="account">
                <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <option value="<?php echo e($account->id); ?>"><?php echo e($account->account); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
 </div>
  



     
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
 
 <div class="form-group col-1">
  <label class="label">部署名</label>
   <select class="form-control" name="department_name">
   <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <option value="<?php echo e($department->id); ?>"><?php echo e($department->department_name); ?></option> 
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>


<div class="col-4 my-4">
  <label class="label">メールアドレス</label>
  <select class="form-control" type="email" name="mail_address">
      <?php $__currentLoopData = $emails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $email): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <option value="<?php echo e($email->id); ?>"><?php echo e($email->email); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>
</div>


 

  <div class="btn-area">
      <button type="submit" class="btn btn-primary add" style="margin: 100px">承認</button>
      <button type="submit" class="btn btn-primary add" style="margin: 100px">下書き</button>
      <button type="submit" class="btn btn-primary add" style="margin: 100px">取消</button>
  </div>


</div>
</form>

<script src="<?php echo e(asset('/js/applicant.js')); ?>"></script>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel_web_application/resources/views/posts/applicant_t.blade.php ENDPATH**/ ?>