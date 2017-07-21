@extends('scaffold-interface.layouts.dt')
@section('title','Edit')
@section('pagetitle') Availablegame @endsection
@section('bread-crumbs') 
<li>
    <a href="{{ url('/scaffold-dashboard') }}"><i class="fa fa-dashboard"></i> Home</a>
</li>
<li><a href="{{url($parser->singular()) }}">Availablegames</a></li>
<li class="active">Edit</li>
@endsection
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info box-solid">
                <div class="box-header">
                    <h3 class="box-title">
                        Availablegame
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form method = 'POST' action = '{!! url("availablegame")!!}/{!!$availablegame->
                        id!!}/update'> 
                        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                        <div class="form-group">
                            <label for="game_id">game_id</label>
                            <input id="game_id" name = "game_id" type="text" class="form-control" value="{!!$availablegame->
                            game_id!!}"> 
                        </div>
                        <div class="form-group">
                            <label for="game_time">game_time</label>
                            <input id="game_time" name = "game_time" type="text" class="form-control" value="{!!$availablegame->
                            game_time!!}"> 
                        </div>
                        <div class="form-group">
                            <label for="available_time">available_time</label>
                            <input id="available_time" name = "available_time" type="text" class="form-control" value="{!!$availablegame->
                            available_time!!}"> 
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