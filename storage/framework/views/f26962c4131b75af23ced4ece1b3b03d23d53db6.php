<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="mironcoder">
    <meta name="email" content="mironcoder@gmail.com">
    <meta name="profile" content="https://themeforest.net/user/mironcoder">
    <meta name="template" content="Ecomart">
    <meta name="title" content="Ecomart - eCommerce HTML Template">
    <meta name="keywords"
        content="html, ecomart, ecommerce, clothing, food, electronics, minimal, beauty, shopping, simple, fashion, single vendor, multipurpose, store, shop">
    <title>Ecomart - Home</title>
    <link rel="icon" href="../../images/favicon.png">
    <link rel="stylesheet" href="../../fonts/icofont/icofont.min.css">
    <link rel="stylesheet" href="../../fonts/flaticon/grocery/flaticon.css">
    <link rel="stylesheet" href="../../css/vendor/slick.css">
    <link rel="stylesheet" href="../../css/vendor/bootstrap.css">
    <link rel="stylesheet" href="../../css/custom/main.css">
    <link rel="stylesheet" href="../../css/custom/index.css">
</head>

<body>
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('flashy::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    


</body>

</html>
<?php /**PATH C:\Users\Utilisateur\OneDrive\سطح المكتب\DW\3W Academy\Laravel\larashop\resources\views/layouts/app.blade.php ENDPATH**/ ?>