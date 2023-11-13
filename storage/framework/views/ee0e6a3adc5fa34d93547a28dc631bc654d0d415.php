 
 <?php $__env->startSection('content'); ?>
 <div class="container">
     <form method="post" action="">
         <?php echo e(csrf_field()); ?>

         <input type="hidden" name="_method" value="PUT">
         <div class="form-group row mb-3">
             <label for="password" class="col-md-3 col-form-label text-md-right">新しいパスワード</label>
 
             <div class="col-md-7">
                 <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">
 
                 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <span class="invalid-feedback" role="alert">
                     <strong><?php echo e($message); ?></strong>
                 </span>
                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
             </div>
         </div>
 
         <div class="form-group row mb-3">
             <label for="password-confirm" class="col-md-3 col-form-label text-md-right">確認用</label>
 
             <div class="col-md-7">
                 <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
             </div>
         </div>
 
         <div class="form-group d-flex justify-content-center">
             <button type="submit" class="btn btn-danger w-25">
                 パスワード更新
             </button>
         </div>
     </form>
 </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel_web_application/resources/views/posts/edit_password.blade.php ENDPATH**/ ?>