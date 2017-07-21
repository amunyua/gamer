<?php

namespace App\Http\Controllers;

use App\Availablegame;
use App\Game;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home',array(
            'available_games'=>Availablegame::where('available_time','<',Carbon::now())->get()
        ));
    }
}
