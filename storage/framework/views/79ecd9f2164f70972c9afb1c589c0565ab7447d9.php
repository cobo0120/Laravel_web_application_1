 
<?php $__env->startSection('content'); ?>


<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>WEB申請一覧</title>
     <link rel="stylesheet" href="css/style.css">
 </head>
 

 <body>
     <main>
        <article class="">
             <h3>WEB申請履歴一覧</h3>
                <div>
                     <!-- ここに並検索ボックスを作成する -->
                     <form action="read.php" method="get" class="form-group col-2" >
                        <?php echo csrf_field(); ?>
                        <input type="text" class="form-control" placeholder="検索" name="keyword" value="">
                    </form>
                </div>
                
             <table class="table table-hover">
                <thead>
                  <tr>
                    <th>申請No</th>
                    <th>申請日付</th>
                    <th>部署名</th>
                    <th>申請者名</th>
                    <th>購入先</th>
                    <th>購入先URL</th>
                    <th>利用目的</th>
                    <th>納品希望日</th>
                    <th>納品日</th>
                    <th>区分</th>
                    <th>商品名</th>
                    <th>購入単価</th>
                    <th>数量</th>
                    <th>単位</th>
                    <th>勘定科目</th>
                    <th>小計</th>
                    <th>消費税</th>
                    <th>発注金額合計</th>
                    <th>メールアドレス</th>
                  </tr>
                </thead>
                <tbody>
                     <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <tr>
                        <td><?php echo e($post->application_number); ?></td>
                        <td><?php echo e($post->application_day); ?></td>
                        <td><?php echo e($post->application_employee_name); ?></td>
                        <td><?php echo e($post->department_name); ?></td>
                        <td><?php echo e($post->purchase); ?></td>
                        <td><?php echo e($post->delivery_day); ?></td>
                        <td><?php echo e($post->consumable_equipment); ?></td>
                        <td><?php echo e($post->product_name); ?></td>
                        <td><?php echo e($post->unit_purchase_price); ?></td>
                        <td><?php echo e($post->purchase_quantity); ?></td>
                        <td><?php echo e($post->product_name); ?></td>
                        <td><?php echo e($post->unit_purchase_price); ?></td>
                        <td><?php echo e($post->purchase_quanitity); ?></td>                                      
                        <td><?php echo e($post->subtotal); ?></td>                                      
                        <td><?php echo e($post->tax_amount); ?></td>                                      
                        <td><?php echo e($post->unit); ?></td>                                      
                        <td><?php echo e($post->account); ?></td>                                      
                        <td><?php echo e($post->mail_address); ?></td>                                      
                        </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                    
                </tbody>
               </table>
            </article>
     </main>

     <div>
     <?php echo e($posts->links()); ?>

    </div>
    
     <footer>
         <p class="copyright">&copy; WEB申請アプリ All rights reserved.</p>
     </footer>
 </body>
 
 </html>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel_web_application/resources/views/posts/history.blade.php ENDPATH**/ ?>