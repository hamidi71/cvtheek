@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-md-12">

    <form action="{{url('cvs/'.$cv->id)}}" method="post">
        <input type="hidden" name="_method"  value="PUT">
        {{csrf_field()}}

        <div class="form-group">
        <label for="" >Cv titre:</label>
        <input type="text" name="titre" class="form-control" id="titre" value="{{$cv->titre}}">
        </div>

        <div class="form-group">
        <label for="">presentation:</label>
        <textarea name="presentation" class="form-control" id="pres" >{{$cv->presentation}}</textarea>
        </div>
        <div>
        <input type="submit" class="form-control btn btn btn-danger" value="Enregister"/>
        </div>
    </form>
        </div>
    </div>
</div>

@endsection