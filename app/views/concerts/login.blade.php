@extends('layouts.default')

@section('content')
    {{Form::open(array('action' => 'ConcertsController@login','id' => "Form-login",'class' => "form-horizontal"))}}
    <div class="form-group">
        {{ Form::label('pseudo', 'Votre pseudo',array('class' => 'control-label')) }}
        <div class="col-sm-3">
            {{ Form::text('pseudo',null,array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Votre Mot de pass',array('class' => 'control-label')) }}
        <div class="col-sm-3">
            {{ Form::password('password',array('class' => 'form-control')) }}
        </div>
    </div>
    @if(Session::has('erreurConnect'))
        <div class="alert alert-danger" role="alert">
            <strong>problème!</strong>{{Session::get('erreurConnect')}}.
        </div>
    @endif
    {{ Form::submit('connecter',array('class' => "btn btn-default")) }}
    {{Form::close()}}
@stop