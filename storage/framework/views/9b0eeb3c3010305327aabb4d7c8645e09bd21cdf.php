

<?php $__env->startSection("content"); ?>
    <div id="form--wrap">
        <h3>Acheter</h3>

        <form  method="POST" action="/foo/bar" accept-charset="UTF-8" id="form" class="acheter--form">
            <?php echo e(csrf_field()); ?>


            <div class="form--group">
                <label for="lname" class="">Nom</label>
                <input name="last--name" type="text" id="lname" class="">
            </div>


            <div class="form--group">
                <label for="fname">Prenom</label>
                <input name="first--name" type="text" id="fname">
            </div>

            <div class="form--group">
                <label for="email">Adresse mail</label>
                <input name="email" type="email" id="email">
            </div>

            <div class="form--group">
                <label for="phone">Portable</label>
                <input name="phone--number" type="tel" id="phone" pattern="[0-9]*">
            </div>

             <div class="form--group">
                <label for="telephone">Telephone</label>
                <input name="telephone--number" type="tel" id="telephone" pattern="[0-9]*">
            </div>

            <div class="form--group form--budget form--group-row">
                <label for="budget">Budget</label>
                <input name="budget" type="text" id="budget" placeholder="&euro;">
            </div>


            <div class="form--group form--message">
                <label for="message">Message</label>
                <textarea name="message" cols="50" rows="10" id="message"></textarea>
            </div>

            <div class="form--btns">
                <button class="form--btn mdl-button mdl-js-button mdl-button--raised" type="button">Anuller</button>
                <button class="form--btn mdl-button mdl-js-button mdl-button--raised" type="submit">Soumettre</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.forms", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>