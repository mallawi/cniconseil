

<?php $__env->startSection("content"); ?>
    <div id="form--wrap">
        <h3>Investissement</h3>

        <form  data-action="/form" data-method="POST" accept-charset="UTF-8" autocomplete="on" id="investir--form" class="form--el">
            <?php echo e(csrf_field()); ?>


            <div class="form--group form--group-row form--group-double">
                <label for="last--name" class="">Nom</label>
                <input name="lname" type="text" id="last--name" class="" autocomplete="family-name">
            </div>

            <div class="form--group form--group-row form--group-double">
                <label for="first--name">Prenom</label>
                <input name="fname" type="text" id="first--name" autocomplete="given-name">
            </div>

            <div class="form--group form--group-row">
                <label for="email--address">Adresse mail</label>
                <input name="email" type="email" id="email--address" autocomplete="email">
            </div>

            <div class="form--group form--group-row form--group-double">
                <label for="phone--number">Telephone Mobile</label>
                <input name="phone" type="tel" id="phone--number" pattern="[0-9]*" autocomplete="tel">
            </div>

            <div class="form--group form--group-row form--group-double">
                <label for="telephone--number">Telephone</label>
                <input name="telephone" type="tel" id="telephone--number" pattern="[0-9]*">
            </div>

            <div class="form--group form--group-row">
                <label for="adresse">Adresse</label>
                <input name="address" type="text" id="adresse" autocomplete="address-line1">
            </div>

            <div class="form--group form--group-row">
                <label for="postal--code">Code Postal</label>
                <input name="postalcode" type="text" id="postal--code" autocomplete="postal-code">
            </div>

             <div class="form--group form--group-row">
                <label for="ville--address">Ville</label>
                <input name="ville" type="text" id="ville--address">
            </div>

            <div class="form--group form--select form--group-row form--group-double">
                <label for="revenu--select">Revenu</label>
                <select name="renenu" id="revenu--select" required>
                    <option value="0 à 20 000">0 à 20 000 &euro;</option> 
                    <option value="20 000 à 40 000">20 000 à 40 000 &euro;</option>
                    <option value="40 000 à 60 000">40 000 à 60 000 &euro;</option>
                    <option value="+ 60 000">+ 60 000 &euro;</option>
                </select>
            </div>

            <div class="form--group form--select form--group-row form--group-double">
                <label for="impots--select">Impôts payé en 2016</label>
                <select name="impots" id="impots--select" required>
                    <option value="1 à 2 000">1 à 2 000 &euro;</option> 
                    <option value="2 000 à 5 000">2 000 à 5 000 &euro;</option>
                    <option value="5 000 à 10 000">5 000 à 10 000 &euro;</option>
                    <option value="+ 10 000">+ 10 000 &euro;</option>
                </select>
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
    <div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.forms", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>