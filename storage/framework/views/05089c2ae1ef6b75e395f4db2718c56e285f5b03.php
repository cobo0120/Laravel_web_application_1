 
<?php $__env->startSection('content'); ?>

<form method="get" action=""  class="form-group col-2 my-4 " >
    <?php echo csrf_field(); ?>
    <input type="text"  name="search" class="form-control" placeholder="氏名or部署で検索">
    <button class="btn btn-success my-4">検索する</button>
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
            
        
          <form method="post" action="">
            <td><a href="">選択</a></td>  
          </form>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
   </table>

   <div>
    <?php echo e($users->links()); ?>

   </div>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel_web_application/resources/views/posts/show_destination.blade.php ENDPATH**/ ?>