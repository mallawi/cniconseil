

<?php $__env->startSection("content"); ?>
    <div id="form--wrap">
        <h1>Louer form</h1>
         <form method="POST" action="/foo/bar" accept-charset="UTF-8" class="louer--form">
            <?php echo e(csrf_field()); ?>


            <div class="form--group">
                <label for="last--name">Nom</label>
                <input name="last--name" type="text" id="last--name">
            </div>

            <div class="form--group">
                <label for="first--name">Prenom</label>
                <input name="first--name" type="text" id="first--name">
            </div>

            <div class="form--group">
                <label for="email">Addresse mail</label>
                <input name="email" type="text" id="email">
            </div>

            <div class="form--group">
                <label for="phone--number">Portable</label>
                <input name="phone--number" type="text" id="phone--number">
            </div>

             <div class="form--group">
                <label for="telephone--number">Telephone</label>
                <input name="telephone--number" type="text" id="telephone--number">
            </div>

            <div class="form--group form--budget">
                <label for="budget">Budget</label>
                <input name="budget" type="text" id="budget">
            </div>


            <div class="form--group form--message">
                <label for="message">Message</label>
                <textarea name="message" cols="50" rows="10" id="message"></textarea>
            </div>

            <div class="form--btns">
                <button class="form--btn form--cancel-btn" type="button">Anuller</button>
                <button class="form--btn form--submit-btn" type="submit">Soumettre</button>
            </div>
        </form>
    <div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.forms", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>