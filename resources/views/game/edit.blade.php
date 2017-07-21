@extends('scaffold-interface.layouts.dt')
@section('title','Edit')
@section('pagetitle','Edit Game')
@section('bread-crumbs') 
<li>
    <a href="http://localhost:8000/scaffold-dashboard"><i class="fa fa-dashboard"></i> Home</a>
</li>
<li><a href="http://localhost:8000/game">Games</a></li>
<li class="active">Edit</li>
@endsection
@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info box-solid">
                <div class="box-header">
                    <h3 class="box-title">
                        Game
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form method = 'POST' action = '{!! url("game")!!}/{!!$game->
                        id!!}/update'> 
                        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input id="Title" name = "Title" type="text" class="form-control" value="{!!$game->
                            Title!!}"> 
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input id="Description" name = "Description" type="text" class="form-control" value="{!!$game->
                            Description!!}"> 
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