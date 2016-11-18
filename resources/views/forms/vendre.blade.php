@extends("layouts.forms")

@section("content")
    <div id="form--wrap">
        <h3>Vente</h3>

        <form  data-action="/form" data-method="POST" accept-charset="UTF-8" autocomplete="on" id="vendre--form" class="form--el">
            {{ csrf_field() }}

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
                <input name="adresse" type="text" id="adresse" autocomplete="address-line1">
            </div>

            <div class="form--group form--group-row">
                <label for="code--postal">Code Postal</label>
                <input name="codepostal" type="text" id="code--postal" autocomplete="postal-code">
            </div>

             <div class="form--group form--group-row">
                <label for="ville--address">Ville</label>
                <input name="ville" type="text" id="ville--address">
            </div>

            <div class="form--group form--select form--group-row form--group-double">
                <label for="type--achat">Type de bien</label>
                <select name="achat" id="type--achat" required>
                    <option value="maison">Maison</option> 
                    <option value="appartement">Appartement</option>
                    <option value="terrain">Terrain</option>
                </select>
            </div>

            <div class="form--group form--budget form--group-row form--group-double">
                <label for="prix">Prix souhaite</label>
                <input name="prix" type="text" id="prix" placeholder="&euro;" required>
            </div>

            <div class="form--group form--group-row">
                <label for="adresse--bien">Adresse de bien</label>
                <input name="addresseBien" type="text" id="adresse--bien">
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