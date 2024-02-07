

<?php $__env->startSection('content'); ?>
<div class="container p-3">
                <h1 class="text-center mb-3 display-3">Вход</h1>
                <form action="<?php echo e(route('auth')); ?>" method="post" class="m-auto">
                <?php echo csrf_field(); ?>
                    <div class="mb-3">
                    <?php if($errors->any()): ?>
                        <div class="bd-danger rouded-pill p-3">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($error); ?>

                            <br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>
                        <label for="login" class="form-label fs-5">Ваш логин</label>
                        <input type="text" class="form-control shadow-sm p-3 rounded-pill" id="login" name="login">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fs-5">Ваш пароль</label>
                        <input type="password" class="form-control shadow-sm  p-3 rounded-pill" id="password" name="password">
                    </div>
                    <input type="submit" class="btn btn-primary mb-3 mt-3 w-100 shadow-sm  p-3 fs-4 rounded-pill" value="Войти">
                    <a href="/register/" class="btn btn-outline-primary w-100 p-3 fs-4 rounded-pill shadow-sm">Зарегистрироваться</a>
                </form>
            </div>
    
    
    <footer class="sticky-bottom text-center text-secondary p-3">
        <div class="container-fluid">
            <span>Нарушениям.Нет <br>2024</span>
        </div>        
    </footer>    
    <script src="js/bootstrap.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\zakharov\resources\views/user/login.blade.php ENDPATH**/ ?>