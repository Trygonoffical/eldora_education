<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Meta Tags -->
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Jampack - Admin CRM Dashboard Template</title>
    <meta name="description" content="A modern CRM Dashboard Template with reusable and flexible components for your SaaS web applications by hencework. Based on Bootstrap."/>
    
	<!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon">
	
	<!-- CSS -->
    <link href="<?php echo e(asset('dist/css/style.css')); ?>" rel="stylesheet" type="text/css">
</head>
<body>
   
   	<!-- Wrapper -->
       <?php echo $__env->yieldContent('content'); ?>
    <!-- /Wrapper -->

	<!-- jQuery -->
    <script src="<?php echo e(asset('vendors/jquery/dist/jquery.min.js')); ?>"></script>

    <!-- Bootstrap Core JS -->
   	<script src="<?php echo e(asset('vendors/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- FeatherIcons JS -->
    <script src="<?php echo e(asset('dist/js/feather.min.js')); ?>"></script>

    <!-- Fancy Dropdown JS -->
    <script src="<?php echo e(asset('dist/js/dropdown-bootstrap-extended.js')); ?>"></script>

	<!-- Simplebar JS -->
	<script src="<?php echo e(asset('vendors/simplebar/dist/simplebar.min.js')); ?>"></script>
	
	<!-- Init JS -->
	<script src="<?php echo e(asset('dist/js/init.js')); ?>"></script>
</body>


</html><?php /**PATH C:\wamp64\www\Eldora\resources\views/layouts/login.blade.php ENDPATH**/ ?>