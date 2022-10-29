<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Eldora Education')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('cs/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dist/css/style.css')); ?>" rel="stylesheet" type="text/css">
    <!-- Daterangepicker CSS -->
    <link href="<?php echo e(asset('vendors/daterangepicker/daterangepicker.css')); ?>" rel="stylesheet" type="text/css" />


</head>

<body>
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">



        
        <?php echo $__env->make('inc.dashboardNavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

        
        <?php echo $__env->make('inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        


        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <?php echo $__env->yieldContent('content'); ?>

        </div>


    </div>

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


    <!-- Data Table JS -->
    <script src="<?php echo e(Asset('vendors/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(Asset('vendors/datatables.net-bs5/js/dataTables.bootstrap5.min.js')); ?>"></script>
    <script src="<?php echo e(Asset('vendors/datatables.net-select/js/dataTables.select.min.js')); ?>"></script>

    <!-- Daterangepicker JS -->
    <script src="<?php echo e(Asset('vendors/moment/min/moment.min.js')); ?>"></script>
    <script src="<?php echo e(Asset('vendors/daterangepicker/daterangepicker.js')); ?>"></script>
    <script src="<?php echo e(Asset('dist/js/daterangepicker-data.js')); ?>"></script>

    <!-- Amcharts Maps JS -->
    <script src="<?php echo e(Asset('vendors/%40amcharts/amcharts4/core.js')); ?>"></script>
    <script src="<?php echo e(Asset('vendors/%40amcharts/amcharts4/maps.js')); ?>"></script>
    <script src="<?php echo e(Asset('vendors/%40amcharts/amcharts4-geodata/worldLow.js')); ?>"></script>
    <script src="<?php echo e(Asset('vendors/%40amcharts/amcharts4-geodata/worldHigh.js')); ?>"></script>
    <script src="<?php echo e(Asset('vendors/%40amcharts/amcharts4/themes/animated.js')); ?>"></script>

    <!-- Apex JS -->
    <script src="<?php echo e(Asset('vendors/apexcharts/dist/apexcharts.min.js')); ?>"></script>

    <!-- Init JS -->

    <script src="<?php echo e(asset('dist/js/init.js')); ?>"></script>
    <script src="<?php echo e(Asset('dist/js/chips-init.js')); ?>"></script>
    <script src="<?php echo e(Asset('dist/js/dashboard-data.js')); ?>"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('.ed1 '))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>
<?php /**PATH C:\wamp64\www\Eldora\resources\views/layouts/app.blade.php ENDPATH**/ ?>