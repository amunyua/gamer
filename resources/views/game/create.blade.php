@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create game
    </h1>
    <a href="{!!url('game')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Game Index</a>
    <br>
    <form method = 'POST' action = '{!!url("game")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="Title">Title</label>
            <input id="Title" name = "Title" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <input id="Description" name = "Description" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection