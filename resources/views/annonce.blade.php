@extends("layouts.base")

@section("title", "CNI Conseil &horbar; Annonce")

@section("content")
    <div id="content--container-annonce">
        <section id="annonce--section" class="cf">
            <div class="annonce--gallery-wrap">
                <div class="annonce--grid-item mdl-grid">
                    <div class="annonce--item-cell mdl-cell mdl-cell--12-col"></div>
                </div>

                <div class="annonce--grid-items mdl-grid">
                    <div class="annonce--items-cell mdl-cell mdl-cell--3-col">4</div>
                    <div class="annonce--items-cell mdl-cell mdl-cell--3-col">4</div>
                    <div class="annonce--items-cell mdl-cell mdl-cell--3-col">4</div>
                    <div class="annonce--items-cell mdl-cell mdl-cell--3-col">4</div>
                </div>
            </div>

             <div class="annonce--desc-wrap">
                 <h4>Description</h4>
            </div>
        </section>
    </div>
@stop