<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Focus Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg text-dark fw-bold">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('tasks.index')); ?>">Focus Hub</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('tasks.index')); ?>">MY Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('tasks.create')); ?>">+ New Task</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<style>
.navbar{
background: #FFEFBA;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFFFFF, #FFEFBA);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFFFFF, #FFEFBA); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}

.navbar a{
background-color: #666666;
-webkit-background-clip: text;
-moz-background-clip: text;
background-clip: text;
color: transparent;
text-shadow: rgba(255,255,255,0.5) 0px 3px 3px;
}
body{
background: #FFEFBA;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #FFFFFF, #FFEFBA);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #FFFFFF, #FFEFBA);
}
.logo-img{
width: 200px;
height: 150px;
box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
border-radius: 20px;
}
.add-btn{
background: #141E30;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #243B55, #141E30);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
text-decoration: none;
color: #fff;
border-radius: 15px;
padding: 8px 20px;
box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
font-weight: bold;
text-shadow: 0px 0px 3px rgba(255,255,255,0.7);
}
.add-btn:hover{
box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
color: #FFEFBA;
transition: 1.2s;
}
.search-btn{
background-color: #FFEFBA;
color: #141E30;
box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px, rgb(209, 213, 219) 0px 0px 0px 1px inset;
}

.mytask-table{
padding: 10px;
border-radius: 15px;
box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 0px 8px;
background-color: #212529;
}
.first-tr{
    color: #FFEFBA;
    text-shadow: 0px 0px 6px rgba(255,255,255,0.7);
    border-bottom: 3px groove #FFEFBA;
    margin-bottom: 15px;
    padding: 20px;
}

.main-tittle{
font-weight: bold;
text-align: center;
font-size: 22px;
padding: 15px 10px;
color: rgba(0,0,0,0.6);
text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
                 0px -5px 35px rgba(255,255,255,0.3);
box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
width: 50%;
margin: auto;
border-radius: 20px;
}
</style><?php /**PATH C:\xampp\htdocs\focushub\resources\views/layouts/app.blade.php ENDPATH**/ ?>