@extends('layouts.default')

@section('content')
    {{Form::open(array('action' => 'ConcertsController@signin','id' => "Form-login",'class' => "form-horizontal"))}}
    <div class="form-group">
        {{ Form::label('pseudo', 'Votre pseudo',array('class' => 'control-label')) }}
        <div class="col-sm-3">
            {{ Form::text('pseudo',null,array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Votre email',array('class' => 'control-label')) }}
        <div class="col-sm-3">
            {{ Form::email('email',null,array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Votre Mot de pass',array('class' => 'control-label')) }}
        <div class="col-sm-3">
            {{ Form::password('password',array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('confpassword', 'Confirmer votre Mot de pass',array('class' => 'control-label')) }}
        <div class="col-sm-3">
            {{ Form::password('confpassword',array('class' => 'form-control')) }}
        </div>
    </div>
    @if(Session::has('erreurInscription'))
        <div class="alert alert-danger" role="alert">
            <strong>problème!</strong>{{Session::get('erreurInscription')}}.
        </div>
    @endif
    {{ Form::submit('Inscription',array('class' => "btn btn-default")) }}
    {{Form::close()}}
@stop