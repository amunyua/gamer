@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show game
    </h1>
    <br>
    <a href='{!!url("game")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Game Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>Title</b> </td>
                <td>{!!$game->Title!!}</td>
            </tr>
            <tr>
                <td> <b>Description</b> </td>
                <td>{!!$game->Description!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection