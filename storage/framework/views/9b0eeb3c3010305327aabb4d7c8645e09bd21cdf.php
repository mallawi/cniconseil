

<?php $__env->startSection("content"); ?>
    <div id="form--wrap">
        <h3>Aquisition</h3>

        <form  method="POST" action="/foo/bar" accept-charset="UTF-8" id="acheter--form" class="form--el">
            <?php echo e(csrf_field()); ?>


            <div class="form--group form--group-row form--group-double">
                <label for="lname" class="">Nom</label>
                <input name="last--name" type="text" id="lname" class="" autocomplete="family-name" requered>
            </div>

            <div class="form--group form--group-row form--group-double">
                <label for="fname">Prenom</label>
                <input name="first--name" type="text" id="fname" autocomplete="given-name" required>
            </div>

            <div class="form--group form--group-row">
                <label for="email">Adresse mail</label>
                <input name="email" type="email" id="email" autocomplete="email" required>
            </div>

            <div class="form--group form--group-row form--group-double">
                <label for="phone">Telephone Mobile</label>
                <input name="phone--number" type="tel" id="phone" pattern="[0-9]*" autocomplete="tel" required>
            </div>

            <div class="form--group form--group-row form--group-double">
                <label for="telephone">Telephone</label>
                <input name="telephone--number" type="tel" id="telephone" pattern="[0-9]*">
            </div>


            <div class="form--group form--group-row">
                <label for="adresse">Adresse</label>
                <input name="Adresse" type="text" id="adresse" autocomplete="address-line1">
            </div>

            <div class="form--group form--group-row">
                <label for="codepostal">Code Postal</label>
                <input name="Postal" type="text" id="codepostal" autocomplete="postal-code">
            </div>

             <div class="form--group form--group-row">
                <label for="ville">Ville</label>
                <input name="Ville" type="text" id="ville">
            </div>

            <div class="form--group form--select form--group-row form--group-double">
                <label for="achat">Type de bien</label>
                <select name="typeSelect" id="achat" required>
                    <option value="maison">Maison</option> 
                    <option value="appartement">Appartement</option>
                    <option value="terrain">Terrain</option>
                </select>
            </div>

            <div class="form--group form--budget form--group-row form--group-double">
                <label for="budget">Budget</label>
                <input name="budget" type="text" id="budget" placeholder="&euro;" required>
            </div>

            <div class="form--group form--group-row">
                <label for="sector">Lieu/Secteur</label>
                <input name="Sector" type="text" id="sector" required>
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