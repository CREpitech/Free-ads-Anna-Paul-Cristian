<html>
<head>
    <title>Sign-up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
            <h4>Login</h4>
            <hr>
            <form action="<?php echo e(route('Login-user')); ?>" method="post">
                <?php if(Session::has('success')): ?>
                <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
                <?php endif; ?>
                <?php if(Session::has('fail')): ?>
                <div class="alert alert-danger"><?php echo e(Session::get('fail')); ?>

                <?php endif; ?>
                <?php echo csrf_field(); ?>
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your Email" value="<?php echo e(old('email')); ?>">
                <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span> 
                </div>
                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password" value="<?php echo e(old('password')); ?>">
                <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span> 
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary">Log in</button>
                </div>
                <br>
                <a href="registration">New User ? Register Here.</a>
            </form>
</div>
</div>
</body>
</html><?php /**PATH /home/anna/Epitech/Free-ads-Anna-Paul-Cristian/Freeads/resources/views/auth/login.blade.php ENDPATH**/ ?>