@extends("layouts.base")

@section("title", "CNI Conseil &horbar; Annonces")

@section("content")
    <div id="content--container-annonces">
        <section id="annonces--grid-section">
            <div class="mdl-grid">
                @for ($i = 0; $i < 4; $i++)
                <div class="annonces--grid-cell mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-cell--middle">
                    <figure class="annonces--fig">
                        <img src="http://placehold.it/900x300/fff/000">
                    </figure>
                    <div class="annonces--desc">
                        <h5>Description</h5>
                    </div>
                   <button type="button" class="annonces--link-btn mdl-button mdl-js-button mdl-button--raised">
                        <a href="{{ url('/annonces/annonce') }}">Voir annonce</a>
                    </button>
                </div>
                @endfor
            </div>
        </section>
    </div>
@stop
