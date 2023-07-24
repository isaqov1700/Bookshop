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
    <form action="<?php echo e(route('admin.store')); ?>" method="post">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <div class="container row">
            <div class="col-6 mt-4">
                <select class="form-control" name="book_id">
                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option
                                value="<?php echo e($book->id); ?>" <?php echo e(in_array($book->id,old('book',[]))?'selected' : ''); ?>><?php echo e($book->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-6 mt-4">
                <input type="text" class="form-control" name="discount" placeholder="Discount">
            </div>
        </div>
            <button type="submit" class="btn btn-primary mt-4 ml-3">Submit</button>
    </form>
<?php $__currentLoopData = $discounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="d-flex">
    <h3 class="mt-4">Book: <?php echo e($discount->book->name); ?></h3>
    <h3 class="mt-4 ml-3">Discount: <?php echo e($discount->discount); ?>%</h3>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php /**PATH /media/abdurahmon/5150405e-bf98-48ea-8b5a-f2463df0185c/BookShop/resources/views/admin/index.blade.php ENDPATH**/ ?>