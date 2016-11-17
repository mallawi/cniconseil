@extends("layouts.forms")

@section("content")
    <div id="form--wrap">
        <h3>Acheter</h3>

        <form  method="POST" action="/foo/bar" accept-charset="UTF-8" id="form" class="acheter--form">
            {{ csrf_field() }}

            <div class="form--group form--group-row">
                <label for="lname" class="">Nom</label>
                <input name="last--name" type="text" id="lname" class="" autocomplete="family-name">
            </div>


            <div class="form--group form--group-row">
                <label for="fname">Prenom</label>
                <input name="first--name" type="text" id="fname" autocomplete="given-name">
            </div>

            <div class="form--group form--group-row">
                <label for="email">Adresse mail</label>
                <input name="email" type="email" id="email" autocomplete="email">
            </div>

            <div class="form--group form--group-row">
                <label for="phone">Telephone Mobile</label>
                <input name="phone--number" type="tel" id="phone" pattern="[0-9]*" autocomplete="tel">
            </div>

            <div class="form--group form--group-row">
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

            <div class="form--group form--type form--group-row">
                <label for="achat">Achat</label>
                <select name="typeSelect" id="achat">
                    <option value="maison" selected>Maison</option> 
                    <option value="appartement">Appartement</option>
                    <option value="terrain">Terrain</option>
                </select>
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
@endsection