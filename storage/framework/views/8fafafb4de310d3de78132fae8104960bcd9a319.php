

<?php $__env->startSection("content"); ?>
    <div id="form--wrap">
        <h1>Vendre form</h1>
         <?php echo Form::open(["url" => "foo/bar", "class" => "acheter--form"]); ?>

            <div class="form--group">
                <?php echo e(Form::label("last--name", "Nom")); ?>

                <?php echo e(Form::text("last--name")); ?>

            </div>

            <div class="form--group">
                <?php echo e(Form::label("first--name", "Prenom")); ?>

                <?php echo e(Form::text("first--name")); ?>

            </div>

            <div class="form--group">
                <?php echo e(Form::label("email", "Addresse mail")); ?>

                <?php echo e(Form::text("email")); ?>

            </div>

            <div class="form--group">
                <?php echo e(Form::label("phone--number", "Portable")); ?>

                <?php echo e(Form::text("phone--number")); ?>

            </div>

             <div class="form--group">
                <?php echo e(Form::label("telephone--number", "Telephone")); ?>

                <?php echo e(Form::text("telephone--number")); ?>

            </div>

            <div class="form--btns">
                <?php echo e(Form::button("Anuller", ["class" => "form--btn form--cancel-btn"])); ?>

                <?php echo e(Form::button("Soumettre", ["class" => "form--btn form--submit-btn", "type" => "submit"])); ?>

            </div>
        <?php echo Form::close(); ?>

    <div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.forms", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>