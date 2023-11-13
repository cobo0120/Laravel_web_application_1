 
<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>" >
<title>申請入力フォームの作成（複写）</title>

</head>

<h2>過去歴詳細</h2>

<div class="text-right">
  <a href=""><button class="btn btn-info">複写</button></a>
</div>

<form  method="post" action="<?php echo e(route('post.store')); ?>">
  <?php echo csrf_field(); ?>
        
        
        <div class="form-group col-1">
            <label class="label">申請No</label>
            <input class="form-control" type="text" name="application_number" value="<?php echo e($posts->id); ?>">
        </div>
        
        <div class="form-group col-1">
            <label class="label">申請日付</label>
            <input class="form-control" type="text" name="application_day" value="<?php echo e($posts->application_day); ?>">
        </div>

        
        <div class="form-group col-1">
            <label class="label">部署名</label>
             <select class="form-control" name="department_name" value="<?php echo e($posts->department_name); ?>">
             <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <option value="<?php echo e($department->id); ?>"><?php echo e($department->department_name); ?></option> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        </div>

        
        <div class="form-group col-1">
             <label class="label">申請者名</label>
             <input class="form-control" type="text" name="employee_name" value="<?php echo e($posts->employee_name); ?>">
        </div>

        <div class="form-group col-2">
             <label class="label">購入先</label>
             <input class="form-control" type="text" name="purchase" value="<?php echo e($posts->purchase); ?>">
        </div>
        <div class="form-group col-1">
             <label class="label">購入先URL</label>
             <input class="form-control" type="text" name="delivery_day" value="<?php echo e($posts->delivery_day); ?>">
        </div>
        
        <div class="form-group col-4">
             <label class="label">利用目的</label>
             <textarea class="form-control" name="purpose_of_use" value="<?php echo e($posts->purpose_of_use); ?>"></textarea>
        </div>

        
        <div class="form-group col-1">
            <label class="label">納品希望日</label>
            <input class="form-control" type="text" name="delivery_hope_day" value="<?php echo e($posts->delivery_hope_day); ?>">
       </div>
       <div class="form-group col-1">
        <label class="label">納品日</label>
        <input class="form-control" type="text" name="delivery_day" value="<?php echo e($posts->delivery_day); ?>">
       </div>
       <div class="form-group col-1">
        <label class="label">商品区分</label>
        <input class="form-control" type="text" name="consumable_equipment" value="<?php echo e($posts->consumable_equipment); ?>">
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
              <select class="form-control" name="consumables_equipment" value="<?php echo e($posts->consumables_equipment); ?>">
              <?php $__currentLoopData = $consumables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consumable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($consumable->id); ?>"><?php echo e($consumable->consumables_equipment); ?></option>    
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
          </td>
          <td>
              <input type="text" class="form-control"  name="product_name" value="<?php echo e($posts->product_name); ?>">
          </td>
          <td>
          <input type="text" class="form-control"  value="0" name="unit_purchase_price" pattern="^[0-9]+$" value="<?php echo e($posts->unit_purchase_price); ?>">
          </td>
          <td>
          <input type="text" class="form-control"  value="0" name="purchase_quantity" pattern="^[0-9]+$"required value="<?php echo e($posts->purchase_quantity); ?>">
          </td>
          <td>
          
            <input type="text" class="form-control" name="unit" value="<?php echo e($posts->unit); ?>">
          </td>
          <td>
            
            <select class="form-control" name="account" value="<?php echo e($posts->account); ?>">
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
        <input class="form-control" type="text" value="<?php echo e($posts->subtotal); ?>" name="subtotal">
    </div>

    
    <div class="form-group col-1 my-4">
        <label class="label">消費税</label>
        <input class="form-control" type="text" value="<?php echo e($posts->tax_amount); ?>" name="tax_amount">
    </div>

    <div class="form-group col-2 my-4">
        <label class="label">発注金額合計</label>
        <input class="form-control" type="text" value="<?php echo e($posts->total_amount); ?>" name="total_amount">
    </div>
     

     
     

     
     <div class="form-group col-1">
        <label class="label">部署名</label>
         <select class="form-control" name="department_name" value="<?php echo e($posts->department_name); ?>">
         <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <option value="<?php echo e($department->id); ?>"><?php echo e($department->department_name); ?></option> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    </div>

     
     <div class="col-4 my-4">
        <label class="label">メールアドレス</label>
        <select class="form-control" type="email" name="mail_address" value="<?php echo e($posts->mail_address); ?>">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel_web_application/resources/views/posts/create_authorizer.blade.php ENDPATH**/ ?>