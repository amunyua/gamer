@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show availablegame
    </h1>
    <br>
    <a href='{!!url("availablegame")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Availablegame Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>game_id</b> </td>
                <td>{!!$availablegame->game_id!!}</td>
            </tr>
            <tr>
                <td> <b>game_time</b> </td>
                <td>{!!$availablegame->game_time!!}</td>
            </tr>
            <tr>
                <td> <b>available_time</b> </td>
                <td>{!!$availablegame->available_time!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection