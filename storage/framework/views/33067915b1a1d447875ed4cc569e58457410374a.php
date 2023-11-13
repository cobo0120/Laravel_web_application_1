 
<?php $__env->startSection('content'); ?>
<html>
<body>
<h3>プロフィール</h3>   
<div style="margin-top: 30px;">   
<table class="table table-striped">  
<tr>
 <th>氏名</th>
<td><?php echo e(Auth::user()->name); ?></td>
</tr>  
<tr>
 <th>メールアドレス</th>
<td></td>
</tr>  
<tr>
 <th>部署名</th>
<td></td>
</tr>
<tr>
 <th>メールアドレス変更</th>
<td></td>
</tr>
</table>
</div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel_web_application/resources/views/user/profile.blade.php ENDPATH**/ ?>