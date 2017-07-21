{{--@extends('layouts.app')--}}
@extends('scaffold-interface.layouts.player')

@section('content')

<div class="wrapper wrapper-content animated fadeInRight col-md-8 col-md-offset-2" >
    <div class="row" >
        <div class="col-md-12">
            <div class="box  box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Available Games</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-hover table-boarder table-stripped">
                        <thead>
                        <tr>
                            <td>#</td>
                            <td>Title</td>
                            <td>Game Time</td>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($available_games))
                            @foreach($available_games as $available_game)
                                <tr>
                                    <td>{{ $available_game->id }}</td>
                                    <td>{{ $available_game->game_id }}</td>
                                    <td>{{ $available_game->game_time }}</td>
                                </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
