

<?php $__env->startSection('content'); ?>
    <div class="container p-3">
            <h1 class="text-center mb-3 display-3">Подача заявления</h1>
            <?php if($errors->any()): ?>
                <div class="bg-danger rounded-pill text-white fs-5 p-3">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $errors): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($errors); ?>

                    <br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('client.store')); ?>" method="post" class="m-auto">
            <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="gosRegNumber" class="form-label fs-5">Государственный регистрационный номер автомобиля</label>
                    <input type="text" class="form-control shadow-sm  p-3 rounded-pill" id="gosRegNumber" name="gosRegNumber">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fs-5">Описание нарушения</label>
                    <textarea class="form-control shadow-sm  p-3 rounded-5" id="description" rows="5" name="description"></textarea>
                </div>
                <input type="submit" class="btn btn-primary mb-3 mt-3 w-100 shadow-sm  p-3 fs-2 rounded-pill" value="Подать заявление">
            </form>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\zakharov\resources\views/client/new_app.blade.php ENDPATH**/ ?>