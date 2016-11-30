@extends("layouts.base")

@section("title", "CNI Conseil &horbar; Annonces")

@section("content")
    <div id="content--container-annonces">
        <section id="annonces--grid-section">
            <div class="mdl-grid">
                @php
                    $ix = 30;
                @endphp
                @for ($i = 15; $i < 17; $i++)
                <div class="annonces--grid-cell mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-cell--middle">
                    @for (; $ix < 32; $ix++)
                    <figure class="annonces--fig">
                        <img src="https://unsplash.it/700/300?image={{$ix}}">
                    </figure>
                    @endfor
                    <div class="annonces--desc">
                        <h5>Description&colon;</h5>
                    </div>
                   <button type="button" class="annonces--link-btn mdl-button mdl-js-button mdl-button--raised">
                        <a href="{{ url('/annonces/annonce') }}">Voir annonce</a>
                    </button>
                </div>
                @php
                    $ix = 30;
                @endphp
                @endfor
            </div>
        </section>
    </div>
@stop
