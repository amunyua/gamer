@extends('scaffold-interface.layouts.dt')
@section('title','Edit')
@section('pagetitle') Match @endsection
@section('bread-crumbs') 
<li>
    <a href="{{ url('/scaffold-dashboard') }}"><i class="fa fa-dashboard"></i> Home</a>
</li>
<li><a href="">Matches</a></li>
<li class="active">Edit</li>
@endsection
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info box-solid">
                <div class="box-header">
                    <h3 class="box-title">
                        Match
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form method = 'POST' action = '{!! url("match")!!}/{!!$match->
                        id!!}/update'> 
                        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                        <div class="form-group">
                            <label for="game_id">game_id</label>
                            <input id="game_id" name = "game_id" type="text" class="form-control" value="{!!$match->
                            game_id!!}"> 
                        </div>
                        <div class="form-group">
                            <label for="player_one">player_one</label>
                            <input id="player_one" name = "player_one" type="text" class="form-control" value="{!!$match->
                            player_one!!}"> 
                        </div>
                        <div class="form-group">
                            <label for="player_two">player_two</label>
                            <input id="player_two" name = "player_two" type="text" class="form-control" value="{!!$match->
                            player_two!!}"> 
                        </div>
                        <div class="form-group">
                            <label for="winner">winner</label>
                            <input id="winner" name = "winner" type="text" class="form-control" value="{!!$match->
                            winner!!}"> 
                        </div>
                        <div class="form-group">
                            <label for="status">status</label>
                            <input id="status" name = "status" type="text" class="form-control" value="{!!$match->
                            status!!}"> 
                        </div>
                        <div class="form-group">
                            <label for="play_time">play_time</label>
                            <input id="play_time" name = "play_time" type="text" class="form-control" value="{!!$match->
                            play_time!!}"> 
                        </div>
                        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
</section>
@endsection