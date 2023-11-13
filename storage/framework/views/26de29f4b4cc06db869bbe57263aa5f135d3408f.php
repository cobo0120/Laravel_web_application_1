 
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
                     <form method="get" action="<?php echo e(route('posts.index_history')); ?>"  class="form-group col-2" >
                        <?php echo csrf_field(); ?>
                        <input type="text"  name="search" class="form-control " placeholder="購入先入力">
                        <button class="btn btn-success">検索する</button>
                    </form>
                </div>
                
             <table class="table table-hover">
                <thead>
                  <tr>
                    <th>申請No</th>
                    <th>申請状況</th>
                    <th>申請日付</th>
                    <th>部署名</th>
                    <th>申請者名</th>
                    <th>購入先</th>
                    <th>納品希望日</th>
                    <th>商品名</th>
                    <th>発注金額合計</th>
                    <th>送信先</th>
                    <th>詳細</th>
                    <th>編集</th>
                    <th>複写</th>
                  </tr>
                </thead>
                <tbody>
                     <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <tr>
                        <td><?php echo e($post->id); ?></td>
                        <td><?php echo e($post->application_status); ?></td>
                        <td><?php echo e($post->application_day); ?></td>
                        <td><?php echo e($post->department_id); ?></td>
                        <td><?php echo e($post->employee_name); ?></td>
                        <td><?php echo e($post->purchase); ?></td>
                        <td><?php echo e($post->delivery_day); ?></td>
                        <td><?php echo e($post->product_name); ?></td>
                        <td><?php echo e($post->tax_amount); ?></td>                                                               
                        <td><?php echo e($post->mail_address); ?></td>
                        
                        <td><a href="<?php echo e(route('post.show_applicant',['id'=>$post->id])); ?>">詳細を見る</a></td>
                        <td><a href="<?php echo e(route('post.edit_applicant',['id'=>$post->id])); ?>">編集する</a></td>
                        <td><a href="<?php echo e(route('post.create_copy',['id'=>$post->id])); ?>">複写する</a></td>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel_web_application/resources/views/posts/index_history.blade.php ENDPATH**/ ?>