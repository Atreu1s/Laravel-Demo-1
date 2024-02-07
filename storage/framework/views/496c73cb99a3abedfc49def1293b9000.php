<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
</head>
<body style="background-color: #e3f2fd;">
   
    <header class="border-bottom border-secondary p-3">       
        <nav class="navbar navbar-light navbar-expand-md" style="background-color: #e3f2fd;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo e(route('main')); ?>">
                        <img src="car-front-fill.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                        Нарушениям.Нет
                    </a>            
                    <button class="navbar-toggler" data-bs-toggle="collapse" 
                        data-bs-target="#navbarNav" >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="navbar-nav">
                        <?php if(auth()->guard()->guest()): ?>
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">Вход</a>
                        <a class="nav-link" href="<?php echo e(route('reg')); ?>">Регистрация</a>
                        <?php endif; ?>
                        <?php if(auth()->guard()->check()): ?>
                        <a class="nav-link" href="<?php echo e(route('client.index')); ?>">Личный кабинет</a>                  
                        <form action="<?php echo e(route('logout')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="submit" class="nav-link" value="Выход">
                        </form>
                        <?php endif; ?>
                        </div>
                    </div>        
                </div>
        </nav>      
    </header>
    
        
    <main class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <script src="js/bootstrap.js"></script>
</body>
</html><?php /**PATH C:\OSPanel\domains\zakharov\resources\views/layouts/main_layout.blade.php ENDPATH**/ ?>