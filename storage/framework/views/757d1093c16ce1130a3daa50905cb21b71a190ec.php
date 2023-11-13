 
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

         table, th, td {
         border-collapse: collapse;
         padding: 8px 16px;
         text-align: center;
         }

         thead {
         background-color: blue;
         color: white;
         }

         tbody tr:nth-child(odd) {
         background-color: #eee;
         }

         .clear-column {
         background-color: #fff;
         width: 40px;
         }       

         button {
          height: 3em;
          margin: 16px 0;
          padding: 4px 0;
          border-radius: 10px;
          background-color: blue;
          color: white;
          }

          .close-icon {
           cursor: pointer;
           }

           button:hover,
           .close-icon:hover {
           opacity: .7;
           }

           button:active {
           opacity: .4;
           }
  </style>






<form  method="post" action="<?php echo e(route('post.store')); ?>">
  <?php echo csrf_field(); ?>
        
        
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


      
       
       



<div id="table-block">
    <button>購入項目追加</button>
    <table>
      <thead>
        <tr>
          <th>区分</th>
          <th>商品名</th>
          <th>購入単価</th>
          <th>数量</th>
          <th>単位</th>
          <th>勘定科目</th>
          <th class="clear-column"></th>
        </tr>
      </thead>
      <tbody>
        <tr class="item">
          <td>
              <select class="form-control" name="consumables_equipment">
              <?php $__currentLoopData = $consumables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consumable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($consumable->id); ?>"><?php echo e($consumable->consumables_equipment); ?></option>    
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
          </td>
          <td>
              <input type="text" class="form-control"  name="product_name">
          </td>
          <td>
          <input type="text" class="form-control"  value="0" name="unit_purchase_price" pattern="^[0-9]+$">
          </td>
          <td>
          <input type="text" class="form-control"  value="0" name="purchase_quantity" pattern="^[0-9]+$"required>
          </td>
          <td>
          
            <input type="text" class="form-control" name="unit">
          </td>
          <td>
            
            <select class="form-control" name="account">
              <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($account->id); ?>"><?php echo e($account->account); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </td>
          <td class="clear-column close-icon">✖</td>
      </tbody>
    </table>
  </div>

  



     
    <div class="form-group col-2 my-4">
        <label class="label">小計</label>
        <input class="form-control" type="text" value="0" name="subtotal" >
    </div>

    
    <div class="form-group col-1 my-4">
        <label class="label">消費税</label>
        <input class="form-control" type="text" value="0" name="tax_amount" >
    </div>

    <div class="form-group col-2 my-4">
        <label class="label">発注金額合計</label>
        <input class="form-control" type="text" value="0" name="total_amount" >
    </div>
     

     
     

     



     



     
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel_web_application/resources/views/posts/applicant.blade.php ENDPATH**/ ?>