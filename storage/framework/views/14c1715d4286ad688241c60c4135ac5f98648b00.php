 
 <?php $__env->startSection('content'); ?>
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-5">
             <h3 class="mt-3 mb-3">パスワード再設定</h3>
 
             <p>
                 ご登録時のメールアドレスを入力してください。<br>
                 パスワード再発行用のメールをお送りします。  
             </p>
 
             <hr>
 
             <?php if(session('status')): ?>
             <div class="alert alert-success" role="alert">
                 <?php echo e(session('status')); ?>

             </div>
             <?php endif; ?>
 
 
             <form method="POST" action="<?php echo e(route('password.email')); ?>">
                 <?php echo csrf_field(); ?>
 
                 <div class="form-group">
                     <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> webapplication-login-input" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="メールアドレス">
 
                     <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                     <span class="invalid-feedback" role="alert">
                         <strong>メールアドレスが正しくない可能性があります。</strong>
                     </span>
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                 </div>
 
                 <div class="form-group">
                     <button type="submit" class="btn webapplication-submit-button w-100">
                         送信
                     </button>
                 </div>
             </form>
         </div>
     </div>
 </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel-portfolio-web-application/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>