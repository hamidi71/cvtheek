@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">


    <form action="{{url('cvs')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="" >Cv titre:</label>
            <input type="text" name="titre" class="form-control" id="titre">
        </div>

        <div class="form-group">
            <label for="">presentation:</label>

            <textarea name="presentation" class="form-control" id="pres"></textarea>
        </div>

        <button type="submit" class="form-control btn btn btn-primary" value="enregister">Submit</button>
    </form>

            </div>
        </div>
    </div>
@endsection