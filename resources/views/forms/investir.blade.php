@extends("layouts.forms")

@section("content")
    <div id="form--wrap">
        <h3>Investiment</h3>

         <form method="POST" action="/foo/bar" accept-charset="UTF-8"  id="investir--form" class="form--el">
            {{ csrf_field() }}

            <div class="form--group form--group-row form--group-double">
                <label for="lname" class="">Nom</label>
                <input name="last--name" type="text" id="lname" class="" autocomplete="family-name" required>
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
                <label for="revenu">Revenu</label>
                <select name="renenuSelect" id="revenu" required>
                    <option value="0 à 20 000">0 à 20 000 &euro;</option> 
                    <option value="20 000 à 40 000">20 000 à 40 000 &euro;</option>
                    <option value="40 000 à 60 000">40 000 à 60 000 &euro;</option>
                    <option value="+ 60 000">+ 60 000 &euro;</option>
                </select>
            </div>

            <div class="form--group form--select form--group-row form--group-double">
                <label for="impots">Impôts payé en 2016</label>
                <select name="impotsSelect" id="impots" required>
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
@stop