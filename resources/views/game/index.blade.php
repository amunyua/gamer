@extends('scaffold-interface.layouts.dt')
@section('title','Index')
@section('pagetitle') Games
@endsection
@section('bread-crumbs') 
<li>
    <a href="http://localhost:8000/scaffold-dashboard"><i class="fa fa-dashboard"></i> Home</a>
</li>
<li><a href="#">Games</a></li>
@endsection
@section('content')

<section class="content">
    <ul class="list-unstyled list-inline pull-right">
        <li>
            <a href='#create-modal' data-toggle="modal" class = 'btn btn-success btn-sm'><i class="fa fa-plus"></i> New</a>
        </li>
    </ul>
    <br>
    <br>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info box-solid">
                <div class="box-header">
                    <h3 class="box-title">
                        Games
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class = "table table-striped table-bordered table-hover">
                        <thead>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Show</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach($games as $game) 
                            <tr>
                                <td>{!!$game->Title!!}</td>
                                <td>{!!$game->Description!!}</td>
                                <td>
                                    <a href = '#' class = 'viewShow btn btn-warning btn-sm' data-link = '/game/{!!$game->id!!}'><i class = 'fa fa-eye'> info</i></a>
                                </td>
                                <td>
                                    <a href = '#' class = 'viewEdit btn btn-primary btn-sm' data-link = '/game/{!!$game->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                                </td>
                                <td>
                                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-sm' data-link = "/game/{!!$game->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class = 'modal-content'>
                <form method = 'POST' action = '{!!url("game")!!}'>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">
                            Create Game
                        </h4>
                    </div>
                    <div class="modal-body">
                        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input id="Title" name = "Title" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input id="Description" name = "Description" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button class = 'btn btn-success pull-right' type ='submit'> <i class="fa fa-floppy-o"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection