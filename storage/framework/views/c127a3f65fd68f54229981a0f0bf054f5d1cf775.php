<?php $__env->startSection("content"); ?>
    <div id="form--wrap">
        <h1>Acheter</h1>
        <?php echo Form::open(["url" => "foo/bar", "class" => "acheter--form"]); ?>

           <?php echo e(Form::label('email', 'E-Mail Address')); ?>

           <?php echo e(Form::text('email')); ?>

        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.forms", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>