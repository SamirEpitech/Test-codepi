@extends('layouts.default')

@section('content')
@if(Session::has('messageOk'))
    <div class="alert alert-success" role="alert">
        <strong>{{Session::get('messageOk')}}</strong>
    </div>
@elseif(Session::has('erreurMessage'))
    <div class="alert alert-danger" role="alert">
        <strong>problème!</strong>{{Session::get('erreurMessage')}}.
    </div>
@endif
@stop