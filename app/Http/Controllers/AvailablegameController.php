<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Availablegame;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class AvailablegameController.
 *
 * @author  The scaffold-interface created at 2017-07-20 12:15:57pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class AvailablegameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - availablegame';
        $availablegames = Availablegame::all();
        $games = Game::all();
        return view('availablegame.index',compact('availablegames','title'),array(
            'games'=>$games
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - availablegame';
        
        return view('availablegame.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $availablegame = new Availablegame();

        
        $availablegame->game_id = $request->game_id;

        
        $availablegame->game_time = $request->game_time;

        
        $availablegame->available_time = $request->available_time;

        
        
        $availablegame->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new availablegame has been created !!']);

        return redirect('availablegame');
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
        $title = 'Show - availablegame';

        if($request->ajax())
        {
            return URL::to('availablegame/'.$id);
        }

        $availablegame = Availablegame::findOrfail($id);
        return view('availablegame.show',compact('title','availablegame'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - availablegame';
        if($request->ajax())
        {
            return URL::to('availablegame/'. $id . '/edit');
        }

        
        $availablegame = Availablegame::findOrfail($id);
        return view('availablegame.edit',compact('title','availablegame'  ));
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
        $availablegame = Availablegame::findOrfail($id);
    	
        $availablegame->game_id = $request->game_id;
        
        $availablegame->game_time = $request->game_time;
        
        $availablegame->available_time = $request->available_time;
        
        
        $availablegame->save();

        return redirect('availablegame');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/availablegame/'. $id . '/delete');

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
     	$availablegame = Availablegame::findOrfail($id);
     	$availablegame->delete();
        return URL::to('availablegame');
    }
}
