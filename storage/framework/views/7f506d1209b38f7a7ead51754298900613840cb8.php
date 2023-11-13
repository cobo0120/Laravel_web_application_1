 
 <?php $__env->startSection('content'); ?>
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-5">
             <h3 class="mt-3 mb-3">ログイン</h3>
 
             <hr>
             <form method="POST" action="<?php echo e(route('login')); ?>">
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
                     <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> webapplication-login-input" name="password" required autocomplete="current-password" placeholder="パスワード">
 
                     <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                     <span class="invalid-feedback" role="alert">
                         <strong>パスワードが正しくない可能性があります。</strong>
                     </span>
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                 </div>
 
                 <div class="form-group">
                     <div class="form-check">
                         <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
 
                         <label class="form-check-label webapplication-check-label w-100" for="remember">
                             次回から自動的にログインする
                         </label>
                     </div>
                 </div>
 
                 <div class="form-group">
                     <button type="submit" class="mt-3 btn webapplication-submit-button w-100">
                         ログイン
                     </button>
 
                     <a class="btn btn-link mt-3 d-flex justify-content-center webapplication-login-text" href="<?php echo e(route('password.request')); ?>">
                         パスワードをお忘れの場合
                     </a>
                 </div>
             </form>
 
             <hr>
             <div class="form-group">
                <a class="btn btn-link mt-3 d-flex justify-content-center webapplication-login-text" href="<?php echo e(route('register')); ?>">
                    新規登録
                </a>
            </div>
 
         </div>
     </div>
 </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel-portfolio-web-application/resources/views/auth/login.blade.php ENDPATH**/ ?>