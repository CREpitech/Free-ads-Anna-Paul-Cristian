<html>
<head>
    <title>Sign-up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="form-group col-12 p-0">
            <div>
                <?php if(Session::has('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(Session::get('success')); ?>

                </div>
                <?php endif; ?>
            </div>

        <form action="<?php echo e(route('store')); ?>" method="POST">
            <div class="form">
                <div clas="mb-3">
                    <h2 style="text-align: center; color: black">Sign-Up</h2>
                </div>
            </div>

            <hr/>
            <div class="row">
            <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="mb-3">
            <label class="lb">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Your Email">
            </div>
            <div class="mb-3">
            <label class="lb">Password</label>
            <input type="password" class="form-control" name="password" placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary">Sign up</button>
            </div>
            </div>
</form>
</div>
</div>
</body>
</html><?php /**PATH /home/anna/Freeads/resources/views/sign-up.blade.php ENDPATH**/ ?>