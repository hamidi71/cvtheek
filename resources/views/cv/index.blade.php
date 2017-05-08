@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12"></div>
                <h1>List van alle cvs</h1>

            <div class="pull-right right">
                {{--<a href="{{url('cvs/create')}}">Maak nieuwe cv</a>--}}
                <a href="{{url('cvs/create')}}" class="btn btn-success">Maak nieuwe cv</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Presentation</th>
                    <th>Date creation</th>
                    <th>action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($cvs as $cv)
                <tr>
                    <td>{{$cv->titre}}</td>
                    <td>{{$cv->presentation}}</td>
                    <td>{{$cv->created_at}}</td>
                    <td>

                        <form action="{{url('cvs/'.$cv->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href=""class="btn btn-primary">Details</a>
                            <a href="{{url('cvs/'.$cv->id.'/edit')}}"class="btn btn-default">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>

                        </form>
                    </td>
                </tr>
                   @endforeach
                </tbody>
            </table>

        </div>
    </div>
 @endsection