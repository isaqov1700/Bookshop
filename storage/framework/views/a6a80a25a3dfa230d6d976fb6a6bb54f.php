<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="row mx-auto">

            <form action="<?php echo e('shop'); ?>" method="post">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3>Name: <?php echo e($order->book->name); ?></h3>
                <h3>User: <?php echo e($order->user->name); ?></h3>
                <h3>Numbers: <?php echo e($order->orders); ?></h3> <br>
                <input type="hidden" name="book_id" value="<?php echo e($order->book_id); ?>">
                <input type="hidden" name="user_id" value="<?php echo e($order->user_id); ?>">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php if($order->status=='purchased'): ?>
                <button type="submit" class="btn btn-danger mt-4 ml-3">Shoped</button>
                <?php else: ?>
                    <button type="submit" class="btn btn-primary mt-4 ml-3">Shop</button>
                <?php endif; ?>
            </form>


</div>
</body>
</html>
<?php /**PATH /media/abdurahmon/5150405e-bf98-48ea-8b5a-f2463df0185c/BookShop/resources/views/front/order.blade.php ENDPATH**/ ?>