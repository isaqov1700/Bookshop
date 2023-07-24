<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h3>Name: <?php echo e($user->name); ?></h3>
    <h3>Tell number: <?php echo e($user->tel_number); ?></h3>
    <h3>Location: <?php echo e($user->location); ?></h3>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH /media/abdurahmon/5150405e-bf98-48ea-8b5a-f2463df0185c/BookShop/resources/views/front/user.blade.php ENDPATH**/ ?>