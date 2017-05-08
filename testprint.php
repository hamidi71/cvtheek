<?php
class NerdController extends \BaseController {
/**
* Display a listing of the resource.
*
* @return Response
*/
public function index()
{
// get all the nerds
$nerds = Nerd::all();
// load the view and pass the nerds
return View::make('nerds.index')
->with('nerds', $nerds);
}
/**
* Show the form for creating a new resource.
*
* @return Response
*/
public function create()
{
// load the create form (app/views/nerds/create.blade.php)
return View::make('nerds.create');
}
/**
* Store a newly created resource in storage.
*
* @return Response
*/
public function store()
{
// validate
// read more on validation at http://laravel.com/docs/validation
$rules = array(
'name'       => 'required',
'email'      => 'required|email',
'nerd_level' => 'required|numeric'
);
$validator = Validator::make(Input::all(), $rules);
// process the login
if ($validator->fails()) {
return Redirect::to('nerds/create')
->withErrors($validator)
->withInput(Input::except('password'));
} else {
// store
$nerd = new Nerd;
$nerd->name       = Input::get('name');
$nerd->email      = Input::get('email');
$nerd->nerd_level = Input::get('nerd_level');
$nerd->save();
// redirect
Session::flash('message', 'Successfully created nerd!');
return Redirect::to('nerds');
}
}
/**
* Display the specified resource.
*
* @param  int  $id
* @return Response
*/
public function show($id)
{
// get the nerd
$nerd = Nerd::find($id);
// show the view and pass the nerd to it
return View::make('nerds.show')
->with('nerd', $nerd);
}
/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return Response
*/
public function edit($id)
{
// get the nerd
$nerd = Nerd::find($id);
// show the edit form and pass the nerd
return View::make('nerds.edit')
->with('nerd', $nerd);
}
/**
* Update the specified resource in storage.
*
* @param  int  $id
* @return Response
*/
public function update($id)
{
// validate
// read more on validation at http://laravel.com/docs/validation
$rules = array(
'name'       => 'required',
'email'      => 'required|email',
'nerd_level' => 'required|numeric'
);
$validator = Validator::make(Input::all(), $rules);
// process the login
if ($validator->fails()) {
return Redirect::to('nerds/' . $id . '/edit')
->withErrors($validator)
->withInput(Input::except('password'));
} else {
// store
$nerd = Nerd::find($id);
$nerd->name       = Input::get('name');
$nerd->email      = Input::get('email');
$nerd->nerd_level = Input::get('nerd_level');
$nerd->save();
// redirect
Session::flash('message', 'Successfully updated nerd!');
return Redirect::to('nerds');
}
}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return Response
*/
public function destroy($id)
{
// delete
$nerd = Nerd::find($id);
$nerd->delete();
// redirect
Session::flash('message', 'Successfully deleted the nerd!');
return Redirect::to('nerds');
}
}
?>
//-----------------------create----------------------------------------------------------------
?php
class NerdController extends \BaseController {
/**
* Display a listing of the resource.
*
* @return Response
*/
public function index()
{
// get all the nerds
$nerds = Nerd::all();
// load the view and pass the nerds
return View::make('nerds.index')
->with('nerds', $nerds);
}
/**
* Show the form for creating a new resource.
*
* @return Response
*/
public function create()
{
// load the create form (app/views/nerds/create.blade.php)
return View::make('nerds.create');
}
/**
* Store a newly created resource in storage.
*
* @return Response
*/
public function store()
{
// validate
// read more on validation at http://laravel.com/docs/validation
$rules = array(
'name'       => 'required',
'email'      => 'required|email',
'nerd_level' => 'required|numeric'
);
$validator = Validator::make(Input::all(), $rules);
// process the login
if ($validator->fails()) {
return Redirect::to('nerds/create')
->withErrors($validator)
->withInput(Input::except('password'));
} else {
// store
$nerd = new Nerd;
$nerd->name       = Input::get('name');
$nerd->email      = Input::get('email');
$nerd->nerd_level = Input::get('nerd_level');
$nerd->save();
// redirect
Session::flash('message', 'Successfully created nerd!');
return Redirect::to('nerds');
}
}
/**
* Display the specified resource.
*
* @param  int  $id
* @return Response
*/
public function show($id)
{
// get the nerd
$nerd = Nerd::find($id);
// show the view and pass the nerd to it
return View::make('nerds.show')
->with('nerd', $nerd);
}
/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return Response
*/
public function edit($id)
{
// get the nerd
$nerd = Nerd::find($id);
// show the edit form and pass the nerd
return View::make('nerds.edit')
->with('nerd', $nerd);
}
/**
* Update the specified resource in storage.
*
* @param  int  $id
* @return Response
*/
public function update($id)
{
// validate
// read more on validation at http://laravel.com/docs/validation
$rules = array(
'name'       => 'required',
'email'      => 'required|email',
'nerd_level' => 'required|numeric'
);
$validator = Validator::make(Input::all(), $rules);
// process the login
if ($validator->fails()) {
return Redirect::to('nerds/' . $id . '/edit')
->withErrors($validator)
->withInput(Input::except('password'));
} else {
// store
$nerd = Nerd::find($id);
$nerd->name       = Input::get('name');
$nerd->email      = Input::get('email');
$nerd->nerd_level = Input::get('nerd_level');
$nerd->save();
// redirect
Session::flash('message', 'Successfully updated nerd!');
return Redirect::to('nerds');
}
}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return Response
*/
public function destroy($id)
{
// delete
$nerd = Nerd::find($id);
$nerd->delete();
// redirect
Session::flash('message', 'Successfully deleted the nerd!');
return Redirect::to('nerds');
}
}
-----------------edit--------
<!-- app/views/nerds/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerd Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('nerds') }}">View All Nerds</a></li>
            <li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>
        </ul>
    </nav>

    <h1>Edit {{ $nerd->name }}</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::model($nerd, array('action' => array('NerdController@update', $nerd->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('nerd_level', 'Nerd Level') }}
        {{ Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
</body>
</html>
------------------------------index
<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerd Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('nerds') }}">View All Nerds</a></li>
            <li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>
        </ul>
    </nav>

    <h1>All the Nerds</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Nerd Level</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($nerds as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->nerd_level }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the first two buttons -->
                {{ Form::open(array('url' => 'nerds/' . $value->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete this Nerd', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('nerds/' . $value->id) }}">Show this Nerd</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('nerds/' . $value->id . '/edit') }}">Edit this Nerd</a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>
------------------show
<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerd Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('nerds') }}">View All Nerds</a></li>
            <li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>
        </ul>
    </nav>

    <h1>All the Nerds</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Nerd Level</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($nerds as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->nerd_level }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the first two buttons -->
                {{ Form::open(array('url' => 'nerds/' . $value->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete this Nerd', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('nerds/' . $value->id) }}">Show this Nerd</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('nerds/' . $value->id . '/edit') }}">Edit this Nerd</a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>