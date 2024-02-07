

<?php $__env->startSection('content'); ?>
    <div class="container p-3">
        <h1 class="text-center mb-3 display-3">Регистрация</h1>
        <form action="<?php echo e(route('user.store')); ?>" method="post" class="m-auto">
            <?php echo csrf_field(); ?>
            <?php if($errors->any()): ?>
                <div class="bg-danger rounded p-3 text-white fs-5">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($error); ?>

                        <br>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <div class="mb-3">
                    <label for="surname" class="form-label fs-5">Фамилия</label>
                    <input type="text" class="form-control shadow-sm  p-3 rounded-pill" id="surname" name="surname">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label fs-5">Имя</label>
                    <input type="text" class="form-control shadow-sm  p-3 rounded-pill" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="patronymic" class="form-label fs-5">Отчество</label>
                    <input type="text" class="form-control shadow-sm  p-3 rounded-pill" id="patronymic" name="patronymic">
                </div>
                <div class="mb-3">
                    <label for="login" class="form-label fs-5">Логин</label>
                    <input type="text" class="form-control shadow-sm  p-3 rounded-pill" id="login" name="login">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fs-5">Адрес электронной почты</label>
                    <input type="email" class="form-control shadow-sm  p-3 rounded-pill" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label fs-5">Телефон</label>
                    <input type="tel" class="form-control shadow-sm  p-3 rounded-pill" id="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fs-5">Пароль</label>
                    <input type="password" class="form-control shadow-sm  p-3 rounded-pill" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="password-repeat" class="form-label fs-5">Повторите пароль</label>
                    <input type="password" class="form-control shadow-sm  p-3 rounded-pill" id="password-repeat" name="password-repeat">
                    </div>
            <input type="submit" class="btn btn-primary mb-3 mt-3 w-100 shadow-sm p-3 fs-2 rounded-pill" value="Зарегистрироваться">
            <a href="<?php echo e(route('login')); ?>" class="btn btn-outline-primary w-100 p-3 fs-2 rounded-pill shadow-sm">Войти</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\zakharov\resources\views/user/reg.blade.php ENDPATH**/ ?>