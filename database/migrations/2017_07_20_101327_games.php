<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Games.
 *
 * @author  The scaffold-interface created at 2017-07-20 10:13:27am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Games extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('games',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('Title');
        
        $table->String('Description');
        
        /**
         * Foreignkeys section
         */
        
        
        
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
        Schema::drop('games');
    }
}
