<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Availablegames.
 *
 * @author  The scaffold-interface created at 2017-07-20 12:15:57pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Availablegames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('availablegames',function (Blueprint $table){

        $table->increments('id');
        
        $table->integer('game_id')->unsigned();
        $table->foreign('game_id')
            ->references("id")
            ->on('games')
            ->onDelete('cascade');
        
        $table->dateTime('game_time');
        
        $table->dateTime('available_time');
        
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
        Schema::drop('availablegames');
    }
}
