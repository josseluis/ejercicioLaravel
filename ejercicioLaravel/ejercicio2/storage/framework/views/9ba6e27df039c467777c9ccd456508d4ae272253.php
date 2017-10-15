<!DOCTYPE html>
<html>
<head>
	<title><?php echo $__env->yieldContent('title'); ?> </title>
	
    <?php echo Html::style('css\bootstrap.min.css'); ?>

    <?php echo Html::style('css\bootstrap-theme.min.css'); ?>

    
    <?php echo Html::script('js\jquery.min.js'); ?>

    <?php echo Html::script('js\bootstrap.min.js'); ?>

    <?php echo Html::script('js\docs.min.js'); ?>

</head>
<body>
	<?php echo $__env->make('compartido.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->yieldContent('content'); ?>
</body>
</html>