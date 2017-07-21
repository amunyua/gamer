@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create match
    </h1>
    {{--<a href="{!!url('match')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Match Index</a>--}}
    <br>
    <form method = 'POST' action = '{!!url("match")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="game_id">Game</label>
            <input id="game_id" name = "game_id" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="player_one">player_one</label>
            <input id="player_one" name = "player_one" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="player_two">player_two</label>
            <input id="player_two" name = "player_two" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="winner">winner</label>
            <input id="winner" name = "winner" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="status">status</label>
            <input id="status" name = "status" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="play_time">play_time</label>
            <input id="play_time" name = "play_time" type="text" class="form-control">
        </div>
        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
    </form>
</section>
@endsection