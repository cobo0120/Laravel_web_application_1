 
<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>" >
<title>申請入力フォームの作成</title>
<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>


<body>


<h2>新規申請</h2>
<form  method="post" action="<?php echo e(route('post.store')); ?>">
  <?php echo csrf_field(); ?>
       
        <input class="form-control" type="hidden" name="application_status" value="1">
     

        
        <div class="form-group col-1">
          <label class="label">申請No<br>（自動表示）</label>
          <input class="form-control" type="text" name="" value="自動採番">
      </div>

        
        
        
        <div class="form-group col-1">
            <label class="label">申請日付<br>（自動表示）</label>
            <input class="form-control" type="text" name="application_day" value="<?php echo e(date('Ymd')); ?>">
        </div>

        
        <div class="form-group col-1">
            <label class="label">部署名<br>（自動表示）</label>
            
            <input class="form-control" type="text" name="" value="<?php echo e(auth()->user()->department->department_name); ?>">
            <input type="hidden" name="department_id" value="1">
        </select>
        </div>

        
        <div class="form-group col-1">
             <label class="label">申請者名<br>（自動表示）</label>
             <input class="form-control" type="text" name="" value="<?php echo e(auth()->user()->name); ?>">
             <input type="hidden" name="user_id" value="1">
        </div>
        <div class="form-group col-2">
             <label class="label">購入先</label>
             <input class="form-control" type="text" name="purchase" value="<?php echo e(old('purchase')); ?>">
        </div>
        <div class="form-group col-1">
             <label class="label">購入先URL</label>
             <input class="form-control" type="text" name="purchasing_url" value="<?php echo e(old('purchasing_url')); ?>">
        </div>
        
        <div class="form-group col-4">
             <label class="label">利用目的</label>
             <textarea class="form-control" name="purpose_of_use" value="<?php echo e(old('purpose_of_use')); ?>"></textarea>
        </div>

        
        <div class="form-group col-1">
            <label class="label">納品希望日</label>
            <input class="form-control" type="text" name="delivery_hope_day" value="<?php echo e(old('delivery_hope_day')); ?>">
       </div>




<div id="table-block" class="center">
    <button type="button" id="add-item">購入項目追加</button>
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
              <select class="form-control" name="consumables_equipment" value="<?php echo e(old('')); ?>">
              <?php $__currentLoopData = $consumables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consumable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($consumable->id); ?>"><?php echo e($consumable->consumables_equipment); ?></option>    
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
          </td>
          <td>
              <input type="text" class="form-control"  name="product_name" value="<?php echo e(old('product_name')); ?>">
          </td>
          <td>
          <input type="text" class="form-control"  value="" name="unit_purchase_price" pattern="^[0-9]+$" value="<?php echo e(old('unit_purchase_price')); ?>">
          </td>
          <td>
          <input type="text" class="form-control"  value="" name="purchase_quantity" pattern="^[0-9]+$"required value="<?php echo e(old('purchase_quantity')); ?>">
          </td>
          <td>
            <input type="text" class="form-control" name="unit">
          </td>
          <td>
              <select class="form-control" name="account" value="<?php echo e(old('')); ?>">
              <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($account->id); ?>"><?php echo e($account->account); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </td>
          <td class="clear-column close-icon">✖</td>
      </tbody>
    </table>
  </div>

  



     
    <div class="form-group col-2 my-4" id="total">
        <label class="label">小計</label>
        <input class="form-control" type="text" value="0" name="subtotal" value="<?php echo e(old('subtotal')); ?>">
    </div>

    
    <div class="form-group col-1 my-4">
        <label class="label">消費税</label>
        <input class="form-control" type="text" value="0" name="tax_amount" value="<?php echo e(old('tax_amount')); ?>">
    </div>

    <div class="form-group col-2 my-4">
        <label class="label">発注金額合計</label>
        <input class="form-control" type="text" value="0" name="total_amount" value="<?php echo e(old('total_amount')); ?>">
    </div>
     

    
    <form action="" method="get">
     <div class="form-group col-2 my-4">
      <label class="label">送信先入力</label>
      <input class="form-control choice-email" type="email" value="" name="" >
    </div>
  </form>

    

    <!-- モーダル機能ボタン -->
   <button type="button" class="btn btn-primary" id="destination-search" data-bs-toggle="modal" data-bs-target="#staticBackdrop">送信先検索</button>

    <!-- モーダル機能-->
  
   <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    
    <div class="modal-dialog modal-fullscreen">
       <div class="modal-content">
         <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">送信先検索</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
      <div class="modal-body">
          <form method="get" action=""  class="form-group col-2 my-4 " >
            <?php echo csrf_field(); ?>
            <input type="text" id="" name="search" class="form-control" placeholder="氏名検索" value="">
            <button class="btn btn-success my-4" type="submit">検索する</button>
          </form>
        
        
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No.</th>
                <th>氏名</th>
                <th>部署名</th>
                <th>メールアドレス</th>
                <th>送信先選択</th>
              </tr>
            </thead>
            <tbody>
                 <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->department_id); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    
                
                    <td><button type="button" class="btn btn-secondary" onclick="choiceButton('<?php echo e($user->email); ?>')" data-bs-dismiss="modal">選択</button></td>
                    </tr>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
           </table>
        
           <div class="row">
            <button type="button" class="btn btn-primary add" data-bs-dismiss="modal">情報取得</button>
            
           </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
      </div>
    </div>
  </div>
</div>


 

       
    
        <div class="btn-area">
            <a href=""><button type="submit" class="btn btn-primary add" style="margin: 100px">申請</button></a>
            
            <button type="submit" class="btn btn-primary add" style="margin: 100px">戻る</button>
        </div>
    

    </div>
</form>

<script src="<?php echo e(asset('/js/applicant.js')); ?>"></script>
<script src="<?php echo e(asset('/js/destination.js')); ?>"></script>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel_web_application/resources/views/posts/create_applicant.blade.php ENDPATH**/ ?>