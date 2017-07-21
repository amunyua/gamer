@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show match
    </h1>
    <br>
    <a href='{!!url("match")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Match Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>game_id</b> </td>
                <td>{!!$match->game_id!!}</td>
            </tr>
            <tr>
                <td> <b>player_one</b> </td>
                <td>{!!$match->player_one!!}</td>
            </tr>
            <tr>
                <td> <b>player_two</b> </td>
                <td>{!!$match->player_two!!}</td>
            </tr>
            <tr>
                <td> <b>winner</b> </td>
                <td>{!!$match->winner!!}</td>
            </tr>
            <tr>
                <td> <b>status</b> </td>
                <td>{!!$match->status!!}</td>
            </tr>
            <tr>
                <td> <b>play_time</b> </td>
                <td>{!!$match->play_time!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection