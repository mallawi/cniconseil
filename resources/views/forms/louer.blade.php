@extends("layouts.forms")

@section("content")
    <div id="form--wrap">
        <h1>Louer form</h1>
         {!! Form::open(["url" => "foo/bar", "class" => "acheter--form"]) !!}
            <div class="form--group">
                {{ Form::label("last--name", "Nom") }}
                {{ Form::text("last--name") }}
            </div>

            <div class="form--group">
                {{ Form::label("first--name", "Prenom") }}
                {{ Form::text("first--name") }}
            </div>

            <div class="form--group">
                {{ Form::label("email", "Addresse mail") }}
                {{ Form::text("email") }}
            </div>

            <div class="form--group">
                {{ Form::label("phone--number", "Portable") }}
                {{ Form::text("phone--number") }}
            </div>

             <div class="form--group">
                {{ Form::label("telephone--number", "Telephone") }}
                {{ Form::text("telephone--number") }}
            </div>

            <div class="form--btns">
                {{ Form::button("Anuller", ["class" => "form--btn form--cancel-btn"]) }}
                {{ Form::button("Soumettre", ["class" => "form--btn form--submit-btn", "type" => "submit"]) }}
            </div>
        {!! Form::close() !!}
    <div>
@stop