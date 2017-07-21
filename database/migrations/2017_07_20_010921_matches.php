<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Matches.
 *
 * @author  The scaffold-interface created at 2017-07-20 01:09:21pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Matches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('matches',function (Blueprint $table){

        $table->increments('id');
        
        $table->integer('game_id')->unsigned();
        
        $table->integer('player_one')->unsigned();
        $table->foreign("player_one")
            ->references("id")
            ->on("users")
            ->onDelete("restrict");

        
        $table->integer('player_two')->unsigned()->nullable();
            $table->foreign("player_two")
                ->references("id")
                ->on("users");
//                ->onDelete("restrict");
        $table->integer('winner')->unsigned()->nullable();
        
        $table->boolean('status')->default(0);
        
        $table->date('play_time')->nullable();
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('matches');
    }
}
