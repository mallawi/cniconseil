@extends("layouts.base")

@section("title", "CNI Conseil &horbar; Annonce")

@section("content")
    <div id="content--container-annonce">
        <section id="annonce--section">
            <div class="annonce--gallery-wrap">
                <div class="annonce--grid-item mdl-grid">
                    <div class="annonce--item-cell mdl-cell mdl-cell--12-col">
                        <figure>
                            <img src="https://unsplash.it/650/250/?random">
                        </figure>
                    </div>
                </div>

                <div class="annonce--grid-items mdl-grid">
                    @for ($i = 21; $i < 25; $i++)
                    <div class="annonce--items-cell mdl-cell mdl-cell--3-col">
                        <figure>
                            <img src="https://unsplash.it/160/80?image={{$i}}">
                        </figure>
                    </div>
                    @endfor
                </div>
            </div>

             <div class="annonce--desc-wrap">
                 <h4>Description</h4>
            </div>
        </section>

        <section id="annonce--contact-section">
            <h4>Contact</h4>
            <form data-action="" data-method="POST" accept-charset="UTF-8" autocomplete="on" id="contact--form" class="form--el">
                {{ csrf_field() }}

                <div class="form--group form--group-row form--group-double">
                    <label for="last--name" class="">Nom</label>
                    <input name="lname" type="text" id="last--name" class="" autocomplete="family-name" required>
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
                    <label for="address">Adresse</label>
                    <input name="address" type="text" id="address" autocomplete="address-line1">
                </div>

                <div class="form--group form--group-row">
                    <label for="postal--code">Code Postal</label>
                    <input name="postalcode" type="text" id="postal--code" autocomplete="postal-code">
                </div>

                <div class="form--group form--group-row">
                    <label for="ville--address">Ville</label>
                    <input name="ville" type="text" id="ville--address">
                </div>

                <div class="form--group form--message">
                    <label for="message">Message</label>
                    <textarea name="message" cols="50" rows="10" id="message"></textarea>
                </div>

                <div class="form--btns">
                    <button id="form--cancel-btn" class="form--btn mdl-button mdl-js-button mdl-button--raised" type="button">Anuller</button>
                    <button id="form--submit-btn" class="form--btn mdl-button mdl-js-button mdl-button--raised" type="submit">Soumettre</button>
                </div>
            </form>
        </section>
    </div>
@stop