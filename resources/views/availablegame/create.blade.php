@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create availablegame
    </h1>
    <a href="{!!url('availablegame')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Availablegame Index</a>
    <br>
    <form method = 'POST' action = '{!!url("availablegame")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="game_id">game_id</label>
            <input id="game_id" name = "game_id" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="game_time">game_time</label>
            <input id="game_time" name = "game_time" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="available_time">available_time</label>
            <input id="available_time" name = "available_time" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection