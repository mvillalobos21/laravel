@extends('master')

@section('title','S authentifier')

@section('content')
    <p>Media Form</p><br>
    <div>
        {!! Form::open(['route' => 'login', 'method' => 'post']) !!}
        {!! Form::label('titleLabel_form', 'Courriel') !!}
        {!! Form::text('title_form', '') !!}
        <br/>
        {!! Form::label('titleLabel_form', 'Mot de Passe') !!}
        {!! Form::text('title_form', '') !!}

        <br/>
        {!! Form::submit('Entrer') !!}

        {!! Form::close() !!}
    </div>
@endsection