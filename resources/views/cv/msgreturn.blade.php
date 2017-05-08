@extends('layouts.master')
@section('content')

    <h1>Het is succesvol toegevoegd</h1>
    <label>wile je verder en nieuwe cv maken:</label>
    <a href="{{url('cvs/create')}}" class="btn btn-success">Ja</a>
    <a href="{{url('cvs')}}" class="btn btn-success">Nee</a>
@endsection