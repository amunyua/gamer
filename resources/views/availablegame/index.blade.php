@extends('scaffold-interface.layouts.dt')
@section('title','Index')
@section('pagetitle') Available games
@endsection
@section('bread-crumbs') 
<li>
    <a href="{{ url('/scaffold-dashboard') }}"><i class="fa fa-dashboard"></i> Home</a>
</li>
<li><a href="#">Available games</a></li>
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
                        Available games
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class = "table table-striped table-bordered table-hover">
                        <thead>
                            <th>Game</th>
                            <th>Game Time</th>
                            <th>Available Until</th>
                            <th>Show</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach($availablegames as $availablegame) 
                            <tr>
                                <td><?php echo \App\Game::find($availablegame->game_id)->Title ?></td>
                                <td>{!!$availablegame->game_time!!}</td>
                                <td>{!!$availablegame->available_time!!}</td>
                                <td>
                                    <a href = '#' class = 'viewShow btn btn-warning btn-sm' data-link = '/availablegame/{!!$availablegame->id!!}'><i class = 'fa fa-eye'> info</i></a>
                                </td>
                                <td>
                                    <a href = '#' class = 'viewEdit btn btn-primary btn-sm' data-link = '/availablegame/{!!$availablegame->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                                </td>
                                <td>
                                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-sm' data-link = "/availablegame/{!!$availablegame->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
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
                <form method = 'POST' action = '{!!url("availablegame")!!}'>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">
                            Create Availablegame
                        </h4>
                    </div>
                    <div class="modal-body">
                        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                        <div class="form-group">
                            <label for="game_id">Game</label>
                            <select class="form-control" name="game_id" required>
                                <option value="">Select Game</option>
                                @if(count($games))
                                    @foreach($games as $game)
                                        <option value="{{ $game->id }}">{{ $game->Title }}</option>
                                        @endforeach
                                    @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="game_time">Game Time</label>
                            <input id="game_time" name = "game_time" type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="available_time">Available Until</label>
                            <input id="available_time" name = "available_time" type="date" class="form-control">
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