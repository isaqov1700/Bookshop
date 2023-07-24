<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="row">
    <div class="col-6">

        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h3>Kitob nomi: <?php echo e($book->name); ?></h3>
            <h3>Mualif: <?php echo e($book->author_name); ?></h3>
            <h3>Qoshimcha malumot: <?php echo e($book->description); ?></h3>
            <h3>Nashr yili: <?php echo e($book->publish_year); ?></h3>
            <h3>Janr: <?php echo e($book->category->title); ?></h3>
        <form action="<?php echo e(route('book_save')); ?>" method="get">
            <input type="hidden" name="book_id" value="<?php echo e($book->id); ?>">
            <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
            <input type="hidden" name="orders" value="1">
            <h3>Shop: <button type="submit" class="btn btn-primary mt-2">Save</button>
            </h3>
        </form>
            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
    <form action="<?php echo e(route("search")); ?>">
        <div class="col-12 mt-4">
            <input type="text" class="form-control" name="name" placeholder="Search..">
            <button type="submit" class="btn btn-primary mt-3">Search</button>
        </div>
    </form>
</div>
</body>
</html>
<?php /**PATH /media/abdurahmon/5150405e-bf98-48ea-8b5a-f2463df0185c/BookShop/resources/views/front/index.blade.php ENDPATH**/ ?>