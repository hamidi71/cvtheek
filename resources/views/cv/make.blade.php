@extends('layouts.master')
@section('content')

    <form  action="{{url('cvs')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="formGroupExampleInput">Example label</label>
            <input type="text" class="form-control" name="titre" placeholder="Example input">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Another label</label>

            <textarea name="presentation" class="form-control" placeholder="type jou presentation in"></textarea>
        </div>
        <div>
            <input type="submit" name="submit" value="Save mij aub" class="form-control btn btn-primary  ">
        </div>

    </form>
    {{return view('cv.index')}}
@endsection