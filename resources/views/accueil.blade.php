
@extends("layouts.base")

@section("content")
    <div id="content--container">
        <section id="presentation" class="presentation--section">
            <hgroup class="pres--heading">
                <h2>CNI Conseil</h2>
                <h1>Espace Immobillier &amp; Patrimoine</h1>
            <p>Consellier en Immobillier, Gention de Patrimoine Habitation, Bureaux et Commerces</p>
        </section>

        <section id="forms--wrapper" class="forms--section">
            <div id="forms--item--wrap">
                <div class="acheter--form-item forms--item"  data-type="acheter">
                    <h3>Acheter</h3>
                    <p>Voulez-vous acheter?</p>
                </div>

                <div class="vendre--form-item forms--item" data-type="vendre">
                    <h3>Vendre</h3>
                    <p>Voulez-vous vendre?</p>
                </div>

                <div class="investir--form-item forms--item" data-type="investir">
                    <h3>Investiment</h3>
                    <p>Voulez-vous investir?</p>
                </div>

                <div class="louer--form-item forms--item" data-type="louer">
                    <h3>Logement</h3>
                    <p>Voulez-vous louer?</p>
                </div>
            </div>

            <div id="form--container"></div>
        </section>  
        
        <section id="annonces" class="annonces--section">
            <div class="annonce--slider-wrap">
                <div class="slider--items">
                    @for ($i = 0; $i < 3; $i++)
                    <span class="slider--item">
                            <figure>
                            <img src="http://placehold.it/800x400/fff/000">
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
                <a href="{{ url('/annonces') }}">Voir les annonces</a>
            </div>
        </section>

        <section class="apropos--section">
                <h2>Qui sommes-nous</h2>
        </section>

        
        <section id="contact" class="contact--section">
            
        </section>
    </div>
@stop
