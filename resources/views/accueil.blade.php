
@extends("layouts.base")

@section("content")
    <div id="content--container">
        <section id="presentation" class="presentation--section">
            <hgroup class="pres--heading">
                <h2>CNI Conseil</h2>
                <h1>Espace Immobillier &amp; Patrimoine</h1>
            <p>Consellier en Immobillier, Gention de Patrimoine Habitation, Bureaux et Commerces</p>
        </section>

        <section id="" class="forms--section">
            <div class="acheter--form forms--item">
                <h3>Acheter</h3>
                <p>Voulez-vous acheter?</p>
                    <span class="forms--item-feedback">
                    <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                    </svg>
                </span>
            </div>

            <div class="vendre--form forms--item">
                <h3>Vendre</h3>
                <p>Voulez-vous vendre?</p>
                    <span class="forms--item-feedback">
                        <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                    </svg>
                </span>
            </div>

            <div class="investir--form forms--item">
                <h3>Investiment</h3>
                <p>Voulez-vous investir?</p>
                    <span class="forms--item-feedback">
                        <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                    </svg>
                </span>
            </div>

            <div class="louer--form forms--item">
                <h3>Logement</h3>
                <p>Voulez-vous louer?</p>
                <span class="forms--item-feedback">
                        <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"/>
                    </svg>
                </span>
            </div>
        </section>  
        
        <section id="annonces" class="annonces--section">
            <div class="annonce--slider-wrap">
                <div class="slider--items">
                    <span class="slider--item">
                            <figure>
                            <img src="http://placehold.it/800x400/fff/000">
                        </figure>
                    </span>
                    <span class="slider--item">
                        <figure>
                                <img src="http://placehold.it/800x400/fff/000">
                        </figure>
                    </span>
                    <span class="slider--item">
                        <figure>
                            <img src="http://placehold.it/800x400/fff/000">
                        </figure>
                    </span>
                </div>

                <button class="slider--btn" type="button">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
                    </svg>
                </button>
                <button class="slider--btn" type="button">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
                    </svg>
                </button>                      
            </div>
        </section>

        <section class="apropos--section">
                <h2>Qui sommes-nous</h2>
        </section>

        
        <section id="contact" class="contact--section">
            
        </section>
    </div>
@stop
