<?php

namespace App\Http\Controllers;

use App\Game;
use App\User;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Match;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class MatchController.
 *
 * @author  The scaffold-interface created at 2017-07-20 01:09:21pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - match';
        $matches = Match::all();
        return view('match.index',compact('matches','title'),array(
            'games'=> Game::all(),
            'players'=>User::where('role','PLAYER')->get()
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - match';
        
        return view('match.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $match = new Match();

        
        $match->game_id = $request->game_id;

        
        $match->player_one = $request->player_one;

        
        $match->player_two = $request->player_two;

        
//        $match->winner = $request->winner;

        
        $match->status = false;

        
        $match->play_time = $request->play_time;

        
        
        $match->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new match has been created !!']);

        return redirect('match');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - match';

        if($request->ajax())
        {
            return URL::to('match/'.$id);
        }

        $match = Match::findOrfail($id);
        return view('match.show',compact('title','match'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - match';
        if($request->ajax())
        {
            return URL::to('match/'. $id . '/edit');
        }

        
        $match = Match::findOrfail($id);
        return view('match.edit',compact('title','match'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $match = Match::findOrfail($id);
    	
        $match->game_id = $request->game_id;
        
        $match->player_one = $request->player_one;
        
        $match->player_two = $request->player_two;
        
        $match->winner = $request->winner;
        
        $match->status = $request->status;
        
        $match->play_time = $request->play_time;
        
        
        $match->save();

        return redirect('match');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/match/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$match = Match::findOrfail($id);
     	$match->delete();
        return URL::to('match');
    }
}
