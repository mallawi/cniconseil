@extends("layouts.base")

@section("title", "CNI Conseil &horbar; Accueil")

@section("content")
    <div id="content--container-accueil">
        <section id="presentation" class="presentation--section">
            <hgroup class="pres--heading">
                <h2>CNI Conseil</h2>
                <h1>Espace Immobilier &amp; Patrimoine</h1>
            <p>Conseiller en Immobilier, Gestion de Patrimoine Habitation, Bureaux et Commerces</p>
        </section>

        <section id="forms--wrapper" class="forms--section">
            <div id="forms--item--wrap">
                <div class="acheter--form-item forms--item"  data-type="acheter">
                    <h4>Acheter</h4>
                    <p>Voulez-vous acheter?</p>

                    <span class="form--request-progress">
                        <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
                    </span>
                </div>

                <div class="vendre--form-item forms--item" data-type="vendre">
                    <h4>Vendre</h4>
                    <p>Voulez-vous vendre?</p>

                    <span class="form--request-progress">
                        <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
                    </span>
                </div>

                <div class="investir--form-item forms--item" data-type="investir">
                    <h4>Investiment</h4>
                    <p>Voulez-vous investir?</p>

                    <span class="form--request-progress">
                        <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
                    </span>
                </div>

                <div class="louer--form-item forms--item" data-type="louer">
                    <h4>Logement</h4>
                    <p>Voulez-vous louer?</p>

                    <span class="form--request-progress">
                        <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
                    </span>
                </div>
            </div>

            <div id="form--container"></div>
            
            <div id="form--confirmation-message">
                <h3>Merci de remplir le formulaire</h3>
            </div>
        </section>  
        
        <section id="annonces" class="annonces--section">
            <div class="annonce--slider-wrap">
                <div class="slider--items">
                    @for ($i = 0; $i < 3; $i++)
                    <span class="slider--item">
                        <figure>
                            <img src="https://unsplash.it/900/500?image={{$i}}">
                        </figure>
                    </span>
                    @endfor
                </div>

                <button name="previous--btn" class="slider--btn" type="button">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
                    </svg>
                </button>

                <button name="next--btn" class="slider--btn" type="button">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
                    </svg>
                </button>                      
            </div>

            <div class="annonces--link">
                <button type="button" class="annonces--link-btn mdl-button mdl-js-button mdl-button--raised">
                    <a href="{{ url('/annonces') }}">Voir les annonces</a>
                </button>
            </div>
        </section>

        <section id="a-propos" class="apropos--section">
                <h2>Qui sommes-nous</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam leo ac neque ornare, vitae ultricies lectus pellentesque. Maecenas rhoncus at tellus eget volutpat. Praesent vitae diam velit. Nulla tempor purus et metus tincidunt ullamcorper nec vitae magna. Vivamus ornare aliquet blandit. Cras non sodales erat. Nulla condimentum ligula eget tincidunt semper. Donec nec malesuada lorem. Curabitur lobortis risus a dapibus aliquet. Quisque cursus ex in nunc rutrum, non posuere dui tincidunt.
                    Fusce vestibulum risus eu turpis ultrices molestie. Aliquam molestie arcu ut vestibulum varius. Cras lobortis urna diam, eget laoreet nunc imperdiet at. Sed viverra mauris id mi tristique, a malesuada magna laoreet. Pellentesque maximus elementum est at consequat. Mauris ac iaculis eros, non rhoncus purus. Quisque eu nunc.
                </p>
        </section>
    </div>
@stop
