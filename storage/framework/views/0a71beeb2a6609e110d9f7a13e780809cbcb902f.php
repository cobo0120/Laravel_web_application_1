 
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>申請アプリメニュー選択画面</title>
</head>

<body>

<div class="container">
<style>
    .add{
      /* パディング(余白)上下方向 左右方向 */
      padding: 10px 10px;
      /* ボタンの幅 */
      width: 200px;
      /* 背景色 青 */
      background-color: blue;
      /* フォント色 白 */
      color: white;
      /* テキスト中央揃え */
      text-align: center;
      /* フォントを太く */
      font-weight: bold;
      /* ボタンの角を丸める */
      border-radius: 5px;
       /* 上下左右方向の余白外側30px */
       margin: 100px;
       /* ボタンの影 */
       box-shadow: 0 0 20px 0 rgba(0, 0, 0, 30%);
     }

 </style>


        
        <a href="<?php echo e(route('posts.create_applicant')); ?>"><button type="button" class="btn btn-primary add">WEB申請</button></a>
   
        <a href="<?php echo e(route('posts.index_history')); ?>"><button type="button" class="btn btn-primary add">申請履歴</button></a>
    
        <a href="<?php echo e(route('posts.profile')); ?>"><button type="button" class="btn btn-primary add">プロフィール閲覧</button></a>
   


    <footer>        
        <p>&copy; WEB申請アプリ All rights reserved.</p>
    </footer>

</div> 
</body>

</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravel_web_application/resources/views/posts/index.blade.php ENDPATH**/ ?>