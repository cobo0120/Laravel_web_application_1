 
<?php $__env->startSection('content'); ?>
<html>
 <body>

   <h4>プロフィール</h4>   
     <div style="margin-top: 30px;">   
       <table class="table table-striped">  
         <tr>
           <th>氏名（ログインID）</th>
          <td><?php echo e(Auth::user()->name); ?></td>
         </tr>  

          <tr>
           <th>メールアドレス</th>
            <td><?php echo e(Auth::user()->email); ?></td>
          </tr>

          <tr>
           <th>部署名</th>
          <td><?php echo e(Auth::user()->department_id); ?></td>
          </tr>

          <tr>  
          <td><button type="button" class="btn btn-danger w-25"><a style="text-decoration:none; color:white;" href="<?php echo e(route('posts.edit_password')); ?>">パスワード変更</a></button></td>
          </tr>
        </table>
       </div>
      </body>
    </html>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel_web_application/resources/views/posts/profile.blade.php ENDPATH**/ ?>