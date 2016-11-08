@extends("layouts.forms")

@section("content")
    <div id="form--wrap">
        <h1>Acheter</h1>
        {!! Form::open(["url" => "foo/bar", "class" => "acheter--form"]) !!}
           {{ Form::label('email', 'E-Mail Address') }}
           {{ Form::text('email') }}
        {!! Form::close() !!}
    </div>
@endsection