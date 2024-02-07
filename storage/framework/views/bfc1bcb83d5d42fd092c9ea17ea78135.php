

<?php $__env->startSection('content'); ?>
<div class="container p-3">
            <h1 class="text-center mb-3 display-3">Личный кабинет</h1>
            <p><span class="fw-semibold">Фамилия:</span> <?php echo e($user->firstname); ?></p>
            <p><span class="fw-semibold">Имя:</span> <?php echo e($user->lastname); ?></p>
            <p><span class="fw-semibold">Отчество:</span> <?php echo e($user->surname); ?></p>
            <p><span class="fw-semibold">Телефон:</span> +7 000 000 00 00</p>
            <div class="cards">
                <?php $__currentLoopData = $apps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($app->status == 1): ?>
                    <div class="card w-100 mb-3 mt-3">
                        <h5 class="card-title">Нарушение № <?php echo e($app->id); ?></h5>
                        <p class="mb-1"><span class="fw-semibold">Статус:</span> <?php echo e($app->getStatus()); ?></p>
                        <p class="mb-1"><span class="fw-semibold">Гос номер автомобиля:</span> <?php echo e($app->gosRegNumber); ?></p>
                        <p class="card-text"><?php echo e($app->description); ?></p>
                    </div>
                    <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('client.new_app')); ?>" class="btn btn-primary mb-3 mt-3 w-100 shadow-sm  p-3 fs-2 rounded-pill ">Подать заявление</a>
        </div>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\zakharov\resources\views/client/index.blade.php ENDPATH**/ ?>