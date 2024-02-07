

<?php $__env->startSection('content'); ?>
        <div class="container p-3">
            <h1 class="text-center mb-3 display-3">Панель администратора</h1>
            <div class="cards">
                <?php $__currentLoopData = $apps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($app->status == 1): ?>
                <div class="card w-100 mb-3 mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Нарушение № <?php echo e($app->id); ?></h5>
                        <p class="mb-1"><span class="fw-semibold">Фамилия:</span> <?php echo e($app->user->firstname); ?></p>
                        <p class="mb-1"><span class="fw-semibold">Имя:</span> <?php echo e($app->user->lastname); ?></p>
                        <p class="mb-1"><span class="fw-semibold">Отчество:</span> <?php echo e($app->user->surname); ?></p>
                        <p class="mb-1"><span class="fw-semibold">Статус:</span> <?php echo e($app->getStatus()); ?></p>
                        <p class="mb-1"><span class="fw-semibold">Гос номер автомобиля:</span> <?php echo e($app->gosRegNumber); ?></p>
                        <p class="card-text"><?php echo e($app->description); ?></p>
                        <div class="d-flex align-items-center justify-content-between cards_btn">
                            <form action="<?php echo e(route('app.confirm', ['id' => $app->id])); ?>" method='post'>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PATCH'); ?>
                                <input type="submit" value="Подтвердить" class='card-link btn btn-primary'>
                            </form>
                            <form action="<?php echo e(route('app.cancel', ['id' => $app->id])); ?>" method='post'>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PATCH'); ?>
                                <input type="submit" value="Отменить" class='card-link btn btn-outline-primary mb-3 mt-3 shadow-sm  p-3 px-5 rounded-pill m-0 '>
                            </form>

                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <?php if($app->status == 2): ?>
                <div class="card w-100 mb-3 mt-3 bg-success text-success-emphasis border-success-subtle">
                    <div class="card-body">
                        <h5 class="card-title">Нарушение № <?php echo e($app->id); ?></h5>
                        <p class="mb-1"><span class="fw-semibold">Фамилия:</span> <?php echo e($app->user->firstname); ?></p>
                        <p class="mb-1"><span class="fw-semibold">Имя:</span> <?php echo e($app->user->lastname); ?></p>
                        <p class="mb-1"><span class="fw-semibold">Отчество:</span> <?php echo e($app->user->surname); ?></p>
                        <p class="mb-1"><span class="fw-semibold">Статус:</span> <?php echo e($app->getStatus()); ?></p>
                        <p class="mb-1"><span class="fw-semibold">Гос номер автомобиля:</span> <?php echo e($app->gosRegNumber); ?></p>
                        <p class="card-text"><?php echo e($app->description); ?></p>
                        
                    </div>
                </div>
                <?php endif; ?>
                <?php if($app->status == 3): ?>
                <div class="card w-100 mb-3 mt-3 bg-warning text-warning-emphasis border-warning-subtle">
                    <div class="card-body">
                        <h5 class="card-title">Нарушение № <?php echo e($app->id); ?></h5>
                        <p class="mb-1"><span class="fw-semibold">Фамилия:</span> <?php echo e($app->user->firstname); ?></p>
                        <p class="mb-1"><span class="fw-semibold">Имя:</span> <?php echo e($app->user->lastname); ?></p>
                        <p class="mb-1"><span class="fw-semibold">Отчество:</span> <?php echo e($app->user->surname); ?></p>
                        <p class="mb-1"><span class="fw-semibold">Статус:</span> <?php echo e($app->getStatus()); ?></p>
                        <p class="mb-1"><span class="fw-semibold">Гос номер автомобиля:</span> <?php echo e($app->gosRegNumber); ?></p>
                        <p class="card-text"><?php echo e($app->description); ?></p>
                        
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\zakharov\resources\views/admin/index.blade.php ENDPATH**/ ?>